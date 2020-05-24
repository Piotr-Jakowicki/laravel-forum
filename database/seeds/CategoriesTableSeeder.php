<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        for($i=0;$i<10;$i++){
            DB::table('categories')->insert([
                'name'=>$faker->word,
                'description'=>$faker->text(100),
            ]);
        }
    }
}
