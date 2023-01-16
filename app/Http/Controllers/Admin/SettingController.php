<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index() {
        $setting = Setting::all()->pluck('value','key');
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request) {
        $updates = $request->all();
        foreach($updates as $key => $value) {
            if($key == 'WEB_LOGO' || $key == 'WEB_LOGO_WHITE' || $key == 'WEB_FAVICON') {
                $file = $request->file($key);
                $filename = $file->getClientOriginalName();
                $file->storeAs('images/logo/', $filename, 'public');
                $value = $filename;
            }
            Setting::where('key',$key)->update(['value' => $value]);
        }

        session()->flash('success','Sukses Ubah Settings!');
        return redirect()->back();
    }
}
