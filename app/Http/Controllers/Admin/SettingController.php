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
      'company_name' => 'nullable|string|max:255',
      'office_address' => 'nullable|string|max:500',
      'short_description' => 'nullable|string',

      'phones' => 'nullable|array|max:3',
      'phones.*.value' => 'required_with:phones|string',

      'whatsapp' => 'nullable|string',

      'emails' => 'nullable|array|max:3',
      'emails.*.value' => 'required_with:emails|email',

      'facebook' => 'nullable|url',
      'instagram' => 'nullable|url',
      'x' => 'nullable|url',
      'linkedin' => 'nullable|url',
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

    $setting->company_name = $request->input('company_name');
    $setting->office_address = $request->input('office_address');
    $setting->short_description = $request->input('short_description');
    
    $setting->phones = $cleanArray($request->input('phones', []));
    $setting->emails = $cleanArray($request->input('emails', []));

    $setting->whatsapps = $request->filled('whatsapp') ? [['value' => $request->input('whatsapp')]] : [];

    $setting->social_media = [
      'facebook' => $request->input('facebook'),
      'instagram' => $request->input('instagram'),
      'x' => $request->input('x'),
      'linkedin' => $request->input('linkedin'),
    ];

    $setting->save();

    // Clear the cache
    Cache::forget('general_settings');

    return redirect()->route('admin.settings.index')->with('success', 'General Settings updated successfully!');
  }
}
