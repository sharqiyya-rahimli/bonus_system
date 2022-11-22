<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = ['frontend/images/image_1.jpg','frontend/images/image_2.jpg','frontend/images/image_3.jpg','frontend/images/image_4.jpg'];
        foreach ($images as $image) {
        DB::table('images')->insert([
            'image' => $image
        ]);
        }
    }
}
