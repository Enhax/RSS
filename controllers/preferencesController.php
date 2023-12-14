<?php
session_start();
$_SESSION['pref'] = @$_GET['choice'];
isset($_GET['choice']) ? $_GET['choice'] : $_SESSION['pref'] = 6;

require_once '../views/parts/header.php';
require_once '../views/preferences.php';
require_once '../views/parts/footer.php';








