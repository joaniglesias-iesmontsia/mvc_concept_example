<?php

require_once('../models/modelDecrementer.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['textbox'])) {
    $incrementer = new modelDecrementer($_POST['textbox']);
    $result = $incrementer->decrement();
}

require '../views/viewDecrementer.php';

?>