<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function index()
    {
        $orcamentos = Orcamento::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.orcamentos.index', compact('orcamentos'));
    }

    public function show(Orcamento $orcamento)
    {
        return view('admin.orcamentos.show', compact('orcamento'));
    }
}
