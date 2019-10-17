@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Contatos</li>
                    <li class="breadcrumb-item"><a href="{{ route('adicionar.contato') }}">Adicionar</a></li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        <a class="btn btn-primary" href="{{ route('adicionar.contato') }}">Novo Contato</a>
                    </p>

                    <form action="{{ route('procurar.contato') }}" method="GET">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <input type="text" class="form-control" name="descricao" placeholder="Pesquisar nome do contato..." aria-describedby="basic-addon1">
                        </div>
                    </form>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Nome</th> 
                               <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($contatos as $contato)
                            <tr>
                                <th scope="row">{{ $contato->id }}</th>
                                <td>{{ $contato->nome }}</td>
                                <td>
                                    <a href="{{ route('detalhar.contato', $contato->id) }}" class="btn btn-success">Detalhe</a>
                                    <!-- <button type="button" class="btn btn-primary">Editar</button> -->
                                    <a href="{{ route('editar.contato', $contato->id) }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ route('deletar.contato', $contato->id) }}" class="btn btn-danger">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $contatos->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
