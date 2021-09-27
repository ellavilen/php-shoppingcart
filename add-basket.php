<?php
$kissa_lkm = isset($_COOKIE['kissa_lkm']) ? $_COOKIE['kissa_lkm'] : 0;
$koira_lkm = isset($_COOKIE['koira_lkm']) ? $_COOKIE['koira_lkm'] : 0;

if($_GET['id'] == "kissa") $kissa_lkm++;
if($_GET['id'] == "koira") $koira_lkm++;

setcookie('kissa_lkm', $kissa_lkm);
setcookie('koira_lkm', $koira_lkm);

header("Location: http://" . $_SERVER['HTTP_HOST']
                            . dirname($_SERVER[PHP_SELF]) . '/'
                            . "teeostoksia.php");
?>