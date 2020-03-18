<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客首页</title>
    <script src="./js/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="./css/homepage.css" />
    <link rel="stylesheet" href="./css/blog.css" />
    <link rel="stylesheet" href="./css/dropdown.css" />
    <link href="css/pgwslider.min.css" rel="stylesheet">
    <script src="js/pgwslider.min.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).ready(function() {
            $('.pgwSlider').pgwSlider();
        });
    });
</script>
<body>
<?php
include_once("top.php");
session_start();
?>
<div class="t-right-bar">
    <div class="t-bar-support" id="data-open-online-form"><a href="#"><span class="glyphicon glyphicon-headphones"></span> 联系我们</a></div>
    <div class="t-bar-rocket" id="back-to-top"><span class="glyphicon glyphicon-eject"></span> 返回顶部</div>
</div>
<script>
    $(".t-right-bar").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 100) {
                $(".t-right-bar").fadeIn(500);
            }
            else {
                $(".t-right-bar").fadeOut(500);
            }
        });

        $("#back-to-top").click(function () {
            $('body,html').animate({scrollTop: 0}, 100);
            return false;
        });
    });
</script>
<div class="ad">
    <h2>这里放广告</h2>
    <div class="ad_right">
    </div>
</div>
<div class="blog_nav" style="padding-left: 200px">
    <ul>
        <li><h2>这里放logo</h2></li>
        <a href=""><li>娱乐</li></a>
        <a href=""><li>股票</li></a>
        <a href=""><li>教育</li></a>
        <a href=""><li>美食</li></a>
        <a href=""><li>星座</li></a>
    </ul>
    <div class="blog_nav_right">
        <form class="bs-example bs-example-form" role="form" action="#" method="post" style="margin-top: 8px">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="搜索内容">
                        <span class="input-group-btn">
						<button class="btn btn-default" type="submit" style="vertical-align:top;">
							搜索
						</button>
					</span>
                    </div>
                </div>
        </form>
    </div>
