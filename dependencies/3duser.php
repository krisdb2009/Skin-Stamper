<?php
$version = 2.5;
		echo'
		<style>
		body {
		overflow:hidden;
		}
		*{
		transition:.5s;
		-webkit-transition:.5s;
		font-family: "Ubu", sans-serif;
		text-shadow:1px 1px 5px black;
		}
		@font-face {
		font-family: "Ubu";
		font-style: normal;
		font-weight: 300;
		src: url(\'ubu.woff\') format("woff");
}
		#skinpreview {
		margin-top:-86px;
		color:white;
		}
		</style>
		<center><div id="skinpreview"></div></center>
		<script src="three.js"></script>
		<script>
		var defaultImages = [
		"tmp/'.$_GET['player'].'.png"
		];
		</script>
		<script src="main.js"></script>
		';
?>