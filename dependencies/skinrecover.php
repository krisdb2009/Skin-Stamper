<?php $settings = parse_ini_file('../settings.ini'); ?>
<link rel="stylesheet" href="style.css" type="text/css" />
<title><?php echo $settings['title']; ?></title>
<center><br>
<?php

if(empty($_GET['player']))
{
echo '
<div id="title">Skin Recovery!</div>
<br>
<div style="width:300px;height:120px;" id="containtheform">
<div style="border-radius:20px;height:117px;" id="darken">
<h3 style="">Minecraft Username</h3>
<form action="recoveroldskin.php">
<input id="input" type="text" value="'.$settings['DefaultPlayer'].'" name="player"><br><br><br><br><br>
<input style="outline: none;" type="submit" value="Search" class="betbuttonred">
<br><br>
<div style="color:white;">Want to stamp your skin?</div>
<a href="../">Stamp Here!</a>
</form>
</div>
</div>

';
}
else
{
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
echo '
<div style="margin:10px;" id="containtheform">
<div style="border-radius:20px;height:457px;" id="darken">
<h3 style="">Old User Skin</h3>
<form>
<iframe id="ifra" src="3duser.php?player='.$_GET['player'].'(old)"></iframe>
</form>
</div>
</div><br>
<a style="display:inline-block;" href="https://minecraft.net/profile/skin/remote?url='.curPageURL().str_replace('/index.php', '', $_SERVER['PHP_SELF']).'/tmp/'.$_GET['player'].'(old).png"
><input style="display:inline-block;outline: none;" type="submit" value="Keep" class="betbuttonred"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form style="display:inline-block;" action="../"><input style="display:inline-block;outline: none;" type="submit" value="Discard" class="betbuttonred"></form>

';
}
?>



</center>
<!-- Footer -->
<div id="footer"><div id="darken"><center><?php echo $settings['footer']; ?></center></div></div>
<!-- End Footer -->
