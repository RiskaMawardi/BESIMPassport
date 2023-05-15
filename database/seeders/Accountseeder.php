<?php

namespace Database\Seeders;

use App\Models\Account;
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
                'id_akun' => 1,
                'username' => 'riska',
                'password' => Hash::make('mawar123'),
                'no_hp' => 8,
                'role' => 0
            ],
            [
                'id_akun' => 2,
                'username' => 'irwan',
                'password' => Hash::make('irwan123'),
                'no_hp' => 9,
                'role' => 1
            ]
        ];

        foreach ($akun as $key => $value) {
            Account::create($value);
        }
    }
}
