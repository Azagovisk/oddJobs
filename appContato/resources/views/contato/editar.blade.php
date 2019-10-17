@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('visualizar.contato') }}">Contatos</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('atualizar.contato', $contato->id) }}" method="POST">
                        {{ csrf_field() }} 
                        <div class="form-group">
                            <label for="endereco">Nome:</label>  
                            <input type="text" name="nome" class="form-control" value="{{ $contato->nome }}" required/> 
                        </div> 
                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
