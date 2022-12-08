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
</head>
<body>
    <div class="container mt-5">
        <h1>
            <b>설정</b>
        </h1>
        <?php
			$sql = mq("select * from member where id='oopseong'");
			while($member = $sql->fetch_array()){
		?>
        <div style="height:9px;"></div>
        <a href="login/member/logout.php">
            <div class="button-block">
                <div class="container">
                로그아웃
                </div>
            </div>
        </a>
        <div style="height:18px;"></div>
        <a href="edit.php">
            <div class="button-block">
                <div class="container">
                프로필 편집
                </div>
            </div>
        </a>
        <?php
            if($_SESSION['userid'] == "oopseong") {
                echo '<div style="height:18px;"></div>
                <a href="chat/write.php">
                    <div class="button-block">
                        <div class="container">
                        메세지 보내기
                        </div>
                    </div>
                </a>';
            }
		?>
        
        <?php } ?>
    </div>

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