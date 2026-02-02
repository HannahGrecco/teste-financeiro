<?php

namespace App\Services;

class BalanceService
{
    public function calculate($transactions)
    {
        $entradas = $transactions->where('type', 'entrada')->sum('amount');
        $saidas   = $transactions->where('type', 'saida')->sum('amount');

        return $entradas - $saidas;
    }
}
