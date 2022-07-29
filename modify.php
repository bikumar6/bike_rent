<!DOCTYPE html>
<?
require_once("login.html");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="js/sweetalert.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="images/favicon.png">
<title>환영합니다. Meaningcle 입니다.</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
================================================== -->
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Template CSS Files
================================================== -->
<!-- Twitter Bootstrs CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Ionicons Fonts Css -->
<link rel="stylesheet" href="css/ionicons.min.css">
<!-- animate css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Hero area slider css-->
<link rel="stylesheet" href="css/slider.css">
<!-- owl craousel css -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<!-- template main css file -->
<link rel="stylesheet" href="css/main.css">
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css">

<!-- Template Javascript Files
================================================== -->
<!-- modernizr js -->
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<!-- jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- owl carouserl js -->
<script src="js/owl.carousel.min.js"></script>
<!-- bootstrap js -->

<script src="js/bootstrap.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- slider js -->
<script src="js/slider.js"></script>
<script src="js/jquery.fancybox.js"></script>
<!-- template main js -->
<script src="js/main.js"></script>
  </head>
  <?
  require_once("db/dbconnect.php");
  $query = "select * from user where Id='".$_SESSION['login_user']."'";
  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($result);

  ?>

  <body>
    <!--
   ==================================================
   Header Section Start
   ================================================== -->
   <header id="top-bar" class="navbar-fixed-top animated-header">
       <div class="container">
           <div class="navbar-header">
               <!-- responsive nav button -->
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <!-- /responsive nav button -->
               <!-- logo -->
               <div class="navbar-brand">
                   <a href="index.html">
                       <img src="images/logo_2.png" alt="">
                   </a>
               </div>
               <!-- /logo -->
           </div>
           <!-- main menu -->
           <?
           include("navi.php");
           ?>
           <!-- /main nav -->
       </div>
   </header>

   <!--
   ==================================================
       Global Page Section Start
   ================================================== -->
   <section class="global-page-header">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="block">
                       <h2>information modification</h2>
                       <ol class="breadcrumb">
                           <li>
                               <a href="index.html">
                                   <i class="ion-ios-home"></i>
                                   Home
                               </a>
                           </li>
                           <li class="active">Information Modification</li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
   </section>
      <article class="container">
        <div class="page-header">
          <h1>회원정보 수정</h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label for="InputId">아이디</label>
              <input type="text" class="form-control" id="Id" value="<?= $row['Id'] ?>" disabled="disabled">
            </div>

            <div class="form-group">
              <label for="InputPassword1">비밀번호</label>
              <input type="password" class="form-control" id="Password" placeholder="비밀번호" value="<?= $row['Password'] ?>">
            </div>

            <div class="form-group">
              <label for="InputPassword2">비밀번호 확인</label>
              <input type="password" class="form-control" id="Password2" placeholder="비밀번호 확인" value="<?= $row['Password'] ?>">
              <p class="help-block">비밀번호 확인을 위해 다시 한번 입력해 주세요</p>
            </div>
            <div class="form-group">
              <label for="username">이름</label>
              <input type="text" class="form-control" id="Name" value="<?= $row['Name'] ?>" disabled="disabled">
            </div>

			<div class="form-group">
              <label for="InputEmail">휴대폰번호</label>
              <input type="text" class="form-control" id="PhoneNum" placeholder="휴대폰번호를 입력해 주세요" value="<?= $row['PhoneNum'] ?>">
            </div>

            <div class="form-group">
              <label for="InputEmail">이메일</label>
              <input type="email" class="form-control" id="Email" placeholder="이메일 주소를 입력해 주세요" value="<?= $row['Email'] ?>">
            </div>

            <div class="form-group text-center">
              <button type="submit" class="btn btn-info" id="modify">수정완료<i class="fa fa-check spaceLeft"></i></button>
              <button type="submit" class="btn btn-warning" onclick="location.href='mypage.html'">수정취소<i class="fa fa-times spaceLeft"></i></button>
            </div>
        </div>

      </article>


      <script>

        $("#modify").on("click",function(){

          if($("#Password").val()==$("#Password2").val() && $("#Password").val()!=""){
              $.ajax({
                url:"modification.php",//데이터를 전송할 파일
                type:"POST",//전송 방식
                data:{//보낼 데이터 key:value형식의 맵
                  Id:$("#Id").val(),
                  Password:$("#Password").val(),
                  Name:$("#Name").val(),
                  PhoneNum:$("#PhoneNum").val(),
                  Email:$("#Email").val()
                },
                success: function(data){//ajax전송 후 성공 응답을 받았을 시, 이때 data는 대상 php파일에서 echo로 출력한 값
                  console.log(data);
                  swal({
                    title: "수정이 완료되었습니다.",
                    type: "success"
                  },
                  function(){location.href="membership.html"});
                },
            error: function(){
                swal("에러 발생!","잠시후 다시 시도해 주세요.","error");
              }
            });
          }
          else {
            swal({
              title: "비밀번호를 다시 확인해주세요.",
              type: "error"
            });
          }
          });
      </script>


  </body>
</html>
