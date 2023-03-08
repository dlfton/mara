<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\barangForm;
use App\Models\admin\Barang;
use App\Models\admin\Kategori;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function add(barangForm $request)
    {
        $valid = $request->validated();

        $product = new Barang();
        $product->nama = $valid['nama'];
        $product->kategori_id = $valid['kategori_id'];
        $product->anime = $valid['anime'];
        $product->harga = $valid['harga'];

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/barang/', $filename);
            $product->gambar = $filename;
        }

        $product->status = $request->status == true ? '1' : '0';
        $product->estimasi = $valid['estimasi'];
        $product->desc = $valid['desc'];

        $product->save();

        return redirect('admin/home')->with('msg', 'data telah ditambah!');
    }

    public function tambah()
    {
        $ket = kategori::all();
        return view('admin.barang.tambah', compact('ket'));
    }
    public function edit()
    {
        // # code...
    }
    public function update()
    {
        // # code...
    }
    public function delete()
    {
        // # code...
    }
}
