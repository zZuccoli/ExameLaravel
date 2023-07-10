<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index() //rota principal
    {
        return Cliente::all();
    }


    public function store(Request $request) //Mandar para o banco de dados
    {
        $request->validate([
            'cliente' => 'required',
            'endereco' => 'required',
            'cep' => 'required',
            'cidade' => 'required',
            'telefone' => 'required',
        ]);
            return Cliente::create($request->all());

    }

    public function show($id) //Trazer as informaçoes do banco de dados e salvar os ids dos usuários
    {
        return Cliente::findOrfail($id);
    }

}