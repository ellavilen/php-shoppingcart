<?php
    session_start();

    $kissa_lkm = 0;
    $koira_lkm = 0;

    setcookie('kissa_lkm', $kissa_lkm);
setcookie('koira_lkm', $koira_lkm);


    header("Location: http://" . $_SERVER['HTTP_HOST']
                            . dirname($_SERVER[PHP_SELF]) . '/'
                            . "ostoskori.php");
?>