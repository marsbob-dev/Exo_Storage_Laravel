<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function index()
    {
        return view('store');
    }
    public function store(Request $request)
    {
        Storage::put('public', $request->file('image'));
        return redirect('/store');
    }
}
