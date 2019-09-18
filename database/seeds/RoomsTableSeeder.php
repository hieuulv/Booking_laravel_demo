<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('rooms')->insert([
                'name' => Str::random(10),
                'title' => Str::random(30),
                'rooms_detail' => Str::random(40),
                'price' => rand(10, 80),
                'bed_type' => rand(1, 6),
                'room_size' => rand(1, 6),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
