<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Venda;

class VendaController extends Controller
{
    function telaCadastroVendas($id){
        $usuario = Usuario::find($id);

        return view("venda_usuario", [ "u" => $usuario ]);
    }

    function adicionar(Request $req, $id){
        $descricao = $req->input('descricao');
        $valor = $req->input('valor');
        $venda = new Venda();
        $venda->id_usuario = $id;
        $venda->descricao = $descricao;
        $venda->valor = $valor;
        if ($venda->save()){
            $msg = "O produto $descricao foi cadastrado";
        }else{
            $msg = "Erro no cadastramento";
        }
        return view("retorno_venda", [ "mensagem" => $msg ]);
    }
    function listar($id){
        $vendas = Venda::all();
        $usuarios = Usuario::find($id)->vendas;

        return view("lista_venda", [ "vendas" => $usuarios ]);
    }
}
