<?php

namespace Database\Seeders;

use App\Models\admin\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
          [
            'nama'=>'PVC Kirito',
            'kategori_id'=>'2',
            'anime'=>'Sword Art Online',
            'harga'=>40000,
            'jumlah'=>1,
            'gambar'=>'',
            'status'=>'1',
            'estimasi'=> '2023-03-24',
            'desc'=>'lorem',
          ]  
        ];
        foreach($barang as $brg){
            Barang::create($brg);
        }
    }
}
