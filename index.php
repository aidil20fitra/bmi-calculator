<html>
<head>
	<link type="text/css" rel="stylesheet" href="/bmi-calculator/main.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.js"></script>
	<script>
		$(document).ready(function(){
			$('#formbmi').on('submit', function(event){
				if (!$('.tinggi').val()){
					alert("Harap isi tinggi badan Anda!");

					event.preventDefault();
					return false;
				}
				if (!$.isNumeric($('.tinggi').val())){
					alert("Harap isi tinggi badan Anda dalam angka!");

					event.preventDefault();
					return false;
				}
				if (!$('.berat').val()){
					alert("Harap isi berat badan Anda!");

					event.preventDefault();
					return false;
				}
				if (!$.isNumeric($('.berat').val())){
					alert("Harap isi berat badan Anda dalam angka!");

					event.preventDefault();
					return false;
				}
				if (!$('.umur').val()){
					alert("Harap isi umur Anda!");

					event.preventDefault();
					return false;
				}
				if (!$.isNumeric($('.umur').val())){
					alert("Harap isi umur Anda dalam angka!");

					event.preventDefault();
					return false;
				}

				return true;
			});

			$('.buttonreset').click(function(){
				$('.tinggi').val('');
				$('.berat').val('');
				$('.umur').val('');
				$('.nama').val('');
				$('.email').val('');
				$('#male').prop('checked', true);
				$('#kegiatan').val('0');
			});
		});
	</script>
</head>
<body>
	<div class="content">
		<div class="judul">
			Idealkah <strong>Body Mas Index</strong> Anda?
		</div>
		<form id="formbmi" class="formbmi" method="post" action="result.php">
			<div class="singleField">
				<div class="label">Nama</div>
				<input type="text" class="nama" placeholder="Nama anda" name="nama" id="nama">
			</div>
			<div class="singleField">
				<div class="label">Email</div>
				<input type="text" class="email" placeholder="Email anda" name="email" id="email">
			</div>
			<div class="singleField">
				<div class="label">Berat Badan</div>
				<input type="text" class="berat" placeholder="Isi dengan angka" name="berat" id="berat">
			</div>
			<div class="singleField">
				<div class="label">Tinggi Badan</div>
				<input type="text" class="tinggi" placeholder="Isi dengan angka" name="tinggi" id="tinggi">
			</div>
			<div class="singleField">
				<div class="label">Usia</div>
				<input type="text" class="umur" placeholder="Isi dengan angka" name="umur" id="umur">
			</div>
			<div class="singleField">
				<div class="label">Jenis Kelamin</div>
				<input type="radio" class="sex" id="male" checked="checked" name="sex" value="m">Male&nbsp;&nbsp; 
				<input type="radio" class="sex" id="female" name="sex" value="f">Female
			</div>
			<div class="singleField">
				<div class="label">Level Aktivitas</div>
				<select name="kegiatan" id="kegiatan" class="kegiatan">
					<option value="0">minim</option>
					<option value="1">ringan (kerja 1-2 hari/minggu)</option>
					<option value="2">normal (kerja 3-5 hari/minggu)</option>
					<option value="3">tinggi (kerja 6-7 hari/minggu)</option>
					<option value="4">berat (atlet, dll)</option>
				</select>
			</div>
			<div class="notif">
				*Ukuran ini tidak bisa diterapkan pada ibu hamil dan menyusui
			</div>
			<div class="meteran">
				<img src="meteran.png">
			</div>
			<div class="buttons">
				<input type="submit" class="buttonsubmit" value="KIRIM">
				<input type="button" class="buttonreset" value="RESET">
			</div>
		</form>
	</div>
</body>
</html>