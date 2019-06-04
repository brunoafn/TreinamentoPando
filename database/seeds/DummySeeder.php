<?php

use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cows')->insert([
            'nome' => 'Admin',
            'email' => 'vacaadmin@hotmail.com',
            'fone' => '35981224697',
        ]);

        DB::table('cows')->insert([
            'nome' => 'Teste',
            'email' => 'vacateste@hotmail.com',
            'fone' => '35992563403',
        ]);
    }
}
