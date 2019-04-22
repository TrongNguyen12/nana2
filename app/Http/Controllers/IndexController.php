<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Custommer;
use App\Models\product_category;
use App\Models\Bank;
use App\Models\District;
use App\Models\Province;
use App\Models\Order;
use App\Models\OrderDetail;
use Cart;

class IndexController extends Controller
{
    public function getHome()
    {
        $slider = Slider::where('status', 1)->get();

        $custommer = Custommer::where('status', 1)->get();

        // điều kiện lấy danh mục
        $where = [
            ['type', '=', 'product_category'],
            ['parent_id', '=', 0],
        ];

        $category = Category::where($where)->orderBy('id', 'DESC')->take(5)->get();

        $product = Product::take(8)->get();

    	return view('frontend.pages.home', compact('slider', 'custommer', 'category', 'product'));
    }
    public function getAbout()
    {

        $product = Product::find(19);
        $ngayhomnay = date("Y-m-d");
        $ngaybatdaukhuyenmai = date("Y-m-d", strtotime($product->begin_datetime_sale));
        $ngayketthuckhuyenmai = date("Y-m-d", strtotime($product->end_datetime_sale));
        if(strtotime($ngaybatdaukhuyenmai) <= strtotime($ngayhomnay) && strtotime($ngayhomnay) <= strtotime($ngayketthuckhuyenmai)){
            echo 'Đang trong thời gian khuyến mại';
        }else {
            echo 'Hết thời gian khuyến mại rồi !!!!';
        
        }
    	//return "Trang Giới Thiệu";
    }
    public function getContact()
    {
    	return "Trang liên hệ";
    }
    public function getDetalProduct($slug, $id)
    {
        //tách để lấy id
        $ids = $id;
        $exp_ids = @explode("-", $ids);
        $cat = end($exp_ids);
        $ids=array();
        $minlink=substr($cat,0,1);
        $cat_id=substr($cat,1);
        $menu_aty=$minlink;
        if($minlink == 'p'){ 
            $product = Product::find($cat_id);
            $product_relation = Product::where('id', '<>', $product->id)->inRandomOrder()->take(4)->get();
            return view('frontend.pages.detalProduct', compact('product', 'product_relation'));
        }
    }
    public function getProduct()
    {

        $product = Product::orderBy('id', 'DESC')-> paginate(12);
        return view('frontend.pages.listProduct', compact('product'));
    }
    public function getProductByCat($slug, $id)
    {
         //tách để lấy id
        $ids = $id;
        $exp_ids = @explode("-", $ids);
        $cat = end($exp_ids);
        $ids=array();
        $minlink=substr($cat,0,1);
        $cat_id=substr($cat,1);
        $menu_aty=$minlink;
        if($minlink == 'p'){
            // $product_relation = Product::inRandomOrder()->take(4)->get();
            $productCatInfo = Category::findOrFail($cat_id);
            $listProduct = Category::findOrFail($cat_id)->product()->orderBy('id', 'DESC')->paginate(12);
            return view('frontend.pages.listProductByCat', compact('listProduct', 'productCatInfo'));
        }
    }
    public function getAddCart($id)
    {
        $product = Product::find($id);
        $price = $product->price;
        if($product->sale != 0){
            $now = date("Y-m-d");
            $begin = date("Y-m-d", strtotime($product->begin_datetime_sale));
            $end = date("Y-m-d", strtotime($product->end_datetime_sale));
            if( strtotime($begin) <= strtotime($now) &&  strtotime($now) <= strtotime($end) ){
                $price = $product->price_promotion;
            }
        }
        $data = [
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $price,
            'options' => [
                'color' => null,
                'image' => $product->image
            ]
        ];
        Cart::add($data);
        return back()->with('Tsuccess', 'Thêm thành công sản phẩm vào giỏ hàng !');
    }
    public function postAddCart($id, Request $request)
    {
        $product = Product::find($id);
        $data = [
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $request->price,
            'options' => [
                'color' => $request->option,
                'image' => $product->image
            ]
        ];
        Cart::add($data);
        return back()->with('Tsuccess', 'Thêm thành công sản phẩm vào giỏ hàng !');
    }
    public function getCart()
    {
        $content = Cart::content();
        $total = Cart::total();
        return view('frontend.pages.cart', compact('content', 'total'));
    }
    public function getDeleteCart($rowid)
    {
        Cart::remove($rowid);
        return back()->with('Tsuccess', 'Xóa sản phẩm khỏi giỏ hàng thành công !');
    }
    public function getUpdateCart(Request $request)
    {
        $rowId = $request->rowId;
        $qty = $request->qty;
        Cart::update($rowId, $qty);
    }
    public function getDeleteAllCart()
    {
        Cart::destroy();
        return back();
    }
    public function getPay()
    {
        $province = Province::all();
        $bank = bank::all();
        return view('frontend.pages.checkout', compact('bank', 'province'));
    }
    public function postSaveOrder(Request $request)
    {
        if(Cart::count() > 0){
             $this->validate($request,
                [
                    'name' => 'required',
                    'phone' => 'required',
                    'email' => 'required|email',
                    'province' => 'required',
                    'district' => 'required',
                    'address' => 'required',
                ],
                [
                    'name.required' => 'Bạn chưa nhập Họ tên',
                    'phone.required' => 'Bạn chưa nhập Họ tên',
                    'province.required' => 'Bạn chưa chọn Tỉnh Thành',
                    'district.required' => 'Bạn chưa nhập Quận Huyện',
                    'address.required' => 'Bạn chưa nhập Địa chỉ',
                ]
            );
            $request->status = 1;
            $order = new Order;
            $order->bank_id = $request->bank_id;
            $order->price_total = $request->price_total;
            $order->payment_method = $request->payment_method;
            $order->address = $request->address;
            $order->province_id = $request->province;
            $order->district_id = $request->district;
            $order->content = $request->content;
            $order->status = $request->status;
            $order->save();
            $order_id = $order->id;

            if ($order_id != "") {
                /*customer*/
                foreach (Cart::content() as $item) {
                    $orderDetail = new OrderDetail;
                    $orderDetail->order_id = $order_id;
                    $orderDetail->product_id = $item->id;
                    $orderDetail->price_total = $item->price;
                    $orderDetail->product_quantity = $item->qty;
                    $orderDetail->option = $item->options->color;
                    $orderDetail->save();
                }
                Cart::destroy();
                return redirect('san-pham.html')->with(
                    'Tsuccess', 'Đơn hàng đang được chờ xử lý, Chúng tối sẽ liên hệ sớm nhất tới bạn!'
                );
            }
        }
    }
    public function getProvince(Request $request)
    {
        $districs = District::where('provinceid', $request->districtid)->orderBy('name', 'asc')->get();
        $result = '<option value="">Quận/Huyện</option>';
        foreach ($districs as $district) {
            $result .= '<option value="' . $district->districtid . '">' . $district->name . '</option>';
        }
        return $result;
    }
}
