<?php
include 'config.php';
include 'functions.php';

if(empty($_POST['function'])){
   echo json_encode(array('message' => 'Function name empty'));die;
}
$function = $_POST['function'];

switch($function) {

    case 'add_reservation':
        add_reservation();
    break;

    case 'fetch_events':
        fetch_events();
    break;

    default :
    die(json_encode(array('message' => 'Function not existing')));
    break;
}

?>