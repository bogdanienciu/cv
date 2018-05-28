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

		// 		for ($x = 1; $x <= $numar; $x++) {
		//     		if ($x %2 == 0) {
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

		// $rezultat4 = test_even_odd_multiplied(10);
		// dump($rezultat4);


	function before_after($numar1, $numar2) {
		$before = [];
		$after = [];

		for ($x = -$numar1; $x <= $numar1; $x++) {
    		if ($x  < $numar2) {
    			$before[] = $x; 
    		} else 	{
    			$after[] = $x;
    		}
		}

		return [
			'before' => $before,
			'after' => $after,
		];
	}
	$rezultat5 = before_after(10, 8);
		dump($rezultat5);

?>
