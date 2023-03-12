<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class preorderController extends Controller
{
    public function index_preorder()
    {
        return view('admin.preorder.index', ['title'=>'halaman pre order']);
    }
}
