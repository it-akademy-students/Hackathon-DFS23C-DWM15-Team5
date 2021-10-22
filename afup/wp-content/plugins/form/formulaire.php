<?php 

/**
 * @package formulaire
 * @version 1.0.0
 */
/*
Plugin Name: formulaire
Plugin URI: http://wordpress.org/plugins/form/formulaire
Description: Formulaire de contact
Author: Charmarke
Version: 1.0.0
Author URI: https://char-kamil.fr/
*/

require_once('captcha.php');
//$error = '';
function formulaire()
{
    
    $calcul = GenereLeCalcul();
    $content = '';
    $content .= 
    "<form method='POST' action='http://localhost/pablo/Rush-Wordpress/38-2/?et_fb=1&PageSpeed=off'>
        <input name='result' type='hidden' value='$calcul[0]'>
        <label style='font-weight:bold;font-family:sans-serif;' for='nom'>Nom*</label>
        <input type='text' style='display:block ; width:100% ; padding:1rem 0.5rem; border:1px solid rgba(0,0,0,0.6)' id='nom' name='lastname' placeholder='Entrez votre nom'></input>
        <br>
        <label style='font-weight:bold;font-family:sans-serif;' for='prenom'>Prenom*</label>
        <input type='text' style='display:block ; width:100% ; padding:1rem 0.5rem; border:1px solid rgba(0,0,0,0.6)' id='prenom' name='firstname' placeholder='Entrez votre prénom'></input>
        <br>
        <label style='font-weight:bold;font-family:sans-serif;' for='mail'>E-mail*</label>
        <input type='mail' style='display:block ; width:100% ; padding:1rem 0.5rem; border:1px solid rgba(0,0,0,0.6)' id='mail' name='mail' placeholder='Entrez votre E-mail'></input>
        <br>
        <label style='font-weight:bold;font-family:sans-serif;' for='message'>Message*</label>
        <textarea id='message' style='display:block ; resize: none ; width:100% ; padding:0.5rem; border:1px solid rgba(0,0,0,0.6) ; height:7rem;' name='message'></textarea>
        <br> <p style='font-weight:bold'>";
        $content .= "Captcha* :   ". $calcul[4]." ".$calcul[3]." ".$calcul[5]. "  = ";
        $content .= "<input name='resultat' type='number'></p>";
        $content .= "<br><br><button style='cursor:pointer;font-weight:bold;font-family:sans-serif; background:blue ; color:white; padding:0.5rem 1rem; border: none;' >Valider</button>
    </form>";
        
    return $content;
}



add_shortcode('Formulaire' , 'formulaire');

?>





