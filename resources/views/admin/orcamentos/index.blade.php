@extends('layouts.admin')

@section('title', 'Orçamentos')

@section('content')
    <h1>Orçamentos Recebidos</h1>
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orcamentos as $orcamento)
                    <tr>
                        <td>{{ $orcamento->id }}</td>
                        <td>{{ $orcamento->nome }}</td>
                        <td>{{ $orcamento->email }}</td>
                        <td>{{ $orcamento->telefone }}</td>
                        <td>{{ $orcamento->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.orcamentos.show', $orcamento) }}" class="btn btn-sm btn-primary">
                                Ver Detalhes
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Nenhum orçamento recebido ainda.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $orcamentos->links() }}
@endsection 