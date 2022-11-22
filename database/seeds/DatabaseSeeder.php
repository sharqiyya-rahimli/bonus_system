<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AboutSeeder::class,
            CourseSeeder::class,
            ArticleSeeder::class,
            ImageSeeder::class,
        ]);
    }
}
