<?php

require('app/app.php');

if(!isset($_GET['term'])){ //if term is not set, we go to index.php
    redirect('index.php');
}

$data = get_term($_GET['term']); //validate data

if ($data == false) { //if resource does nt exist, return 404
    view('not_found');
    die();
}

$view_bag = [
    'title' => 'Detail for ' . $data->term
];

view('detail', $data);