
 <?php
function displayRandomPhotoArea() 
{

	$textAreas = array("Besti saðurinn fyrir allar þínar myndir", "Ertu með myndir ? við geymum þær");

	$randomNumbers = array_rand($textAreas);
	$randomText = $textAreas[$randomNumbers];

    $photoAreas = array("http://24.media.tumblr.com/ccb268832580ac12951828a1c179de69/tumblr_mo2xbk8JUK1st5lhmo1_1280.jpg", "https://s3.amazonaws.com/static.carthrottle.com/workspace/uploads/posts/2015/04/mpqnsiz-5533f3d1371ca.jpg");

    $randomNumber = array_rand($photoAreas);
    $randomImage = $photoAreas[$randomNumber];

    echo '	<center><h1>'.$randomText.'</h1></center>

    <img src='.$randomImage .' width="100%" height="800 px">';
}

displayRandomPhotoArea();
?>