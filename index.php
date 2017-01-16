<?php $version = '1.1'; ?>
<?php $settings = parse_ini_file('settings.ini'); ?>
<link rel="stylesheet" href="dependencies/style.css" type="text/css" />
<title><?php echo $settings['title']; ?></title>
<center><br>
<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"];
 }
 return $pageURL;
}


if(empty($_GET['player']))
{
echo '
<div id="title">'.$settings['title'].'</div>
<br>
<div style="width:300px;height:220px;" id="containtheform">
<div style="border-radius:20px;height:217px;" id="darken">
<h3 style="">Minecraft Username</h3>
<form action="dependencies/buildskins.php">
<input id="input" type="text" value="'.$settings['DefaultPlayer'].'" name="player"><br><br>
<h3>Stamp Type</h3>
<select name="type">';

$Stampsdot = scandir('Stamps'); // Or any other directory
$Stamps = array_diff($Stampsdot, array('.', '..'));
foreach($Stamps as $stamp)
{
  $stamp = str_replace('.png', "", $stamp);
  if($stamp == $settings['DefaultStamp']) { $selected = 'selected="selected"'; } else { $selected = ''; }
  echo '<option '.$selected.' value="'.$stamp.'">'.$stamp.'</option>';
}
  
echo '  
</select>
<br><br><br><br><br>
<input style="outline: none;" type="submit" value="Stamp" class="betbuttonred">
<br><br>
<div style="color:white;">Want to recover your old skin?</div>
<a href="dependencies/skinrecover.php">Recover Here!</a>
</form>
</div>
</div>

';
}

?>
<?php
if(isset($_GET['player']))
{
echo '
<div style="margin:10px;" id="containtheform">
<div style="border-radius:20px;height:457px;" id="darken">
<h3>New User Skin</h3>
<iframe id="ifra" src="dependencies/3duser.php?player='.$_GET['player'].'"></iframe>
</div>
</div>

<div style="margin:10px;" id="containtheform">
<div style="border-radius:20px;height:457px;" id="darken">
<h3 style="">Old User Skin</h3>
<form>
<iframe id="ifra" src="dependencies/3duser.php?player='.$_GET['player'].'(old)"></iframe>
</form>
</div>
</div>
<br><br>
<a style="display:inline-block;" href="https://minecraft.net/profile/skin/remote?url='.curPageURL().str_replace('/index.php', '', $_SERVER['PHP_SELF']).'/dependencies/tmp/'.$_GET['player'].'.png"
><input style="display:inline-block;outline: none;" type="submit" value="Keep" class="betbuttonred"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form style="display:inline-block;" action="./"><input style="display:inline-block;outline: none;" type="submit" value="Discard" class="betbuttonred"></form><br><br><br><br><br>
';
}

?>




</center>
<!-- Footer -->
<div id="footer"><div id="darken"><center><?php echo $settings['footer']; ?></center></div></div>
<!-- End Footer -->

<?php
//This guy here is important for me... I use it to collect data on how many hits all my code gets! Yay for stats. Please don't erase it ='( I will cry..
//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo @file_get_contents('http://belowaverage.tk/PhoneHome/index.php?url='.$actual_link.'&version='.$version.'&product=Skin%20Stamper');
//This of course is the most important part of the whole entire code in the world. It simply closes the php file with a happy ending.
?>
