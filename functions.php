<?php

//Add Variable d'url for WP in functions.php
function add_query_vars($aVars) 
{
    $aVars[] = "listing_for"; //Nom de la cle de variable à ajouter dans l'url via un lien
    return $aVars;
}
add_filter('query_vars', 'add_query_vars');
