<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\settingUpdateRequest;
use App\Models\Setting;
use App\Utils\ImageUpload;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.settings.index');
    }

    public function update(SettingUpdateRequest $request,Setting $setting){

        $setting->update($request->validated());
        if($request->has('logo')){
            $logo = ImageUpload::uploadImage($request->logo , 100 , 200 , 'logo/');
            $setting->update(['logo' => $logo]);
        }
        if($request->has('favicon')){
            $favicon = ImageUpload::uploadImage($request->favicon , 32 , 32 , 'logo/');
            $setting->update(['favicon' => $favicon]);
        }
        return redirect()->route('dashboard.settings.index')->with('success', 'تم تحديث الاعدادات بنجاح');
    }




}
