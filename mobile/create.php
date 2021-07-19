<!doctype html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name='Title' content='모바일 회원가입'>
   <meta name='Subject' content='모바일'>
   <meta name='Keywords' content='html,css,모바일 제작'>
   <meta name='Author' content='jun'>
   <meta name='Description' content='모바일 회원가입 페이지입니다.'>
   <title>모바일</title>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
   <link rel="stylesheet" href="css/create.css">
   <script type="text/javascript">
		function check_input(){
			
			if(!document.create.id.value){
				alert('아이디를 입력해주세요');
				document.create.id.focus();
				return;
			}
			if(!document.create.pass.value){
				alert('비밀번호를 입력해주세요');
				document.create.pass.focus();
				return;
			}
			if(!document.create.pass_confirm.value){
				alert('비밀번호확인을 해주세요');
				document.create.pass_confirm.focus();
				return;
			}
			if(!document.create.name.value){
				alert('이름를 입력해주세요');
				document.create.name.focus();
				return;
			}
			if(!document.create.email1.value){
				alert('이메일을 입력해주세요');
				document.create.email1.focus();
				return;
			}
			if(!document.create.email2.value){
				alert('이메일을 입력해주세요');
				document.create.email2.focus();
				return;
			}
			if(document.create.pass.value != document.create.pass_confirm.value){
				alert("비밀번호가 일치하지 않습니다. \n 다시 입력해 주세요!!");
				document.create.pass.focus();
				document.create.pass.select();
				return;
			}
			
			document.create.submit();
		}
		function check_id(){
			window.open("member_check_id.php?id=" + document.create.id.value, "IDcheck", "left=700, top=300, width=350, height=120, scrollbars=no, resizable=yes");
		}
		function reset_form(){
			document.create.id.value='';
			document.create.pass.value='';
			document.create.pass_confirm.value='';
			document.create.name.value='';
			document.create.email1.value='';
			document.create.email2.value='';
			document.create.id.focus();
		}
	</script>
</head>
<body>
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
        <div class="nav_head">
            <ul class="header_icons">
                <li><i class="fas fa-chevron-left"></i><a href="index.php">back</a></li>
            </ul>
        </div>
    </div>  
   </header>
   <section>
        <div class="container">
            <div id="main_content">
                <div id="login_box">
                    <div id="login_title">
                        <h2>Create account</h2>
                    </div>
                    <div id="login">
                        <form action="member_insert.php" method="post" name="create">
                            <div class="form id">
                                <div class="col1">아이디</div>
                                <div class="col2"><input type="text" name="id" /></div>
                                <div class="col3"><a href="#"><img src="img/check_id.gif" onclick="check_id()" alt="중복확인"/></a></div>
                            </div>
                            <div class="clear"></div>
                            <div class="form pass">
                                <div class="col1">비밀번호</div>
                                <div class="col2"><input type="password" name="pass"/></div>
                            </div>
                            <div class="clear"></div>
                            <div class="form pass1">
                                <div class="col1">비밀번호확인</div>
                                <div class="col2"><input type="password" name="pass_confirm"/></div>
                            </div>
                            <div class="clear"></div>
                            <div class="form name">
                                <div class="col1">이름</div>
                                <div class="col2"><input type="text" name="name"/></div>
                            </div>
                            <div class="clear"></div>
                            <div class="form email">
                                <div class="col1">이메일</div>
                                <div class="col2"><input type="text" name="email1" class="ema"/> @ <input type="text" name="email2" class="ema"/></div>
                            </div>
                            <div class="clear"></div>
                            <div class="bottom_line"></div>
                            <div id="login_btn"> 
                                <button onclick="check_input()">저장하기</button>
                                <button onclick="reset_form()">reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <footer>
   </footer>
</body>
</html>