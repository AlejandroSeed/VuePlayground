<?php

use Illuminate\Support\Facades\DB;

class RoleSeeder extends \Illuminate\Database\Seeder
{
    public function run(){
        $this->roles();
    }

    public function roles(){
        DB::table('role')->insert([
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Cliente'
            ]
        ]);


    }
}

