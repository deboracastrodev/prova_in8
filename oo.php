<?php

/************************
Questão: Orientação a objeto 
Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e um método que multiplique as 3 retornando o produto. Deixe um exemplo de utilização da sua classe no final do código.
************************/

class Multiplica {

	private $prop1 = 1;
	private $prop2 = 1;
	private $prop3 = 1;

	public function getProp1(){
		return $this->prop1;
	}

	public function setProp1($prop){
		$this->prop1 = $prop;
		return $this->prop1;
	}

	public function getProp2(){
		return $this->prop2;
	}

	public function setProp2($prop2){
		$this->prop2 = $prop2;
		return $this->prop2;
	}

	public function getProp3(){
		return $this->prop3;
	}

	public function setProp3($prop3){
		$this->prop3 = $prop3;
		return $this->prop3;
	}

	public function multiplicaPropriedades()
	{
		$result = $this->prop1 * $this->prop2 * $this->prop3;
		return $result;
	}
}


$class = new Multiplica();
$class->setProp1(2);
$class->setProp2(4);
$class->setProp3(7);

$result = $class->multiplicaPropriedades();

print_r($result);