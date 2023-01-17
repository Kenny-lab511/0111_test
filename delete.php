<?php
//selsect.phpから処理を持ってくる
//1.対象のIDを取得


//2.DB接続します


//3.削除SQLを作成
$stmt = $pdo->prepare("***** **** ******* ***** ******");
$stmt->bindValue('****', ****, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}





