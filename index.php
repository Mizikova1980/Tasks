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

    function foto($img,$width=450,$height=450){
              echo "<img src=$img width=$width height=$height>";
    
    }
       
    $img='https://www.livekavkaz.ru/uploads/posts/2020-06/1591963235-1jpg.jpg';
    foto($img);

    $img='https://cont.ws/uploads/pic/2020/8/стена.jpg';
    foto($img);

    $img='https://s0.rbk.ru/v6_top_pics/media/img/5/46/756038770746465.jpg';
    
    foto($img);

    $img='images\makar.jpg.jpg';
    $width='500';
    $height='800';
    foto($img,$width,$height);

?>
    </body>
</html>