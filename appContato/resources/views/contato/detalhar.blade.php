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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="endereco">Nome:</label>  
                        <input class="form-control" name="nome" type="text" value="{{ $contato->nome }}" readonly>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
