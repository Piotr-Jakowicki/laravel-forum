<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        for($i=0;$i<150;$i++){
            DB::table('comments')->insert([
                'content'=>$faker->text(100),
                'commentable_type'=>$faker->randomElement(['App\Post']),
                'commentable_id'=>$faker->numberBetween(1,100),
                'user_id'=>$faker->numberBetween(1,10),
                'created_at'=>$faker->date('Y-m-d'),
            ]);
        }
    }
}
