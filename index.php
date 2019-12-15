<?
	@session_start();
	extract($_SESSION);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
</head>

<body>
<div id="wrap">
	<div id="header">
    <? include "./lib/top_login1.php"; ?>
	</div>  <!-- end of header -->

	<div id="menu">
	<? include "./lib/top_menu1.php"; ?>
	</div>  <!-- end of menu --> 

  <div id="content">
		<div id="logo_img.png"><img src="./img/logo.jpg.jpg"></div>
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
