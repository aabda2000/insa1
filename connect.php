<?php
    class DBConnect {

      private static $instance;

      public static function getInstance() {

         if (!isset(self::$instance)) {
         
           self::$instance = new PDO("mysql:host=localhost;dbname=mvc", "root", "123",NULL); 

         }//end if

        return self::$instance;

      } //end function


    }// en class

?>
