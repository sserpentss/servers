<html lang="ru">
<head>
    <title>Drawer</title>
        <link rel="stylesheet" type="text/css"/>
        <!-- <style type="text/css">
        .block { 
            width: 800px; 
            height: 800px;
        }
        </style> -->
</head>
<body>
<h1>Фигуры</h1>

<?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        $size = ($num % 6) + 1;

        $red = ($num % 124) + 60;
        $green = ($num % 124) * 2 - 1;
        $blue = ($num % 124) + 30;
        echo "<div style ='width: ".($size* 150)."px; height: ".((6-$size)*120)."px; background-color: rgb(".($red).", ".($green).", ".($blue).");'></div>";
    }
?>

</body>
</html>