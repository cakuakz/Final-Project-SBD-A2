<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['status' => 'terlaksana'],
            ['status' => 'belum terlaksana']
        ];

        DB::table('statusproker')->insert($status);
    }
}
