<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index_preorder()
    {
        return view('admin.preorder.index', ['title'=>'halaman pre order']);
    }

    public function index_request()
    {
        return view('admin.requestorder.index', ['title'=>'halaman request order']);
    }
}
