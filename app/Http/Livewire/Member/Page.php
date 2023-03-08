<?php

namespace App\Http\Livewire\Member;

use App\Models\admin\Barang;
use Livewire\Component;
use Livewire\WithPagination;


class Page extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $data = Barang::orderBy('id', 'ASC')->paginate('10');
        return view('livewire.member.page',['barang'=>$data]);
    }
}
