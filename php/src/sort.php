<html lang="ru">
<head>
<title>Drawer</title>
    <link rel="stylesheet" type="text/css"/>
</head>
<body>
<h1>Сортировка вставками</h1>
<?php
    function insert_sort($arr){
        $count = count($arr);
        if ($count <= 1) {
        return $arr;
        }

        for ($i = 1; $i < $count; $i++) {
            $cur_val = $arr[$i];
            $j = $i - 1;

            while (isset($arr[$j]) && $arr[$j] > $cur_val) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $cur_val;
                $j--;
            }
        }

        return $arr;
    }

    function print_array($arr): void {
        echo "<pre>[";
        echo implode(", ", $arr);
        echo "]</pre>";
    }

    if (isset($_GET['array'])){
        $arr = explode(",", $_GET["array"]);
        echo "<p> Исходный массив </p>";
        print_array($arr);
        $arr = insert_sort($arr);
        echo "<p> Полученный массив</p>";
        print_array($arr);
    } else {
        echo "<p> Задайте числа, разделенные запятыми в параметре array, чтобы отсортировать их</p>
        <pre>
            http:localhost:80/sort.php?array=4,2,5,...
        </pre>";
    }
?>

</body>
</html>