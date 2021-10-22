<?php
	/**
	 * Plugin Name: plugin conferences
	 * Description: Affiche la liste des conferences
	 * Version: 1.0.0
	 * Author: moi
	 * License: GPLv2 or later
	 */
	
	function listeConferences () {
		// appel du wpdp obligatoire
		global $wpdb;

		if(isset($_GET['id'])) {
			$wpdb->delete(
				$wpdb->prefix.'conference',
				array(
					'id' => $_GET['id'] 
				),
				array(
					'%d'
				) );
		//return 'Supression ok';
				
				
		} else {
			$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}conference", OBJECT );

			$vu = '';

			$vu .= "<table>";
			$vu .= "<tr>";
			$vu .="<th>Photo</th><th>Nom Prenom</th><th>#</th>";
			
			
			foreach($results as $result) {
//			     $img = $result->image;
//				 $vu .= "Nom : ". $result->nom.'<br>';
//				 $vu .= "Prenom : ". $result->prenom.'<br>';
//				 $vu .= "Titre : ". $result->titre.'<br>';
//				 $vu .= "Description : ". $result->description.'<br>';
//				 $vu .= "Image : "." <img src=".$img." height = '70px' width = '70px'  /><br>";
//		 		 $vu .="<a href='http://localhost/pablo/Rush-Wordpress/conferences-2/?id=".$result->id."'"." >Supprimer</a><br />";
				 
				$vu .="<tr><td>"."<a href='http://localhost/pablo/Rush-Wordpress/une-conference/'><img src='$result->image' height = '40px' width = '40px'  /></a></td>";
				$vu .="<td>$result->nom"." ".$result->prenom."</td>";
				$vu .="<td><a href='http://localhost/pablo/Rush-Wordpress/liste-conferences/?id=".$result->id."'"." >Supprimer</a></td>";
				

				}
				$vu .="</tr></table>";
//			}
	
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
			return $vu;
				}
		
		
			         
}           

    add_shortcode('Conferences' , 'listeConferences');