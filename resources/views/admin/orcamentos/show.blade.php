@extends('layouts.admin')

@section('title', 'Detalhes do Orçamento')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.orcamentos.index') }}" class="btn btn-secondary">
            Voltar para Lista
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Orçamento #{{ $orcamento->id }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3>Informações do Cliente</h3>
                    <dl class="row">
                        <dt class="col-sm-3">Nome:</dt>
                        <dd class="col-sm-9">{{ $orcamento->nome }}</dd>

                        <dt class="col-sm-3">Email:</dt>
                        <dd class="col-sm-9">{{ $orcamento->email }}</dd>

                        <dt class="col-sm-3">Telefone:</dt>
                        <dd class="col-sm-9">{{ $orcamento->telefone }}</dd>

                        <dt class="col-sm-3">Empresa:</dt>
                        <dd class="col-sm-9">{{ $orcamento->empresa }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <h3>Detalhes do Orçamento</h3>
                    <dl class="row">
                        <dt class="col-sm-3">Assunto:</dt>
                        <dd class="col-sm-9">{{ $orcamento->assunto }}</dd>

                        <dt class="col-sm-3">Mensagem:</dt>
                        <dd class="col-sm-9">{{ $orcamento->mensagem }}</dd>

                        <dt class="col-sm-3">Data:</dt>
                        <dd class="col-sm-9">{{ $orcamento->created_at->format('d/m/Y H:i') }}</dd>
                    </dl>
                </div>
            </div>

            @if($orcamento->dados_extras)
                <div class="mt-4">
                    <h3>Dados Adicionais</h3>
                    <pre class="bg-light p-3">{{ json_encode(json_decode($orcamento->dados_extras), JSON_PRETTY_PRINT) }}</pre>
                </div>
            @endif
        </div>
    </div>
@endsection 