<?php

namespace App\Http\Livewire\Admin\Barang;

use App\Models\admin\Barang;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $nama, $kategori_id, $anime, $gambar, $desc, $barang_id;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $bara = Barang::orderBy('id','ASC')->paginate(10);

        return view('livewire.admin.barang.index',['barang'=>$bara]);
    }

    public function viewBarang(int $barang_id)
    {
        $barang = Barang::find($barang_id);
        if($barang){
            $this->barang_id = $barang->id;
            $this->nama = $barang->nama;
            $this->kategori_id = $barang->kategori_id;
            $this->anime = $barang->anime;
            $this->gambar = $barang->gambar;
            $this->desc = $barang->desc;
        }else{
                return redirect()->to('/admin/home');
            }

        }
    }