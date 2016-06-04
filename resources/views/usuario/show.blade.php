@extends('layouts.principal')

@section('titulo', $titulo)

@section('tab_usuario')

<!-- start row 1 -->
<div class="row">

    <!-- start col 1 -->
    <div class="col s12">
        <!-- start panel -->
        <div class="card-panel z-depth-5 blue-grey hoverable">
            <h4 class="center white-text text-darken-2">Usuário #{{ $usuario->id }}</h4>

            <h5 class="white-text text-darken-2">Nome</h5>

            <span class="white-text text-darken-2">
                {{ $usuario->nome }}
            </span>

            <h5 class="white-text text-darken-2">E-mail</h5>

            <span class="white-text text-darken-2">
                {{ $usuario->email }}
            </span>

            <h5 class="white-text text-darken-2">CPF</h5>

            <span class="white-text text-darken-2">
                {{ $usuario->cpf }}
            </span>

            <h5 class="white-text text-darken-2">RG</h5>

            <span class="white-text text-darken-2">
                {{ $usuario->rg }}
            </span>

        </div>
        <!-- end panel -->

        <a href="{{ URL::route('usuario.edit', $usuario->id) }}" class="right waves-effect waves-light btn">Editar</a>
        <a href="{{ URL::route('usuario.index') }}" class="right waves-effect waves-light btn grey">Voltar</a>
    </div>
    <!-- end col 1 -->
</div>
<!-- end row 1 -->

@endsection
