<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $nome, $endereco, $telefone, $cpf, $email, $senha;

    public function cadastrarCliente()
    {
        $this->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'cpf' => 'required|unique:clientes',
            'email' => 'required|email|unique:clientes',
            'senha' => 'required|min:6',
        ]);

        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => Hash::make($this->senha),
        ]);

        session()->flash('success', 'Cliente cadastrado com sucesso!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.clientes.create');
    }
}
