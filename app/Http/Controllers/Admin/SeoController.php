<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        return view('admin.under-construction', ['title' => 'SEO Management']);
    }
}
