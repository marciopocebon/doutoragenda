<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function agenda()
    {
        /*Request::flash();*/
        return view('agenda.index');
    }
    public function clinica()
    {
        /*Request::flash();*/
        return view('clinica.index');
    }
    public function relatorios()
    {
        /*Request::flash();*/
        return view('relatorios.index');
    }
    public function configuracoes()
    {
        /*Request::flash();*/
        return view('configuracoes.index');
    }

}
