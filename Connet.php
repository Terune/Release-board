<?
	$HOST="localhost";
	$DBNAME=��DB��;
	$DBUSER=������ھ��̵�;
	$DBPW=����й�ȣ;
	
	$conn = mysql_connect("$HOST", "$DBUSER", "$DBPW") or die(mysql_error());
	mysql_query("set names 'utf8'");
	mysql_select_db("$DBNAME", $conn) or die(mysql_error());
?>