<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getList()
    {
        $categories  =  Category::where('type', 'product_category')->get();
    	return view('backend.category.list', compact('categories'));
    }
    public function getAdd()
    {
    	$data = Category::where('type', 'product_category')->get();
    	return view('backend.category.add', compact('data'));
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',

            ],
            [
                'name.required' => 'Bạn chưa nhập tiêu đề !'
            ]
        );
    	$category = new Category;
    	$category->name = $request->name;
    	$category->slug = $request->slug;
    	$category->parent_id = $request->parent_id;
    	$category->meta_title = $request->meta_title;
    	$category->meta_description = $request->meta_description;
    	$category->meta_keyword = $request->meta_keyword;
    	$category->type = 'product_category';

        $path = 'uploads/category';
        $listImages = array();
        $fImage = $request->file('fImage');
        $fImageHV = $request->file('fImageHV');
        if(!empty($fImage)){
            $file_name = time() . '_' . $fImage->getClientOriginalName();
            $fImage->move($path, $file_name);
            $listImages['image'] = $file_name;
        }if(!empty($fImageHV)){
            $file_name = time() . '-' . $fImageHV->getClientOriginalName();
            $fImageHV->move($path, $file_name);
            $listImages['imageHV'] = $file_name;
        }if(!empty($listImages)){
            $listImages = json_encode($listImages);
            $category->image = $listImages;
        }

    	$category->save();
    	return redirect('backend/product/category')->with([
            'flash_level' => 'success',
            'flash_message' => 'Thêm thành công !'
        ]);
    }
    public function getEdit($id)
    {
        $data['data'] = Category::find($id);
        $data['parent'] = Category::all();
        return view('backend.category.edit', $data);
    }
    public function getDelete($id)
    {
        $parent = Category::where('parent_id', $id)->count();
        if($parent == 0 ){
            Category::destroy($id);
            return back()->with([
                'flash_level' => 'success',
                'flash_message' => 'Xóa thành công !'
            ]);
        }else {
            return back()->with([
                'flash_level' => 'danger',
                'flash_message' => 'Danh mục có danh mục con không thể xóa !'
            ]);
        }
    }
    public function postEdit($id, Request $request)
    {
         $this->validate($request,
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tiêu đề !'
            ]
        );
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->parent_id = $request->parent_id;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keyword = $request->meta_keyword;
        $path = 'uploads/category';
        if ($category->image != null) {
            $listImages = json_decode($category->image);
        }else {
            $listImages = (object)array();
        }
        $fImage = $request->file('fImage');
        $fImageHV = $request->file('fImageHV');
        if(!empty($fImage)){
            $file_name = time() . '_' . $fImage->getClientOriginalName();
            $fImage->move($path, $file_name);
            $listImages->image = $file_name;
        }if(!empty($fImageHV)){
            $file_name = time() . '-' . $fImageHV->getClientOriginalName();
            $fImageHV->move($path, $file_name);
            $listImages->imageHV = $file_name;
        }if(!empty($listImages)){
            $listImages = json_encode($listImages);
            $category->image = $listImages;
        }
        $category->save();
        return back()->with([
            'flash_level' => 'success',
            'flash_message' => 'Xóa thành công !'
        ]);
    }
    public function postMultiDel()
    {
        return back();   
    }
}
