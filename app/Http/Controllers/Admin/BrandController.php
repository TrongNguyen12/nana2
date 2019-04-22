<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use File;

class BrandController extends Controller
{
    public function getList()
    {
        $brands = Category::where('type', 'brand_category')
            ->orderBy('id', 'desc')
            ->get();
        return view('backend.brand.list', compact('brands'));
    }
    public function getAdd()
    {
        $brands = Category::where('type', 'brand_category')->get();
        return view('backend.brand.add', compact('brands'));
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|unique:category,name',
                'slug' => 'required|unique:category,slug',
            ],
            [
                'name.required' => 'Bạn chưa nhập tiêu đề !',
                'name.unique' => 'Danh mục đã tồn tại',
                'slug.required' => 'Bạn chưa nhập đường dẫn tĩnh !',
                'slug.unique' => 'Đường dẫn đã tồn tại !',
            ]
        );
        $type = 'brand_category';
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->parent_id = 0;
        $category->type = $type;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keyword = $request->meta_keyword;
        $path = 'uploads/category';
        $fImage = $request->file('fImage');
        if(!empty($fImage)){
            $file_name = time() . '_' . $fImage->getClientOriginalName();
            $fImage->move($path, $file_name);
            $category->image = $file_name;
        }
        $category->save();
        return redirect()->route('backend.product.brand')->with([
            'flash_level' => 'success',
            'flash_message' => 'Thêm thành công !'
        ]);
    }
    public function getEdit($id)
    {
        $data = Category::find($id);
        if (isset($data)) {
            $brands = Category::where('type', 'brand_category')->get();
            return view('backend.brand.edit', compact('data', 'brands'));
        }
        return redirect()->route('backend.product.brand')->with([
            'flash_level' => 'danger',
            'flash_message' => 'Không tìm thấy danh mục !'
        ]);
    }
    public function postEdit(Request $request, $id)
    {
        $category = Category::where([
            ['type', 'brand_category'],
            ['id', $id]
        ])->first();
        if ($category->name !== $request->name || $category->slug !== $request->slug) {
            $this->validate($request,
                [
                    'name' => 'required|unique:category,name',
                    'slug' => 'required|unique:category,slug',
                ],
                [
                    'name.required' => 'Bạn chưa nhập tiêu đề !',
                    'name.unique' => 'Danh mục đã tồn tại',
                    'slug.required' => 'Bạn chưa nhập đường dẫn tĩnh !',
                    'slug.unique' => 'Đường dẫn đã tồn tại !',
                ]
            );
        }
        $image = $category->image;
	    $request->parent_id = 0;
        $type = 'brand_category';
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->parent_id = 0;
        $category->type = $type;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keyword = $request->meta_keyword;
        $path = 'uploads/category';
        $fImage = $request->file('fImage');
        if(!empty($fImage)){
            $file_name = time() . '_' . $fImage->getClientOriginalName();
            $fImage->move($path, $file_name);
            $category->image = $file_name;
            if(File::exists($path.$image)){
                File::delete($path.$image);   
            }
        }
        $category->save();
        return redirect()->route('backend.product.brand')->with([
            'flash_level' => 'success',
            'flash_message' => 'Sửa thành công !'
        ]);
    }
    public function getDelete($id)
    {
        $category = Category::where([
            ['type', 'brand_category'],
            ['id', $id]
        ])->first();
        if (isset($category)) {
            $path = 'uploads/category';
            $image = $category->image;
            if(File::exists($path.$image)){
                File::delete($path.$image);   
            }
            $category->delete();
            return redirect()->route('backend.product.brand')->with([
                'flash_level' => 'success',
                'flash_message' => 'Đã xóa danh mục !'
            ]);
        }
        return redirect()->route('backend.product.brand')->with([
            'flash_level' => 'danger',
            'flash_message' => 'Không tìm thấy danh mục !'
        ]);
    }
    public function postMultiDel(Request $request)
    {
        if ($request->has('chkItem')) {
            foreach ($request->chkItem as $id) {
                $category = Category::where([
                    ['type', 'brand_category'],
                    ['id', $id]
                ])->first();
                if (isset($category)) {
                    $path = 'uploads/category';
                    $image = $category->image;
                    if(File::exists($path.$image)){
                        File::delete($path.$image);   
                    }
                    $category->delete();
                }
            }
            return redirect()->back()->with([
                'flash_level' => 'success',
                'flash_message' => 'Xóa thành công !'
            ]);
        }
        return redirect()->back()->with([
            'flash_level' => 'danger',
            'flash_message' => 'Bạn chưa chọn dữ liệu cần xóa !'
        ]);
    }
}
