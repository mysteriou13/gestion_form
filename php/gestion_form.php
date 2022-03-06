<?php 

class gestion_form{


    function __construct($link){
        

        $this->form_connection($link);

    }

    function form_connection($link){
        
        $user_login = wp_authenticate($_POST["log"],$_POST['pwd'])->user_login;

          if(!is_user_logged_in()){

             
            include($link."/wp-content/plugins/gestion_form/form/formconnection.php");
               
        }
      
    
    }

    function link_deconnection(){

        session_destroy();

    }


}

?>