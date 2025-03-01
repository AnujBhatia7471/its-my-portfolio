<?php 

   if(mysqli_connect("localhost:3308","root","","brs"))
   {
    echo "successfuly made connection";
   }
    else {
        echo "not made";
    }
?>