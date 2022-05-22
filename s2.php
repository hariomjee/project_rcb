<?php

session_start(); 
 // if without execute s1.php we execute s2.php then gives error.

if(isset($_SESSION["id"]))  // check id vairiable is there or not
{
   $t1= $_SESSION["id"];    // accesse the id which is delcare in s1.php

    echo "the value retrived is:",$t1;
}
else{
    echo " the value is not set";

}



?>