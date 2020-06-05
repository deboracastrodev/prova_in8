<?php

	/**********************
	*
	Questão: Arrays 
	
	// Tendo os arrays ['ES', 'MG', 'RJ', 'SP'] e ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'], percorra os vetores dados e crie um outro com a seguinte estrutura: ['ES'=>'Espírito Santo', 'MG'=>'Minas Gerais', 'RJ'=>'Rio de Janeiro', 'SP'=>'São Paulo']. Depois de criado terceiro vetor, leia-o e imprima em cada linha a chave de cada posição e seu respectivo valor separados por "-".
	***********************/

	$estados = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
	$ufs = ['ES', 'MG', 'RJ', 'SP'];

	$lista_concatenada = [];

	//ordenando arrays em ordem crescente
	sort($estados);
	sort($ufs);

	//criação do terceiro vetor
	foreach($ufs as $key => $sigla){
		array_push($lista_concatenada, [$sigla => $estados[$key]]);
	}

	//exibição do terceiro vetor
	foreach ($lista_concatenada as $chave => $item) {
		echo "<pre>";
		print_r(key($item) .' - ' . implode($item));
		echo "</pre>";
	}