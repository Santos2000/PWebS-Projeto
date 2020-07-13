<?php

use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;

class JogoController extends Controller{

    public function inicio(){
        return View::make('Jogo.Inicio');
    }

    public function Perfil(){
        return View::make('Jogo.Perfil');
    }

    public function Regras(){
        return View::make('Jogo.Regras');
    }

    public function About(){
        return View::make('Jogo.About');
    }

    public function Alterar(){
        return View::make('Jogo.Alterar');
    }

    public function Alterartest(){
        return View::make('Jogo.Alterartest');
    }

    public function Tabuleiro(){
        return View::make('Jogo.Tabuleiro');
    }

    public function boffice(){
        return View::make('Jogo.boffice');
    }

    public function boffice2(){
        return View::make('Jogo.boffice2');
    }

    public  function Top10(){
        return View::make('Jogo.Top10');
    }
}

?>