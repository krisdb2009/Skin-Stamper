<?php $settings = parse_ini_file('../settings.ini'); ?>
<?php
if(file_exists('tmp/'.$_GET['player'].'(old).png') == false)
{
$_GET['player'] = '';
}
?>
<title><?php echo $settings['title']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<div id="shade"></div>
<div id="title">Loading</div>
<center>
<img src="load.gif">
</center>

<meta http-equiv="Refresh" content="3; url=<?php if(empty($_GET['player'])) { echo './skinrecover.php'; } else { echo './skinrecover.php?player='.$_GET['player']; } ?>">

<!-- Footer -->
<div id="footer"><div id="darken"><center><?php echo $settings['footer']; ?></center></div></div>
<!-- End Footer -->