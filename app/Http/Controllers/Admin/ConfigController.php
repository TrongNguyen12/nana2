<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ConfigHome;
use File;
class ConfigController extends Controller
{
    public function getGeneral()
    {
   		$site_info = ConfigHome::where('type', 'site_info')->first();
        $site_info = json_decode($site_info->content);
        return view('backend.config.general', compact('site_info'));
    }
    public function postGeneral(Request $request)
    {
    	$site_info = ConfigHome::where('type', 'site_info')->first();
        $content = json_decode($site_info->content);

        $path = 'uploads/config/logo';

        $site_logo = $content->site_logo;

        $fLogo = $request->file('fImage');
        
        if (!empty($fLogo)) {
            $file_name = time() . '_' . $fLogo->getClientOriginalName();
            $fLogo->move($path, $file_name);
            $site_logo = $file_name;
        }


        $site_favicon = $content->site_favicon;

        $fFavicon = $request->file('fFavicon');

        if (!empty($fFavicon)) {
            $faviconFileName = 'favicon'.time() . '-' . $fFavicon->getClientOriginalName();
            $fFavicon->move($path, $faviconFileName);
            $site_favicon = $faviconFileName;
        }

        $content->site_logo = $site_logo;
        $content->site_favicon = $site_favicon;
        $content->site_title = $request->site_title;
        $content->site_description = $request->site_description;
        $content->site_keyword = $request->site_keyword;
        $content->site_address = $request->site_address;
        $content->site_email = $request->site_email;
        $content->site_phone = $request->site_phone;
        $content->site_hotline = $request->site_hotline;
        $content->site_robot = $request->site_robot;
        $content->site_google_analytics = $request->site_google_analytics;
        $content->copyright = $request->copyright;
        $content->codemaps = $request->codemaps;

		
        $site_info->content = json_encode($content);


        if( $site_info->save()){
            return redirect()->back()->with([
                'flash_level' => 'success',
                'flash_message' => 'Cập nhật thành công !'
            ]);
        }

        return redirect()->back()->with([
            'flash_level' => 'danger',
            'flash_message' => 'Cập nhật không thành công !'
        ]);
    }
    public function getSocial()
    {
        $socials = ConfigHome::where('type', 'social')->first();
        $socials = json_decode($socials->content);
        return view('backend.config.social', compact('socials'));
    }
    public function postSocial(Request $request)
    {
        $socials = ConfigHome::where('type', 'social')->first();
        $content = json_decode($socials->content);
        $content->twitter->url = $request->twitter;
        $content->facebook->url = $request->facebook;
        $content->instagram->url = $request->instagram;
        $content->youtube->url = $request->youtube;
        $content->google_plus->url = $request->google_plus;
        $content->skype->url = $request->skype;
        $socials->content = json_encode($content);
        if ($socials->save()) {
            return redirect()->back()->with([
                'flash_level' => 'success',
                'flash_message' => 'Cập nhật thành công !'
            ]);
        }

        return redirect()->back()->with([
            'flash_level' => 'danger',
            'flash_message' => 'Cập nhật không thành công !'
        ]);
    }
    public function getOther()
    {
        $other = ConfigHome::where('type', 'other')->first();
        $other = json_decode($other->content);
        return view('backend.config.other', compact('other'));
    }
    public function postOther(Request $request)
    {
        $other = ConfigHome::where('type', 'other')->first();
        $content = json_decode($other->content);
        $content->header_recruitment->content = $request->header_recruitment;
        $other->content = json_encode($content);
        $other->save();
        return redirect()->back()->with([
            'flash_level' => 'success',
            'flash_message' => 'Cập nhật thành công !'
        ]);;
    }
}
