<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\barangForm;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $valid['meta_title'];
        $category->meta_keyword = $valid['meta_keyword'];
        $category->meta_desc = $valid['meta_desc'];

        $category->status = $request->status == true ? '1' : '0';

        $category->save();

        return redirect('kategori/admin')->with('msg', 'data telah ditambah!');
    }

    public function edit(kategori $item)
    {
        return view('admin.barang.edit', compact('item'));
    }

    public function update(barangForm $request, $item)
    {
        $valid = $request->validated();
        $item = kategori::findOrFail($item);

        $item->name = $valid['name'];
        $item->slug = Str::slug($valid['slug']);
        $item->desc = $valid['desc'];

        if ($request->hasFile('image')) {

            $path = 'uploads/category/'.$item->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/category/', $filename);
            $item->image = $filename;
        }

        $item->meta_title = $valid['meta_title'];
        $item->meta_keyword = $valid['meta_keyword'];
        $item->meta_desc = $valid['meta_desc'];

        $item->status = $request->status == true ? '1' : '0';

        $item->update();

        return redirect('kategori/admin')->with('msg', 'data telah diupdate!');
    }
}
