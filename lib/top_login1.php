    <div id="logo"><a href="index.php"><img src="./img/logo2.jpg.png" border="0"></a></div>
	<div id="top_login">
<?
	error_reporting(0);
	extract($_SESSION);
	//$userid="";
    if(!$userid)
	{
?>
          <a href="./login/login_form.php">로그인</a> | <a href="./member/member_form.php">회원가입</a>
<?
	}
	else
	{
?>
		<?=$usernick?> (level:<?=$userlevel?>) | 
		<a href="./login/logout.php">로그아웃</a> | <a href="./login/member_form_modify.php">정보수정</a>
<?
	}
?>
	 </div>
