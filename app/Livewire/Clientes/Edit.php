<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{

    public $clienteId, $nome, $endereco, $telefone, $cpf, $email;

    public function mount($id)
    {
        $cliente = Cliente::findOrFail($id);

        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
        $this->email = $cliente->email;
    }

    public function atualizarCliente()
    {
        $this->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'cpf' => 'required|unique:clientes,cpf,' . $this->clienteId,
            'email' => 'required|email|unique:clientes,email,' . $this->clienteId,
        ]);

        $cliente = Cliente::find($this->clienteId);
        $cliente->update([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Cliente atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
