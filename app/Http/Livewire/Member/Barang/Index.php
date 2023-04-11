<?php

namespace App\Http\Livewire\Member\Barang;

use App\Models\admin\Barang;
use Livewire\Component;

class Index extends Component
{
    public $item;
    
    public function mount($item)
    {
        $this->item = $item;
    }

    public function render()
    {
        // Barang::
        return view('livewire.member.barang.index');
    }
}
