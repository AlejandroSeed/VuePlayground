<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Role;

class RegisterController extends Controller
{
    public function getSelects(){
        $genders  = Gender::all();
        $roles    = Role::all();

        $genderOptions = $genders->map(function($item){
            return [
                'text'  => $item->name,
                'value'    => $item->id,
                'disabled' => false
            ];
        });
        $rolesOptions = $roles->map(function($item){
            return [
                'text'  => $item->name,
                'value' => $item->id,
                'disabled' => false
            ];
        });

        return response()->json([
            'gender_options' => $genderOptions,
            'roles_options'  => $rolesOptions
        ]);
    }
}
