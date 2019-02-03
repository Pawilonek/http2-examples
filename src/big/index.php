<?php

$response = '';
$headers = [];

for ($i = 1; $i < 30; $i++) {
    $url = \sprintf('/big/wall/%s.jpg', $i);

    $images .= \sprintf('<div><img src="%s"></div>', $url);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Big images</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
    <style>
        img {
            max-width: 100%;
            max-height: 100%;
        }

        div {
            float: left;
            width: 200px;
            height: 100px;
            margin: 10px;
            text-align: center;
        }

    </style>
</head>
<body>
    
    <?= $images ?>    

</body>
</html>