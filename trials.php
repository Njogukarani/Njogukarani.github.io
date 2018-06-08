<!DOCTYPE html>
<html>
<head>
	<title>Trials</title>
</head>
<body>	
	<?php
// Random Image With Link
// https://getbutterfly.com/
//
// Usage:
//
// Save this file as ads.php and use the include function to call it inside your web site

function display_random_img($array) {
    $key = rand(0 , count($array) -1);
    $link_url = $array[$key]['url'];
    $alt_tag = $array[$key]['alt'];
    $random_img_url = $array[$key]['img_url'];
    list($img_width, $img_height) = getimagesize($random_img_url);
    return "<a href=\"$link_url\"><img src=\"$random_img_url\" width=\"$img_width\" height=\"$img_height\" alt=\"$alt_tag\" /></a>";
}

// Edit the following values accordingly
$ads_array = array(
    array(
        'url' => 'http://www.google.com/',
        'alt' => 'Google',
        'img_url' => 'images_1.png'
    ),
    array(
        'url' => 'http://www.yahoo.com/',
        'alt' => 'Yahoo!',
        'img_url' => 'images_2.png'
    ),
    array(
        'url' => 'http://www.msn.com/',
        'alt' => 'MSN',
        'img_url' => 'images_3.png'
    )
);
$ads_array_1 = array( // add or remove accordingly
    array(
        'url' => 'http://www.google.com/',
        'alt' => 'Google',
        'img_url' => 'images_1.png'
    ),
    array(
        'url' => 'http://www.yahoo.com/',
        'alt' => 'Yahoo!',
        'img_url' => 'images_2.png'
    ),
    array(
        'url' => 'http://www.msn.com/',
        'alt' => 'MSN',
        'img_url' => 'images_3.png'
    )
);

echo display_random_img($ads_array);
echo display_random_img($ads_array_1); // add or remove accordingly
?>
</body>
</html>