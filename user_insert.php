<?php
include('functions.php');
$pdo = db_conn();

// 入力チェック
if (
    !isset($_POST['username']) || $_POST['username']=='' ||
    !isset($_POST['lid']) || $_POST['lid']==''||
    !isset($_POST['lpw']) || $_POST['lpw']==''||
    !isset($_POST['kanri_flg']) || $_POST['kanri_flg']==''||
    !isset($_POST['life_flg']) || $_POST['life_flg']==''
) {
    exit('ParamError');
}

//POSTデータ取得
$username = $_POST['username'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
$life_flg = $_POST['life_flg'];

//DB接続
$dbn = 'mysql:dbname=gsf_d03_db06;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = 'root';

try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    exit('dbError:'.$e->getMessage());
}

//データ登録SQL作成
$sql ='INSERT INTO user_table(id,username,lid,lpw,kanri_flg,life_flg)
VALUES(NULL,:a1, :a2, :a3,:a4,:a5)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $username, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':a4', $kanri_flg, PDO::PARAM_STR);
$stmt->bindValue(':a5', $life_flg, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
} else {
    //index.phpへリダイレクト
    header('Location: user_index.php');
}
