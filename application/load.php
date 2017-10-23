<?php

class Load {
   function view( $file_name, $data = null ) 
   {
      if( is_array($data) ) {
         extract($data);
      }

	  $user = new User();

      include 'views/' . $file_name;
   }
}



