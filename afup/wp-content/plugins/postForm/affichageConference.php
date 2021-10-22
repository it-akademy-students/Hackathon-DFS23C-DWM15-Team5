<?php
	/**
	 * Plugin Name: Affichage d'une conférence
	 * Description: Affiche une conférence
	 * Version: 1.0.0
	 * Author: moi
	 * License: GPLv2 or later
	 */
	
	function affichageConference () {


if($_GET) {

			$results = $wpdb->get_var(
				$wpdb->prepare(
					"
            SELECT *
            FROM {$wpdb->prefix}conference
            WHERE id = %d
        ",
					$_GET('id')
				)
            );
            var_dump($results);
		}
       
//		return $results;


foreach($results as $result) {
                     $vu ='';
    			     $img = $result->image;
    				 $vu .= "Nom : ". $result->nom.'<br>';
    				 $vu .= "Prenom : ". $result->prenom.'<br>';
    				 $vu .= "Titre : ". $result->titre.'<br>';
    				 $vu .= "Description : ". $result->description.'<br>';
    				 $vu .= "Image : "." <img src=".$img." height = '70px' width = '70px'  /><br>";
}
        return $vu;
}

add_shortcode('Conference' , 'affichageConference');