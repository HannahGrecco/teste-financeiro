<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialTransaction;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function create()
    {
        return view('transactions.create');
    }

    public function store (TransactionRequest $request)
    {
        $incomingFields = $request->validated();
         auth()->user()->transactions()->create($incomingFields);
         return redirect()->route('dashboard');
    }
}
