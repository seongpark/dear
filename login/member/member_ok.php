17 lines (14 sloc)  620 Bytes

<?php
	include "../../db.php";
	include "../password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$adress = $_POST['adress1'].$_POST['adress2'].$_POST['adress3'];
	$profile = "https://i.ibb.co/Jknj97C/profile.png";
	$intro = "소개글을 입력해주세요.";
	$bg = "https://i.ibb.co/JpyxzmM/758a9e34ecfb73f910970655f9ec4221.jpg";

	$id_check = mq("select * from member where id='$userid'");
		$id_check = $id_check->fetch_array();
		if($id_check >= 1){
			echo "<script>alert('중복된 아이디입니다.');history.back();</script>";
		}else{
			$sql = mq("insert into member (id,pw,name,adress,profile_image,intro,bg_image) values('".$userid."','".$userpw."','".$username."','".$adress."','".$profile."','".$intro."','".$bg."')");
			echo "<script>alert('가입 성공');</script><meta http-equiv='refresh' content='0 url=../../' />";
		}


?>