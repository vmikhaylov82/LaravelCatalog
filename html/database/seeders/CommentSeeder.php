<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Comments;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comments::create([
                "goods_id" => '1',
                "comment" => 'Хороший товар'
        ]);
        Comments::create([
                "goods_id" => '2',
                "comment" => 'Хороший товар'
        ]);
        Comments::create([
                "goods_id" => '3',
                "comment" => 'Хороший товар'
        ]);
        Comments::create([
                "goods_id" => '4',
                "comment" => 'Хороший товар'
        ]);
        Comments::create([
                "goods_id" => '5',
                "comment" => 'Хороший товар'
        ]);
    }
}
