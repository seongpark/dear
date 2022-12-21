<?php
	include "../db.php";
    date_default_timezone_set('Asia/Seoul');

    $date = date('Y-m-d');
    $time = date("H:i");
    $content = $_POST['content'];

    $sql = mq("insert into chat(text,date,time) values('".$content."','".$date."','".$time."')");
    echo "<script>alert('성공'); history.back();</script>";
?>
