<?php $settings = parse_ini_file('../settings.ini'); ?>
<?php
error_reporting(0);
if(isset($_GET['player']))
{
$my_img = imagecreatefrompng('http://s3.amazonaws.com/MinecraftSkins/'.$_GET['player'].'.png');
$merge = imagecreatefrompng('../Stamps/'.$_GET['type'].'.png');
imagealphablending($my_img, true);
imagesavealpha($my_img, true);
imagealphablending($merge, true);
imagesavealpha($merge, true);
imagepng( $my_img, 'tmp/'.$_GET['player'].'(old).png' );


imagecopy($my_img, $merge, 0, 0, 0, 0, 64, 32);


if(imagepng( $my_img, 'tmp/'.$_GET['player'].'.png' ) == false)
{
$_GET['player'] = '';
}
}
imagedestroy($my_img);
imagedestroy($merge);
?>
<title><?php echo $settings['title']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<div id="shade"></div>
<div id="title">Loading</div>
<center>
<img src="load.gif">
</center>

<meta http-equiv="Refresh" content="3; url=<?php if(empty($_GET['player'])) { echo '../'; } else { echo '../?player='.$_GET['player']; } ?>">

<!-- Footer -->
<div id="footer"><div id="darken"><center><?php echo $settings['footer']; ?></center></div></div>
<!-- End Footer -->