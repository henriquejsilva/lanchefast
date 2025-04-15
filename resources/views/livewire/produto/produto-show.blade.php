<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>{{ $produto->nome }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Ingredientes:</strong> {{ $produto->ingredientes }}</p>
            <p><strong>Valor:</strong> R$ {{ number_format($produto->valor, 2, ',', '.') }}</p>

            @if ($produto->imagem)
                <div class="mt-3">
                    <img src="{{ asset('storage/' . $produto->imagem) }}" class="img-fluid rounded" style="max-height: 250px;">
                </div>
            @else
                <p class="text-muted">Sem imagem cadastrada.</p>
            @endif
        </div>
    </div>
</div>
