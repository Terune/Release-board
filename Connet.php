<?
	$HOST="localhost";
	$DBNAME=“DB명”;
	$DBUSER=“사용자아이디”;
	$DBPW=“비밀번호;
	
	$conn = mysql_connect("$HOST", "$DBUSER", "$DBPW") or die(mysql_error());
	mysql_query("set names 'utf8'");
	mysql_select_db("$DBNAME", $conn) or die(mysql_error());
?>