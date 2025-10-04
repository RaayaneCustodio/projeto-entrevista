<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function index()
    {
        $contato = Contato::latest()->get();
        return view('recados.index',['contatos' => $contato]);
    }


    public function create()
    {
        return view('recados.criar');
    }

    public function store(Request $request)
    {
        Contato::create(['nome' => $request->nome, 'mensagem'=>$request->mensagem]);
        return redirect('/');
    }

    public function show(Contato $contato)
    {
        
    }


    public function edit(Contato $contato)
    {
        //
    }

   
    public function update(Request $request, Contato $contato)
    {
        //
    }


    public function destroy(Contato $contato)
    {
        //
    }
}
