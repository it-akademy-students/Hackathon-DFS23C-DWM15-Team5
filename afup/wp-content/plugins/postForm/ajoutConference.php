<?php
	/**
	 * Plugin Name: plugin ajout conference
	 * Description: Ajoute une conférence
	 * Version: 1.0.0
	 * Author: moi
	 * License: GPLv2 or later
	 */
	
	function ajoutConference () {



// Ajout d une conférence 
	
	 
    if($_POST) {
        
                    $wpdb->insert(
                        $wpdb->prefix.'conference',
                        array(
                            'nom' => $_POST['nom'],
                            'prenom' => $_POST['prenom'],
                            'titre' => $_POST['titre'],
                            'description' => $_POST['description'],
                            'image' => $_POST['image'],
                            
                        ),
                        
                        array(
                            '%s',
                            '%s',
                            '%s',
                            '%s',
                            '%s',
                        )
                    );
                    
                }
    
    
    
                 
}           

add_shortcode('Ajout' , 'ajoutConference');