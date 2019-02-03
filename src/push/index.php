<?php

function pushImage($uri) {
    header("Link: <{$uri}>; rel=preload; as=image", false);
    // header(“Link: </css/styles.css>; rel=preload; as=style”);

}

$response = '';
$headers = [];

for ($i = 1; $i < 30; $i++) {
    $url = \sprintf('/img/%s.jpg', $i);

    $headers[] = \sprintf('<%s>; rel=preload; as=image', $url);
    // pushImage($url);

    $response .= \sprintf('<img src="%s">', $url);
}

// header('Link: ' . implode($headers, ', '));

echo $response;
