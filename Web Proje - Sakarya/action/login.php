<?php
$kuladi = $_POST["username"];
$sifre = $_POST["password"];

if ($kuladi == "b191210090@sakarya.edu.tr" && $sifre == "1234") {
	echo "Hoşgeldiniz b191210090";
	?>
	<button onclick="location.href='../anasayfa.html'">Anasayfa</button>
	<?php
}
else {
	header("location: ../index.html");
	die();
}



