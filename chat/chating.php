<?php 
	include "../db.php";
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
    <div class="fixed-top">
        <div class="top-menu">
            <div class="d-flex justify-content-between">
                <div>
                    <div style="height:5px;"></div>
                    <a href="../" style="color: black; font-size: 25px; margin-left:15px;">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </div>
                <div>
                    <div style="height:5px;"></div>
                    <a style="color: black; font-size: 23px; margin-left:10px;">
                        박민성
                    </a>
                </div>
                <div>
                    <div style="height:5px;"></div>
                    <a href="../" style="color: black; font-size: 25px; margin-right:20px;">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:60px"></div>

    <div class="container">

        <div style="height:18px"></div>

        <?php
$sql3 = mq("select * from chat");
while($chat = $sql3->fetch_array()){ 
            ?>          
        <div style="height:7px"></div>
        <div class="d-flex justify-content-start">
            <div>
                <?php
			$sql = mq("select * from member where id='oopseong'");
			while($member = $sql->fetch_array()){
		?>
                <div class="profile" style="background-image:url('<?php echo $member['profile_image']; ?>');"></div>
                <?php } ?>
            </div>
            <div>
                <p style="margin-bottom:0; font-size:15px;">박민성</p>
                <div style="height:3px;"></div>
                <div class="message">
                <?php
                   echo $chat['text'];
                ?>
                </div>
                <span style="font-size:10px"><?php echo $chat['date']; ?> <?php echo $chat['time']; ?></span>
            </div>
        </div>
        <?php } ?>
<div class="mt-5"></div>

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
<?php } ?>