<?php
/**
 *	Count the BMR. BMR are acronym for Basal Metabolic Rate.
 *	It tells how many calories one burn if stay in bed all day.
 */
function hitungbmr($sex, $berat, $tinggi, $umur){
	$hasil = 1.0;
	if ($sex == 'f'){
		$hasil = 655 + (9.6 * $berat) + (1.8 * $tinggi) - (4.7 * $umur);
	}else{
		$hasil = 65 + (13.7 * $berat) + (5 * $tinggi) - (6.8 * $umur);
	}
	// console.log($hasil);
	// console.log($berat);
	// console.log($tinggi);
	// console.log($umur);

	return $hasil;
}
/**
 *	Count the AMR with given BMR. AMR (Active Metabolic Rate)
 *	tells how much calories you burn if you are doing routine activity.
 */
function hitungamr($bmr, $aktivitas){
	$persenan = array(
		1.2,	// minim
		1.375,	// ringan
		1.55,	// normal
		1.725,	// $tinggi
		1.9		// $berat
		);

	return $bmr * $persenan[$aktivitas];
}
/**
 *
 */
function hitungbmi($berat, $tinggi){
	$tinggi = $tinggi/100;
	return $berat / ($tinggi * $tinggi);
}
/**
 *	This will tell the user of the application in what zone they are with given BMI.
 */
function hasilBMI($bmiscore){
	if ($bmiscore < 18.5){
		return "Berat Badan Anda Kurang"; // underweight
	}else if ($bmiscore < 25 && $bmiscore >= 18.5){
		return "Berat Badan Anda Ideal"; // ideal weight
	}else if ($bmiscore < 30 && $bmiscore >= 25){
		return "Anda Kelebihan Berat Badan"; // overweight
	}else if ($bmiscore >= 30){
		return "Anda Mengalami Obesitas"; // obesity
	}
}
/**
 *	This is an extra function. You will be able to store the information of your app user.
 *	You can use this to get the result. I store only the name and email because I don't really
 *	want to store their weight and judge them.
 */
function store($nama, $email){
	$dbconn = new mysqli("localhost", "profesi_bmi", "^I,cMfNxbO-w", "profesi_bmi"); /// Change this value to your database

	if ($dbconn->connect_errno){
		exit();
	}

	$nama = $dbconn->real_escape_string($nama);
	$email = $dbconn->real_escape_string($email);

	$result = $dbconn->query("INSERT INTO bmi_pengguna (nama, email) VALUES ('$nama', '$email')");

	$dbconn->close();
}
/**
 *	This will take the result from your data stored and store it in CSV file.
 */
function getData(){
	$dbconn = new mysqli("localhost", "profesi_bmi", "^I,cMfNxbO-w", "profesi_bmi"); /// Change this value to your database
	$filename = 'daftar.csv';

	if ($dbconn->connect_errno){
		exit();
	}

	$result = $dbconn->query("SELECT nama,email,tanggal FROM bmi_pengguna", MYSQLI_USE_RESULT);

	if ($result){
		// $rows = $result->fetch_all(MYSQLI_ASSOC);

		/// write headers to file
		$file = fopen(dirname(__FILE__) . '/' . $filename, 'w');
		fputcsv($file, array('Nama', 'Email', 'Tanggal'));

		while($row = $result->fetch_assoc()){
			fputcsv($file, $row);
		}

		fclose($file);

		$result->close();

		$dbconn->close();
	}
}

?>