<!DOCTYPE html>
<?
	 require_once("login.html");
?>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="./images/favicon.png">
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
    <!-- animate css -->
      <link rel="stylesheet" href="./css/ionicons.min.css">
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
    <script src="./js/jquery.fancybox.js"></script>
    <script src="./js/slider.js"></script>
    <!-- template main js -->
    <script src="./js/main.js"></script>
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
                    <a href="./index.html">
                        <img src="./images/logo_2.png" alt="">
                    </a>
                </div>
                <!-- /logo -->
            </div>

            <?
            include("navi.php");
            ?>


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
                        <h2>Greeting</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="list.php">
                                    <h5><i class="ion-ios-home"></i>
                                    GREETING
                                  </h5>
                                </a>
                            </li>
                              <li class="active"><font size = 3px>GREETING VIEW</li>
                              </font>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/#Page header-->
<?
   include "./lib/dbconn.php";

   $sql = "select * from $table where num=$num";
   $result = mysql_query($sql, $connect);
  $row = mysql_fetch_array($result);

   $item_num     = $row[num];
   $item_id      = $row[id];
   $item_name    = $row[name];
     $item_nick    = $row[nick];
   $item_hit     = $row[hit];

   $image_name[0]   = $row[file_name_0];
   $image_name[1]   = $row[file_name_1];
   $image_name[2]   = $row[file_name_2];
   $image_copied[0] = $row[file_copied_0];
   $image_copied[1] = $row[file_copied_1];
   $image_copied[2] = $row[file_copied_2];

    $item_date    = $row[regist_day];
   $item_subject = str_replace(" ", "&nbsp;", $row[subject]);
   $item_content = $row[content];
   $is_html      = $row[is_html];

   if ($is_html!="y")
   {
      $item_content = str_replace(" ", "&nbsp;", $item_content);
      $item_content = str_replace("\n", "<br>", $item_content);
   }

   for ($i=0; $i<3; $i++)
   {
      if ($image_copied[$i])
      {
         $imageinfo = GetImageSize("./free/data/".$image_copied[$i]);
         $image_width[$i] = $imageinfo[0];
         $image_height[$i] = $imageinfo[1];
         $image_type[$i]  = $imageinfo[2];

         if ($image_width[$i] > 785)
            $image_width[$i] = 785;
      }
      else
      {
         $image_width[$i] = "";
         $image_height[$i] = "";
         $image_type[$i]  = "";
      }
   }
   $new_hit = $item_hit + 1;
   $sql = "update $table set hit=$new_hit where num=$num";
   mysql_query($sql, $connect);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<link href="./css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="./css/board4.css" rel="stylesheet" type="text/css" media="all">
<script>
   function check_input()
   {
      if (!document.ripple_form.ripple_content.value)
      {
         alert("내용을 입력하세요!!");
         document.ripple_form.ripple_content.focus();
         return;
      }
      document.ripple_form.submit();
    }

    function del(href)
    {
        if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                document.location.href = href;
        }
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

    <div id="view_comment"> &nbsp;</div>
      <div id="view_title">
         <div id="view_title1"><?= $item_subject ?></div><div id="view_title2"><?= $item_nick ?> | 조회 : <?= $item_hit ?>
                               | <?= $item_date ?> </div>
      </div>

      <div id="view_content">
<?
   for ($i=0; $i<3; $i++)
   {
      if ($image_copied[$i])
      {
         $img_name = $image_copied[$i];
         $img_name = "./free/data/".$img_name;
         $img_width = $image_width[$i];

         echo "<img src='$img_name' width='$img_width'>"."<br><br>";
      }
   }
?>
         <?= $item_content ?>
      </div>

      <div id="ripple">
<?
       $sql = "select * from free_ripple where parent='$item_num'";
       $ripple_result = mysql_query($sql);

      while ($row_ripple = mysql_fetch_array($ripple_result))
      {
         $ripple_num     = $row_ripple[num];
         $ripple_id      = $row_ripple[id];
         $ripple_nick    = $row_ripple[nick];
         $ripple_content = str_replace("\n", "<br>", $row_ripple[content]);
         $ripple_content = str_replace(" ", "&nbsp;", $ripple_content);
         $ripple_date    = $row_ripple[regist_day];
?>
         <div id="ripple_writer_title">
         <ul>
         <li id="writer_title1"><?=$ripple_nick?></li>
         <li id="writer_title2"><?=$ripple_date?></li>
         <li id="writer_title3">
            <?
               if($login_user=="admin" || $login_user==$ripple_id)
                   echo "<a href='delete_ripple.php?table=$table&num=$item_num&ripple_num=$ripple_num'>[삭제]</a>";
           ?>
         </li>
         </ul>
         </div>
         <div id="ripple_content"><?=$ripple_content?></div>
         <div class="hor_line_ripple"></div>
<?
      }
?>
         <form  name="ripple_form" method="post" action="insert_ripple.php?table=<?=$table?>&num=<?=$item_num?>">
         <div id="ripple_box">
            <div id="ripple_box1"><img src="./img/title_comment.gif"></div>
            <div id="ripple_box2"><textarea rows="5" cols="65" name="ripple_content"></textarea>
            </div>
            <div id="ripple_box3"><a href="#"><img src="./img/ok_ripple.gif"  onclick="check_input()"></a></div>
         </div>
         </form>
      </div> <!-- end of ripple -->

      <div id="view_button">
            <a href="list.php?table=<?=$table?>&page=<?=$page?>"><img src="./img/list.png"></a>&nbsp;
<?
   if($login_user && ($login_user=$item_id))
   {
?>
            <a href="write_form.php?table=<?=$table?>&mode=modify&num=<?=$num?>&page=<?=$page?>"><img src="./img/modify.png"></a>&nbsp;
            <a href="javascript:del('delete.php?table=<?=$table?>&num=<?=$num?>')"><img src="./img/delete.png"></a>&nbsp;
<?
   }
?>
<?
   if($login_user)
   {
?>
            <a href="write_form.php?table=<?=$table?>"><img src="./img/write.png"></a>
<?
   }
?>
      </div>
      <div class="clear"></div>

   </div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->
<br><br>
<?
include("footer.php");
?>


</body>
</html>
