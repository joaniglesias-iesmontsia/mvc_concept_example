<?php

require_once('../models/modelIncrementer.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['textbox'])) {
    $incrementer = new modelIncrementer($_POST['textbox']);
    $result = $incrementer->increment();
}

require '../views/viewIncrementer.php';

?>