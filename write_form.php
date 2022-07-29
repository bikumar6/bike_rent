<?
    require_once("login.html");

   if ($mode=="modify")
   {
      $sql = "select * from $table where num=$num";
      $result = mysql_query($sql, $connect);
      $row = mysql_fetch_array($result);

      $item_subject     = $row[subject];
      $item_content     = $row[content];
      $item_file_0 = $row[file_name_0];
      $item_file_1 = $row[file_name_1];
      $item_file_2 = $row[file_name_2];

      $copied_file_0 = $row[file_copied_0];
      $copied_file_1 = $row[file_copied_1];
      $copied_file_2 = $row[file_copied_2];
   }
?>

<?
INCLUDE("db/dbconnect.php");
$query = "select * from user where Id='".$_SESSION['login_user']."'";
$result = mysqli_query($conn,$query);
$irow = mysqli_fetch_array($result);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="no-js">

<head>
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
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="./css/ionicons.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="./css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="./css/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.css">
    <link rel="stylesheet" href="./css/jquery.fancybox.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="./css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="./css/responsive.css">

    <!-- Template Javascript Files
        ================================================== -->
    <!-- modernizr js -->
    <script src="./js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- jquery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- owl carouserl js -->
    <script src="./js/owl.carousel.min.js"></script>
    <!-- bootstrap js -->

    <script src="./js/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="./js/wow.min.js"></script>
    <!-- slider js -->
    <script src="./js/slider.js"></script>
    <script src="./js/jquery.fancybox.js"></script>
    <!-- template main js -->
    <script src="./js/main.js"></script>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.css'>
    <link rel="stylesheet" href="./css/style2.css">

    <!-- template main js -->
    <script src="./js/main.js"></script>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.css'>
    <link rel="stylesheet" href="./css/style2.css">
</head>
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
                        <img src="./images/logo_2.png" alt="">
                    </a>
                </div>
            </div>

            <?
              include("navi.php");
            ?>

        </div>
        </header>
            <section class="global-page-header">
                  <div class="container">
                        <div class="row">
                              <div class="col-md-12">
                                    <div class="block">
                                          <h2>GREETING</h2>
                                          <ol class="breadcrumb">
                                                <li>
                                                      <a href="list.php">
                                                            <h5><b><i class="ion-ios-home"></i>
                                                            GREETING</b>
                                                         </h5>
                                                      </a>
                                                </li>
                                                   <li class="active"><font size = 3px>GREETING EDIT</li>
                                                   </font>
                                          </ol>
                                    </div>
                              </div>
                        </div>
                  </div>

            </section><!--/#Page header-->


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta charset="utf-8">
<link href="./css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="./css/board4.css" rel="stylesheet" type="text/css" media="all">
<script>
  function check_input()
   {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }

      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>

<body>
   <div id="wrap">
     <div id="content">
      <div id="col2">

       <div id="title">
       <img src="./img/title_greet.gif">
       </div>
      <div class="clear"></div>

      <div id="write_form_title">
         <img src="./img/write_form_title.gif">
      </div>
      <div class="clear"></div>
<?
   if($mode=="modify")
   {
?>
      <form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data">
<?
   }
   else
   {
?>
      <form  name="board_form" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data">
<?
   }
?>
      <div id="write_form">
         <div class="write_line"></div>
         <div id="write_row1"><div class="col1">이름 </div><div class="col2"><?= $irow['Name'] ?></div>
<?
   if( $login_user && ($mode != "modify"))
   {
?>
            <div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div>
<?
   }
?>
         </div>
         <meta charset="utf-8">
         <div class="write_line"></div>
         <div id="write_row2"><div class="col1"> 제목   </div>
                              <div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
         </div>
         <div class="write_line"></div>
         <div id="write_row3"><div class="col1"> 내용   </div>
                              <div class="col2"><textarea rows="15" cols="79" name="content"><?=$item_content?></textarea></div>
         </div>
         <div class="write_line"></div>
         <div id="write_row4"><div class="col1"> 이미지파일1   </div>
                              <div class="col2"><input type="file" name="upfile[]"></div>
         </div>
         <div class="clear"></div>
<?    if ($mode=="modify" && $item_file_0)
   {
?>
         <div class="delete_ok"><?=$item_file_0?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="0"> 삭제</div>
         <div class="clear"></div>
<?
   }
?>
         <div class="write_line"></div>
         <div id="write_row5"><div class="col1"> 이미지파일2  </div>
                              <div class="col2"><input type="file" name="upfile[]"></div>
         </div>
<?    if ($mode=="modify" && $item_file_1)
   {
?>
         <div class="delete_ok"><?=$item_file_1?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="1"> 삭제</div>
         <div class="clear"></div>
<?
   }
?>
         <div class="write_line"></div>
         <div class="clear"></div>
         <div id="write_row6"><div class="col1"> 이미지파일3   </div>
                              <div class="col2"><input type="file" name="upfile[]"></div>
         </div>
<?    if ($mode=="modify" && $item_file_2)
   {
?>
         <div class="delete_ok"><?=$item_file_2?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="2"> 삭제</div>
         <div class="clear"></div>
<?
   }
?>
         <div class="write_line"></div>

         <div class="clear"></div>
      </div>

      <div id="write_button"><a href="#"><img src="./img/ok.png" onclick="check_input()"></a>&nbsp;
                        <a href="list.php?table=<?=$table?>&page=<?=$page?>"><img src="./img/list.png"></a>
      </div>
      </form>

   </div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
