<?php

use Illuminate\Database\Seeder;

class DislikeablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        for($i=0;$i<500;$i++){
            DB::table('dislikeables')->insert([
                'dislikeable_type'=>$faker->randomElement(['App\Post','App\Comment']),
                'dislikeable_id'=>$faker->numberBetween(1,100),
                'user_id'=>$faker->numberBetween(1,10),
            ]);
        }
    }
}
