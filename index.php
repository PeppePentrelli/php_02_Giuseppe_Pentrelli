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


// ! Inizio Quinto selfwork


$numeri = [10,5,23,45,95,7,98,60,200];
$somma =0;
$accumulatore =0;

echo 'Tutti i numeri sono: ' . "\n"; 

foreach($numeri as $numero) { 

echo $numero . "\n";


};


echo 'I numeri pari sono: ' . "\n" ;

foreach($numeri as $numero) { 

    if ($numero % 2 == 0) {

     $accumulatore++;
      echo $numero . "\n" ; 

      
      $somma = $somma += $numero;
      $divisione = $somma / $accumulatore ;
    };

};

echo 'è la loro media è : ' . $divisione;

// ! Fine Quinto selfwork

// ? Inizio sesto selfowork PHP

echo "\n";

for ($i=1; $i <= 100 ; $i++) { 
 
    if ($i % 3 == 0) {
       
        echo 'PHP' . "\n";
        
    } elseif ($i % 5 == 0) {

echo 'JAVASCRIPT' . "\n";

    } elseif ($i % 3 == 0 && $i % 5 == 0) {

echo 'HACKADEMY' . "\n";

    } else {

        echo $i . " \n";
    };
    
};



// ? Fine sesto selfowork PHP



?>

