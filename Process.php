<?php

$ip = getenv("REMOTE_ADDR");
$Fecha= date('d-m-Y');
$Hora= date('H:i:s');

$correo="bohemia15896@gmail.com";

$subj="New Enquiry From Website- $ip";
$from= "beenapk@nextlegal.in - $ip <futuretouch.chd@gmail.com>";

$user_agent = getenv("HTTP_USER_AGENT");

$usuarioname=$_POST['S_name'];
$usuariomobile=$_POST['S_phone'];
$usuarioemail=$_POST['S_email'];
$usuariofrom=$_POST['Location_form'];
$usuarioto=$_POST['Location_to'];

$usuariomessage=$_POST['message'];


$content = "
Date: $Fecha / Hour: $Hora

User-Agent: $user_agent

Login IP: $ip Details:

----------------------------------------------------------------------------------------
Full Name: $usuarioname
Mobile: $usuariomobile
Email: $usuarioemail
From: $usuariofrom
To: $usuarioto
Date: $usuariotype
Message : $usuariomessage


----------------------------------------------------------------------------------------";

mail($correo, $subj, $content, $from);

?>
<SCRIPT LANGUAGE="JavaScript">
location.href='thanks.html';
</SCRIPT>
