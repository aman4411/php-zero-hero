<?php
   //set cookie
   $name = 'CookieName';
   $value = 'CookieValue';
   $expiration = time() + (60*60*24);
   setcookie($name,$value,$expiration);
?>