<?php
ob_start();
session_start();

// Title mysql alapon
function gettitle() {
$get = "SELECT pagetitle FROM titles WHERE file='$file'";
$file = $_POST['file'];
$query = mysql_query($get) or die(mysql_error());
$title = mysql_fetch_array($query);
}

// Title-k be�ll�t�sa
$title00 = 'AniSekai -';
$title_default = ' Nem l�tez� oldal';
$title01 = ' H�rek';
$title02 = ' Regisztr�ci�';
$title03 = ' Elfelejtett jelsz�';
$title04 = ' Profil';

// Server v�ltoz�k
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];

// Bel�ptetett user benttart�sa
function loggedin() {
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
return true;
} else {
return false;
}
}

/* function ranks() {
$query = "SELECT id FROM users WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password_hash)."'";
if(mysql_num_rows($query)>0) {
$ranks = mysql_fetch_assoc($query);
print_r($_ranks);
if ($ranks['rank'] == 0) {
// User r�sz
} else if($ranks['rank'] == 1) {
// Csapattag r�sz
} else if($ranks['rank'] == 2) {
// Admin r�sz
}
}
} */
?>