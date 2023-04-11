<?php

namespace App\Http\Livewire\Member;

use App\Models\admin\Barang;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;


class Page extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $casts = [
        'estimasi' => 'date:d-m-Y',
    ];

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $data = Barang::orderBy('id', 'ASC')->where('nama', 'like', '%'.$this->search.'%')->paginate('10');
        return view('livewire.member.page',['barang'=>$data]);
    }
    public function addcart($barangId)
    {
        
    }
}
