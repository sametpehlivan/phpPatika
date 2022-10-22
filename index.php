<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="view import" content="width=device-width, users-scalable = no,initial-scale = 1.0 ">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $ucgen = function (int $deepth,int $current_depth=0) use (&$ucgen){
            if($deepth == $current_depth) return;
            echo str_repeat("o",$current_depth)."<br>";
            $ucgen($deepth,$current_depth+1);
        };
        $ucgen(15);
    ?>
</body>
</html>