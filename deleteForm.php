<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>削除画面</title>
</head>
<body>
<form action=""method="post">
<input type="text"name="id"value="" />
<input type="submit"value="検索"/>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$connect=pg_connect("host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150");


$id=$_POST["id"];

$sql=sprintf("SELECT * FROM my_items WHERE id = %d",$id);

$result=pg_query($connect,$sql);
$date=pg_fetch_assoc($result);

if($result==null)
{
	print($_POST["error"]);
}
?>
<input type="hidden" name="error" value="該当する商品は存在しません。"/>
</form>

<form action="delete.php"method="post">

<br><br>商品名
<br><input type="text"name="item_name"value="<?php print($date['item_name']);?>"/>
<br><br>価格
<br><input type="text"name="price"value="<?php print($date['price']);?>"/>
<br><br>キーワード
<br><input type="text"name="keyword"value="<?php print($date['keyword']);?>"/>

<br><br><input type="submit"value="削除する"/>
<input type="hidden" name="id" value="<?php print($date['id']);?>"/>
</form>

<br><form action="menu.php"><input type="submit" value="メニューへ戻る"></form>
</body>
</html>