<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        $admin = User::create([
          'first_name' => 'Admin',
          'last_name' => 'Admin',
          'email' => 'admin@g.c',
          'phone' =>'+998991235',
          'password' => Hash::make('123'),
        ]);
        $admin->roles()->attach(1);
        $admin = User::create([
          'first_name' => 'Azizbek ',
          'last_name' => 'Ismoilov',
          'email' => 'admin2@g.c',
          'phone' =>'+998991235',
          'password' => Hash::make('123'),
        ]);
        $admin->roles()->attach(2);
        User::factory()->count(10)->hasAttached([Role::find(2)])->create();

//        $shop_costumer = User::create([
//            'name' => 'shop_costumer',
//            'fullname' => 'shop_costumer',
//            'email' => 'shop_costumer@g.c',
//            'password' => Hash::make('123'),
//        ]);
//        $shop_costumer->role()->attach(3);


    }
}
