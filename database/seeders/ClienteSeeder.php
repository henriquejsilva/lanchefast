<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Cliente teste',
            'endereco' => 'Rua Alvaro 123',
            'telefone' => '119999999999',
            'cpf' => '12345678901',
            'email' =>  'cliente@teste.com',
            'senha' => bcrypt('senha123'),
        ]);

        Cliente::create([
            'nome' => 'Cliente teste2',
            'endereco' => 'Rua Alvaro 145',
            'telefone' => '229999999999',
            'cpf' => '22345678901',
            'email' =>  'cliente@teste1.com',
            'senha' => bcrypt('senha1234'),
        ]);

        Cliente::create([
            'nome' => 'Cliente teste3',
            'endereco' => 'Rua Alvaro 178',
            'telefone' => '339999999999',
            'cpf' => '32345678901',
            'email' =>  'cliente@teste3.com',
            'senha' => bcrypt('senha12345'),
        ]);
    }
}
