<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>一覧画面</title>
</head>
<body>
<div align="center">
<?php
$connect = pg_connect ( "host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150" );

// SQLの実行
$result = pg_query ( $connect, "SELECT * FROM my_items ORDER BY id" );

//結果を連想配列に変換
$arr = pg_fetch_all ( $result );

?>
<table id="table5594" border="1">
		<tr align="center">
			<td width="45">ID</td>
			<td width="150">商品名</td>
			<td width="49">価格</td>
			<td width="200">備考</td>
		</tr>

<?php
// データの出力
foreach ( $arr as $rows ) {
	print ("<tr>") ;
	foreach ( $rows as $value ) {
		printf("<td>".$value."</td>");
	}
	print("</tr>");
}
?>

	</table>
	<style type="text/css">
<!--
#table5594 {
	text-align: left;
	border: double 3px #808080;
	border-collapse: collapse
}

#table5594>tbody>tr>td {
	border: 1px #808080;
	border-style: solid dotted;
	padding: 4px
}
-->
</style>
	<br><form action="menu.php">
			<input type="submit"style="WIDTH: 180px" value="メニューへ戻る">

		</form>
</div>
</body>
</html>