<div class="container mt-4">
    <h2>Cadastrar Produto</h2>

    @if (session()->has('mensagem'))
        <div class="alert alert-success">{{ session('mensagem') }}</div>
    @endif

    <form wire:submit.prevent="salvar">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" wire:model="nome">
            @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Ingredientes</label>
            <textarea class="form-control" wire:model="ingredientes"></textarea>
            @error('ingredientes') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Valor</label>
            <input type="number" step="0.01" class="form-control" wire:model="valor">
            @error('valor') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Imagem do Produto</label>
            <input type="file" class="form-control" wire:model="imagem">
            @error('imagem') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button class="btn btn-success" type="submit">Salvar Produto</button>
    </form>
</div>
