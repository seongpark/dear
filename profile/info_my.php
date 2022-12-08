<?php 
	include "../db.php";
	if(isset($_SESSION['userid'])){
?>
<?php
			$sql = mq("select * from member where id='{$_SESSION['userid']}'");
			while($member = $sql->fetch_array()){
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
        body {
            width: 100%;
            height: auto;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo $member['bg_image']; ?>");
            background-size: cover;
        }

        a {
    color: black!important;
    text-decoration: none!important;
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="fixed-bottom">
            <div class="profile_card">
                <div class="container">
                    <div class="fixed-top mt-4">
                        <div class="container">
                        <a href="../" style="color: white;">
                            <i class="fa-solid fa-chevron-left fa-2x"></i>
                        </a>
                        </div>
                    </div>
                    <div style="height:9px;"></div>
                    <div class="d-flex justify-content-start">
                        <div>
                            <div
                                class="profile"
                                style="background-image:url('<?php echo $member['profile_image']; ?>');"></div>
                        </div>
                        <div>
                            <div style="margin-top: 15px;"></div>
                            <h5 style="margin-bottom:0;"><?php echo $member['name']; ?></h5>
                        </div>
                    </div>
                    <br>
                    <div class="intro">
                        <div class="container">
                            <b>소개글</b> | 
                            <?php echo $member['intro']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-around">
                        <div>
                            <a href="../edit.php">
                            <center><i class="fa-solid fa-pen-to-square fa-2x"></i>
                            <div style="height:8px;"></div>
                            <p>프로필 수정</p></center>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
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