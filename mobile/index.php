<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='Title' content='모바일 메인'>
    <meta name='Subject' content='모바일'>
    <meta name='Keywords' content='html,css,모바일 제작'>
    <meta name='Author' content='jun'>
    <meta name='Description' content='모바일 메인 페이지입니다.'>
    <title>모바일</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
    <?php
        session_start();//보안떄문에 시작할때 사용
        if(isset($_SESSION["userid"])){
            $userid=$_SESSION["userid"];
        }else{
            $userid="";
        }
        if(isset($_SESSION["username"])){
            $username=$_SESSION["username"];
        }else{
            $username="";
        }
        if(isset($_SESSION["userlevel"])){
            $userlevel=$_SESSION["userlevel"];
        }else{
            $userlevel="";
        }
        if(isset($_SESSION["userpoint"])){
            $userpoint=$_SESSION["userpoint"];
        }else{
            $userpoint="";
        }
    ?>
    <header>
        <div class="container">
            <div class="nav">
                <div class="watch">
                    <h4>1:00</h4>
                </div>
                <ul class="header_icons">
                    <li><i class="fas fa-signal"></i></li>
                    <li><i class="fas fa-wifi"></i></li>
                    <li><i class="fas fa-battery-three-quarters"></i></li>
                </ul>
            </div>
            <div class="input_box">
                <h1>post</h1>
                <div class="login_form">
                    <ul>
                        <?php
                            if(!$userid){
                        ?>
                        <li><a href="login.html">로그인</a></li>
                        <li><a href="create.php">회원가입</a></li>
                        <?php
                            }else{
                                $logged=$username."(".$userid.")님 안녕하세요";
                        ?>
                            <li><?=$logged?></li>
                            <li><a href="logout.php">로그아웃</a></li>
                            
                        <?php
                            }
                        ?>
                    </ul>
                </div>
                <input type="text" placeholder="search">
            </div>
        </div>  
    </header>
    <section id="main_post">
        <div class="container">
            <div class="swiper-container main_post_full">
                <div class="swiper-wrapper slide_post">
                    <div class="swiper-slide">
                            <a href="post.html">
                                <img src="img/ban2.jpg" alt="배너">
                            </a></div>
                    <div class="swiper-slide ">
                            <a href="post.html">
                                <img src="img/ban2.jpg" alt="배너">
                            </a></div>
                    <div class="swiper-slide ">
                            <a href="post.html">
                                <img src="img/ban1.jpg" alt="배너">
                            </a></div>
                    <div class="swiper-slide ">
                            <a href="post.html">
                                <img src="img/ban1.jpg" alt="배너">
                            </a></div>
                    <div class="swiper-slide ">
                            <a href="post.html">
                                <img src="img/ban1.jpg" alt="배너">
                            </a></div>
                    <div class="swiper-slide ">
                            <a href="post.html">
                                <img src="img/ban1.jpg" alt="배너">
                            </a></div>
                    <div class="swiper-slide ">
                            <a href="post.html">
                                <img src="img/ban1.jpg" alt="배너">
                            </a></div>
                    <div class="swiper-slide ">
                            <a href="post.html">
                                <img src="img/ban1.jpg" alt="배너">
                            </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="img/ban1.jpg" alt="배너">
                        </a>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <h2 class="container">other posts</h2>
    <section id="other_post">
        <div class="container">
            <div class="other">
                <div class="other_head">
                    <img src="img/ban1.jpg" alt="#">
                    <h3>Camerson Stewadrd</h3>
                    <h4 class="follow"><a href="#">follow</a></h4>
                </div>
                <div class="other_text">
                    <p>#안녕하세요</p>
                    <h4>일본여행</h4>
                </div>
                <div class="other_img">
                    <img src="img/post1-1.jpg" alt="#">
                    <img src="img/post1-2.jpg" alt="#">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="other">
                <div class="other_head">
                    <img src="img/ban2.jpg" alt="#">
                    <h3>Camerson Stewadrd</h3>
                    <h4 class="follow"><a href="#">follow</a></h4>
                </div>
                <div class="other_text">
                    <p>#안녕하세요</p>
                    <h4>일본여행</h4>
                </div>
                <div class="other_img">
                    <img src="img/post2-1.jpg" alt="#">
                    <img src="img/post2-2.jpg" alt="#">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <ul class="footer_box">
                <li><a href="index.php">홈</a></li>
                <li><a href="chat.html">채팅</a></li>
                <li><a href="notice.html">알림</a></li>
                <li><a href="post.html">스토리</a></li>
            </ul>
        </div>
    </footer>
    
  <!-- Swiper JS -->
  <script src="js/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween:5,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
</body>
</html>