<?php
$data = $_POST;

if (empty($data['username']) ||
    empty($data['email']) ||
    empty($data['password']) ||
    empty($data['password_confirm'])) {
    die ("Eroare! Completati toate campurile!");    
}

if ($data['password'] !== $data['password_confirm']) {
    die('Eroare la confirmarea parolei!');   
}

file_put_contents ('data.txt', json_encode($data));
echo "Inregistrare reusita!";