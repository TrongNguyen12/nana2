<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\product_category;
use File;
use Datetime;
use DB;
class ProductController extends Controller
{
    public function getList()
    {
        $data = Product::select()->orderBy('id', 'DESC')->get();
        return view('backend.product.list', compact('data'));
    }
    public function getAdd()
    {
        $cate = Category::where('type', 'product_category')->get();
        $brands = Category::where('type', 'brand_category')->get();
        return view('backend.product.add', compact('cate', 'brands'));
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|unique:product,name',
                'slug' => 'required',
                'price' => 'required',
                'fImage' => 'required',
                'option' => 'required'
                
            ],
            [
                'name.required' => 'Bạn chưa nhập tiêu đề !',
                'name.unique' => 'Tên sản phẩm này đã tồn tại !',
                'slug.required' => 'Bạn chưa nhập đường dẫn tĩnh !',
                'price.required' => 'Bạn chưa nhập giá của sản phẩm !',
                'fImage.required' => 'Bạn chưa chọn hình ảnh !',
                'option.required' => 'Bạn chưa tùy chọn màu sắc !'
            ]
        );
        $product = new Product;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->price_promotion = $request->price_promotion;
        $sale = isset($request->price_promotion) && intval($request->price_promotion) > 0 && intval($request->price_promotion) > 0 ? (1 - intval($request->price_promotion) / intval($request->price)) * 100 : 0;
        $product->sale = $sale;
        $product->brand_id = $request->brand_id;
        if($request->dateEndSale != null){
            $temp = explode(" - " , $request->dateEndSale);
            $temp[0] = str_replace("/","-",$temp[0]);
            $temp[1] = str_replace("/","-",$temp[1]);
            $product->begin_datetime_sale = date( 'Y/m/d', strtotime($temp[0]));
            $product->end_datetime_sale = date( 'Y/m/d', strtotime($temp[1]));
        }
        $fImage = $request->file('fImage');
        if(!empty($fImage)){
            $path = 'uploads/product/avatar';
            $file_name = time() . '_' . $fImage->getClientOriginalName();
            $fImage->move($path, $file_name);
            $product->image = $file_name;
        }
        $fImageGallery = $request->file('fImageGallery');
        if(!empty($fImageGallery)){
            $more_image = array();
            foreach ($fImageGallery as $item) {
                $path = 'uploads/product/prod';
                $file_name = time() . '_' . $item->getClientOriginalName();
                $item->move($path, $file_name);
                $more_image[] = $file_name;
            }
            $product->more_image = json_encode($more_image);
        }
        $product->option = $request->option;
        $product->storage = $request->storage;
        $product->content_short = $request->desc;
        $product->content_main = $request->content_main;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keyword = $request->meta_keyword;
        $product->status = $request->status;
        $product->save();
        // xử lý danh mục sản phẩm
        $idProduct = $product->id;
        if(!empty($request->category_id)){ 
            foreach ($request->category_id as $item) {
                $product_category = new product_category;
                $product_category->category_id = $item;
                $product_category->product_id = $idProduct;
                $product_category->save();
            }
        }
        return redirect()->route('backend.product')->with([
            'flash_level' => 'success',
            'flash_message' => 'Lưu thành công sản phẩm'
        ]);
    }

    public function getConfig()
    {
        $video = Video::where('type', 'product_video_banner')->first();
        $category = Category::where([
            ['type', 'category_main'],
            ['id', 2]
        ])->first();
        return view('backend.product.config', compact('video', 'category'));

    }

    public function postConfig(Request $request)
    {
        $request->name = $request->video_name;
        $request->url = video_embed_url($request->video_link);
        $video = Video::video_save($request, $request->video_id, 'product_video_banner');

        $category = Category::where([
            ['type', 'category_main'],
            ['id', 2]
        ])->first();

        if (isset($category)) {
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->meta_keyword = $request->meta_keyword;

            $category->save();
        }

        if ($video !== false) {

            $image_upload = image_upload(
                $request,
                'fImageVideo',
                $video->image,
                __STORAGE_VIDEO . '/' . $video->id,
                'video_thumbnail'
            );

            if ($image_upload !== false) {
                $video->image()->associate($image_upload)->save();
            }

            return redirect()->back()->with([
                'flash_level' => 'success',
                'flash_message' => 'Cập nhật thành công !'
            ]);

        }

        return redirect()->back()->with([
            'flash_level' => 'danger',
            'flash_message' => 'Cập nhật thất bại !'
        ]);

    }

    public function getEdit($id)
    {
        $data = Product::find($id);
        if (isset($data)) {
            $cate = Category::where('type', 'product_category')->get();
            $brands = Category::where('type', 'brand_category')->get();
            return view('backend.product.edit', compact('data', 'cate', 'brands'));
        }
        return redirect()->route('backend.product')->with([
            'flash_level' => 'danger',
            'flash_message' => 'Không tìm thấy sản phẩm !'
        ]);
    }
    public function postEdit(Request $request, $id)
    {

        $this->validate($request,
            [
                'name' => 'required',
                'slug' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tiêu đề !',
                'slug.required' => 'Bạn chưa nhập đường dẫn tĩnh !',
            ]
        );


        $product = Product::find($id);

        if (isset($product)) {
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->price = $request->price;
            $product->price_promotion = $request->price_promotion;
            $sale = isset($request->price_promotion) && intval($request->price_promotion) > 0 && intval($request->price_promotion) > 0 ? (1 - intval($request->price_promotion) / intval($request->price)) * 100 : 0;
            $product->sale = $sale;
            $product->brand_id = $request->brand_id;
            if($request->dateEndSale != null){
                $temp = explode(" - " , $request->dateEndSale);
                $temp[0] = str_replace("/","-",$temp[0]);
                $temp[1] = str_replace("/","-",$temp[1]);
                $product->begin_datetime_sale = date( 'Y/m/d', strtotime($temp[0]));
                $product->end_datetime_sale = date( 'Y/m/d', strtotime($temp[1]));
            }
            $fImage = $request->file('fImage');
            if(!empty($fImage)){
                $image = $product->image;
                $path = 'uploads/product/avatar';
                $file_name = time() . '_' . $fImage->getClientOriginalName();
                $fImage->move($path, $file_name);
                $product->image = $file_name;
                if(File::exists($path.$image)){
                    File::delete($path.$image);   
                }
            }
            $fImageGallery = $request->file('fImageGallery');
            if(!empty($fImageGallery)){
                $list_image = $product->more_image;
                $path_more_image = 'uploads/product/prod';
                $more_image = array();
                foreach ($fImageGallery as $item) {
                    $file_name = time() . '_' . $item->getClientOriginalName();
                    $item->move($path_more_image, $file_name);
                    $more_image[] = $file_name;
                }
                $product->more_image = json_encode($more_image);
                $list_image = json_decode($list_image);
                foreach ($list_image as $item) {
                    if(File::exists($path_more_image.$item)){
                        File::delete($path_more_image.$item);   
                    }
                }
            }
            $product->option = $request->option;
            $product->storage = $request->storage;
            $product->content_short = $request->desc;
            $product->content_main = $request->content_main;
            $product->meta_title = $request->meta_title;
            $product->meta_description = $request->meta_description;
            $product->meta_keyword = $request->meta_keyword;
            $product->status = $request->status;
            $product->save();
            // xử lý danh mục sản phẩm
            $idProduct = $product->id;

            if(!empty($request->category_id)){ 
                DB::table('product_category')->where('product_id', $idProduct)->delete();
                foreach ($request->category_id as $item) {
                    $product_category = new product_category;
                    $product_category->category_id = $item;
                    $product_category->product_id = $idProduct;
                    $product_category->save();
                }
            }
            return redirect()->back()->with([
                'flash_level' => 'success',
                'flash_message' => 'Sửa thành công !'
            ]);
        }else {
            return redirect()->route('backend.product')->with([
                'flash_level' => 'danger',
                'flash_message' => 'Không tìm thấy sản phẩm !'
            ]);
        }
    }

    public function getDelete($id)
    {
        $product = Product::find($id);
        $more_image =  $product->more_image;
        $image = $product->image;
        if (isset($product)) {
            $more_image = json_decode($more_image);
            $image_list_path = 'uploads/product/prod/';
            foreach ($more_image as $item) {
                if(File::exists($image_list_path.$item)){
                    File::delete($image_list_path.$item);
                }
            }
            $image_path = 'uploads/product/avatar/';
            if(File::exists($image_path.$image)){
                File::delete($image_path.$image);
            }
            $product->delete();
            DB::table('product_category')->where('product_id', $id)->delete();
            return redirect()->route('backend.product')->with([
                'flash_level' => 'success',
                'flash_message' => 'Xóa thành công !'
            ]);
        }else {
            return redirect()->route('backend.product')->with([
                'flash_level' => 'danger',
                'flash_message' => 'Không tìm thấy sản phẩm !'
            ]);
        }
    }
    public function postMultiDel(Request $request)
    {
        if ($request->has('chkItem')) {
            foreach ($request->chkItem as $id) {
                $product = Product::find($id);
                $more_image =  $product->more_image;
                $image = $product->image;
                if (isset($product)) {
                    $more_image = json_decode($more_image);
                    $image_list_path = 'uploads/product/prod/';
                    foreach ($more_image as $item) {
                        if(File::exists($image_list_path.$item)){
                            File::delete($image_list_path.$item);
                        }
                    }
                    $image_path = 'uploads/product/avatar/';
                    if(File::exists($image_path.$image)){
                        File::delete($image_path.$image);
                    }
                    $product->delete();
                }
            }
            return redirect()->back()->with([
                'flash_level' => 'success',
                'flash_message' => 'Xóa thành công !'
            ]);
        } else {
            return redirect()->back()->with([
                'flash_level' => 'danger',
                'flash_message' => 'Bạn chưa chọn dữ liệu cần xóa !'
            ]);
        }
    }
}