</div>
<!--博客左侧部分-->
<div class="blog_body">
<!--活动专区-->
  <div class="blog_body_left">
      <div class="blog_title">
          <span class="line"></span>
          <span class="text">活动专区</span>
          <span class="line"></span>
      </div>
      <div class="blog_body_left1">
          <a href="#" target="_blank"><img src="pic/left1.png" style="width: 100%;height: 200px;padding: 5px"></a>

      <ul>
          <li><a href="#" target="_blank"><span>●&nbsp</span>一二三四五六七八九十一二三四五六七八九十</a></li>
          <li><a href="#" target="_blank"><span>●&nbsp</span>工作有了成绩，为什么领导却不提拔，问题就出在</a></li>
          <li><a href="#" target="_blank"><span>●&nbsp</span>北京秋色上线！这个与河北毗邻的小村美的不像话</a></li>
          <li><a href="#" target="_blank"><span>●&nbsp</span>具惠善不爱安宰贤了？放过他，等于放过你自己</a></li>
      </ul>
      <!--活动专区结束-->
      <!--每日精选-->
      <div class="blog_title">
          <span class="line"></span>
          <span class="text">每日精选</span>
          <span class="line"></span>
      </div>
          <ul>
              <li><a href="#" target="_blank"><span>●&nbsp</span>一二三四五六七八九十一二三四五六七八九十</a></li>
              <li><a href="#" target="_blank"><span>●&nbsp</span>工作有了成绩，为什么领导却不提拔，问题就出在</a></li>
              <li><a href="#" target="_blank"><span>●&nbsp</span>具惠善不爱安宰贤了？放过他，等于放过你自己</a></li>
              <li><a href="#" target="_blank"><span>●&nbsp</span>北京秋色上线！这个与河北毗邻的小村美的不像话</a></li>
              <li><a href="#" target="_blank"><span>●&nbsp</span>一二三四五六七八九十一二三四五六七八九十</a></li>
              <li><a href="#" target="_blank"><span>●&nbsp</span>工作有了成绩，为什么领导却不提拔，问题就出在</a></li>
              <li><a href="#" target="_blank"><span>●&nbsp</span>北京秋色上线！这个与河北毗邻的小村美的不像话</a></li>
              <li><a href="#" target="_blank"><span>●&nbsp</span>具惠善不爱安宰贤了？放过他，等于放过你自己</a></li>
          </ul>
      </div>
      <!--每日精选结束-->
      <div class="blog_body_left2">
      <!--每日热文排行-->
      <div class="blog_title">
          <span class="line"></span>
          <span class="text">每日热文排行</span>
          <span class="line"></span>
      </div>
      <div id="movie_rank">
          <ol class="rank_list" style="list-style: none;">
              <li class="top3"><em>1</em><a title="鼠标触及带边框的菜单" target="_blank" href="http://www.csrcode.cn/html/txdm/cddh/1034.htm">
                      鼠标触及带边框的菜单</a></li>
              <li class="top3"><em>2</em><a title="超级漂亮的几款清新、常用的网页CSS布局配色实例" target="_blank" href="http://www.csrcode.cn/html/txdm/tcys/1061.htm">
                      超级漂亮的几款清新、常用的网页CSS布局配色实例</a></li>
              <li class="top3"><em>3</em><a title="CSS制作斜角上有背景图片的Div层" target="_blank" href="http://www.csrcode.cn/html/txdm/tcys/1060.htm">
                      CSS制作斜角上有背景图片的Div层</a></li>
              <li><em>4</em><a title="Js实现的层展开、层折叠效果，默认时候层是折叠的" target="_blank" href="http://www.csrcode.cn/html/txdm/tcys/1059.htm">
                      Js实现的层展开、层折叠效果，默认时候层是折叠的</a></li>
              <li><em>5</em><a title="DIV始终固定在网页右下角位置的CSS实现方法" target="_blank" href="http://www.csrcode.cn/html/txdm/tcys/1058.htm">
                      DIV始终固定在网页右下角位置的CSS实现方法</a></li>
              <li><em>6</em><a title="JavaScript未知高度元素的垂直居中的方法" target="_blank" href="http://www.csrcode.cn/html/txdm/tcys/1057.htm">
                      JavaScript未知高度元素的垂直居中的方法</a></li>
          </ol>
      </div>
      <!--每周人气榜-->
      <div class="blog_title">
          <span class="line"></span>
          <span class="text">每周人气榜</span>
          <span class="line"></span>
      </div>
      <div class="box2" id="movie_rank">
          <ol class="rank_list" style="list-style: none;">
              <li class="top3"><em>1</em><a target="_blank" href="#" style="float: left">十年九夏</a></li>
              <li class="top3"><em>2</em><a target="_blank" href="#" style="float: left">康师傅</a></li>
              <li class="top3"><em>3</em><a target="_blank" href="#" style="float: left">没离开过</a></li>
              <li><em>4</em><a target="_blank" href="#" style="float: left">那些年</a></li>
              <li><em>5</em><a target="_blank" href="#" style="float: left">龙卷风</a></li>
              <li><em>6</em><a target="_blank" href="#" style="float: left">张三</a></li>
          </ol>
      </div>
        <!--每周人气榜结束-->
  </div>
  </div>
    <!--博客左侧部分结束-->
    <!--博客中部部分-->
