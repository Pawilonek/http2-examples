<?php

$headers = [];

$html = '<div class="imageRow">';

for ($i = 1; $i <= 225; $i++) {
    $url = sprintf('/logo/img/image_part_%03d.jpg', $i);
    $html .= \sprintf('<img src="%s">', $url);

    if ($i % 15 === 0) {
        $html .= '</div><div class="imageRow">';
    }
}

$html .= '<div>';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHPers logo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        div.imageRow {
            min-height: 34px;
            overflow: hidden;
        }

        img {
            float: left;
        }

        body {
            height: 100%;
        }

        html {
             height: 100%
        }

        table {
            height: 100%;
            width: 100%;
        }

        .pic {
            border: solid 1px #060028;
            /* background-color: #060028; */
            width: 512px;
            height: 512px;
            margin: auto;
        }
    </style>
</head>
<body>
    <table cellspacing="0" cellpadding="0">
        <tr><td>
            <div class="pic">
                <?= $html ?>
            <div>
        </td></tr>
    </table>
</body>
</html>
