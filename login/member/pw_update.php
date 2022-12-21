<meta charset="utf-8" />
<?php

include "../../db.php";
include "../password.php";

$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);

$sql = mq("update member set pw='".$userpw."'");
echo "<script>alert('정보변경이 완료되었습니다.'); history.back();</script>";

?>