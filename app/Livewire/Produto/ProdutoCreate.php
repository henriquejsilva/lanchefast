<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProdutoCreate extends Component
{
    use WithFileUploads;

    public $nome, $ingredientes, $valor, $imagem;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'ingredientes' => 'required|string',
        'valor' => 'required|numeric',
        'imagem' => 'nullable|image|max:2048',
    ];

    public function salvar()
    {
        $this->validate();

        $imagemPath = $this->imagem ? $this->imagem->store('produtos', 'public') : null;

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $imagemPath,
        ]);

        session()->flash('mensagem', 'Produto cadastrado com sucesso!');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
