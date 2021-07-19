<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>php입문</title>
	<link rel="stylesheet" href="css/common.css"/>
	<link rel="stylesheet" href="css/login.css"/>
	<script type="text/javascript" src="./js/login.js"></script>
</head>
<body>
	<header>
		<?php include "header.php" ?>
	</header>
	<section>
		<div id="main_img_bar">
			<img src="img/main_img.png" alt="mainimg"/>
		</div>
		<div id="main_content">
			<div id="login_box">
				<div id="login_title">
					<span>로그인</span>
				</div>
				<div id="login_form">
					<form action="login.php" method="post" name="login_form">
						<ul>
							<li><input type="text" name="id" placeholder="아이디" /></li>
							<li><input type="password" name="pass" placeholder="비밀번호" id="pass" /></li>
						</ul>
						<div id="login_btn">
							<a href="#"><img src="img/login.png" alt="login" onclick="check_input()"/></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<?php include "footer.php" ?>
	</footer>
</body>
</html>