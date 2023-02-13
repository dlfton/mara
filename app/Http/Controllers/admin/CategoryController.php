<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\barangForm;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.barang.index');
    }
    public function create()
    {
        return view('admin.barang.create');
    }
    public function tambah(barangForm $request)
    {
        $valid = $request->validated();

        $category = new kategori();
        $category->name = $valid['name'];
        $category->slug = Str::slug($valid['slug']);
        $category->desc = $valid['desc'];

        if($request->hasFile('image')){
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $valid['meta_title'];
        $category->meta_keyword = $valid['meta_keyword'];
        $category->meta_desc = $valid['meta_desc'];
        
        $category->status = $request->status == true ? '1':'0';

        $category->save();

        return redirect('kategori/admin')->with('msg', 'data telah ditambah!');
    }

    public function edit(kategori $item)
    {
        return view('admin.barang.edit');
    }
}
