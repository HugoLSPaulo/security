<?php


	//semente de micro-segundos

	function fazer_seed(){

		list($usec, $sec) = explode(' ', microtime());

		return (float) $sec + ((float) $usec * 100000);

	}

	mt_srand(fazer_seed());
	$val_Al = mt_rand();

	echo($val_Al);

	




?>