<?php
	include "../db.php";
    date_default_timezone_set('Asia/Seoul');
    $date = date('Y-m-d');
    $time = date("H:i")
    
    $sql = mq("UPDATE `chat` SET `text`='ss',`date`='ss',`time`='ss' WHERE 1");
    echo "<script>alert('성공');</script>";
?>
