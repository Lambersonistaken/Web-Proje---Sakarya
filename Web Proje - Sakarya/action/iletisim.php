<?php
$ad = $_POST["name"];
$soyad = $_POST["surname"];
$email = $_POST["email"];
$iletisim_sebebi = $_POST["reason"];
$mesaj = $_POST["mesaj"];
$puan = $_POST["puan"];
?>
<label class="label">Ad: <?php echo $ad; ?></label><br>
<label class="label">Soyad: <?php echo $soyad; ?></label><br>
<label class="label">Email: <?php echo $email; ?></label><br>
<label class="label">İletişim Sebebi: <?php echo $iletisim_sebebi; ?></label><br>
<?php if (isset($_POST["begen_icerik"])||isset($_POST["begen_tasarim"])||isset($_POST["begen_dinamiklik"])){ ?>
	<label class="label">Beğendiğiniz Özellikler:
	<?php echo isset($_POST["begen_icerik"])?"İçerik, ":""; ?>
	<?php echo isset($_POST["begen_tasarim"])?"Tasarım, ":""; ?>
	<?php echo isset($_POST["begen_dinamiklik"])?"Dinamiklik":""; ?>
	</label><br>
<?php } ?>
<label class="label">Mesaj: <?php echo $mesaj; ?></label><br>
<label class="label">Site Puanı: <?php echo $puan; ?></label><br>
<button onclick="location.href='../anasayfa.html'">Anasayfa</button>