<?php

namespace App\Http\Livewire\Admin\Barang;

use App\Models\admin\Barang;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $bara = Barang::orderBy('id','ASC')->paginate(2);

        return view('livewire.admin.barang.index',['barang'=>$bara]);
    }
}
