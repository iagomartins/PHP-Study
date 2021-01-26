<?php
    //Sessions

    session_start();

    $login = "admin";
    $password = "12345";

    //Variables

    $title = "School of Net - PHP Course";
    $name = "Iago";
    $last_name = "Martins";
    $age = 27;
    $email = "iago@bigbangcomunicacao.com.br";

    //Array initialization

    $list_for = array();

    //Add elements inside the array in the first parameter.

    array_push($list_for, "Ben", "Lucas", "Howard", "Leonard", "Bill", "Heather", "Jill", "Leon", "Chris", "Felicity", "Lucy");

    //Associative arrays

    $data = array(
        "title" => "School of Net - Website",
        "link" => "https://www.schoolofnet.com",
        "content" => array(
            array(
                "title" => "Associative Arrays",
                "resume" => "How to create associative arrays in PHP.",
                "text" => "You can iniciate the variable with the 'array()' function then assign a key to each element, like: 'key' => 'value' separed by collons."
            ),
            array(
                "title" => "Numbered Arrays",
                "resume" => "What happens if you don't assign any key to the values of the array.",
                "text" => "By default, PHP array elements are related to the order that they are declared, so if you assign the first element, it will have the key 0."
            ),
            array(
                "title" => "Arrays Type",
                "resume" => "The value inside the elements of the array.",
                "text" => "PHP can store values of multiple types inside an array, you don't have to add only string elements if you initiate it with one."
            )
        )
    );

    //Cookies

    setcookie("user", "Iago Martins");    
?>
<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body bgcolor="#333333">
    <h1 style="margin-top: -20px; text-align: center;"><?= $title; ?></h1>
    <h3><?= $name." ".$last_name; ?></h3>
    <p>Age: <?= $age; ?></p>
    <p>E-mail: <?= $email; ?></p>

    <!-- Sessions Classroom -->

    <h1>Login Status:</h1>

    <?php
    if($login == "admin" && $password == "12345") {
        $_SESSION['login'] = true;
        echo "Success!";
    }
    else {
        echo "Error!";
    }
    ?>

    <a href="secret.php" class="default-link">Get in</a>

    <!-- Loop Classroom -->

    <h1>For Loop</h1>
    <h3>Example:</h3>
    <h5>These elements were inserted in this page with the loop "for".</h5>

    <?php for ($i = 0; $i < sizeof($list_for); $i++) { ?>

        <p>Element: <?= $i ?> - <?= $list_for[$i] ?></p>

    <?php } ?>

    <!-- Arrays Classroom -->

    <h1 class="title-link"><a href="<?= $data['link'] ?>" target="_blank"><?= $data['title'] ?></a></h1>
    <hr>

    <?php foreach ($data['content'] as $key => $value) { ?>
        <h3><?= $value['title'] ?></h3>
        <h5><?= $value['resume'] ?></h5>
        <p><?= $value['text'] ?></p>
        <hr>
    <?php } ?>

    <!-- Cookies Classroom -->

    <h1>Cookies</h1>
    <h3>Example:</h3>

    <p><?= $_COOKIE['user']." " ?>has used a cookie to write his name. Cookies are variables that are stored inside the user browser.</p>

</body>