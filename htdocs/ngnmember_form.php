<?
	session_start();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta charset="euc-kr">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/clean-blog.min.css" rel="stylesheet" type="text/css" media="all">

<script>
function check_id()
{
	window.open("check_id.php?id="+document.member_form.id.value, "IDcheck", "left=200, top=200, width=200, height=60, scrollbars=no, resizable=yes");

}

function check input()
{
	if(!document.member_form.id.value)
	{
		alert("아이디를 입력하세요");
		document.member_form.id.focus();
		return;
	}

	if(!document.member_form.id.value)
	{
		alert("비밀번호를 입력하세요");
		document.member_form.pass.focus();
		return;
	}

	if(!document.member_form.pass_confirm.value)
	{
		alert("비밀번호 확인을 입력하세요");
		document.member_form.pass_confirm.focus();
		return;
	}

	if(!document.member_form.name.value)
	{
		alert("이름을 입력하세요");
		document.member_form.name.focus();
		return;
	}

	if(!document.member_form.hp2.value || !document.member_form.hp3.value)
	{
		alert("휴대폰 번호를 입력하세요요");
		document.member_form.hp1.focus();
		return;
	}

	if(document.member_form.pass.value != document.member_form.pass_confirm.value)
	{
		alert("비밀번호가 일치하지 않습니다.\n 다시입력해주세요.");
		document.member_form.pass.focus();
		document.member_form.pass.select();
		return;
	}

	document.member_form.submit();
} 

function reset_form()
{
	document.member_form.id.value="";
	document.member_form.pass.value="";
	document.member_form.pass_confirm.value="";
	document.member_form.name.value="";
	document.member_form.hp1.value="010";
	document.member_form.hp2.value="";
	document.member_form.hp3.value="";
	document.member_form.email1.value="";
	document.member_form.email2.value="";
	document.member_form.level.value="";
	document.member_form.address.value="";

	document.member_form.id.focus();

	return;
}
</script>
</head>
<body>
<div id="wrap">
<div id="header">
<?include "../lib/top_login2.php";?>
</div><!--end of header-->

<div id="menu">
<?include "../lib/top_main2.php";?>
</div>


<div id="content">
<div id="col1">
<div id="left_menu">
<?include "../lib/left_menu.php";?>
</div>
</div>

<div id="col2">
<form name = "member_form" method="post" action="insert.php">

<div id="form_join">
<div id ="join1">
<ul>
<li>아이디</li>
<li>비밀번호</li>
<li>비밀번호 확인</li>
<li>이름</li>
<li>핸드폰 번호</li>
<li>이메일</li>
<li>학년</li>
<li>주소></li>
</ul>
</div>

<div id="join2">
<ul>
<li><div id="id1"><input type="text" name="id"></div>
<div id="id2"><a href="#"><img src=""onclick="check_id()"></a></div><div id="id3">4~12자의 영문 소문자, 숫자와 특수기호(_)만 사용할 수 있습니다.</div></li>

<li><input type="password" name="pass"></li>
<li><input type="password" name="pass_confirm"></li>
<li><input type="text" name="name"></li>
<li><select class="hp" name="hp1">
<option value='010'>010</option>
<option value='011'>011</option>
<option value='016'>016</option>
<option value='017'>017</option>
</select> -<input type="text" class="hp" name="hp2">
<input type="text" class="hp" name="hp3"></li>
<li><input type="text" id="email" name="email1">@
<input type="text" name="email2"></li>
<li><input type="text" name="level"></li>
<li><input type="text" name="address"></li>
</ul>
</div>
<div class="clear"></div>
</div>

<div id="button"><a href="#"><img src="" onclick="chech_input()"></a>&nbsp;&nbsp;
<a href="#"><img src=" "onclick="rest_form()"></a>
</div>
</form>

</div>
</div>
</div>

</body>
</html>
