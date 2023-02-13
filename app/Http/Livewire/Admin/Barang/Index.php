<?php

namespace App\Http\Livewire\Admin\Barang;

use App\Models\kategori;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $ket = kategori::orderBy('id','ASC')->paginate(2);

        return view('livewire.admin.barang.index',['kategori'=>$ket]);
    }
}
