<?php
    use ArmoredCore\WebObjects\Session;

    class Jogo extends Tabuleiro{

        public $tabuleiro;
        private $estadojogo;

        public function iniciarJogo()
        {
            $this->tabuleiro = new Tabuleiro();
        }
    }
?>