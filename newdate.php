<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>挿入結果画面</title>
</head>
<body>
<div align="center">
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'Off');
$connect=pg_connect("host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150");

$id=mb_convert_kana($_POST['id'],"a","UTF-8");
$item_name=$_POST['item_name'];
$price=mb_convert_kana($_POST['price'],"a","UTF-8");
$keyword=$_POST['keyword'];

$sql = sprintf ( "SELECT * FROM my_items WHERE id = %d", $id );

$result = pg_query ( $connect, $sql );
$date = pg_fetch_assoc ( $result );

if (!($date == null)) {
	$message='<font color="#ff0000">※既に存在するIDです（エラー）<font color="#ff0000">';
}

if($item_name=="" || $price=="" || $keyword=="")
{
	$message='<font color="#ff0000">※空白の欄があります（エラー）<font color="#ff0000">';
}

else
{
	if($id=="")
	{
		if(ctype_digit($price))
		{
$sql="INSERT INTO my_items(item_name,price,keyword) VALUES('$item_name',$price,'$keyword')";

$result=pg_query($connect,$sql);
		}
		else {
			$message='<font color="#ff0000">※価格は数字で入力してください（エラー）</font>';
		}
	}
	else
	{
		if(ctype_digit($price) && ctype_digit($id))
		{
		$sql="INSERT INTO my_items(id,item_name,price,keyword) VALUES($id,'$item_name',$price,'$keyword')";

		$result=pg_query($connect,$sql);
		}
		else
		{
			$message='<font color="#ff0000">※ID・価格は数字で入力してください（エラー）</font>';
		}
	}
if($result)
{
	$message="データを挿入しました";
}
}

?>

<br><br>
<table id="table6309" border="1">
		<tr>
			<td width="55" style="min-width: 55px">結果</td>
			<td width="371"><?php print($message);?><br></td>
		</tr>
	</table>
	<style type="text/css">
<!--
#table6309 {
	text-align: left;
	border: solid 2px #808080;
	border-collapse: collapse
}

#table6309>tbody>tr>td {
	border: 1px #808080;
	border-style: solid dotted;
	padding: 4px;
	min-width: 60px
}
-->
</style>


<br><form action="newdateForm.php"><input type="submit" style="WIDTH: 180px" value="登録画面へ戻る"></form>
<br><form action="menu.php"><input type="submit" style="WIDTH: 180px" value="メニューへ戻る"></form>
</div>
</body>
</html>