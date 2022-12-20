<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'name'=>'omar',
                'email'=>'omar@gmail.com',
                'password'=>Hash::make('123456789')
            ],
            [
                'name'=>'amr',
                'email'=>'amr@gmail.com',
                'password'=>Hash::make('123456789')
            ],
            [
                'name'=>'noha',
                'email'=>'noha@gmail.com',
                'password'=>Hash::make('123456789')
            ],
        ];

        foreach ($arr as $r)
            User::create($r);
    }
}
