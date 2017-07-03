<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>削除結果画面</title>
</head>
<body>
	<div align="center">
<?php

// データベースへの接続
$connect = pg_connect ( "host=localhost dbname=postgres port=5433 user=postgres password=fsiabc3150" );

// データの受け取り
$id = mb_convert_kana ( $_POST ['id'], "a", "UTF-8" );

// 検索を行っているかのチェック
if ($id == "") {
	$message = '<font color="#ff0000">※検索を行ってください（エラー）</font>';
} else {

	// SQLの実行
	$sql = sprintf ( "DELETE FROM my_items WHERE id = %s", $id );

	$done = pg_query ( $connect, $sql );
	if ($done) {
		$message = "データを削除しました。";
	}
}
?>

<br><br>
				<table id="table6309" border="1">
					<tr>
						<td width="55" style="min-width: 55px">結果</td>
						<td width="400"><?php print($message);?><br></td>
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

				</form> <br><form action="deleteForm.php">
						<input type="submit" style="WIDTH: 180px" value="削除画面へ戻る">

					</form> <br><form action="menu.php">
							<input type="submit" style="WIDTH: 180px" value="メニューへ戻る">

						</form>

	</div>
</body>
</html>