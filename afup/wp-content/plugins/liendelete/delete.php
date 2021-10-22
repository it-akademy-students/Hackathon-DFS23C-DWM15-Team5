<?php



function delete(){
    
    if(isset($_POST['Supprimer']) && isset($_POST['post_id'])) {
        //$supprimer_id = $_POST['post_id'];
        global $wpdb;
        $table_name=$wpdb->prefix.'wp_posts';
        $succes = $wpdb->query("DELETE FROM $table_name WHERE post_type = 'post'");
        //$succes = wp_delete_post(post_id, true);
    }
}

function success() {
    if($succes) { 
        $succes = " les données ont été supprimés avec succès";
    }
       
    else {
        $succes = " echec de la suppression";
    }
        
    return $succes;      
}

add_shortcode('Message' , 'success');
add_action('wp_head','delete');