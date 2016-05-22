<meta charset="euc-kr">

<?
	$hp=$hp1."-".$hp2."-".$hp3;
	$email=$email1."@".$email2;


	$ip=$REMOTE_ADDR;

	include "";

	$sql="select *from ngnmember where id='$id'";
	$result=mysql_query($sql,$connect);
	$exist_id=mysql_num_rows($result);


	if($exist_id)
	{
		echo("
			<script>
			window.alert('해당아이디가 존재합니다.')
			history.go(-1)
			</script>
			");
		exit;
	}

	else
	{
		$sql="insert into member(id,pass,name,hp,email,level,address)";
		$sql.="values('$id','$pass','$name','$hp','$email','$level','$address')";

		mysql_query($sql, $connect);
	}

	mysql_close();

	echo("
		<script>
		location.href='../index.php';
		</script>
		");
	
?>