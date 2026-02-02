<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BalanceService;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = auth()->user()
            ->transactions()
            ->confirmed()
            ->get();

        $service = new BalanceService();

        $saldo = $service->calculate($transactions);

        $saldoPessoal = $service->calculate(
            $transactions->where('category', 'pessoal')
        );

        $saldoEmpresarial = $service->calculate(
            $transactions->where('category', 'empresarial')
        );

        return view('dashboard', compact(
            'saldo',
            'saldoPessoal',
            'saldoEmpresarial',
            'transactions'
        ));
    }
}
