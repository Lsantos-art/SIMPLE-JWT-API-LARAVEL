<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = 0;
        while ($a < 100) {
            DB::table('products')->insert([
                'nome' => 'Produto n° ' . $a,
                'quantidade' => rand(5, 100),
                'valor' => rand(100, 3000),
            ]);
            $a++;
        }
    }
}
