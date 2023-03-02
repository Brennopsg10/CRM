<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrmPessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crmpessoa')->insert([
            [
                'nomepessoa' => 'Brenno Phellipe',
                'cpf' => '06160071165',
                'dtnasc' => '1998-05-17',
                "created_at" => date('Y-m-d H:i:s'),
            ],
            [
                'nomepessoa' => 'Renner Esser',
                'cpf' => '99999999999',
                'dtnasc' => '1988-02-05',
                "created_at" => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
