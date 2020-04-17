<?php
session_start();
echo $_SESSION['login_title'] . " " . $_SESSION['login_name'] . " 你好！";