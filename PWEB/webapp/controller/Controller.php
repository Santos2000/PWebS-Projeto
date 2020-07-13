<?php

use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;

class Controller extends BaseController
{
    public function welcome(){
        return View::make('Vistas.Welcome');
    }

    public function login(){
        return View::make('Vistas.Login');
    }

    public function Registo(){
        return View::make('Vistas.Registo');
    }

    public function Logintest(){
        return View::make('Vistas.Logintest');
    }

    public function Banido(){
        return View::make('Vistas.Banido');
    }

    public function Logout(){
        return View::make('Vistas.Logout');
    }

    public function Registar(){
        $user = new User();
        $users = User::all(); // Vai buscar todos os utilizadores que estão na base de dados.
        $flag = 0;

        foreach($users as $userRegistado) {
            if($userRegistado->username == $user->username){
                //utilizador com esse username existe
                $flag = 1;
            }
            if($userRegistado->email == $user->email){
                //utilizador com esse email existe
                $flag = 2;
            }
        }

        $user->nomecompleto = Post::get('nomecompleto');
        $user->datanasc = Post::get('datanasc');
        $user->email = Post::get('email');
        $user->username = Post::get('username');

        if (Post::get('password') === Post::get('confirm_password')){
            $user->password = Post::get('password');
            // Encripta a password inserida
            $user->password = hash('sha1', $user->password, false);
        }

        $user->estado = 'Normal';
        $user->tipo = 'C';

        // Falta colocar a $mensagemErro a aparecer depois de dar submit, caso se verifique
        if ($flag = 1){
            $mensagemErro = "Username já existente.";
            View::make('Vistas.Registo', ['mensagemErro' => $mensagemErro]);
        }
        else if($flag = 2){
            $mensagemErro = "Email já registado.";
            View::make('Vistas.Registo', ['mensagemErro' => $mensagemErro]);
        }
        else{
            if($user-> is_valid()){
                $user->save();
                Redirect::toRoute('view/Login');
            }
        }
    }

    public function Logintestfunc(){
        $username1 = Post::getAll();
        return View::make('Vistas.Logintest');
    }

    public function Iniciot(){
        $texto = Post::getAll();
        return View::make('Jogo.Inicio');
    }

    public function Alterart(){
        $changes = Post::getAll();
    }

    public function Perfiltest(){
        return View::make('Jogo.Perfiltest');
    }

    public function boffice2t(){
        $var = Post::getAll();
        return View::make('Jogo/boffice2');
    }
}
?>