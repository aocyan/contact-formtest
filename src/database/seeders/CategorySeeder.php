<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Contact;

class CategorySeeder extends Seeder
{   
    public function run()
    {
        $categories = [
            [
                'detail' => '商品のお届けについて',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail' => '商品の交換について',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail' => '商品トラブル',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail' => 'ショップへのお問い合わせ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'detail' => 'その他',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

    DB::table('categories')->insert($categories);
    }
}
