@extends('layouts.principal')

@section('titulo', $titulo)

@section('tab_usuario')
<!-- start row 1 -->
<div class="row">

    <!-- start col 1 -->
    <div class="col s12">
        <form class="col s12" method="POST" action="{{ $action }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {{ isset($method_put) ? $method_put : ''}}

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nome" type="text" class="validate" name="nome" value="{{ isset($usuario->nome) ? $usuario->nome : old('nome') }}">
                    <label for="nome">Nome</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" name="email" value="{{ isset($usuario->email) ? $usuario->email : old('nome') }}">
                    <label for="email">E-mail</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">payment</i>
                    <input id="cpf" type="text" class="validate" name="cpf" value="{{ isset($usuario->cpf) ? $usuario->cpf : old('nome') }}">
                    <label for="cpf">CPF</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">payment</i>
                    <input id="rg" type="text" class="validate" name="rg" value="{{ isset($usuario->rg) ? $usuario->rg : old('nome') }}">
                    <label for="rg">RG</label>
                </div>
            </div>

            <div class="right">
                <a href="{{ URL::route('usuario.index') }}" class="waves-effect waves-light btn grey">Cancelar</a>
                <button class="waves-effect waves-light btn" type="submit">{{ $btn_form }}</button>
            </div>
        </form>

    </div>
    <!-- end col 1 -->

    {{--
    <!-- start col 1 -->
    <div class="col s4">
    </div>
    <!-- end col 1 -->
    --}}
</div>
<!-- end row 1 -->

@endsection
