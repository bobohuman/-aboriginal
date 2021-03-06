<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <title>原住民遊戲</title>
  <meta charset="utf-8">
  <meta name="author" content="裴鼎軒, 李柏村, 吳佳琪">
  <meta name="keywords" content="原住民文化介紹, 原住民年代表, 原住民小遊戲">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/jquery.eeyellow.Timeline.css">
  <link rel="stylesheet" type="text/css" href="http://www.jqueryscript.net/css/jquerysctipttop.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <style>
    .back-to-top {
      display: none;
      position: fixed;
      bottom: 2em;
      right: 0px;
      text-decoration: none;
      color: #000000;
      background-color: rgba(235, 235, 235, 0.80);
      font-size: 12px;
      padding: 1em;
    }

    .back-to-top:hover {
      background-color: rgba(135, 135, 135, 0.50);
      text-decoration: none;
      color: #ffffff;
    }

    .item-img {
      width: 100%;
    }

    /*導航欄*/
    .hide-in-phone {
      display: none;
    }

    /* 自訂2-若寬度大於480px就顯示*/
    @media only screen and (min-width:480px) {
      .hide-in-phone {
        display: block;
      }
    }


    #collapsibleNavbar1 li a:hover:not(.active) {
      background-color: #555;
      border-radius: 12px;
    }



    @import url("https://fonts.googleapis.com/earlyaccess/cwtexyen.css");

    body {
      font-family: 'cwTeXYen', sans-serif;
    }

    /*衣服*/
    aside {
      position: absolute;
      top: 2%;
      left: .5%;
      width: 10%;
      height: 20%;
      z-index: 1;
    }


    /*輪播介紹*/
    /*先預設是隱藏*/
    .hide-in-phone1 {
      display: none;
    }

    /*若寬度大於480px就顯示*/
    @media only screen and (min-width:480px) {
      .hide-in-phone1 {
        display: block;
      }
    }

    .hide-in-phone2 {
      visibility: visible;
    }

    @media only screen and (min-width:480px) {
      .hide-in-phone2 {
        visibility: hidden;
        display: none;
      }
    }

    .carousel-inner img {
      width: 100%;
      height: 100%;
    }

    #collapsibleNavbar li a:hover:not(.active) {
      background-color: #555;
      border-radius: 12px;
    }
  </style>
</head>
<a href="#" class="back-to-top">TOP</a>
<script>
  jQuery(document).ready(function () {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > offset) {
        jQuery('.back-to-top').fadeIn(duration);
      } else {
        jQuery('.back-to-top').fadeOut(duration);
      }
    });

    jQuery('.back-to-top').click(function (event) {
      event.preventDefault();
      jQuery('html, body').animate({ scrollTop: 0 }, duration);
      return false;
    })
  });
</script>

<body>

  <!--衣服-->
  <aside>
    <!--輪播-->
    <div id="clothes" class="carousel slide hide-in-phone1" data-ride="carousel">
      <!--圖片下方顯示:有多少輪播圖片&目前撥放位置-->
      <ul class="carousel-indicators">
        <li data-target="#clothes" data-slide-to="0" class="active"></li>
        <li data-target="#clothes" data-slide-to="1"></li>
        <li data-target="#clothes" data-slide-to="2"></li>
        <li data-target="#clothes" data-slide-to="3"></li>
        <li data-target="#clothes" data-slide-to="4"></li>
        <li data-target="#clothes" data-slide-to="5"></li>
        <li data-target="#clothes" data-slide-to="6"></li>
        <li data-target="#clothes" data-slide-to="7"></li>
        <li data-target="#clothes" data-slide-to="8"></li>
        <li data-target="#clothes" data-slide-to="9"></li>
        <li data-target="#clothes" data-slide-to="10"></li>
        <li data-target="#clothes" data-slide-to="11"></li>
        <li data-target="#clothes" data-slide-to="12"></li>
        <li data-target="#clothes" data-slide-to="13"></li>
        <li data-target="#clothes" data-slide-to="14"></li>
        <li data-target="#clothes" data-slide-to="15"></li>
      </ul>
      <!--圖片&圖片標題-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/home/人物/阿美_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>阿美</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/泰雅族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>泰雅族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/排灣族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>排灣族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/布農族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>布農族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/雅美族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>雅美族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/鄒族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>鄒族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/邵族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>邵族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/賽德克族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>賽德克族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/噶瑪蘭族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>噶瑪蘭族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/太魯閣族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>太魯閣族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/卑南族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>卑南族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/魯凱族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>魯凱族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/撒奇萊雅族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>撒奇萊雅族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/拉阿魯哇族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>拉阿魯哇族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/賽夏族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>賽夏族</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/人物/卡那卡那富族_人物.jpg" class="rounded-circle img-thumbnail">
          <div class="carousel-caption" style="color: rgb(121, 0, 50); font-weight: bold;">
            <p>卡那卡那富族</p>
          </div>
        </div>
        <!--左右控制-->
        <a class="carousel-control-prev clothes" href="#clothes" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next clothes" href="#clothes" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </aside>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand  hide-in-phone2" style="font-weight: bold; font-size: 20px" href="#">原住民資訊網</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar1">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../html/introducehome.html">
            <div class="text-white" style="font-size: 20px">原住民文化</div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../html/home.html">
            <div class="text-white" style="font-size: 20px">文化年表</div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../html/gamehome.php">
            <div class="text-white" style="font-size: 20px">小遊戲</div>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!--輪播-->
  <div class="container-fluid bg-dark">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- 圖片下方顯示:有多少輪播圖片&目前撥放位置 -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
        <li data-target="#demo" data-slide-to="6"></li>
        <li data-target="#demo" data-slide-to="7"></li>
        <li data-target="#demo" data-slide-to="8"></li>
        <li data-target="#demo" data-slide-to="9"></li>
        <li data-target="#demo" data-slide-to="10"></li>
        <li data-target="#demo" data-slide-to="11"></li>
        <li data-target="#demo" data-slide-to="12"></li>
        <li data-target="#demo" data-slide-to="13"></li>
        <li data-target="#demo" data-slide-to="14"></li>
      </ul>
      <!--圖片&圖片標題-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/home/輪播2/1.png">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/2.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/3.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/4.png">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/5.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/6.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/7.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/8.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/9.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/10.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/11.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/12.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/13.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/14.jpg">
        </div>
        <div class="carousel-item">
          <img src="../img/home/輪播2/15.jpg">
        </div>
      </div>
      <!--左右控制-->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>

  <!--滑鼠移動圖片變化-->
  <script>
    function mouseOver1() {
      document.image1.src = "../img/gamephoto/game02.jpg"
    }
    function mouseOut1() {
      document.image1.src = "../img/gamephoto/game01.jpg"
    }
    function mouseOver2() {
      document.image2.src = "../img/gamephoto/game03.jpg"
    }
    function mouseOut2() {
      document.image2.src = "../img/gamephoto/game01.jpg"
    }
    function mouseOver3() {
      document.image3.src = "../img/gamephoto/game02.jpg"
    }
    function mouseOut3() {
      document.image3.src = "../img/gamephoto/game01.jpg"
    }
  </script>
  <div class="bg-dark">&nbsp;</div>
