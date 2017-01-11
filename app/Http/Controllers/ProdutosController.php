<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Produto;


class ProdutosController extends Controller{
    
public function index(){
    
    $produtos = Produto:: all();
    
    return view('produtos',['produtos'=>$produtos]);

}



}