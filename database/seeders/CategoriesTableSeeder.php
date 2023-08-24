<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('vi_VN');
        $names = ['Laptop', 'PC', 'Máy tính bảng', 'Thiết bị mạng', 'Phụ kiện'];
        for ($i = 0; $i < count($names); $i++){
            Category::create([
                'name' => $faker->randomElement($names),
            ]);
        }
    }
}
