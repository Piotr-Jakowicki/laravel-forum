<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        for($i=0;$i<100;$i++){
            DB::table('posts')->insert([
                'title'=>$faker->text(20),
                'content'=>$faker->text(4000),
                'views'=>$faker->numberBetween(1,500),
                'user_id'=>$faker->numberBetween(1,10),
                'category_id'=>$faker->numberBetween(1,10),
                'created_at'=>$faker->date('Y-m-d H:i:s'),
            ]);
        }
    }
}
