function hitungbmr(sex, berat, tinggi, umur){
	var hasil = 1.0;
	if (sex == 'f'){
		hasil = 655 + (9.6 * berat) + (1.8 * tinggi) - (4.7 * umur)
	}else{
		hasil = 65 + (13.7 * berat) + (5 * tinggi) - (6.8 * umur);
	}
	console.log(hasil);
	console.log(berat);
	console.log(tinggi);
	console.log(umur);

	return hasil;
}

function hitungamr(bmr, aktivitas){
	var persenan = new Array(
		1.2,	// minim
		1.375,	// ringan
		1.55,	// normal
		1.725,	// tinggi
		1.9		// berat
		);

	return bmr * persenan[aktivitas];
}

function hitungbmi(berat, tinggi){
	tinggi = tinggi/100;
	return berat / (tinggi * tinggi);
}

// document ready
	// hitungamr(hitungmbr(post x 4), post cmb box)