<?php

namespace App\Http\Livewire\Admin\Preorder;

use App\Models\admin\Pre;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $code, $user_id, $barang_id, $status, $po, $quantity, $bukti, $po_id;

    protected $rules = [
        'code' => '',
        'user_id' => '',
        'barang_id' => '',
        'status' => '',
        'po' => '',
        'quantity' => '',
        'bukti' => '',
    ];
    public function render()
    {
        $pre = Pre::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.preorder.index', ['pre'=> $pre]);
    }
}