<div class="blog_body_mid">
    <div id="blog_body_mid1" class="carousel slide" style="z-index: 8">
        <video width="890px" height="400px" controls autoplay="autoplay">
            <!-- MP4 must be first for iPad! -->
            <source src="./pic/七里香.mp4" type="video/mp4" /><!-- Safari / iOS video    -->
            <source src="__VIDEO__.OGV" type="video/ogg" /><!-- Firefox / Opera / Chrome10 -->
            <!-- fallback to Flash: -->
            <object width="890px" height="400px" type="application/x-shockwave-flash" data="__FLASH__.SWF">
                <!-- Firefox uses the `data` attribute above, IE/Safari uses the param below -->
                <param name="movie" value="__FLASH__.SWF" />
                <param name="flashvars" value="controlbar=over&amp;image=__POSTER__.JPG&amp;file=__VIDEO__.MP4" />
                <!-- fallback image. note the title field below, put the title of the video there -->
                <img src="" width="890px" height="400px" alt="__TITLE__"
                     title="No video playback capabilities, please download the video below" />
            </object>
        </video>
    </div>

    <div class="blog_body_mid2">
           <div class="blog_body_mid2_title">
               <span class="line" style="vertical-align: 7px;"></span>
               今日新闻
               <span class="line" style="vertical-align: 7px;"></span>
           </div>
        <ol class="mid_ol">
            <span class="li_line"></span>
            <li class="mid_li"><span class="num">01</span><a href="#" class="mid2_content">一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十</a></li>
            <span class="li_line"></span>
            <li class="mid_li"><span class="num">02</span><a href="#" class="mid2_content">工作有了成绩，为什么领导却不提拔，问题就出在</a></li>
            <span class="li_line"></span>
            <li class="mid_li"><span class="num">03</span><a href="#" class="mid2_content">北京秋色上线！这个与河北毗邻的小村美的不像话</a></li>
            <span class="li_line"></span>
            <li class="mid_li"><span class="num">04</span><a href="#" class="mid2_content">具惠善不爱安宰贤了？放过他，等于放过你自己</a></li>
            <span class="li_line"></span>
            <li class="mid_li"><span class="num">05</span><a href="#" class="mid2_content">一二三四五六七八九十一二三四五六七八九十</a></li>
            <span class="li_line"></span>
            <li class="mid_li"><span class="num">06</span><a href="#" class="mid2_content">工作有了成绩，为什么领导却不提拔，问题就出在</a></li>
            <span class="li_line"></span>
        </ol>
    </div>
    <!--图片精选-->
    <div class="blog_body_mid3">
        <h3><a href="#" class="more">更多</a>图片精选</h3>
        <div class="m" style="width: 100%;height: 100%">
            <ul class="pgwSlider">
                <li><a href="#" target="_blank"><img src="pic/paris.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"></a></li>
                <li><a href="#" target="_blank"><img src="pic/montreal.jpg" alt="Montréal, QC, Canada" data-large-src="pic/montreal.jpg"></a></li>
                <li><a href="#" target="_blank"><img src="pic/shanghai.jpg"><span>Shanghai, China</span></a></li>
                <li><a href="#" target="_blank"><img src="pic/new-york.jpg"><span>New York, NY, USA</span></a></li>
            </ul>
        </div>
        <div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
        </div>
    </div>
    <!--图片精选结束-->
<div class="tab">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active">
            <a href="#all" data-toggle="tab" class="">
                    全部
            </a>
        </li>
        <li><a href="#sign" data-toggle="tab">星座</a></li>
        <li><a href="#food" data-toggle="tab">美食</a></li>
        <li><a href="#amusement" data-toggle="tab">娱乐</a></li>
        <li><a href="#emotion" data-toggle="tab">情感</a></li>
        <li><a href="#tourist" data-toggle="tab">旅游</a></li>
        <li class="dropdown">
            <a href="#" id="myTabDrop1" class="dropdown-toggle"
               data-toggle="dropdown">更多
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                <li><a href="#cartoon" tabindex="-1" data-toggle="tab">动漫</a></li>
                <li><a href="#game" tabindex="-1" data-toggle="tab">游戏</a></li>
            </ul>
        </li>
    </ul>
