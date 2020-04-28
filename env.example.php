<?php
//須至 cloudschool API 設定那裡取得以下兩項
$API_client_id='';//貴校API的帳號
$API_client_secret='';//貴校API的密碼

//連接資料庫
$acc = '資料庫帳號';
$pwd = '資料庫密碼';
$connection = new PDO('mysql:host=localhost;dbname=ehdes;charset=utf8', $acc, $pwd);

//上傳目錄設為777
$UPLOAD_PATH = "upload/";