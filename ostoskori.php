<?php session_start(); ?>

<title>OstosKoriTori</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<title>OstosKoriTori</title>
<div id='container'>
<?php include('navbar.php');?>

<h2>OstosKoriTori</h2>

<div class="boxi">

<div>

<img src="kissa.png"><br>
<p><?php echo $_COOKIE['kissa_lkm']?> kissaa</p>

<img src="koira.jpg"><br>
<p><?php echo $_COOKIE['koira_lkm']?> koiraa</p>

<br>
<br>
<a href="clear-basket.php">Tyhjennä kori</a>
</div>

</div>