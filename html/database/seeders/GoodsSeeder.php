<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Goods;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goods::create([
                "name" => 'Samsung Galaxy A55 5G 256 ГБ синий',
                "image" => '1',
                "cost" => 38999,
                "matrix" => 'Super AMOLED',
                "diagonal" => 6.6
        ]);
        Goods::create([
                "name" => 'Apple iPhone 15 128 ГБ черный',
                "image" => '2',
                "cost" => 84499,
                "matrix" => 'Super Retina XDR',
                "diagonal" => 6.1
        ]);
        Goods::create([
                "name" => 'Apple iPhone 15 Pro Max 256 ГБ серый',
                "image" => '3',
                "cost" => 144799,
                "matrix" => 'Super Retina XDR',
                "diagonal" => 6.7
        ]);
        Goods::create([
                "name" => 'Xiaomi Redmi Note 13 256 ГБ черный',
                "image" => '4',
                "cost" => 20999,
                "matrix" => 'AMOLED',
                "diagonal" => 6.67
        ]);
        Goods::create([
                "name" => 'HONOR 90 Lite 256 ГБ черный',
                "image" => '5',
                "cost" => 17999,
                "matrix" => 'IPS',
                "diagonal" => 6.7
        ]);
        Goods::create([
                "name" => 'Samsung Galaxy S24 Ultra 512 ГБ черный',
                "image" => '6',
                "cost" => 129999,
                "matrix" => 'AMOLED',
                "diagonal" => 6.8
        ]);
        Goods::create([
                "name" => 'Infinix ZERO 30 4G 256 ГБ зеленый',
                "image" => '7',
                "cost" => 18999,
                "matrix" => 'AMOLED',
                "diagonal" => 6.78
        ]);

    }
}
