<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use File;

class AboutController extends Controller
{
   	public function getList()
    {
        $about = Post::where('type', 'about')->first();

        if (isset($about)) {
            $value = Post::where([
                ['type', 'about_value']
            ])->orderBy('id', 'desc')
                ->get();
        }

        return view('backend.about.list', compact('about', 'value'));


    }
    public function postAbout(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'content_main' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tiêu đề !',
                'name.content_main' => 'Bạn chưa nhập nội dung !',
            ]
        );

        $about = Post::find($request->id);
        if(isset($about)){
        	$about->name = $request->name;
        	$about->meta_title = $request->meta_title;
        	$about->meta_description = $request->meta_description;
        	$about->meta_keyword = $request->meta_keyword;
        	$about->content_short = $request->content_short;
        	$about->content_main = $request->content_main;
        	$image = $about->image; 
        	$path = 'uploads/post/';
        	$fImage = $request->file('fImage');
        	if(!empty($fImage)){
	            $file_name = time() . '_' . $fImage->getClientOriginalName();
	            $fImage->move($path, $file_name);
	            $about->image = $file_name;
	            if(File::exists($path.$image)){
	                File::delete($path.$image);   
	            }
	        }
	        $about->save();
        }
        return back()->with([
            'flash_level' => 'success',
            'flash_message' => 'Sửa thành công !'
        ]);
    }
}
