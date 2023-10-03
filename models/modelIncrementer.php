<?php

class modelIncrementer {
    
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function increment() {
        return $this->number+1;
    }

}

?>
