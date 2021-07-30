<?php
$data = $_POST;

if (empty($data['username']) ||
    empty($data['password']) ) {
    die ("Eroare! Completati toate campurile!");    
}

$json_data = json_decode(file_get_contents('data.txt'), true);
$login = false;

foreach ($json_data as $key=>$value){
    if ($json_data['username'] === $data['username']){
        if ($json_data['password'] === $data['password']) {
            $login = true;
        }
    }
}

if ($login){
    echo "Login reusit!";
} 
else {
    echo "Login nereusit";
}