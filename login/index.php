<?php   include "../db.php"; ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Dear Account</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
    <div class="mt-5"></div>
    <center>
        <span style="font-size: 35px;">
            <b>Dear Account</b>
        </span>
    </center>
    <div class="container">
	<form method="post" action="member/login_ok.php">
        <div class="mb-3 mt-5">
            <label for="formGroupExampleInput" class="form-label">아이디</label>
            <input type="text" class="form_class" name="userid" >
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">비밀번호</label>
            <input type="password" class="form_class" name="userpw" >
        </div>
        <div class="d-grid gap-2 mt-4">
            <button class="btn btn-light btn-lg" style="background-color: #5858FA; color: white;" type="submit">로그인</button>
        </div>
		<div class="fixed-bottom mb-4">
			<center>
				<a href="member/member.php" style="color: black; text-decoration-line:none;">회원가입</a>
			</center>
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