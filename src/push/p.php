<?php

// header("Link: </push/cat.jpg>; rel=preload; as=image", false);
// header("Link: </push/styles.css>; rel=preload; as=style", false);
// header("Link: </push/scripts.js>; rel=preload; as=script", false);

header('Link: ' .
    '</push/cat.jpg>; rel=preload; as=image,' .
    '</push/styles.css>; rel=preload; as=style,' .
    '</push/scripts.js>; rel=preload; as=script'
);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Push!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/push/styles.css" />
    <script src="/push/scripts.js"></script>
</head>
<body>
    <table cellspacing="0" cellpadding="0">
        <tr><td>
            <div class="pic">
                <img src="/push/cat.jpg" />
            <div>
        </td></tr>
    </table>
</body>
</html>
