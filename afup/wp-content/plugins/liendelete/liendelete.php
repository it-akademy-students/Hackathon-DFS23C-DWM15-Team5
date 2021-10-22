<?php 


/*
Plugin Name: liendelete
Plugin URI: http://wordpress.org/plugins/button-delete/button-delete
Description: Ajout 	automatique du lien delete à tous les posts
Author: Charmarke
Version: 1.0.0
Author URI: https://char-kamil.fr/
*/
/*require_once('delete.php');
function liendelete($post)
{
    $liendelete = "<a href='http://localhost/pablo/Rush-Wordpress/donnees-supprimees/' align='left'>Supprimer</a>";
    $liendelete.= $post;
    return $liendelete;
}

add_filter("the_content","liendelete");