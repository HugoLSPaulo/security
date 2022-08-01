<?php
	
	//Num publicos
	$q = 353;
	$alf=3;
   
   
	//privado
	$xa = 97;
	$xb = 233;

	$Ya = $alf^$xa % $q;
	$Yb = $alf^$xb % $q;


	//chave

	$ka = $Yb^$xa % $q;

	$kb = $Ya^$xb % $q;


	//chaves privadas

	echo("Chaves privadas ".$xa."->".$xb)."<br>";

	

	echo("Valores publicos para cada lado ".$Ya."->".$Yb)."<br>";
	//apresentar no form valores para cada lado:


	//chaves

	echo("Chaves A e B ".$ka."->".$kb);


?>