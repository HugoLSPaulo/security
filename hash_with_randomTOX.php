
<?php

	$con_s = 0;
	 $v_s[0];

	//sintaxe: hash(string $algo, string $data[, bool $raw_output = FALSE]): string
	
	$revc=hash('sha512', 'UAN FACULDADE DE ENGENHARIA');

	$i=0;
	
	while ($i <= strlen($revc ) && 0) {
		

		$e [rand()%1000] = substr($revc, $i,4);
		$i+=4;

	}


	//echo $revc."<br>";

	//echo strlen($revc)."<br>";

	echo "kmdkndkfndk";


	function gerar_seq(){

		srand(50);

		$GLOBALS['$v_s'];
		
		while ($con_s <= 32) {
		

			 $v_s[$con_s] = rand()%5;

			$con_s++;


			$cons_s!=1 && verif_seq($v_s, $con_s);

		}

		//echo ($v_s[1]);
		print_r($v_s);
	}
	gerar_seq();

	
	function verif_seq($vs, $cont_seq){

		$k=0;

		$GLOBALS['$con_s'] ;

		while ( $k <= $cont_seq) {

			if ( $vs[$k] == $vs[$cont_seq] ) {

				
					$con_s --;

			}

			$k ++;
		}

	}

?>