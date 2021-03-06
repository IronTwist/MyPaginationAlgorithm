<?php

/**
 * by Fratean Razvan
 * 
 *work in progress
 */


function numaraPagini($numarElemente, $elPerPage){
    $countPagini = 0;
    for($i = 0; $i < $numarElemente; $i++){
        if($i % $elPerPage == 0 ){
            $countPagini++;
        }
    }

    $pagini = $countPagini;
    return $pagini;
}


function generarePaginareString($data, $elPerPage){

    if(!isset($_GET["p"])){
        $_GET["p"] = 1;
    }

    $numarElemente = count($data);
    $pagini = 0;
    $elementPerPage = $elPerPage;
    $currentPage = $_GET["p"];
    $nextPage = 0;

    $pagini = numaraPagini($numarElemente, $elementPerPage);

    if(isset($_GET["p"])){
        $nextPage = $_GET["p"] + 1;
    }

    if(isset($_GET["p"])){
        $previousPage = $_GET["p"] - 1;
    }

    for($p = 0; $p < $pagini; $p++){
         
        if($currentPage == $p){     //pagina curent 0      2
            echo "Pagina: ". $p + 1;

            $startAfisare = $p * $elementPerPage; //0*2      2*2=4 Inceput afisare
            // echo $startAfisare;
            $endAfisare =$startAfisare + $elementPerPage; //2    4+2=6
            // echo $endAfisare;
    
            while($startAfisare < $endAfisare){
                if(isset($data[$startAfisare]))

                //show data 
                echo "<p>".$data[$startAfisare]."</p>";
    
                $startAfisare += 1;
            }
        }
    }


    //TODO get URL and change for navigation 

    // if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    //      $url = "https://";   
    // else  
    //      $url = "http://";   
 
    // $url.= $_SERVER['HTTP_HOST'];  
    // $url.= $_SERVER['REQUEST_URI'];    



    if($currentPage > 0){
        echo "<a href=\"http://localhost/paginare?p=".$previousPage."\">previousPage</a>"; 
    }
        echo " | ";
    if($currentPage < $pagini - 1){
        echo "<a href=\"http://localhost/paginare?p=".$nextPage."\">nextPage</a>";
    }
}


function generarePaginareObiect($data, $elPerPage){

    if(!isset($_GET["p"])){
        $_GET["p"] = 1;
    }

    $numarElemente = count($data);
    $pagini = 0;
    $elementPerPage = $elPerPage;
    $currentPage = $_GET["p"];
    $nextPage = 0;

    $pagini = numaraPagini($numarElemente, $elementPerPage);

    if(isset($_GET["p"])){
        $nextPage = $_GET["p"] + 1;
    }

    if(isset($_GET["p"])){
        $previousPage = $_GET["p"] - 1;
    }

    for($p = 0; $p < $pagini; $p++){
         
        if($currentPage == $p){     //pagina curent 0      2
            echo "Pagina: ". $p + 1;

            $startAfisare = $p * $elementPerPage; //0*2      2*2=4 Inceput afisare
            // echo $startAfisare;
            $endAfisare =$startAfisare + $elementPerPage; //2    4+2=6
            // echo $endAfisare;
           
            while($startAfisare < $endAfisare){
                if(isset($data[$startAfisare])){
                    echo "<p>Nume: ".$data[$startAfisare]->getNume()." Prenume: ".$data[$startAfisare]->getPrenume()."</p>";
                }
                $startAfisare += 1;
            }
        }
    }

    //
    if($currentPage > 0){
        echo "<a href=\"http://localhost/paginare?p=".$previousPage."\">previousPage</a>"; 
    }
        echo " | ";
    if($currentPage < $pagini - 1){
        echo "<a href=\"http://localhost/paginare?p=".$nextPage."\">nextPage</a>";
    }
}

//Fixed with _GET['p'] page on object page

function generarePaginarePosts($data, $elPerPage){

    if(!isset($_GET["p"])){
        $_GET["p"] = 1;
    }

    $numarElemente = count($data);
    $pagini = 0;
    $elementPerPage = $elPerPage;
    $currentPage = $_GET["p"];  //pag 1
    $nextPage = 0;

    $pagini = numaraPagini($numarElemente, $elementPerPage);

    if(isset($_GET["p"])){
        $nextPage = $_GET["p"] + 1;
    }

    if(isset($_GET["p"])){
        $previousPage = $_GET["p"] - 1;
    }

    for($p = 1; $p <= $pagini; $p++){
         
        if($currentPage == $p){     // 1 == 0
            echo "Pagina: ". $p;
            echo "</br>";

            $startAfisare = ($p-1) * $elementPerPage; 
            // echo $startAfisare;
            $endAfisare =$startAfisare + $elementPerPage; 
            // echo $endAfisare;
           
            while($startAfisare < $endAfisare){

                if(isset($data[$startAfisare])){
                    $post = $data[$startAfisare];
                    echo "</br>";
                    echo "id: ".$post->getId()."</br>";
                    echo "title: ".$post->getTitle()."</br>";
                    echo "content: ".$post->getContent()."</br>";
                    echo "data: ".$post->getDateTime()."</br>";
                }

                $startAfisare += 1;
            }
        }
    }

    //
    if($currentPage > 1){
        echo "<a href=\"http://localhost/paginare?p=".$previousPage."\">previousPage</a>"; 
    }
        echo " | ";
    if($currentPage < $pagini){
        echo "<a href=\"http://localhost/paginare?p=".$nextPage."\">nextPage</a>";
    }
    if ($currentPage != $pagini) {
        echo " | <a href=\"http://localhost/paginare?p=".$pagini."\">lastpage</a>";
    }
}

?>