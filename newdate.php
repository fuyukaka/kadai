<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>挿入結果画面</title>
</head>
<body>
<?php
$connect=pg_connect("host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150");

$id=$_POST['id'];
$item_name=$_POST['item_name'];
$price=$_POST['price'];
$keyword=$_POST['keyword'];

$sql="INSERT INTO my_items(id,item_name,price,keyword) VALUES($id,'$item_name',$price,'$keyword')";

$done=pg_query($connect,$sql2);
if(done)
{
print("データを挿入しました。");
}
else
{
	print("挿入できなかった。");
}
?>
<br><form action="menu.php"><input type="submit" value="メニューへ戻る"></form>
</body>
</html>