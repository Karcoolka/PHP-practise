<?php

//traditional array
$guitars1 = ['Vela', 'Explorer', 'Strat'];

echo $guitars1[1]; //print or display content of variable, but has no return value

print_r($guitars1[0]); //prin or display content of variable

if(isset($guitars1[3])){ //method is_set
    echo $guitars1[3];
}else{
    echo 'Guitar does not exist';
}
$velaGuitar = 'Vela';
$explorerGuitar = 'Explorer';
$stratGuitar = 'Strat';


//associative array = they can have a value (key-value pair)
$guitars2 = [
    'prs' => 'Vela',
    'gipson' => 'Explorer',
    'fender' => 'Strat'
];

echo $guitars2['prs'];

if(isset($guitars2['prs'])){ //method is_set
    echo $guitars2['prs'];
}else{
    echo 'Guitar does not exist';
}
