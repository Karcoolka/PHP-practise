<?php

//using a file to decode content
function get_terms(){
    $json = get_data();
    return json_decode($json);
}

//validate data
function get_term($term){
    $terms = get_terms(); //it gives us arr of objects, so iterate:

    foreach($terms as $item){
        if($item->term == $term){
            return $item; //if matches, return the term
        }
    }
    return false;
} 

//reading a file
function get_data(){
    $fname = CONFIG['data_file'];

    $json = '';
    
    if(!file_exists($fname)){ //if file does not exists, create it
        file_put_contents($fname, '');

        // $handle = fopen($fname, 'w+'); //fileHandle = function(filename, mode from PHP documentation), it create a file and open for editing
        // fclose($handle); //close the file
    } else {  //if we do have a file we will open it in read only
        $json = file_get_contents($fname);
        // $handle = fopen($fname, 'r');
        // $json = fread($handle, filesize($fname));
        // fclose($handle);
    }
    return $json;
}