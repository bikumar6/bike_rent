<?php

  include("db/dbconnect.php");  //DB연결을 위한 config.php를 로드

    session_start();   //세션 시작

    if($_POST["uid"] != ""){  // uid값이 있으면

    $myusername=$_POST["uid"];
    $mypassword=$_POST["upwd"];

    $sql="SELECT * FROM user WHERE Id = '".$myusername."' AND Password = '".$mypassword."'"; //아뒤랑 비번값 대조
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);

     if($count==1)
    {
        $_SESSION['login_user']=$myusername;
        echo "success";
        //header("location: welcome.php");  // welcome.php 페이지로 넘김
    }

    else
    {
        $error="Your Login Name or Password is invalid";
        echo "fail";
    }

}
?>
