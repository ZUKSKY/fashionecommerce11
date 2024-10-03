<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function brands()
    {
        $brand = Brand::orderBy('id', 'desc')->paginate(10);
        return view('admin.brand',compact('brands'));
    }
}
