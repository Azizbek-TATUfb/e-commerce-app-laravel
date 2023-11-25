<?php

namespace Database\Seeders;

use App\Models\Admin\Role;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        $admin = User::create([
          'name' => 'admin',
          'fullname' => 'Mr Thomson',
          'email' => 'admin@g.c',
          'password' => Hash::make('123'),
        ]);
        $admin->role()->attach(1);
//        User::factory()->count(10)->hasAttached([Role::where(2)])->create();

//        $shop_costumer = User::create([
//            'name' => 'shop_costumer',
//            'fullname' => 'shop_costumer',
//            'email' => 'shop_costumer@g.c',
//            'password' => Hash::make('123'),
//        ]);
//        $shop_costumer->role()->attach(3);


    }
}
