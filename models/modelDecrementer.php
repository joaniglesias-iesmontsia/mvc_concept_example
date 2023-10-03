<?php

class modeldecrementer {
    
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function decrement() {
        return $this->number-1;
    }

}

?>
