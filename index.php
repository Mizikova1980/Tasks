<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Функции: Задача 1 (не очень поняла что с alt делать, в каком виде она выводится на страницу)
    function foto($img,$alt=0,$width=450,$height=450){
              echo "<img src=$img alt=$alt width=$width height=$height>";
    
    }
       
    $img='https://www.livekavkaz.ru/uploads/posts/2020-06/1591963235-1jpg.jpg';
    $alt='Китайская стена';
    foto($img,$alt);

    
    $img='https://s0.rbk.ru/v6_top_pics/media/img/5/46/756038770746465.jpg';
    $width='400';
    $height='600';
    foto($img,$width,$height);
    //Функции: Задача 2
    
    function foto1($img,$alt=0,$width=450,$height=450){
        global $img;    
        echo "<img src=/images/$img alt=$alt width=$width height=$height>";
        }
       
    $img='makar.jpg.jpg';
    foto1($img);

       



?>
    </body>
</html>