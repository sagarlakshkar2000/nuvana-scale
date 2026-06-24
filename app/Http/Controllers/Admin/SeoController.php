<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $seos = \App\Models\Seo::latest()->paginate(10);
        return view('admin.seo.index', compact('seos'))->with('title', 'SEO Management');
    }

    public function create()
    {
        return view('admin.seo.create')->with('title', 'Add New SEO Settings');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|string|unique:seos,url',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string',
            'twitter_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'canonical_url' => 'nullable|url',
            'robots_meta' => 'nullable|string|max:255',
        ]);

        $data = $request->except(['og_image', 'twitter_image']);

        // Handle image uploads
        if ($request->hasFile('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('seo/og', 'public');
        }
        
        if ($request->hasFile('twitter_image')) {
            $data['twitter_image'] = $request->file('twitter_image')->store('seo/twitter', 'public');
        }

        // Clean up URL formatting (always ensure it starts with / except for exactly /)
        $url = trim($data['url']);
        if ($url !== '/' && !str_starts_with($url, '/')) {
            $url = '/' . $url;
        }
        $data['url'] = $url;

        \App\Models\Seo::create($data);

        return redirect()->route('admin.seo.index')->with('success', 'SEO settings saved successfully.');
    }

    public function edit(\App\Models\Seo $seo)
    {
        return view('admin.seo.edit', compact('seo'))->with('title', 'Edit SEO Settings');
    }

    public function update(Request $request, \App\Models\Seo $seo)
    {
        $request->validate([
            'url' => 'required|string|unique:seos,url,' . $seo->id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string',
            'twitter_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'canonical_url' => 'nullable|url',
            'robots_meta' => 'nullable|string|max:255',
        ]);

        $data = $request->except(['og_image', 'twitter_image']);

        // Handle image uploads and cleanup old images
        if ($request->hasFile('og_image')) {
            if ($seo->og_image && \Illuminate\Support\Facades\Storage::disk('public')->exists($seo->og_image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($seo->og_image);
            }
            $data['og_image'] = $request->file('og_image')->store('seo/og', 'public');
        }

        if ($request->hasFile('twitter_image')) {
            if ($seo->twitter_image && \Illuminate\Support\Facades\Storage::disk('public')->exists($seo->twitter_image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($seo->twitter_image);
            }
            $data['twitter_image'] = $request->file('twitter_image')->store('seo/twitter', 'public');
        }

        // Clean up URL formatting
        $url = trim($data['url']);
        if ($url !== '/' && !str_starts_with($url, '/')) {
            $url = '/' . $url;
        }
        $data['url'] = $url;

        $seo->update($data);

        return redirect()->route('admin.seo.index')->with('success', 'SEO settings updated successfully.');
    }

    public function destroy(\App\Models\Seo $seo)
    {
        if ($seo->og_image && \Illuminate\Support\Facades\Storage::disk('public')->exists($seo->og_image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($seo->og_image);
        }
        
        if ($seo->twitter_image && \Illuminate\Support\Facades\Storage::disk('public')->exists($seo->twitter_image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($seo->twitter_image);
        }

        $seo->delete();

        return redirect()->route('admin.seo.index')->with('success', 'SEO settings deleted successfully.');
    }
}
