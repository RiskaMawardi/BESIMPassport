<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Accountseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $akun = [
            [
                'name' => 'Irwansyah',
                'email' => 'irwan@gmail.com',
                'password' => Hash::make('irwan123'),
                'no_hp' => 966443443487,
                'role' => 1
            ]
        ];

        foreach ($akun as $key => $value) {
            User::create($value);
        }
    }
}
