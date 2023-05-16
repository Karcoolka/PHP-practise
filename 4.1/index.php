<?php

require('app/app.php');

$view_bag = [
    'title' => 'Glosary List'
];

view('index', get_terms());