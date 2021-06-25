<?php 

function getPage(){

   // var_dump($_GET);

    $lesPages['accueil'] = "accueilControleur";
    $lesPages['contact'] = "contactControleur";
    $lesPages['mentions'] = "mentionsLegales";
    $lesPages['a propos'] = "aPropos";
    $lesPages['connexion'] = "connexionControleur";
    $lesPages['mails'] ="mailsControleur";
    $lesPages['inscription']= "inscriptionControleur";


    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = 'accueil';
    } 
    if (isset($lesPages[$page])){
        $contenu = $lesPages[$page];
    }else {
        $contenu = $lesPages['accueil'];
    }

    return $contenu;
}