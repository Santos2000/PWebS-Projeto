<?php
    use ArmoredCore\WebObjects\Session;

    class Dado
    {
        public function lancarDados()
        {
            $valor = rand(1, 6);
            return $valor;
        }
    }
?>