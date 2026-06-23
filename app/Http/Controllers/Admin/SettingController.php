<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
  public function index()
  {
    $setting = GeneralSetting::first() ?? new GeneralSetting();
    return view('admin.settings.index', compact('setting'));
  }

  public function update(Request $request)
  {
    $validated = $request->validate([
      'phones' => 'nullable|array',
      'phones.*.icon' => 'nullable|string',
      'phones.*.value' => 'required_with:phones|string',

      'whatsapps' => 'nullable|array',
      'whatsapps.*.icon' => 'nullable|string',
      'whatsapps.*.value' => 'required_with:whatsapps|string',

      'emails' => 'nullable|array',
      'emails.*.icon' => 'nullable|string',
      'emails.*.value' => 'required_with:emails|email',

      'social_media' => 'nullable|array',
      'social_media.*.icon' => 'nullable|string',
      'social_media.*.value' => 'required_with:social_media|url',
    ]);

    $setting = GeneralSetting::first();
    if (!$setting) {
      $setting = new GeneralSetting();
    }

    // Clean arrays to remove any null rows if submitted empty
    $cleanArray = function ($array) {
      if (!$array)
        return [];
      return array_values(array_filter($array, function ($item) {
        return !empty($item['value']);
      }));
    };

    $setting->phones = $cleanArray($request->input('phones', []));
    $setting->whatsapps = $cleanArray($request->input('whatsapps', []));
    $setting->emails = $cleanArray($request->input('emails', []));
    $setting->social_media = $cleanArray($request->input('social_media', []));

    $setting->save();

    // Clear the cache
    Cache::forget('general_settings');

    return redirect()->route('admin.settings.index')->with('success', 'General Settings updated successfully!');
  }
}
