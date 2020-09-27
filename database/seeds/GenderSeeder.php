<?php
use Illuminate\Support\Facades\DB;

class GenderSeeder extends \Illuminate\Database\Seeder
{
    public function run(){
        $this->genders();
    }

    public function genders(){
        DB::table('gender')->insert([
            [
                'name' => 'Hombre'
            ],
            [
                'name' => 'Mujer'
            ]
        ]);
    }

}
