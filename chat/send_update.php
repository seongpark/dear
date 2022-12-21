<?php 
	include "../db.php";
    date_default_timezone_set('Asia/Seoul');

    $writer = $_SESSION['userid'];
    $date = date('Y-m-d');
    $time = date("H:i");
    $message = $_POST['message'];

    $sql = mq("insert into chat_receive(chat,writer,date,time) values('".$message."','".$writer."','".$date."','".$time."')");
    echo "<script>alert('답장이 전송되었습니다. (답장은 표시되지 않습니다.)'); history.back();</script>";
?>