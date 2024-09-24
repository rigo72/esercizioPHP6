<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $N = 30;
        for ($i=1;$i<$N;$i++){
            if ($N%$i==0){
                echo"<ul>{$i}</ul>";
            }
        }      
    
    ?>
</body>
</html>