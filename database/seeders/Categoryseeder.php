<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'comic','novel','history','science','biography','fantasy','fiction','mystery','romance','horror'
        ];

        foreach ($data as $value){
            Category::insert([
                'name' => $value
            ]);
        }
    }
}
