<?php

namespace transtruck\Http\Controllers;

use Illuminate\Http\Request;
use URL;

use transtruck\Http\Requests;
use transtruck\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index',[
            'titulo' => 'Página Principal',
            'usuarios' => $usuarios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create_edit', [
            'titulo' => 'Cadastro',
            'btn_form' => 'Cadastrar',
            'action' => URL::route('usuario.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuario::create($request->all());
        // return $usuario;
        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        
        return view('usuario.show', [
            'titulo' => 'Detalhes',
            'usuario' => $usuario
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        return view('usuario.create_edit', [
            'titulo' => 'Edição',
            'usuario' => $usuario,
            'action' => URL::route('usuario.update', $id),
            'btn_form' => 'Editar',
            'method_put' => method_field('PUT')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $usuario = Usuario::find($id);
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->cpf = $request->input('cpf');
        $usuario->rg = $request->input('rg');
        $usuario->save();

        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuario.index');
    }
}
