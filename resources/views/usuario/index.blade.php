@extends('layouts.principal')

@section('titulo', $titulo)

@section('tab_usuario')

<!-- start row 1 -->
<div class="row">
    <!-- start col 1 -->
    <div class="col s11">
        <div class="input-field col s12">
            <input id="busca" type="text" class="validate" name="busca" value="">
            <label for="busca">Busca</label>
        </div>
    </div>

    <div class="col s1">
        <a href="{{ URL::route('usuario.create')}}" class="right btn-floating btn-large waves-effect waves-light blue">
            <i class="material-icons">add</i>
        </a>
    </div>
    <!-- end col 1 -->
</div>
<!-- end row 1 -->

<!-- start row 1 -->
<div class="row">


    <!-- start col 2 -->
    <div class="col s12">
        <table class="highlight centered responsive-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody class="centered">
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->nome }} </td>
                        <td>{{ $usuario->email }} </td>
                        <td>

                            <a class="waves-effect waves-light btn-floating green" href="{{ URL::route('usuario.show', $usuario->id)}}">
                                <i class="material-icons">list</i>
                            </a>

                            <a class="waves-effect waves-light btn-floating yellow darken-1" href="{{ URL::route('usuario.edit', $usuario->id)}}">
                                <i class="material-icons">mode_edit</i>
                            </a>


                            <!-- Inicio botão delete -->
                            <form id="form_delete" action="{{ URL::route('usuario.destroy', $usuario->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                    <button type="submit" class="waves-effect waves-light btn-floating red">
                                        <i class="material-icons">delete</i>
                                    </button>
                            </form>
                            <!-- Fim botão delete -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- end col 2 -->


</div>
<!-- end row 1 -->
@endsection
