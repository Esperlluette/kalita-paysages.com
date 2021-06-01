<?php 

function getPage(){

   // var_dump($_GET);

    $lesPages['acceuil'] = "acceuilControleur";
    $lesPages['contact'] = "contactControleur";
    $lesPages['mentions'] = "mentionsLegales";
    $lesPages['a propos'] = "aPropos";


    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = 'acceuil';
    } 
    if (isset($lesPages[$page])){
        $contenu = $lesPages[$page];
    }else {
        $contenu = $lesPages['acceuil'];
    }

    return $contenu;
}