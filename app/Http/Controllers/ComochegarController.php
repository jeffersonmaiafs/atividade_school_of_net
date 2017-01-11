<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ComochegarController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {


        return view('comochegar');
    }

    public function menu() {
        $menu = [
            0 => 'inicio',
            1 => 'noticias',
            2 => 'como_chegar',
            
        ];

        return view('comochegar', ['menu' => $menu]);
    }

}
