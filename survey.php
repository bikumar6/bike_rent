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
    <link rel="stylesheet" href="./css/ionicons.miFn.css">
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


                <!-- /logo -->
            </div>
            <!-- main menu -->
            <?
              include("./navi.php");
            ?>
            <!-- /main nav -->
        </div>
        </header>
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Survey</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Survey</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
            </section><!--/#page-header-->
<section>
  <link rel="stylesheet" href="./css/survey.css" type="text/css">
  <script>
      function update()
      {
        var vote;
        var length = document.survey_form.composer.length;

        for (var i=0; i<length; i++)
        {
           if (document.survey_form.composer[i].checked == true)
           {
                vote= document.survey_form.composer[i].value;
                break;
           }
        }

        if (i == length)
        {
           alert("문항을 선택해주세요!");
           return;
        }

        window.open("update.php?composer="+vote , "설문조사",
              "top=100,left=500,width=350,height=320, status=no, scrollbars=no");
    }

  	  function result()
    {

         window.open("result.php" , "설문조사",
              "top=100,left=500,width=350,height=320, status=no, scrollbars=no");
    }
</script>

<body>
   <br><br>
  <form name=survey_form method=post >
    <table border=0 cellspacing=0 cellpdding=0 width=300px height =300px align='center'>
      <input type=hidden name=kkk value=100>
        <tr height=40>
          <td  align = center><font size = "4px" color = "black"><b>※ 홈페이지 만족도 조사 ※</b><td></font>
        </tr><tr></tr>
        <tr height=1 bgcolor=#cccccc><td></td></tr>
       <tr height=7><td></td></tr>

       <tr><td align = center ><input type=radio name='composer' value='ans1'><font  size = "3px" color = "black">&nbsp;1. 매우좋음</td></tr></font>
       <tr height=5><td></td></tr>
       <tr><td align = center ><input type=radio name='composer' value='ans2' ><font size = "3px" color = "black">&nbsp;2. 좋음</td></tr></font>
       <tr height=5><td></td></tr>
       <tr><td align = center ><input type=radio name='composer' value='ans3' ><font size = "3px" color = "black">&nbsp;3. 보통</td></tr></font>
       <tr height=5><td></td></tr>
       <tr><td align = center ><input type=radio name='composer' value='ans4' ><font size = "3px" color = "black">&nbsp;4. 나쁨</td></tr></font>
       <tr height=7><td></td></tr>
       <tr height=1 bgcolor=#cccccc><td></td></tr>
       <tr>
       <tr height=7><td></td></tr>
       <tr>
         <td align=middle><img src="./img/b_vote.gif" border="0" style='cursor:hand'
            onclick=update()></a>
           <img src="./img/b_result.gif" border="0"  style='cursor:hand'
               onclick=result()></a></td></tr>
    </table>
  </form>
</body>
</setion>

</html>
