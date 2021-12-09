<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolenameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            ['role' => 'BPH'],
            ['role' => 'Ketua Divisi'],
            ['role' => 'Staff Ahli'],
            ['role' => 'Staff']
        ];

        DB::table('rolename')->insert($role);
    }
}
