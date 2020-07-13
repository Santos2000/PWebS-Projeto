<?php
    use ArmoredCore\WebObjects\Session;

    class Tabuleiro extends NumeroBloqueado{

        public $dado;
        public $dado1;
        public $dado2;

        public function lancarDados()
        {
            $this->dado = new Dado();

            $this->dado1 = $this->dado->lancarDados();
            $this->dado2 = $this->dado->lancarDados();
        }
    }
?>