<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $d=date("D");
    if($d=="Sat"){
        echo "Today is a $d,pleasehave a nice weekend";
    }
    else{
        echo "Today is $d,have a nice day";
    }
    ?>
</body>
</html>