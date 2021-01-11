<?php 
    //Variables

    $title = "School of Net - Curso";
    $name = "Iago";
    $last_name = "Martins";
    $age = 27;
    $email = "iago@bigbangcomunicacao.com.br";

    //Array initialization

    $list_for = array();

    //Add elements inside the array in the first parameter.

    array_push($list_for, "Ben", "Lucas", "Howard", "Leonard", "Bill", "Heather", "Jill", "Leon", "Chris", "Felicity", "Lucy");
?>

<body>
    <h1><?= $title; ?></h1>
    <h3><?= $name." ".$last_name; ?></h3>
    <p>Age: <?= $age; ?></p>
    <p>E-mail: <?= $email; ?></p>

    <!-- Aulas Loop -->

    <h1>For Loop</h1>
    <h3>Example:</h3>

    <?php for ($i=0; $i < sizeof($list_for); $i++) { ?>
        
        <p>Element: <?= $i ?> - <?= $list_for[$i] ?></p>

    <?php } ?>

</body>