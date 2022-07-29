<?
   $table = "free";
   $ripple = "free_ripple";
   require_once('login.html');
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
                    <a href="./index.html">
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
                                  <a href="index.html">
                                      <h5><i class="ion-ios-home"></i>
                                      HOME
                                    </h5>
                                  </a>
                              </li>
                                <li class="active">GREETING</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
            </section><!--/#page-header-->


<meta charset="utf-8">
<link href="./css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="./css/board4.css" rel="stylesheet" type="text/css" media="all">
</head>
<?
   include "./lib/dbconn.php";
   $scale = 15;

    if ($mode=="search")
   {
      if(!$search)
      {
         echo("
            <script>
             window.alert('검색할 단어를 입력해 주세요!');
              history.go(-1);
            </script>
         ");
         exit;
      }
      $sql = "select * from $table where $find like '%$search%' order by num desc";
   }
   else
   {
      $sql = "select * from $table order by num desc";
   }

   $result = mysql_query($sql, $connect);
   $total_record = mysql_num_rows($result); // 전체 글 수

   // 전체 페이지 수($total_page) 계산
   if ($total_record % $scale == 0)
      $total_page = floor($total_record/$scale);
   else
      $total_page = floor($total_record/$scale) + 1;

   if (!$page)                 // 페이지번호($page)가 0 일 때
      $page = 1;              // 페이지 번호를 1로 초기화

   // 표시할 페이지($page)에 따라 $start 계산
   $start = ($page - 1) * $scale;
   $number = $total_record - $start;
?>
<body>
<div id="wrap">
  <div id="content">
   <div id="col2">

      <div id="title">
         <img src="./img/title_greet.gif">
      </div>

      <form  name="board_form" method="post" action="list.php?table=<?=$table?>&mode=search">
      <div id="list_search">
         <div id="list_search1">▷ 총 <?= $total_record ?> 개의 게시물이 있습니다.  </div>
         <div id="list_search2"><img src="./img/select_search.gif"></div>
         <div id="list_search3">
            <select name="find">
                    <option value='subject'>제목</option>
                    <option value='content'>내용</option>
                    <option value='name'>이름</option>
            </select></div>
         <div id="list_search4"><input type="text" name="search"></div>
         <div id="list_search5"><input type="image" src="./img/list_search_button.gif"></div>
      </div>
      </form>
      <div class="clear"></div>

      <div id="list_top_title">
         <ul>
            <li id="list_title1"><img src="./img/list_title1.gif"></li>
            <li id="list_title2"><img src="./img/list_title2.gif"></li>
            <li id="list_title3"><img src="./img/list_title3.gif"></li>
            <li id="list_title4"><img src="./img/list_title4.gif"></li>
            <li id="list_title5"><img src="./img/list_title5.gif"></li>
         </ul>
      </div>

      <div id="list_content">
<?
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysql_data_seek($result, $i);     // 포인터 이동
      $row = mysql_fetch_array($result); // 하나의 레코드 가져오기

     $item_num     = $row[num];
     $item_id      = $row[id];
     $item_name    = $row[name];
     $item_nick    = $row[nick];
     $item_hit     = $row[hit];
    $item_date    = $row[regist_day];
     $item_date = substr($item_date, 0, 10);
     $item_subject = str_replace(" ", "&nbsp;", $row[subject]);

     $sql = "select * from $ripple where parent=$item_num";
     $result2 = mysql_query($sql, $connect);
     $num_ripple = mysql_num_rows($result2);

?>
         <div id="list_item">
            <div id="list_item1"><?= $number ?></div>
            <div id="list_item2"><a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a>
<?
      if ($num_ripple)
            echo " [$num_ripple]";
?>
            </div>
            <div id="list_item3"><?= $item_nick ?></div>
            <div id="list_item4"><?= $item_date ?></div>
            <div id="list_item5"><?= $item_hit ?></div>
         </div>
<?
         $number--;
   }
?>
         <div id="page_button">
            <div id="page_num"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp;
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
      if ($page == $i)     // 현재 페이지 번호 링크 안함
      {
         echo "<b> $i </b>";
      }
      else
      {
         echo "<a href='list.php?table=$table&page=$i'> $i </a>";
      }
   }
?>
         &nbsp;&nbsp;&nbsp;&nbsp;다음 ▶
            </div>
            <div id="button">
               <a href="list.php?table=<?=$table?>&page=<?=$page?>"><img src="./img/list.png"></a>&nbsp;
<?
   if($login_user)
   {
?>
      <a href="write_form.php?table=<?=$table?>"><img src="./img/write.png"></a>
<?
   }
?>
            </div>
         </div> <!-- end of page_button -->
        </div> <!-- end of list content -->

      <div class="clear"></div>
      <br><br><br><br>
   </div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->
<?
include("footer.php");
?>

</body>
</html>
