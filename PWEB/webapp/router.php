<?php
use ArmoredCore\Facades\Router;

/****************************************************************************
 *  URLEncoder/HTTPRouter Routing Rules
 *  Use convention: controllerName@methodActionName
 ****************************************************************************/

// ROTAS GET

Router::get('view/welcome','Controller/Welcome');
Router::get('view/Login','Controller/Login');
Router::get('view/Registo','Controller/Registo');
Router::get('view/Logout','Controller/Logout');
Router::get('Jogo/Banido','Controller/Banido');
Router::get('Jogo/Jogo','JogoController/inicio');
Router::get('Jogo/Perfil','JogoController/Perfil');
Router::get('Jogo/Regras', 'JogoController/Regras');
Router::get('Jogo/About','JogoController/About');
Router::get('Jogo/Tabuleiro','JogoController/Tabuleiro');
Router::get('view/Logintest','Controller/Logintest');
Router::get('Jogo/Perfiltest','Controller/Perfiltest');
Router::get('Jogo/Alterar','JogoController/Alterar');
Router::get('Jogo/Alterartest','JogoController/Alterartest');
Router::get('Jogo/boffice','JogoController/boffice');
Router::get('Jogo/boffice2','JogoController/boffice2');
Router::get('view/Logout','Controller/Logout');
Router::get('Jogo/Top10','JogoController/Top10');

// ROTAS POST

Router::post('view/Login', 'Controller/Registar');
Router::post('view/Logintest' , 'Controller/Logintestfunc');
Router::post('Jogo/Jogo','Controller/Iniciot');
Router::post('Jogo/Alterar','Controller/Alterart');
Router::post('Jogo/boffice2','Controller/boffice2t');

/************** End of URLEncoder Routing Rules ************************************/