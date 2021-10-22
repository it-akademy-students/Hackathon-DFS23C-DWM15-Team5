<?php 


/*
Plugin Name: Post Formulaire 
Plugin URI: http://wordpress.org/plugins/postForm/postForm
Description: Ajout 	d'un post
Author: Charmarke
Version: 1.0.0
Author URI: https://char-kamil.fr/
*/
require_once('captcha.php');
function postForm()
{
    
    $calcul = GenereLeCalcule();
    $content = '';
    $content .= 
    "<form method='POST' action='http://localhost/pablo/Rush-Wordpress/liste-conferences/'>
        <input name='result' type='hidden' value='$calcul[0]'>
        <label style='font-weight:bold;font-family:sans-serif;' for='nom'>Nom*</label>
        <input type='text' style='display:block ; width:100% ; padding:1rem 0.5rem; border:1px solid rgba(0,0,0,0.6)' id='nom' name='nom' placeholder='Entrez votre nom'></input>
        <br>
        <label style='font-weight:bold;font-family:sans-serif;' for='prenom'>Prenom*</label>
        <input type='text' style='display:block ; width:100% ; padding:1rem 0.5rem; border:1px solid rgba(0,0,0,0.6)' id='prenom' name='prenom' placeholder='Entrez votre prénom'></input>
        <br>
        <label style='font-weight:bold;font-family:sans-serif;' for='titre'>titre*</label>
        <input type='text' style='display:block ; width:100% ; padding:1rem 0.5rem; border:1px solid rgba(0,0,0,0.6)' id='titre' name='titre' placeholder='Entrez votre titre'></input>
        <br>
        <label style='font-weight:bold;font-family:sans-serif;' for='description'>description*</label>
        <textarea id='description' style='display:block ; resize: none ; width:100% ; padding:0.5rem; border:1px solid rgba(0,0,0,0.6) ; height:7rem;' name='description'></textarea>
        <br>
        <label style='font-weight:bold;font-family:sans-serif;' for='image'>image*</label>
        <input type='url' style='display:block ; width:100% ; padding:1rem 0.5rem; border:1px solid rgba(0,0,0,0.6)' id='image' name='image' placeholder='charger votre fichier'></input>
        <br>
         <p style='font-weight:bold'>";
        $content .= "Captcha* :   ". $calcul[4]." ".$calcul[3]." ".$calcul[5]. "  = ";
        $content .= "<input name='resultat' type='number'></p>";
        $content .= "<br><br><button style='cursor:pointer;font-weight:bold;font-family:sans-serif; background:blue ; color:white; padding:0.5rem 1rem; border: none;' >Valider</button>
    </form>";
        
    return $content;
}



add_shortcode('postForm' , 'postForm');

?>





