<?php 

/************************
Questão: Função recursiva
Crie uma função recursiva para descobrir o menor número inteiro divisível por 2, 3 e 10 ao mesmo tempo. Quando encontrá-lo, imprima-o na tela.
************************/

function calculadivisor ($n){
	if ( $n % 2 === 0 && $n % 3 === 0 && $n % 10 === 0) {
		print_r($n);
	}else{
		$n++;
		calculadivisor($n);
	}
}

calculadivisor(1);