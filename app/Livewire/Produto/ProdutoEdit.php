<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProdutoEdit extends Component
{
    use WithFileUploads;

    public $produto;
    public $nome, $ingredientes, $valor, $imagem, $novaImagem;

    public function mount(Produto $produto)
    {
        $this->produto = $produto;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
        $this->imagem = $produto->imagem;
    }

    protected $rules = [
        'nome' => 'required|string|max:255',
        'ingredientes' => 'required|string',
        'valor' => 'required|numeric|min:0',
        'novaImagem' => 'nullable|image|max:2048',
    ];

    public function update()
    {
        $this->validate();

        if ($this->novaImagem) {
            $this->imagem = $this->novaImagem->store('produtos', 'public');
        }

        $this->produto->update([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $this->imagem,
        ]);

        session()->flash('success', 'Produto atualizado com sucesso!');
        return redirect()->route('produtos.index');
    }
   
    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
