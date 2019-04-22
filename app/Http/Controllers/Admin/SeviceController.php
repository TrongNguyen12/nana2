<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class SeviceController extends Controller
{
	public function getList()
	{
		$services = Post::where('type','service')->orderBy('id','desc')->get();
    	return view('backend.service.list',compact('services'));
	}
	public function getAdd()
	{
		return view('backend.service.add');
	}
	public function postAdd(Request $request)
	{
		$this->validate($request,
            [
                'name' => 'required',
                'fImage' => 'required',
                'content_main' => 'required'
            ],
            [
                'name.required' => 'Bạn chưa nhập tiêu đề !',
                'fImage.required' => 'Bạn chưa chọn hình ảnh !',
                'content_main.required' => 'Bạn chưa nhập nội dung !',
            ]
        );
	}
}
