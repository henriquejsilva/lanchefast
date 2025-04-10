<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Cadastrar Cliente</h4>

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="cadastrarCliente">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" wire:model="nome" class="form-control">
                    @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Endereço</label>
                    <input type="text" wire:model="endereco" class="form-control">
                    @error('endereco') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Telefone</label>
                    <input type="text" wire:model="telefone" class="form-control">
                    @error('telefone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">CPF</label>
                    <input type="text" wire:model="cpf" class="form-control">
                    @error('cpf') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" wire:model="email" class="form-control">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" wire:model="senha" class="form-control">
                    @error('senha') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-success w-100">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
