<?php

   
    session_start();  //Siempre que se trabaja con sesiones se debe iniciarlizar
    session_destroy(); //Cerra la sesion
    header("location: ../index.html") /* Redireccionamos a la pagina index.html */
    /* Nota:
    Recordar que index.html e index.php se paresen con la diferencia en que 
    index.php se puede cerrar la sesion 
    
    */

?>


