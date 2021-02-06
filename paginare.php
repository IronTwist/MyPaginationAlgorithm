<?php


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


function generarePaginare($data, $elPerPage){

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
                echo "<p>".$data[$startAfisare]."</p>";
    
                $startAfisare += 1;
            }
        }
    }

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
                if(isset($data[$startAfisare]))
                echo "<p>Nume: ".$data[$startAfisare]->getNume()." Prenume: ".$data[$startAfisare]->getPrenume()."</p>";
    
                $startAfisare += 1;
            }
        }
    }

    if($currentPage > 0){
        echo "<a href=\"http://localhost/paginare?p=".$previousPage."\">previousPage</a>"; 
    }
        echo " | ";
    if($currentPage < $pagini - 1){
        echo "<a href=\"http://localhost/paginare?p=".$nextPage."\">nextPage</a>";
    }
}


?>