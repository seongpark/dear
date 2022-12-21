<?php 
	include "db.php";
	if(isset($_SESSION['userid'])){
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Dear for MIN SEONG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-control {
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>
            <b>비밀번호 변경</b>
        </h1>
        <form action="login/member/pw_update.php" method="post">
        <div style="height:9px;"></div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">새 비밀번호</label>
            <input type="text" class="form-control" name="pw" minlength="8" placeholder="8자 이상, 대문자, 특수문자 포함" required>
        </div>

        <div class="d-grid gap-2">
  <button class="btn btn-dark" type="submit">변경</button>
<div class="mt-5"></div>
</div>
    </div>
    </form>
    <div style="height:90px;"></div>

    <div class="fixed-bottom">
        <div class="menu">
            <div class="d-flex justify-content-around">
                <div>
                    <a href="index.php">
                        <i class="fa-regular fa-user" style="font-size:25px;"></i>
                    </a>
                </div>
                <div>
                    <a href="chat.php">
                        <i class="fa-regular fa-comment" style="font-size:25px;"></i>
                    </a>
                </div>
                <div>
                    <a href="etc.php">
                        <i class="fa-solid fa-bars" style="font-size:25px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php 
		}else{
		echo "<script>location.href='login';</script>";
	} ?>
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