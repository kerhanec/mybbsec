<title>Umut Aslan</title>

<font color="white" face="Courier New">
<body bgcolor="black">
<center>Lütfen Şifrenizi Giriniz<br><br>
</font>

<form action="" method="post">
<input type="password" name="sifre"> 			<input type="submit" value=">>">

</form>
<br><br><br>
<center><font face="Courier New" color="white">Coded By Umut Aslan</font></center>
<?php

if($_POST){
if($_POST['sifre'] == "umutaslan12"){
session_start();
$_SESSION['umut12'] = true;
header("Location: index.php");
}else{
die("Sifre yanlis Tekrar Deneyiniz");
}
}
?>
</font>
</center>