<?php
      echo  '<div class="col-xs-12 col-sm-12" style="font-size:30px">';
      echo  '<br>';
      echo  '<span class="col-xs-4 col-sm-4   badge badge-primary" >遊戲庫</span>';
      echo  '<span  class="col-xs-4 col-sm-4  badge badge-secondary">'. $_SESSION['fullname'] .'</span>';
?>
  <div class="row">

    <div class="col-xs-12 col-sm-4"><a id="❤01" target="_blank" href="game/game01/game01.html">
        <img name="image1" src="../img/gamephoto/game01.jpg" onmouseover="mouseOver1()" onmouseout="mouseOut1()"
          width="100%" height="100%" style="padding: 50px" alt="game"></a></div>
    <div class="col-xs-12 col-sm-4"><a id="❤02" target="_blank" href="game/game02/game02.html">
        <img name="image2" src="../img/gamephoto/game01.jpg" onmouseover="mouseOver2()" onmouseout="mouseOut2()"
          width="100%" height="100%" style="padding: 50px" alt="game"></a></div>
    <div class="col-xs-12 col-sm-4"><a id="❤03" target="_blank" href="game/game03/game03.html">
        <img name="image3" src="../img/gamephoto/game01.jpg" onmouseover="mouseOver3()" onmouseout="mouseOut3()"
          width="100%" height="100%" style="padding: 50px" alt="game"></a></div>

  </div>
  <div class="row">
    <div class="border col-xs-12 col-sm-4 hide-in-phone" style="padding: 50px; font-size:30px;">
      🐍貪吃蛇小遊戲<span id="word1" style="color: red;font-size: 40px;"> ♡</span>
      <div style="font-size:20px">&emsp;&emsp;將自己養大~</div>
    </div>
    <div class="border col-xs-12 col-sm-4 hide-in-phone" style="padding: 50px ; font-size:30px;">
      🗃️翻翻樂小遊戲<span id="word2" style="color: red;font-size: 40px;"> ♡</span>
      <div style="font-size:20px">&emsp;&emsp;兩兩成對~</div>
    </div>
    <div class="border col-xs-12 col-sm-4 hide-in-phone" style="padding: 50px ; font-size:30px;">
      🧔原住民問答小遊戲<span id="word3" style="color: red;font-size: 40px;"> ♡</span>
      <div style="font-size:20px">&emsp;&emsp;16族的問答~</div>
    </div>
  </div>
  <script>
    document.getElementById("❤01").onclick = function () {
      document.getElementById("word1").innerHTML = "♥";
    }
    document.getElementById("❤02").onclick = function () {
      document.getElementById("word2").innerHTML = "♥";
    }
    document.getElementById("❤03").onclick = function () {
      document.getElementById("word3").innerHTML = "♥";
    }
  </script>

<!--頁尾-->
  <div class="jumbotron text-center" style="margin-bottom:0">
    
    <p>by 逢甲大學-109學年度上學期  Web 程式設計課程 team18</p>
  </div>



</body>

</html>