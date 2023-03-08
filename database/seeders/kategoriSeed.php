<?php

namespace Database\Seeders;

use App\Models\admin\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'kategori_id'=>'nendoroid'
            ],
            [
                'kategori_id'=>'PVC'
            ],
            [
                'kategori_id'=>'Model Kit'
            ]
        ];
        foreach($kategori as $ktg){
            Kategori::create($ktg);
        }
    }
}
