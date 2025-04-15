<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Editar Produto</h4>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form wire:submit.prevent="update" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model.defer="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ingredientes</label>
                    <textarea class="form-control" wire:model.defer="ingredientes"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Valor</label>
                    <input type="number" step="0.01" class="form-control" wire:model.defer="valor">
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagem Atual</label><br>
                    @if($imagem)
                        <img src="{{ asset('storage/' . $imagem) }}" class="img-thumbnail" width="150">
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Nova Imagem</label>
                    <input type="file" class="form-control" wire:model="novaImagem">
                </div>
                <button class="btn btn-success">Atualizar</button>
                <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>