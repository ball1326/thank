<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<script language="JavaScript">
	function onSave()
	{
		if(confirm('Do you want to save ?')==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>
<form name="frmMain" action="save.php" method="post" OnSubmit="return onSave();">
<?
$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysql_select_db("mydatabase");
$strSQL = "SELECT * FROM customer";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="59"> <div align="center">Budget </div></th>
    <th width="71"> <div align="center">Used </div></th>
    <th width="30"> <div align="center">Select </div></th>
  </tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?=$objResult["CustomerID"];?></div></td>
    <td><?=$objResult["Name"];?></td>
    <td><?=$objResult["Email"];?></td>
    <td><div align="center"><?=$objResult["CountryCode"];?></div></td>
    <td align="right"><?=$objResult["Budget"];?></td>
    <td align="right"><?=$objResult["Used"];?></td>
    <td align="center"><input type="checkbox" name="chkEmail[]" value="<?=$objResult["Email"];?>"></td>
  </tr>
<?
}
?>
</table>
<?
mysql_close($objConnect);
?>
<input type="submit" name="btnSave" value="Save">
</form>
</body>
</html>