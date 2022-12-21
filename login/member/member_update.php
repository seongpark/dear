<meta charset="utf-8" />
<?php

include "../../db.php";
include "../password.php";
$username = $_POST['name'];
$adress = $_POST['adress'];
$profile = $_POST['profile'];
$bg = $_POST['bg'];
$intro = $_POST['intro'];

$sql = mq("update member set name='".$username."', adress='".$adress."',profile_image='".$profile."',bg_image='".$bg."',intro='".$intro."' where id='".$_SESSION['userid']."'");
echo "<script>alert('정보변경이 완료되었습니다.'); history.back();</script>";

?>