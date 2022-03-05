<?php 

class gestion_form{


    function __construct($link){
        

        $this->form_connection($link);

    }

    function form_connection($link){
        
        $user_login = wp_authenticate($_POST["log"],$_POST['pwd'])->user_login;

         if(isset($user_login) && !empty($user_login)){
             
            session_start();

             $_SESSION['pseudo'] = $user_login;

         }


          if(!isset($_SESSION['pseudo'])  || (!is_user_logged_in())  ){

             
            include($link."/wp-content/plugins/gestion_form/form/formconnection.php");
               
        }
      
    
    }

    function link_deconnection(){

        session_destroy();

    }


}

?>