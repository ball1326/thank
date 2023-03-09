<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?
$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysql_select_db("mydatabase");

	for($i=0;$i<count($_POST["chkEmail"]);$i++)
	{
		if($_POST["chkEmail"][$i] != "")
		{
			$strSQL = "INSERT INTO table_name (Mail) VALUES ('".$_POST["chkEmail"][$i]."')";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");			
		}
	}

	echo "Record Insert.";

mysql_close($objConnect);
?>
</body>
</html>