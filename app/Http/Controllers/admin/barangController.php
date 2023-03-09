<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\barangForm;
use App\Models\admin\Barang;
use App\Models\admin\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $product->harga = $valid['jumlah'];

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
    public function edit(Barang $item)
    {
        $ket = kategori::all();
        return view('admin.barang.edit', compact('item','ket'));
    }
    public function update(barangForm $request, $item)
    {
        $valid = $request->validated();
        $item = Barang::findOrFail($item);

        $item->nama = $valid['nama'];
        $item->kategori_id = $valid['kategori_id'];
        $item->anime = $valid['anime'];
        $item->harga = $valid['harga'];
        $item->harga = $valid['jumlah'];

        if ($request->hasFile('image')) {

            $path = 'uploads/category/' . $item->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');

            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/barang/', $filename);
            $item->image = $filename;
        }

        $item->status = $request->status == true ? '1' : '0';
        $item->estimasi = $valid['estimasi'];
        $item->desc = $valid['desc'];

        $item->update();

        return redirect('admin/home')->with('msg', 'data telah diupdate!');
    }
    public function destroy($item)
    {
        $data = Barang::find($item);
        $data->delete();
        return redirect('admin/home')->with('msg', 'data telah dihapus!');
    }
}
