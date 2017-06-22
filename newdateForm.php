<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>挿入画面</title>
</head>
<body>
<form action="newdate.php"method="post">

ID(入力しない場合は自動でIDが設定されます）
<br><input type="text"name="id"value=""/>
<br><br>商品名
<br><input type="text"name="item_name"value=""/>
<br><br>価格
<br><input type="text"name="price"value=""/>
<br><br>キーワード
<br><input type="text"name="keyword"value=""/>

<br><br><input type="submit"value="送信する"/>

</form>
<br><form action="menu.php"><input type="submit" value="メニューへ戻る"></form>
</body>
</html>