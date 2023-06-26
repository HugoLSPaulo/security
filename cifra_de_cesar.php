<?php

//Criptografia
$texto_claro = "hugo";
$letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$aux = array();
for ($y = 0; $y <= strlen($texto_claro); $y++) {
    for ($i = 0; $i <= 26; $i++) {
        if ($letras[$i] == $texto_claro[$y]) {
            $aux[] = $letras[$i + 3];
        }
    }
}
$re = implode("", $aux);
echo $re;

//Decriptografia
$letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

$txt_crip = "qdydudwhdpr";
for($y = 0;$y<strlen($txt_crip);$y++){
    for($i = 0; $i<26; $i++){
          if ($letras[$i] == $txt_crip[$y]) {
            $aux[] = $letras[$i - 3];
        }

    }

}
$re = implode("", $aux);
echo $re;