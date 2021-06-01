<?php 

function accueilControleur($twig){
    echo $twig->render('accueil.html.twig', array());
}

function contactControleur($twig){
    echo $twig->render('contact.html.twig', array());
}
function aPropos($twig){
    echo $twig->render('apropos.html.twig', array());
}
function mentionsLegales($twig){
    echo $twig->render('mentions.html.twig', array());
}