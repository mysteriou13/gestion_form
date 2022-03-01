<?php 

class gestion_form{


    function __construct($link){

        $this->form_connection($link);

    }

    function form_connection($link){


        if (!is_user_logged_in()) {
      
            include($link."/wp-content/plugins/gestion_form/form/formconnection.php");
        
      }
    
    }



}

?>