<?php
	$id=$_POST["id"];
	$pass=$_POST["pass"];
	$name=$_POST["name"];
	$email1=$_POST["email1"];
	$email2=$_POST["email2"];
	$email=$email1."@".$email2;
	$regist_day=date("Y-m-d (H:i)");
	
    $con=mysqli_connect("localhost", 'wnstjr541',"rkwurk11!","wnstjr541");//mysql 서버 접속('host','사용자계정(root)','비밀번호','데이터베이스(sample)')
	
	$sql="insert into members (id, pass, name, email, regist_day, level, point)";
	
	$sql .="values ('$id', '$pass', '$name', '$email','$regist_day',9, 0 )";
	
	mysqli_query($con, $sql);//명령 실행
	
	mysqli_close($con);
	echo "<script>location.href='index.php'</script>";
	
?>