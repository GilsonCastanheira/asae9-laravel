<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
class UsuariosControler extends Controller
{
    function nomesUsuarios(){
    	$lista = [];
    	$usuarios = Usuario::all();

    	
    	return view("lista", ["usuarios"=> $usuarios]);
    }
    function cadastro(){
    	return view("cadastro");
    }

    function novo(Request $req){
    	$nome = $req->input('nome');
    	
    	$endereco = $req->input('endereco');
    	$cep = $req->input('cep');
    	$cidade = $req->input('cidade');
    	$estado = $req->input('estado');

    	$usuario = new Usuario();
    	$usuario->nome = $nome;
    	
    	$usuario->endereco = $endereco;
    	$usuario->cep = $cep;
    	$usuario->cidade = $cidade;
    	$usuario->estado = $estado;
    	$usuario->save();

    	if($usuario->save()){
    		$mensagem = "Usuario $nome inserido com sucesso";
    	}else{
    		$mensagem = "Usuario nao foi inserido";
    	}
    	return view("resultado", ["msg" => $mensagem]);
    }
}
