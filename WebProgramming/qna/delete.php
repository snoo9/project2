<?
   @session_start();
	extract($_SESSION);
	extract($_GET);

   include "../lib/dbconn.php";

   $sql = "delete from $table where num = $num";
   mysql_query($sql, $connect);

   mysql_close();

   echo "
	   <script>
	    location.href = 'list.php?table=$table';
	   </script>
	";
?>

