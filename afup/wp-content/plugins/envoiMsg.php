
<?php 

/**
 * @package envoiMsg
 * @version 1.0.0
 */
/*
Plugin Name: envoiMsg
Plugin URI: http://wordpress.org/plugins/envoiMsg/
Description: envoie de mail
Author: Charmarke
Version: 1.0.0
Author URI: https://char-kamil.fr/
*/
//$error = '';
function envoiMsg(){
    
    if(isset($_POST['lastname']) && !empty($_POST['lastname'])
     && isset($_POST['firstname']) && !empty($_POST['firstname'])
     && isset($_POST['mail']) && !empty($_POST['mail'])
     && isset($_POST['message']) && !empty($_POST['message'])
     && isset($_POST['resultat']) && !empty($_POST['resultat']))
    {
        $nom = sanitize_text_field($_POST['lastname']);
        $prenom = sanitize_text_field($_POST['firstname']);
        $mail = sanitize_text_field($_POST['mail']);
        $message = sanitize_textarea_field($_POST['message']);
        $resultat = sanitize_text_field($_POST['resultat']);
        $result = sanitize_text_field($_POST['result']);
        
        
        if($result === $resultat){
            wp_mail('c.abdillahikamil@it-students.fr',$nom . $prenom .$mail,$message);
        }else{
            $error = "Le resultat du captcha est incorrect";
            return $error;
        }
        
    }else{
        $error = "Tous les champs ne sont pas remplis";
        return $error;
    }
}


function ErrorMessage()
{
    $error = envoiMsg();
    if(empty($error)){
        $content = 'Votre message a bien été envoyé';
    }else{
        $content = $error;
    }
    
        
    return $content;
}


add_shortcode('ErrorMessage' , 'ErrorMessage');

add_action('wp_head','envoiMsg');

?>