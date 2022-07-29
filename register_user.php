<?php
    extract($_POST);
    $conn = mysqli_connect("127.0.0.1","root","apmsetup","meaningcle");
    $dup = "select * from user where Id='".$Id."'";
    $dup_result = mysqli_query($conn,$dup);
    if(mysqli_num_rows($dup_result)>0){
      echo "이미 사용중인 아이디 입니다.";
      return;
    }
    $data_stream = "'".$Id."','".$Password."','".$Name."','".$Email."','".$PhoneNum."'";
    $query = "insert into user(Id, Password, Name, Email,PhoneNum) values (".$data_stream.")";
    $result = mysqli_query($conn, $query);


    mysqli_close($conn);
?>
