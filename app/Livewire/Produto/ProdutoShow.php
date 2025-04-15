<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoShow extends Component
{
    public Produto $produto;

    public function render()
    {
        return view('livewire.produto.produto-show');
    }
}
