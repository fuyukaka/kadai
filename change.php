<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>変更結果画面</title>
</head>
<body>

<?php
$connect=pg_connect("host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150");

$id=$_POST['id'];
$item_name=$_POST['item_name'];
$price=$_POST['price'];
$keyword=$_POST['keyword'];

$sql=sprintf("UPDATE my_items SET item_name='%s',price=%d,keyword='%s' WHERE id=%d",$item_name,$price,$keyword,$id);

$done=pg_query($connect,$sql);
if($done)
{
	print("データを更新しました。");
}
else
{
	print("データを更新できませんでした。");
}

?>

</body>
</html>