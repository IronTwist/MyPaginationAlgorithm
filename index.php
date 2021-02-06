<?php
    require_once('paginare.php');
    require_once('User.php');

    $elements2 = ["razvan", "andrei", "claudiu", "mihai", "petre", "vasile", "liviu", "george"];

     $user1 = new User("Fratean", "RAzvan");
     $user2 = new User("Fratean2", "RAzvan2");
     $user3 = new User("Fratean3", "RAzvan3");
     $user4 = new User("Fratean4", "RAzvan4");
     $user5 = new User("Fratean5", "RAzvan5");

    $elements = [
        $user1,
        $user2,
        $user3,
        $user4,
        $user5,
    ];

    // var_dump($elements);

    generarePaginareObiect($elements, 4);
    echo "</br>";
    generarePaginareString($elements2, 3);

    
    ?>

    

    

