<x-app-layout>

    <form method="POST" action="{{ route('transactions.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Valor</label>
            <input type="number" step="0.01" name="amount" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <select name="type" class="form-select" required>
                <option value="entrada">Entrada</option>
                <option value="saida">Saída</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="previsto">Previsto</option>
                <option value="confirmado">Confirmado</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select name="category" class="form-select">
                <option value="pessoal">Pessoal</option>
                <option value="empresarial">Empresarial</option>
            </select>
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
</x-app-layout>
