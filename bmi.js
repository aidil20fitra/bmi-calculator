function hitungbmr(sex, berat, tinggi, umur){
	if (sex == 'f'){
		return 655 + (9.6 * berat) + (1.8 * tinggi) - (4.7 * umur);
	}else{
		return 65 + (13.7 * berat) + (5 * tinggi) - (6.8 * umur);
	}
}

function hitungamr(bmr, aktivitas){
	var persenan = array(
		1.2,	// minim
		1.375,	// ringan
		1.55,	// normal
		1.725,	// tinggi
		1.9		// berat
		);

	return bmr * persenan[aktivitas];
}

function hitungbmi(berat, tinggi){
	return berat / (tinggi * tinggi);
}

// document ready
	// hitungamr(hitungmbr(post x 4), post cmb box)