<?php
    require_once('paginare.php');
    require_once('User.php');
    require_once('Post.php');

    $elements2 = ["razvan", "andrei", "claudiu", "mihai", "petre", "vasile", "liviu", "george"];

     $user1 = new User("name", "RAzvan");
     $user2 = new User("name2", "RAzvan2");
     $user3 = new User("name3", "RAzvan3");
     $user4 = new User("name4", "RAzvan4");
     $user5 = new User("name5", "RAzvan5");

    $elements = [
        $user1,
        $user2,
        $user3,
        $user4,
        $user5,
    ];
    
    echo "</br>";
    echo $elements[2];
    echo "</br>";
    echo "</br>";
    // var_dump($elements);

     // generarePaginareString($elements2, 2);
     echo "</br>";

     $posts = [
         new Post(1, "title", "content here",  date("d.m.y h:i:s a")),
         new Post(2, "title 2", "content here  2",  date("d.m.y h:i:s a")),
         new Post(3, "title 3", "content here  3",  date("d.m.y h:i:s a")),
         new Post(4, "title 4", "content here  4",  date("d.m.y h:i:s a")),
         new Post(5, "title 5", "content here  5",  date("d.m.y h:i:s a")),
         new Post(6, "title 6", "content here  6",  date("d.m.y h:i:s a")),
         new Post(7, "title 7", "content here  7",  date("d.m.y h:i:s a")),
         new Post(8, "title 8", "content here  8",  date("d.m.y h:i:s a")),
         new Post(9, "title 9", "content here  9",  date("d.m.y h:i:s a"))
     ];

    generarePaginarePosts($posts, 4);
    
   

    
    ?>

    

    

