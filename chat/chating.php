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
    <link rel="stylesheet" href="style.css?ver=2">
    <style>
        a {
            text-decoration: none;
        }

        hr {
            color: #5c5c5c;
        }
    </style>
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


    <div style="margin-top:90px"></div>

            <?php
$sql3 = mq("select * from chat");
while($chat = $sql3->fetch_array()){ 
            ?>
        <div class="container ">
        <?php
			$sql = mq("select * from member where id='oopseong'");
			while($member = $sql->fetch_array()){
		?>
            <div class="d-flex justify-content-start ">
            <div class="profile-2"  style="background-image : url('<?php echo $member['profile_image']; ?>');"  ></div>
                <div>
                <?php } ?>
                    
                    <div class="d-flex justify-content-start">
                        <p style="margin-bottom:0; font-size:15px;">
                            <p style="font-size: 18px; margin-bottom: 0;">박민성</p>
                        </div>
                        <div style="height: 2px;"></div>
                        <div class="message-box">     <?php
                   echo $chat['text'];
                ?></div>
                        <p style="font-size: 13px; color: #818181;"><?php echo $chat['date']; ?>
                    <?php echo $chat['time']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>


        <div class="mt-5"></div>
        <form action="send_update.php" method="post">
            <div class="fixed-bottom">
                <div class="send">
                    <div class="container">
                        <div class="d-flex">
                            <div class="p-2 w-100">
                                <input
                                    type="text"
                                    class="send-input"
                                    placeholder="   메세지 입력"
                                    name="message"
                                    required="required">
                            </div>
                            <div class="p-2 flex-shrink-1" style="font-size: 32px;">
                                <button tyle="submit" class="send_btn">
                                    <i class="fa-solid fa-paper-plane" style="color:#A4A4A4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div style="margin-top: 100px"></div>
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