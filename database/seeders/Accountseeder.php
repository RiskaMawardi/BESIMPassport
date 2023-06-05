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
                'name' => 'Iqbal Fajar Syahbana',
                'email' => 'iqbal@gmail.com',
                'password' => Hash::make('iqbal123'),
                'no_hp' => 966443443487,
                'role' => 1,
                'no_kk' => '3201385703040005'
            ]
        ];

        foreach ($akun as $key => $value) {
            User::create($value);
        }
    }
}
