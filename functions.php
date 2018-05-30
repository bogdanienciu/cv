<?php 
	require __DIR__.'/vendor/autoload.php';

	// function test_even($numar) {
	// 	if ($numar %2 == 0) {
	// 		return "yes";
 //    	}

 //    	return "no";
	// }

	// $rezultat = test_even(9);

	// echo $rezultat;


	// function test_return_even_odd($numar) {
	// 	$even = [];
	// 	$odd = [];

	// 	for ($x = 1; $x <= $numar; $x++) {
 //    		if ($x %2 == 0) {
 //    			$even[] = $x; 
 //    		} else 	{
 //    			$odd[] = $x;
 //    		}
	// 	}

	// 	return [
	// 	 	'even' => $even,
	// 	 	'odd' => $odd,
	// 	 ];
	// }

	// $rezultat2 = test_return_even_odd(10);
	// dump($rezultat2);


	// function test_pozitiv_negativ($numar) {
	// 	$pozitiv = [];
	// 	$negativ = [];

	// 	for ($x = -$numar; $x <= $numar; $x++) {
 //    		if ($x  >= 0) {
 //    			$pozitiv[] = $x; 
 //    		} else 	{
 //    			$negativ[] = $x;
 //    		}
	// 	}

	// 	return [
	// 	 	'pozitiv' => $pozitiv,
	// 	 	'negativ' => $negativ,
	// 	 ];
	// }

	// $rezultat3 = test_pozitiv_negativ(10);
	// dump($rezultat3);


		// function test_even_odd_multiplied($numar) {
		// 		$even = [];
		// 		$odd = [];

		// 		for ($x = 1; $x <=r; $x++) {
		//     		if ($x %2 == 0) { $numa
		//     			$even[] = $x*(2); 
		//     		} else 	{
		//     			$odd[] = $x*(-2);
		//     		}
		// 		}

		// 		return [
		// 		 	'even' => $even,
		// 		 	'odd' => $odd,
		// 		 ];
		// 	}

	// 	$rezultat4 = test_even_odd_multiplied(10);
	// 	dump($rezultat4);


	// function before_after($numar1, $numar2) {
	// 	$before = [];
	// 	$after = [];

	// 	for ($x = -$numar1; $x <= $numar1; $x++) {
 //    		if ($x  < $numar2) {
 //    			$before[] = $x; 
 //    		} else 	{
 //    			$after[] = $x;
 //    		}
	// 	}

	// 	return [
	// 		'before' => $before,
	// 		'after' => $after,
	// 	];
	// }
	// $rezultat5 = before_after(10, 8);
	// 	dump($rezultat5);



		// Folosind functiile de mai jos, completati codul in asa fel incat sa puteti avea o variabila $result de forma
		// in care pe cheia 'match' sa aveti toate numerele pare mai mici decat 5,
		// iar pe cheia 'notmatch' restul numerelor

	function test1($margin) {
		$match = [];
		$notmatch = [];

		for ($i = -$margin; $i <= $margin; $i++) {
			$ok = check($i);

			if ($ok == true) {
				$match[] = $i;
			} 
			else {
				$notmatch[] = $i;
			}
		}

		return [
			'match' => $match,			// returnezi cheia 'match' cu valorile din $match,
			'notmatch' => $notmatch, 	// si cheia 'notmatch' cu valorile din $notmatch
		];	
	}

	function check($number) {
		// if ($number %2 == 0 && $number < 0) {
		// if ($number %2 == 0) {
		if ($number %2 == 0) {
			return true;
		}
		else {
			return false;
		}
	}

	$rezultat6 = test1(10);
	dump($rezultat6);

?>
