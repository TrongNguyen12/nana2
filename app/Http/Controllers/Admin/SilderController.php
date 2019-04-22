<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use File;

class SilderController extends Controller
{
    public function getListSlider()
    {
    	$data = Slider::where('status', 1)->get();
    	return view('backend.slider.list', compact('data'));
    }
    public function getAdd()
    {
    	return view('backend.slider.add');
    }
    public function postAdd(Request $request)
    {
    	$slider = new Slider;
    	$slider->name = $request->name;
        $slider->link = $request->link;
        $slider->content = $request->content;
        $slider->status = $request->status;
        $path = 'uploads/slider';
        $fImage = $request->file('fImage');
        if(!empty($fImage)){
            $file_name = time() . '_' . $fImage->getClientOriginalName();
            $fImage->move($path, $file_name);
            $slider->image = $file_name;
        }
        $slider->save();
        return redirect('/backend/config/slider')->with([
            'flash_level' => 'success',
            'flash_message' => 'Thêm Thành Công !'
        ]); 
    }
    public function getEdit(Request $request, $id)
    {
    	$data = Slider::find($id);
    	return view('backend.slider.edit', compact('data'));
    }
    public function postEdit(Request $request, $id)
    {
    	$slider = Slider::find($id);
        $image = $slider->image;
        $slider->name = $request->name;
        $slider->link = $request->link;
        $slider->content = $request->content;
        $slider->status = $request->status;
        $path = 'uploads/slider';
        $fImage = $request->file('fImage');
        if(!empty($fImage)){
            $file_name = time() . '_' . $fImage->getClientOriginalName();
            $fImage->move($path, $file_name);
            $slider->image = $file_name;
            if(File::exists($path.$image)){
                File::delete($path.$image);   
            }
        }
        $slider->save();
        return redirect('/backend/config/slider')->with([
            'flash_level' => 'success',
            'flash_message' => 'Sửa thành công !'
        ]);
    }
    public function getDelete(Request $request, $id)
    {
    	$slider = Slider::find($id);
        if (isset($slider)) {
            $image = $slider->image;
            $image_path = 'uploads/slider/';
            if(File::exists($image_path.$image)){
                File::delete($image_path.$image);
            }
            $slider::destroy($id);
            return redirect('/backend/config/slider')->with([
                'flash_level' => 'success',
                'flash_message' => 'Xóa thành công !'
            ]);
        }
    }
    public function getDeleteMuti(Request $request)
    {
    	if ($request->has('chkItem')) {
             foreach ($request->chkItem as $id) {
                $slider = Slider::find($id);
                $image = $slider->image;
                $image_path = 'uploads/slider/';
                if (isset($slider)) {
                    if(File::exists($image_path.$image)){
                        File::delete($image_path.$image);
                    }
                    $slider::destroy($id);
                }
            }
            return redirect()->back()->with([
                'flash_level' => 'success',
                'flash_message' => 'Xóa thành công !'
            ]);
        }
    }
}
