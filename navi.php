<!DOCTYPE html>
<?
session_start();
require_once("login.html");
?>
<style>
.vertical-alignment-helper {
    display:table;
    height: 100%;
    width: 100%;
    pointer-events:none;
}
.vertical-align-center {
    /* To center vertically */
    display: table-cell;
    vertical-align: middle;
    pointer-events:none;
}
.modal-content {
    /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
    width:inherit;
    height:inherit;
    /* To center horizontally */
    margin: 0 auto;
    pointer-events:all;
}
#quick {
position: absolute;
right: 0;
top: 100px;
height: 200px;
z-index: 2;
}
</style>

<nav class="collapse navbar-collapse navbar-right" role="navigation">
    <div class="main-menu">
        <ul class="nav navbar-nav navbar-right">
            <?if(isset($_SESSION['login_user'])){?>
              <!-- quick view-->
              <div id="quick">
                <img src="quickview.jpg" width=50% usemap="#maprec">
                <map name = "maprec">
                  <area shape = "rect" coords="3,3,47,47" href="mypage.html">
                  <area shape = "rect" coords="3,60,47,107" href="basket.html">
                </map>
              </div>
              <!-- /quick view-->
                <li><a href="index.html" >Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="list.php">Greeting</a></li>
                <li><a href="post.html">Post</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="survey.php">Survey</a></li>
                <li><a href="logout.php">Logout</a></li>
              <?
                }
                else{
              ?>
              <li><a href="index.html" >Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="shop.html">Shop</a></li>
              <li><a href="list.php">Greeting</a></li>
              <li><a href="post.html">Post</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="survey.php">Survey</a></li>
              <li><a onclick="$('#myModal').modal()" style="cursor:pointer">Login</a></li>
            <?
            }
            ?>
            <!--<li><a href="registration.html">join</a></li>-->
            <!-- Music Player-->
            <script type="text/javascript" src="http://scmplayer.co/script.js"
            data-config="{'skin':'http://static.tumblr.com/su8juwr/e9Vn0u6eu/miniskin1.css','volume':23,'autoplay':true,'shuffle':true,'repeat':1,'placement':'top','showplaylist':false,'playlist':[{'title':'%uC544%uC774%uC720 - %uC0AC%uB791%uC774 %uC798(feat. %uC624%uD601)','url':'https://www.youtube.com/watch?v=dMn509ddAkc'},{'title':'%uC544%uC774%uC720 - %uBD04, %uC0AC%uB791, %uBC9A%uAF43 %uB9D0%uACE0','url':'https://www.youtube.com/watch?v=ouR4nn1G9r4'},{'title':'%uC81C%uC774%uB808%uBE57 - %uBC14%uB78C%uC774 %uBD88%uC5B4%uC624%uB294 %uACF3','url':'https://www.youtube.com/watch?v=L1voZ_nHSEc'}]}"></script>
            <!-- SCM Music Player script end -->

 </ul>
    </div>
</nav>
