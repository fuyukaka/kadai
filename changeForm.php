<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>変更画面</title>
</head>
<body>
<div align="center">
<form action=""method="post">
<input type="text"name="id"value="" size="8"/>
<input type="submit"value="ID検索"/>
<?php

error_reporting(E_ALL ^ E_NOTICE);
$connect=pg_connect("host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150");


$id=mb_convert_kana($_POST['id'],"a","UTF-8");

$sql=sprintf("SELECT * FROM my_items WHERE id = %d",$id);

$result=pg_query($connect,$sql);

$date=pg_fetch_assoc($result);

if($date==null)
 {
 print('<br><font color="#ff0000">'.$_POST["error"].'</font>');
 }

?>
<input type="hidden" name="error" value="該当する商品は存在しません。"/>
</form>


<form action="change.php"method="post">
<br><br>
<table id="table2210" border="1">
					<tr>
						<td width="70">商品名</td>
						<td width="185"><input type="text"name="item_name"value="<?php print($date['item_name']);?>"/></td>
					</tr>
					<tr>
						<td>価格</td>
						<td><input type="text"name="price"value="<?php print($date['price']);?>"/></td>
					</tr>
					<tr>
						<td>備考</td>
						<td><input type="text"name="keyword"value="<?php print($date['keyword']);?>"/></td>
					</tr>
				</table>
				<style type="text/css">
<!--
#table2210 {
	text-align: left;
	border: solid 2px #808080;
	border-collapse: collapse
}

#table2210>tbody>tr>td {
	border: 1px #808080;
	border-style: solid dotted;
	padding: 4px;
	min-width: 60px
}
-->
</style>



<br><br><input type="submit"style="WIDTH: 180px"value="変更する"/>
<input type="hidden" name="id" value="<?php print($date['id']);?>"/>
</form>
<br><form action="menu.php"><input type="submit" style="WIDTH: 180px" value="メニューへ戻る"></form>
</div>
</body>
</html>