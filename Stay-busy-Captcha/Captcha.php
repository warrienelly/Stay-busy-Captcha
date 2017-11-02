<?php
session_start();


if (isset ($_SESSION['captcha']))
{
    unset ($_SESSION['captcha']);
}



// The number of character to be used as image, and characters that would be shuffled.


$characterNumber = 7; //number of character for captcha image.
$characters = array_merge(range(0,9),range("A","B"),range("a","b"));
shuffle($characters);

//getting the random value
$captcha_text = "";
for($i=0;$i<$characterNumber; $i++)
{
    $captcha_text.=$characters[rand(0,count($characters)-1)];//pick a random value from the range of values in $characters,and append to the variable captcha_text
}

//puting the search in the session
$_SESSION['captcha'] = $captcha_text;


//creating an image using gd library.

    header("Content-type: image/png");
    $image= imagecreatetruecolor(200,50)or die('Cannot initialize captcha image');


$angle = rand (0,10);
$font_size= rand(15,20);


$background_color=imagecolorallocate($image,255,255,255);
$text_color=imagecolorallocate($image,58,94,47);
$blurcolor = imagecolorallocate($image, 60, 100, 50);
$line_color=imagecolorallocate($image, 0,0 , 0);


//create a rectangle

imagefilledrectangle($image,0,0,499,49, $background_color);

$font = 'arial.ttf';



//create scattered lines in the image
for($lines=0;$lines<30;$lines++)
{
    imageline($image,rand(0,500),rand(0,50),rand(0,500),rand(0,50),$line_color);
}

//create a text in the image- the repetition is to make the text bold
imagettftext($image, $font_size,$angle, 50, 40 ,$text_color, $font ,$captcha_text);
imagettftext($image, $font_size,$angle, 50, 40 ,$text_color, $font ,$captcha_text);
imagettftext($image, $font_size,$angle, 50, 40 ,$text_color, $font ,$captcha_text);

//make the text blur
imagettftext($image,$font_size,$angle, 52, 42,$blurcolor, $font ,$captcha_text);



//build the image
imagepng($image);
imagedestroy($image);

?>