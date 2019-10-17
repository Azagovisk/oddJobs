@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('visualizar.contato') }}">Contatos</a></li>
                        <li class="breadcrumb-item active">Adicionar</li>
                    </ol>

                <div class="card-body">
                    <form action="{{ route('salvar.contato') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="endereco">Nome:</label>  
                            <input type="text" name="nome" class="form-control" placeholder="Nome do contato" required/> 
                        </div>  
                        <button type="submit" class="btn btn-success">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
