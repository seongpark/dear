<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
        <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<style>
</style>
</head>
<div class="container mt-5">
<?php 
    include "../db.php";
    if(isset($_SESSION['userid'])){

    if($_SESSION['userid'] = "oopseong") {
        
    }else{
        echo '<script>alert("접근 권한이 없습니다.");history.back();</script>';
    }
?>
<form action="chat_update.php" method="post">
<textarea id="summernote" name="content" minlength="15" required></textarea>
    <button type="submit" class="btn btn-dark">보내기</button>
<br><br>
<h5>보낸 메세지</h5>
<?php
$sql3 = mq("select * from chat");
while($chat = $sql3->fetch_array()){ 
            ?>          
                 <?php
                   echo $chat['text']."<hr>";
                ?>
            <?php } ?>

            <h5>받은 메세지</h5>
<?php
$sql4 = mq("select * from chat_receive");
while($chat2 = $sql4->fetch_array()){ 
            ?>          
                 <?php  
                   echo $chat2['chat'];
                ?>
                <div id="passwordHelpBlock" class="form-text">
 <?php  echo $chat2['date']." ".$chat2['time']; ?>
</div>
<hr>
            <?php } ?>



</form>
<?php 
        }else{
        echo "<script>location.href='login';</script>";
    } ?>

</div>



  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>