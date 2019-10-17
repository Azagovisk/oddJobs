@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('visualizar.contato') }}">Contatos</a></li>
                    <li class="breadcrumb-item active">Pesquisar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Nome</th> 
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($resultado))
                        <div class="alert alert-success" role="alert">
                            Contato Encontrado!
                        </div>
                        @foreach ($resultado as $resultado)
                            <tr>
                                <th scope="row">{{ $resultado->id }}</th>
                                <td>{{ $resultado->nome }}</td>
                                <td>
                                    <a href="{{ route('detalhar.contato', $resultado->id) }}" class="btn btn-success">Detalhe</a>
                                    <!-- <button type="button" class="btn btn-primary">Editar</button> -->
                                    <a href="{{ route('editar.contato', $resultado->id) }}" class="btn btn-primary">Editar</a>
                                    <a href="javascript:confirm('Apagar contato?') ? window.location.href='{{ route('deletar.contato', $resultado->id) }}' : false" class="btn btn-danger">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <div class="alert alert-danger" role="alert">
                            Contato não encontrado!
                        </div>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
