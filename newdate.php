<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>挿入結果画面</title>
</head>
<body>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$connect=pg_connect("host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150");

$id=mb_convert_kana($_POST['id'],"a","UTF-8");
$item_name=$_POST['item_name'];
$price=mb_convert_kana($_POST['price'],"a","UTF-8");
$keyword=$_POST['keyword'];

if($item_name=="" || $price=="" || $keyword=="")
{
	print("※空白の欄があります。");
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
			print("価格は数字で入力してください。");
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
			print("ID・価格は数字で入力してください。");
		}
	}
if($result)
{
	print("データを挿入しました。");
}
}

?>
<br><form action="newdateForm.php"><input type="submit" value="登録画面へ戻る"></form>
<br><form action="menu.php"><input type="submit" value="メニューへ戻る"></form>
</body>
</html>