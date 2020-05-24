<?php

use Illuminate\Database\Seeder;

class LikeablesTableSeeder extends Seeder
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
            DB::table('likeables')->insert([
                'likeable_type'=>$faker->randomElement(['App\Post','App\Comment']),
                'likeable_id'=>$faker->numberBetween(1,10),
                'user_id'=>$faker->numberBetween(1,10),
            ]);
        }
    }
}
