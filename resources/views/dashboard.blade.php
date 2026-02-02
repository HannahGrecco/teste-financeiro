<x-app-layout>
    <div class="container mt-4">
        <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-4">
            Novo Lançamento
        </a>
        <h3>Saldo Total</h3>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-bg-success">
                    <div class="card-body">
                        Entradas: R$ {{ number_format($entradas, 2, ',', '.') }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-danger">
                    <div class="card-body">
                        Saídas: R$ {{ number_format($saidas, 2, ',', '.') }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-primary">
                    <div class="card-body">
                        Saldo Total: R$ {{ number_format($saldo, 2, ',', '.') }}
                    </div>
                </div>
            </div>
        </div>

        <h3>Saldo Pessoal</h3>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-bg-primary">
                    <div class="card-body">
                        Saldo: R$ {{ number_format($saldoPessoal, 2, ',', '.') }}
                    </div>
                </div>
            </div>
        </div>


        <h3>Saldo Empresarial</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-bg-primary">
                    <div class="card-body">
                        Saldo: R$ {{ number_format($saldoEmpresarial, 2, ',', '.') }}
                    </div>
                </div>
            </div>
        </div>
         <h3>Transações Confirmadas</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Valor (R$)</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->created_at->format('d/m/Y') }}</td>
                        <td>{{ $transaction->description }}</td>
                        <td>
                            @if($transaction->type === 'entrada')
                                <span class="badge bg-success">Entrada</span>
                            @else
                                <span class="badge bg-danger">Saída</span>
                            @endif
                        </td>
                        <td>{{ number_format($transaction->amount, 2, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Nenhuma transação confirmada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
