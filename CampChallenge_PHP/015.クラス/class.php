<?php

// クラスの宣言
class league{
    public $yokohama = '';
    public $hiroshima = '';

    public function setleague($y, $h) {
        $this->yokohama = $y;
        $this->hiroshima = $h;
    }
    public function hyouji($y,$h){
        echo $y;
        echo $h;
}
}
