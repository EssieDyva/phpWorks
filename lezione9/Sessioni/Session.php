<?php
session_start();

if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 0;
} else {
	$_SESSION['count']++;
}
sleep(20);

echo $_SESSION['count'];