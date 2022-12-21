<?php  
	include "../../db.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/common.css"/>
<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dear for MIN SEONG</title>
</head>
<body>
	<div class="container mt-5">
		<form method="post" action="member_ok.php">
		<center>
        <span style="font-size: 35px;">
            <b>Dear 계정 회원가입</b>
        </span>
		<p>Dear에서 스타의 메세지를 받아보세요.</p>
    </center>
			<div class="mb-3 mt-2">
            <label for="formGroupExampleInput" class="form-label">아이디</label>
            <input type="text" class="form_class" name="userid" placeholder="영어만, 최대 20자" maxlength="20" required>
        </div>
		<div class="mb-3 mt-2">
            <label for="formGroupExampleInput" class="form-label">비밀번호</label>
            <input type="text" class="form_class" name="userpw" placeholder="최소 8자 이상, 대소문자, 특수문자 포함"  minlength="8" required>
        </div>
		<div class="mb-3 mt-2">
            <label for="formGroupExampleInput" class="form-label">이름</label>
            <input type="text" class="form_class" name="name" required>
        </div>
		<div class="mb-3 mt-2">
            <label for="formGroupExampleInput" class="form-label">전화번호</label>
        
            <div class="d-flex flex-row mb-3">
    <div>
    <input type="number" class="form_class" name="adress1"  max="999"  required>
    </div>
    <div>
        -
    </div>
    <div>   
      
    </div>
    <div>
    <input type="number" class="form_class" name="adress2"  max="9999"  required>
    </div>
    <div>
        -
    </div>
    <div>
    <input type="number" class="form_class" name="adress3"  max="9999"  required>
    </div>

</div>
           
        </div>
		<div class="d-grid gap-2 mt-4">
            <button class="btn btn-light btn-lg" style="background-color: #5858FA; color: white;" type="submit">시작하기</button>
        </div>
		</form>
	</div>
	<script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>
</html>