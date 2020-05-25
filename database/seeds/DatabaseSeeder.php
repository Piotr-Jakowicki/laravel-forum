<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            TagsTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            LikeablesTableSeeder::class,
            PhotosTableSeeder::class,
            RolesTableSeeder::class,
            RoleUserTableSeeder::class,
            DislikeablesTableSeeder::class,
        ]);
    }
}