</div>
    <div class="blog_body_mid4">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="all">
            <ol class="mid_ol">
                <span class="li_line"></span>
                <?php
                //连接memcache
                $m = new Memcache();
                $m->connect('localhost', 11211);
                $count=$m->get('count');
                if(!$count) {
                    include_once("connmysql.php");
                    $query = "select count(*) from news";
                    $resq = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($resq);
                    $m->set('count', $row[0], 0, 120);
                    $count = $m->get('count');
                }
                include_once("connmysql.php");
                $query = 'SELECT title,content,author,submtDate FROM news';
                $key = md5($query); //md5 SQL命令 作为 memcache的唯一标识符
                $rows = $m->get($key); //先重memcache获取数据
                if (!$rows) {
//如果$rows为false那么就是没有数据咯, 那么就写入数据
                    $res = mysqli_query($con,$query);
                    $rows = array();
                    while($row = mysqli_fetch_array($res)) {
                        $rows[] = $row;
                    }
                    $m->set($key, $rows,0,60);
                    $rows = $m->get($key); //先重memcache获取数据
//这里写入重数据库中获取的数据, 可以设置缓存时间, 具体时间设置多少, 根据自己需求吧.
                }
                //var_dump($rows); //打印出数据

                for($i=0;$i<$count;$i++)
                {
                ?>
                        <li>
                            <a href="#">
                                <div class="mid_title"><?php echo $rows[$i][0] ?></div>
                            </a><br>
                            <a href="#"><?php echo $rows[$i][1] ?></a><br><br>
                            <div class="mid_avatar"><a href="#"><img src="pic/first.png"></a></div>
                            <a href="#" style="margin: 20px 0 0 5px"><p><?php echo $rows[$i][2] ?></p></a>
                            <p style="position: absolute;right: 0px;bottom: 0px"><?php echo $rows[$i][3] ?></p>
                        </li>
                        <br>
                        <span class="li_line"></span>
                        <?php
                }
                ?>
            </ol>
        </div>
        <div class="tab-pane fade" id="sign">
            <ol class="mid_ol">
                <span class="li_line"></span>
                <?php
                //连接memcache
                $m1 = new Memcache();
                $m1->connect('localhost', 11211);
                $count2=$m1->get('count2');
                if(!$count2) {
                    include_once("connmysql.php");
                    $query = "select count(*) from news where kind='星座'";
                    $resq = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($resq);
                    $m1->set('count2', $row[0], 0, 120);
                    $count2 = $m1->get('count2');
                }
                include_once("connmysql.php");
                $query = "SELECT title,content,author,submtDate FROM news where kind='星座'";
                $key =md5($query);  //md5 SQL命令 作为 memcache的唯一标识
                $rows = $m1->get($key); //先重memcache获取数据
                if (!$rows) {
//如果$rows为false那么就是没有数据咯, 那么就写入数据
                    $res = mysqli_query($con,$query);
                    $rows = array();
                    while($row = mysqli_fetch_array($res)) {
                        $rows[] = $row;
                    }
                    $m1->set($key, $rows,0,60);
                    $rows = $m1->get($key); //先重memcache获取数据
//这里写入重数据库中获取的数据, 可以设置缓存时间, 具体时间设置多少, 根据自己需求吧.
                }
                //var_dump($rows); //打印出数据

                for($i=0;$i<$count2;$i++)
                {
                    ?>
                    <li>
                        <a href="#">
                            <div class="mid_title"><?php echo $rows[$i][0] ?></div>
                        </a><br>
                        <a href="#"><?php echo $rows[$i][1] ?></a><br><br>
                        <div class="mid_avatar"><a href="#"><img src="pic/first.png"></a></div>
                        <a href="#" style="margin: 20px 0 0 5px"><p><?php echo $rows[$i][2] ?></p></a>
                        <p style="position: absolute;right: 0px;bottom: 0px"><?php echo $rows[$i][3] ?></p>
                    </li>
                    <br>
                    <span class="li_line"></span>
                    <?php
                }
                ?>
            </ol>
        </div>
        <div class="tab-pane fade" id="food">
            <ol class="mid_ol">
                <span class="li_line"></span>
                <?php
                //连接memcache
                $m1 = new Memcache();
                $m1->connect('localhost', 11211);
                $count3=$m1->get('count3');
                if(!$count3) {
                    include_once("connmysql.php");
                    $query = "select count(*) from news where kind='美食'";
                    $resq = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($resq);
                    $m1->set('count3', $row[0], 0, 120);
                    $count3 = $m1->get('count3');
                }
                include_once("connmysql.php");
                $query = "SELECT title,content,author,submtDate FROM news where kind='美食'";
                $key =md5($query);  //md5 SQL命令 作为 memcache的唯一标识
                $rows = $m1->get($key); //先重memcache获取数据
                if (!$rows) {
//如果$rows为false那么就是没有数据咯, 那么就写入数据
                    $res = mysqli_query($con,$query);
                    $rows = array();
                    while($row = mysqli_fetch_array($res)) {
                        $rows[] = $row;
                    }
                    $m1->set($key, $rows,0,60);
                    $rows = $m1->get($key); //先重memcache获取数据
//这里写入重数据库中获取的数据, 可以设置缓存时间, 具体时间设置多少, 根据自己需求吧.
                }
                //var_dump($rows); //打印出数据

                for($i=0;$i<$count3;$i++)
                {
                    ?>
                    <li>
                        <a href="#">
                            <div class="mid_title"><?php echo $rows[$i][0] ?></div>
                        </a><br>
                        <a href="#"><?php echo $rows[$i][1] ?></a><br><br>
                        <div class="mid_avatar"><a href="#"><img src="pic/first.png"></a></div>
                        <a href="#" style="margin: 20px 0 0 5px"><p><?php echo $rows[$i][2] ?></p></a>
                        <p style="position: absolute;right: 0px;bottom: 0px"><?php echo $rows[$i][3] ?></p>
                    </li>
                    <br>
                    <span class="li_line"></span>
                    <?php
                }
                ?>
            </ol>
        </div>
        <div class="tab-pane fade" id="amusement">
            <ol class="mid_ol">
                <span class="li_line"></span>
                <?php
                //连接memcache
                $m1 = new Memcache();
                $m1->connect('localhost', 11211);
                $count4=$m1->get('count4');
                if(!$count4) {
                    include_once("connmysql.php");
                    $query = "select count(*) from news where kind='娱乐'";
                    $resq = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($resq);
                    $m1->set('count4', $row[0], 0, 120);
                    $count4 = $m1->get('count4');
                }
                include_once("connmysql.php");
                $query = "SELECT title,content,author,submtDate FROM news where kind='娱乐'";
                $key =md5($query);  //md5 SQL命令 作为 memcache的唯一标识
                $rows = $m1->get($key); //先重memcache获取数据
                if (!$rows) {
//如果$rows为false那么就是没有数据咯, 那么就写入数据
                    $res = mysqli_query($con,$query);
                    $rows = array();
                    while($row = mysqli_fetch_array($res)) {
                        $rows[] = $row;
                    }
                    $m1->set($key, $rows,0,60);
                    $rows = $m1->get($key); //先重memcache获取数据
//这里写入重数据库中获取的数据, 可以设置缓存时间, 具体时间设置多少, 根据自己需求吧.
                }
                //var_dump($rows); //打印出数据

                for($i=0;$i<$count4;$i++)
                {
                    ?>
                    <li>
                        <a href="#">
                            <div class="mid_title"><?php echo $rows[$i][0] ?></div>
                        </a><br>
                        <a href="#"><?php echo $rows[$i][1] ?></a><br><br>
                        <div class="mid_avatar"><a href="#"><img src="pic/first.png"></a></div>
                        <a href="#" style="margin: 20px 0 0 5px"><p><?php echo $rows[$i][2] ?></p></a>
                        <p style="position: absolute;right: 0px;bottom: 0px"><?php echo $rows[$i][3] ?></p>
                    </li>
                    <br>
                    <span class="li_line"></span>
                    <?php
                }
                ?>
            </ol>
        </div>
        <div class="tab-pane fade" id="emotion">
            <ol class="mid_ol">
                <span class="li_line"></span>
                <?php
                //连接memcache
                $m1 = new Memcache();
                $m1->connect('localhost', 11211);
                $count5=$m1->get('count5');
                if(!$count5) {
                    include_once("connmysql.php");
                    $query = "select count(*) from news where kind='情感'";
                    $resq = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($resq);
                    $m1->set('count5', $row[0], 0, 120);
                    $count5 = $m1->get('count5');
                }
                include_once("connmysql.php");
                $query = "SELECT title,content,author,submtDate FROM news where kind='情感'";
                $key =md5($query);  //md5 SQL命令 作为 memcache的唯一标识
                $rows = $m1->get($key); //先重memcache获取数据
                if (!$rows) {
//如果$rows为false那么就是没有数据咯, 那么就写入数据
                    $res = mysqli_query($con,$query);
                    $rows = array();
                    while($row = mysqli_fetch_array($res)) {
                        $rows[] = $row;
                    }
                    $m1->set($key, $rows,0,60);
                    $rows = $m1->get($key); //先重memcache获取数据
//这里写入重数据库中获取的数据, 可以设置缓存时间, 具体时间设置多少, 根据自己需求吧.
                }
                //var_dump($rows); //打印出数据

                for($i=0;$i<$count5;$i++)
                {
                    ?>
                    <li>
                        <a href="#">
                            <div class="mid_title"><?php echo $rows[$i][0] ?></div>
                        </a><br>
                        <a href="#"><?php echo $rows[$i][1] ?></a><br><br>
                        <div class="mid_avatar"><a href="#"><img src="pic/first.png"></a></div>
                        <a href="#" style="margin: 20px 0 0 5px"><p><?php echo $rows[$i][2] ?></p></a>
                        <p style="position: absolute;right: 0px;bottom: 0px"><?php echo $rows[$i][3] ?></p>
                    </li>
                    <br>
                    <span class="li_line"></span>
                    <?php
                }
                ?>
            </ol>
        </div>
        <div class="tab-pane fade" id="tourist">
            <ol class="mid_ol">
                <span class="li_line"></span>
                <?php
                //连接memcache
                $m1 = new Memcache();
                $m1->connect('localhost', 11211);
                $count6=$m1->get('count6');
                if(!$count6) {
                    include_once("connmysql.php");
                    $query = "select count(*) from news where kind='旅游'";
                    $resq = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($resq);
                    $m1->set('count6', $row[0], 0, 120);
                    $count6 = $m1->get('count6');
                }
                include_once("connmysql.php");
                $query = "SELECT title,content,author,submtDate FROM news where kind='旅游'";
                $key =md5($query);  //md5 SQL命令 作为 memcache的唯一标识
                $rows = $m1->get($key); //先重memcache获取数据
                if (!$rows) {
//如果$rows为false那么就是没有数据咯, 那么就写入数据
                    $res = mysqli_query($con,$query);
                    $rows = array();
                    while($row = mysqli_fetch_array($res)) {
                        $rows[] = $row;
                    }
                    $m1->set($key, $rows,0,60);
                    $rows = $m1->get($key); //先重memcache获取数据
//这里写入重数据库中获取的数据, 可以设置缓存时间, 具体时间设置多少, 根据自己需求吧.
                }
                //var_dump($rows); //打印出数据

                for($i=0;$i<$count6;$i++)
                {
                    ?>
                    <li>
                        <a href="#">
                            <div class="mid_title"><?php echo $rows[$i][0] ?></div>
                        </a><br>
                        <a href="#"><?php echo $rows[$i][1] ?></a><br><br>
                        <div class="mid_avatar"><a href="#"><img src="pic/first.png"></a></div>
                        <a href="#" style="margin: 20px 0 0 5px"><p><?php echo $rows[$i][2] ?></p></a>
                        <p style="position: absolute;right: 0px;bottom: 0px"><?php echo $rows[$i][3] ?></p>
                    </li>
                    <br>
                    <span class="li_line"></span>
                    <?php
                }
                ?>
            </ol>
        </div>
        <div class="tab-pane fade" id="cartoon">
            <ol class="mid_ol">
                <span class="li_line"></span>
                <?php
                //连接memcache
                $m1 = new Memcache();
                $m1->connect('localhost', 11211);
                $count7=$m1->get('count7');
                if(!$count7) {
                    include_once("connmysql.php");
                    $query = "select count(*) from news where kind='卡通'";
                    $resq = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($resq);
                    $m1->set('count7', $row[0], 0, 120);
                    $count7 = $m1->get('count7');
                }
                include_once("connmysql.php");
                $query = "SELECT title,content,author,submtDate FROM news where kind='卡通'";
                $key =md5($query);  //md5 SQL命令 作为 memcache的唯一标识
                $rows = $m1->get($key); //先重memcache获取数据
                if (!$rows) {
//如果$rows为false那么就是没有数据咯, 那么就写入数据
                    $res = mysqli_query($con,$query);
                    $rows = array();
                    while($row = mysqli_fetch_array($res)) {
                        $rows[] = $row;
                    }
                    $m1->set($key, $rows,0,60);
                    $rows = $m1->get($key); //先重memcache获取数据
//这里写入重数据库中获取的数据, 可以设置缓存时间, 具体时间设置多少, 根据自己需求吧.
                }
                //var_dump($rows); //打印出数据

                for($i=0;$i<$count7;$i++)
                {
                    ?>
                    <li>
                        <a href="#">
                            <div class="mid_title"><?php echo $rows[$i][0] ?></div>
                        </a><br>
                        <a href="#"><?php echo $rows[$i][1] ?></a><br><br>
                        <div class="mid_avatar"><a href="#"><img src="pic/first.png"></a></div>
                        <a href="#" style="margin: 20px 0 0 5px"><p><?php echo $rows[$i][2] ?></p></a>
                        <p style="position: absolute;right: 0px;bottom: 0px"><?php echo $rows[$i][3] ?></p>
                    </li>
                    <br>
                    <span class="li_line"></span>
                    <?php
                }
                ?>
            </ol>
        </div>
        <div class="tab-pane fade" id="game">
            <ol class="mid_ol">
                <span class="li_line"></span>
                <?php
                //连接memcache
                $m1 = new Memcache();
                $m1->connect('localhost', 11211);
                $count8=$m1->get('count8');
                if(!$count8) {
                    include_once("connmysql.php");
                    $query = "select count(*) from news where kind='游戏'";
                    $resq = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($resq);
                    $m1->set('count8', $row[0], 0, 120);
                    $count8 = $m1->get('count8');
                }
                include_once("connmysql.php");
                $query = "SELECT title,content,author,submtDate FROM news where kind='游戏'";
                $key =md5($query);  //md5 SQL命令 作为 memcache的唯一标识
                $rows = $m1->get($key); //先重memcache获取数据
                if (!$rows) {
//如果$rows为false那么就是没有数据咯, 那么就写入数据
                    $res = mysqli_query($con,$query);
                    $rows = array();
                    while($row = mysqli_fetch_array($res)) {
                        $rows[] = $row;
                    }
                    $m1->set($key, $rows,0,60);
                    $rows = $m1->get($key); //先重memcache获取数据
//这里写入重数据库中获取的数据, 可以设置缓存时间, 具体时间设置多少, 根据自己需求吧.
                }
                //var_dump($rows); //打印出数据

                for($i=0;$i<$count8;$i++)
                {
                    ?>
                    <li>
                        <a href="#">
                            <div class="mid_title"><?php echo $rows[$i][0] ?></div>
                        </a><br>
                        <a href="#"><?php echo $rows[$i][1] ?></a><br><br>
                        <div class="mid_avatar"><a href="#"><img src="pic/first.png"></a></div>
                        <a href="#" style="margin: 20px 0 0 5px"><p><?php echo $rows[$i][2] ?></p></a>
                        <p style="position: absolute;right: 0px;bottom: 0px"><?php echo $rows[$i][3] ?></p>
                    </li>
                    <br>
                    <span class="li_line"></span>
                    <?php
                }
                ?>
            </ol>
        </div>
    </div>
    </div>
