<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Detalhes do Cliente</h4>

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nome:</strong> {{ $cliente->nome }}</li>
                <li class="list-group-item"><strong>Endereço:</strong> {{ $cliente->endereco }}</li>
                <li class="list-group-item"><strong>Telefone:</strong> {{ $cliente->telefone }}</li>
                <li class="list-group-item"><strong>CPF:</strong> {{ $cliente->cpf }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $cliente->email }}</li>
            </ul>

            <div class="mt-4 text-center">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>
