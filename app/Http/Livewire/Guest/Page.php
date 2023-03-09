<?php

namespace App\Http\Livewire\Guest;

use App\Models\admin\Barang;
use Livewire\WithPagination;
use Livewire\Component;

class Page extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $data = Barang::orderBy('id', 'ASC')->paginate('10');
        return view('livewire.guest.page', ['barang' => $data]);
    }
}
