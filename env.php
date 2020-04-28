<?php
//須至 cloudschool API 設定那裡取得以下兩項
$API_client_id='9082f708e2c17cd259cdcc56d604f8e8';//貴校API的帳號
$API_client_secret='6fb52349a422f34d1b45c98ba492c9b5';//貴校API的密碼

//連接資料庫
$acc = 'root';
$pwd = 'wang1026';
$connection = new PDO('mysql:host=localhost;dbname=ehdes;charset=utf8', $acc, $pwd);

//上傳目錄設為777
$UPLOAD_PATH = "upload/";