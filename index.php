<?php

// Inizio quarto selfwork

$users = [

    ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'male'], 
    ['name' => 'Luigi', 'surname' => 'Verdi', 'gender' => 'male'], 
    ['name' => 'Lara', 'surname' => 'Croft', 'gender' => 'female'], 
    ['name' => 'Bruce', 'surname' => 'Wayne', 'gender' => 'male'], 
    ['name' => 'Ellen', 'surname' => 'Ripley', 'gender' => 'female'], 
    ['name' => 'Clark', 'surname' => 'Kent', 'gender' => 'male'], 
    ['name' => 'Hermione', 'surname' => 'Granger', 'gender' => 'female'], 
    ['name' => 'Peter', 'surname' => 'Parker', 'gender' => 'male'],
    ['name' => 'Daenerys', 'surname' => 'Targaryen', 'gender' => 'female'], 
    ['name' => 'Tony', 'surname' => 'Stark', 'gender' => 'male'], 
    ['name' => 'Quiet', 'surname' => 'OXF', 'gender' => 'female'], 
    ['name' => 'Astro', 'surname' => 'Bot', 'gender' => 'nb'], 
    ['name' => 'Sadie', 'surname' => 'Adler', 'gender' => 'female'], 
    ['name' => 'Vamp', 'surname' => 'DeadCell', 'gender' => 'nb'], 
    ['name' => 'The', 'surname' => 'Travel', 'gender' => 'nb'], 

    
];

foreach($users as $user) { 

    if ($user['gender'] == 'male') {
    
        echo 'Buongiorno Sig.'  . $user['name'] . " " . $user['surname']. "\n";

    } elseif (($user['gender'] == 'female')) { 

        echo 'Buongiorno Sig.ra' . ' ' . $user['name'] . " " . $user['surname']. "\n";

    } else { 

        echo 'Buongiorno' . ' ' . $user['name'] . " " . $user['surname']. "\n";

    }
};

// Fine quarto selfwork
?>

