<?php
#########
#
#	This will show the result to your user.
#
#########

require_once(dirname(__FILE__) . '/bmi.class.php');

$sex = $_POST['sex'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$umur = $_POST['umur'];
$aktivitas = $_POST['kegiatan'];

store($_POST['nama'], $_POST['email']);

$amr = hitungamr(hitungbmr($sex, $berat, $tinggi, $umur), $aktivitas);
$bmi = hitungbmi($berat, $tinggi);

$hasil = hasilBMI($bmi);


?>
<html><!-- 184803 -->
<head>
	<link type="text/css" rel="stylesheet" href="/bmi-calculator/main.css">
</head>
<body>
	<div class="content">
		<div class="hasil">
			<p>
				Hasil:
				<strong><?php echo $hasil; ?></strong>
			</p>
		</div>
		<div class="singleRes">
			<div class="title">
				1. Hitung Kecukupan Kalori
			</div>
			<div class="desc">
				Kebutuhan kalori per hari Anda sebesar <?php echo number_format($amr, 3); ?> kkal.
			</div>
		</div>
		<div class="singleRes">
			<div class="title">
				2. Indeks Massa Tubuh (BMI)
			</div>
			<div class="desc">
				BMI = <strong><?php echo number_format($bmi, 2); ?></strong>
			</div>
		</div>
		<div class="singleRes">
			<div class="title">
				Klasifikasi BMI (Body Mass Index)
			</div>
			<div class="desc">
				<ul>
					<li>&lt; 18.5 berat badan kurang</li>
					<li>18.5 sampai 24.9 ideal</li>
					<li>25.0 sampai 29.9 berat badan lebih</li>
					<li>&gt; 30 obesitas</li>
				</ul>
			</div>
		</div>
		<div class="singleRes">
			<div class="title">&nbsp;</div>
			<div class="desc">
				Setelah anda mengetahui total kebutuhan kalori dan BMI Anda, langkah selanjutnya adalah menyesuaikan kalori dengan asupan makanan serta olahraga Anda. Hitungannya sederhana: Untuk menjaga berat badan, Anda harus mengonsumsi kalori sebanyak yang dianjurkan. Jika ingin menurunkan berat badan, maka anda harus menciptakan "defisit kalori" dan sebaliknya untuk menaikkan berat bedan, Anda harus menambah kalori dari konsumsi yang dianjurkan.
			</div>
		</div>
		<div class="linklengkap">
			Ingin tahu jenis-jenis makanan dan kalori yang dikandungnya? <a href="http://caloriecount.about.com/foods" class="redlink">Klik di sini</a>.</div>
		</div>
	</div>
</body>
</html>