<?php


$idade = 16;
$numeroDePessoas = 2;

echo "voce so pode entrar se tiver mais de 18 anos de idade ou se estiver acompanhado\n";

if ($idade >= 18 ) {
    echo "Voce tem $idade anos, voce pode entrar sozinho\n";
} else if($idade >=16 && $numeroDePessoas >=2) {
    echo "voce tem $idade anos, esta acompanhado(a), entao pode entrar\n";
} else{
    echo "voce so tem $idade anos, nao pode entrar";
}

echo "\nAdeus";
