<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Complejo;
use Response;

class ComplejoController extends Controller
{
    public function index(){
    	$complejo = complejo::all();
    	return Response::json(array(
    		'complejos'=>$complejo),200);
    }

    
}