</div>
    <!--博客中部部分结束-->
    <!--博客右侧部分-->
          <div class="blog_body_right">
              <!--右侧登录部分-->
              <?php
               if (empty($_SESSION["tel"])) {
                   ?>
                   <div class="blog_body_right1">
                       <form class="form-horizontal" method="post" action="dologin.php" style="padding: 10px 0 0 60px">
                           <h3 style="padding-left: 60px">欢迎登录</h3>
                           <div class="form-group">
                               <div class="input-group col-sm-10 ">
                                   <span class="input-group-addon"><span
                                               class="glyphicon glyphicon-phone"></span></span>
                                   <input type="text" name="tel" class="form-control" id="tel" placeholder="手机号/邮箱号">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="input-group col-sm-10">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                   <input type="password" name="psd" class="form-control" id="psd" placeholder="密码">
                               </div>
                           </div>

                           <div class="form-group">
                               <div class="col-sm-offset-0 col-sm-8">
                                   <button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>
                               </div>
                               <div>
                                   <h6><a href="" class="a_login">忘记密码</a></h6>
                               </div>
                           </div>
                       </form>
                   </div>
                   <!--登录部分结束-->
                   <?php
               }
               else {
                   ?>
              <div class="blog_body_right1">
                  <h2>hello,Welcome to my blog!</h2>
              </div>
                   <?php
               }
              ?>
              <!--博客大咖说-->
              <div class="blog_body_right2">
              <div class="right_title">博客大咖说</div><br>
                  <div class="avatar"><a href="#"><img src="pic/first.png"></a></div>
                  <span><a href="#" style="background-color: lightgray">明星开淘宝店，能活几天？</a> <a href="#"><p>张三</p></a></span>
                  <div class="avatar"><a href="#"><img src="pic/first.png"></a></div>
                  <span><a href="#" style="background-color: lightgray">这些工厂，藏着中国制造的新机会</a> <a href="#"><p>张三</p></a></span>
                  <div class="avatar"><a href="#"><img src="pic/first.png"></a></div>
                  <span><a href="#" style="background-color: lightgray">成年人的世界有利益，有别离，但是没有所谓的闺蜜</a> <a href="#"><p>张三</p></a></span>
                  <div class="avatar"><a href="#"><img src="pic/first.png"></a></div>
                  <span><a href="#" style="background-color: lightgray">一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十</a> <a href="#"><p>张三</p></a></span>
              </div>
              <!--博客大咖说结束-->
              <!--广告-->
              <div class="blog_body_right3">
                     这里放广告或者二维码。
              </div>
              <!--广告结束-->
              <!--每日图说-->
              <div class="blog_body_right4">
                  <div class="right_title">每日图说</div><br>
                  <img src="pic/login2.png" style="width: 340px;height: 340px">
                  <div class="right_title" style="margin-top: 10px"><a href="#" target="_blank" style="font-size: 18px;">住在旧时的富人区，如果身家不到2亿....</a></div><br>
              </div>




          </div>
    <!--博客右侧部分结束-->
</div>
</body>
</html>