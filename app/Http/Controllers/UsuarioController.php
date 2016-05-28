<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use Response;

class UsuarioController extends Controller
{
    public function index()
    {
    	$usuario = Usuario::all();
    	return Response::json(array(
    		'usuario'=>$usuario),200);
    }
}
