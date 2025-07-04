<?php 
// petit script pour automatiser l'affichage du nom de la page dans l'onglet 
    if (isset($title)){
        return $title ;
    } else {
        return 'Mon site';
    }
?>