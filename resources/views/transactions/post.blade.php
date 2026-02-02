<x-app-layout>
    <x-slot name="header">
        <h2>Novo Lançamento</h2>
    </x-slot>

    <div class="container mt-4">
        <form method="POST" action="{{ route('transactions.store') }}">
            @csrf

            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <input
                    type="text"
                    id="description"
                    name="description"
                    class="form-control @error('description') is-invalid @enderror"
                    value="{{ old('description') }}"
                    required>

                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Valor (R$)</label>
                <input
                    type="number"
                    step="0.01"
                    id="amount"
                    name="amount"
                    class="form-control @error('amount') is-invalid @enderror"
                    value="{{ old('amount') }}"
                    required>
                @error('amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select
                    id="type"
                    name="type"
                    class="form-select @error('type') is-invalid @enderror"
                    required>
                    <option value="entrada" {{ old('type') == 'entrada' ? 'selected' : '' }}>Entrada</option>
                    <option value="saida" {{ old('type') == 'saida' ? 'selected' : '' }}>Saída</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
