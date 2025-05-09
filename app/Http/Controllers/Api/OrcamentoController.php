<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orcamento;

class OrcamentoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $orcamento = Orcamento::create([
            'nome' => $data['nome'] ?? '',
            'email' => $data['email'] ?? null,
            'telefone' => $data['telefone'] ?? null,
            'empresa' => $data['empresa'] ?? null,
            'assunto' => $data['assunto'] ?? null,
            'mensagem' => $data['mensagem'] ?? null,
            'dados_extras' => json_encode($data),
        ]);
        return response()->json(['success' => true, 'id' => $orcamento->id]);
    }
}
