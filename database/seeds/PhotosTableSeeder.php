<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        for($i=0;$i<50;$i++){
            DB::table('photos')->insert([
                'photoable_type'=>$faker->randomElement(['App\Post','App\Profile']),
                'photoable_id'=>$faker->numberBetween(1,10),
                'path'=>'https://via.placeholder.com/150',
            ]);
        }
    }
}
