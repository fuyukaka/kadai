<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>一覧画面</title>
</head>
<body>

<?php
$connect=pg_connect("host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150");

//SQLの実行
$result = pg_query($connect, "SELECT * FROM my_items ORDER BY id");

//データの取得
$arr = pg_fetch_all($result);

?>
<table border="1">
<tr>
<?php
//テーブルヘッダとしてフィールド（カラム）名を出力
$flds = pg_num_fields($result);
for($i=0; $i<$flds; $i++){
	$field = pg_field_name($result, $i);
	print("<td>".$field."</td>");
}
?>
</tr>

<?php
//データの出力
foreach($arr as $rows){
	print("<tr>");
	foreach($rows as $value){
		printf("<td>".$value."</td>");
	}
	print("</tr>");
}
				?>

</table>
</body>
</html>