
<?php

    function foto($img,$alt=0,$width=450,$height=450){
              echo "<img src=$img alt=$alt width=$width height=$height>";
    
    }
     
    
    //Функции: Задача 2
    
    function foto1($img,$alt=0,$width=450,$height=450){
        global $img;    
        echo "<img src=/images/$img alt=$alt width=$width height=$height>";
        }
       
    