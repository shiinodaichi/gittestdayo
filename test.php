<?php

// 初期パラメータセット

// データベーへの接続
try {
    $dbh = new PDO('mysql:host=localhost;dbname=sample;charset=utf8', 'root','root', array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
    var_dump($e->getMessage());
    exit;
}
    // 記事データ取得
    $sql = "select id, article from articles limit ? offset ?";
    $stmt = ($dbh->prepare($sql));
    $stmt->execute(array(10));
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<!--


//DB接続
try{
	$dbh = new PDO('mysql:host=localhost;dbname=sample;charset=utf-8', 'root','root',array(PDO::ATTR_EMULATE_PREPARES =>false));
}catch (PDOException $e){
	var_dump($e->getMessage());
	exit;
}

$sql = "select id, article from articles limit ?" //from DBname
$stmt = ($dbh->prepare($sql));
$stmt->execute(array(10));
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC)//FEATCH??-->
