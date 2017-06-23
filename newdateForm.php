<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>挿入画面</title>
</head>
<body>
<div align="center">
<form action="newdate.php"method="post">
<br><br>
<table id="table2210" border="1">
					<tr>
						<td width="70">ID</td>
						<td width="185"><input type="text" size=37 placeholder="入力しない場合は自動でIDが設定されます"name="id"value=""/></td>
					</tr>
					<tr>
						<td>商品名</td>
						<td><input type="text" size=37 name="item_name"value=""/></td>
					</tr>
					<tr>
						<td>価格</td>
						<td><input type="text" size=37 name="price"value=""/></td>
					</tr>
					<tr>
						<td>備考</td>
						<td><input type="text" size=37 name="keyword"value=""/></td>
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



<br><br><input type="submit" style="WIDTH: 180px" value="送信する"/>

</form>
<br><form action="menu.php"><input type="submit" style="WIDTH: 180px" value="メニューへ戻る"></form>
</div>
</body>
</html>