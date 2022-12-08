<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php 
    include "../db.php";
    if(isset($_SESSION['userid'])){

    if($_SESSION['userid'] = "oopseong") {
        
    }else{
        echo '<script>alert("접근 권한이 없습니다.");history.back();</script>';
    }
?>
<?php
$sql3 = mq("select * from chat");
while($chat = $sql3->fetch_array()){ 
            ?>          
                 <?php
                   echo $chat['text'];
                ?>
            <?php } ?>

<form action="chat_update.php" method="post">
    <input type="text" name="content">
    <button type="submit">보내기</button>
</form>
<?php 
        }else{
        echo "<script>location.href='login';</script>";
    } ?>
