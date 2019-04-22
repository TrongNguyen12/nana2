<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use App\User;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function getListUser()
    {
    	$user = User::all();
		return view('backend.user.list',compact('user'));
    }
    public function getAddUser()
    {
    	return view('backend.user.add');
    }
    public function postAddUser(UserRequest $request)
    {
    	$user = new User();
		$user->name				= $request->txtName;
		$user->email			= $request->txtEmail;
		$user->password			= Hash::make($request->txtPass);
		$user->level			= 1;
		if (!empty($request->file('fImage'))) {
			$file_name 		= $request->file('fImage')->getClientOriginalName();
			$user->image 	= 'uploads/user/'.time().'-'.$file_name;
			$request->file('fImage')->move('uploads/user/',$user->image);
		}
		$user->save();
		return redirect('backend/user')->with([
			'flash_level' 	=> 'success',
			'flash_message' => 'Thêm thành công !'
		]);
    }
    public function getDeleteUser(Request $request)
    {
    	User::destroy($request->id);
    	return back()->with([
			'flash_level' 	=> 'success',
			'flash_message' => 'Xóa thành công !'
		]);;
    }
    public function getEditUser(Request $request)
    {
    	$data = User::where('id', $request->id)->first();
    	return view('backend.user.edit',compact('data'));
    }
    public function postEditUser(Request $request)
    {
    	$id = $request->id;
    	$user = User::find($id);
		if ($request->input('txtPass')) {
			$this->validate($request,
			[
				'txtRePass' => 'same:txtPass'
			],
			[
				'txtRePass.same' => 'Mật khẩu nhập lại không giống !'
			]);
			$pass = $request->input('txtPass');
			$user->password = Hash::make($pass);
		}
		$user->email = $request->txtEmail;
		$user->level = 1;
        if ($request->hasFile('fImage')) {
	        	if (!empty($request->file('fImage'))) {
				$file_name 		= $request->file('fImage')->getClientOriginalName();
				$user->image 	= 'uploads/user/'.time().'-'.$file_name;
				$request->file('fImage')->move('uploads/user/',$user->image);
	        }
    	}
		$user->save();
		return back();
    }
}
