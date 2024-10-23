<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //ver a listagem das categorias
    public function index()
    {
        $categorias = Categoria::all();//mesma coisa que select categoria from
        return view('categorias.index', compact('categorias'));
    }

    //retorna a view que contem o forms de cadastro de uma categoria
    public function create()
    {
        return view('categorias.create');
    }

    //retorna para a view informando se o cadastro foi realizado
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required|max:255',
        ]);

        //se n funcionar como voltar um erro - atv
        Categoria::create($request->all());//passa todos os parametros para o banco

        return redirect()->route('categorias.index')->with('sucesso', 'Categoria cadastrada com sucesso!');
    }

    //
    public function show(string $id)
    {
        //
    }

    //
    public function edit(string $id)
    {
        //
    }

    //
    public function update(Request $request, string $id)
    {
        //
    }

    //
    public function destroy(string $id)
    {
        //
    }
}
