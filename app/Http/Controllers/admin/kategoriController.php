<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.index', ['title'=>'halaman kategori']);
    }
}
