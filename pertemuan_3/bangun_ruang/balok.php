<?php 
    
    class balok
    {
        private $panjang ;
        private $lebar ;
        private $tinggi ;

        // metodh setter
        public function setPanjang($nilai) {
            $this->panjang=$nilai;
        }
        public function setLebar($nilai) {
            $this->lebar=$nilai;
        }
        public function setTinggi($nilai) {
            $this->tinggi=$nilai;
        }

        //metodh getter
        public function getTinggi() {
            return $this->tinggi ;
        }
        public function getPanjang() {
            return $this->panjang ;
        }
        public function getLebar() {
            return $this->lebar ;
        }

        //metodh hitung luas & volume
        public function getLuas() {
            $luas = 2*(($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
            return $luas ;
        }
        public function getVolume() {
            $volume = $this->panjang * $this->lebar * $this->tinggi;
            return $volume;
        }
    }
    
?>