<?php
class tabung {
    private $diameter ;
    private $tinggi ;
    private $r;
    private $luas;
    private $volume;

    public function setDiameter($nilai) {
        $this->diameter = $nilai;
        $this->r = $nilai / 2;
    }
    public function setTinggi($nilai) {
        $this->tinggi = $nilai;
    }
    public function getLuas () {
        $this->luas = 3.14 * $this->diameter * $this->tinggi ;
        return $this->luas;
    }
    public function getVolume (){
        $this->volume = 3.14 * $this->r * $this->r * $this->tinggi ;
        return $this->volume;
    }
}

?>