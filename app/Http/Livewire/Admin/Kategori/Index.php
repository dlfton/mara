<?php

namespace App\Http\Livewire\Admin\Kategori;

use App\Models\admin\Kategori;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    public $kategori_id, $kd_id;
    public $updateKate = false;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'kategori_id' => 'required'
    ];
    protected $listeners = [
        'deleteKate'=> 'destroy'
    ];

    public function resetFields()
    {
        $this->kategori_id = '';
    }
    public function render()
    {
        $ket = Kategori::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.kategori.index', ['kategori' => $ket]);
    }
    public function store()
    {
        $this->validate();

        try {
            // 
            Kategori::create([
                'kategori_id' => $this->kategori_id
            ]);
            // 
            session()->flash('success', 'created!');
        } catch (\Exception $e) {
            // 
            session()->flash('error', 'something wrong!');

            // 
            $this->resetFields();
        }
    }
    public function edit($id)
    {
        $kate = Kategori::findOrFail($id);
        $this->kategori_id = $kate->kategori_id;
        $this->kd_id = $kate->id;
        $this->updateKate = true;
    }
    public function update()
    {
        // 
        $this->validate();

        try{
            Kategori::find($this->kd_id)->fill(['kategori_id'=>$this->kategori_id])->save();
            session()->flash('success', 'Updated!');
        }
        catch(\Exception $e){
            session()->flash('error', 'something was wrong!');
            $this->cancel();
        }
    }
    public function cancel()
    {
        $this->updateKate = false;
        $this->resetFields();
    }
    public function destroy($id)
    {
        try{
            Kategori::find($id)->delete();
            session()->flash('success', 'deleted!');
        }
        catch(\Exception $e){
            session()->flash('error', 'something was wrong!');
            $this->resetFields();
        }
    }
}
