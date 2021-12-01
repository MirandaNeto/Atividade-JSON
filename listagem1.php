<?php
//string json contendo os dados de um funcionário
$json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';

//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($json_str);

//imprime o conteúdo do objeto
echo "nome: $obj->nome<br>";
echo "idade: $obj->idade<br>";
echo "sexo: $obj->sexo<br>";


?>
{
empregados:
[
{"nome":"Jason Jones", "idade":38, "sexo": "M"},
{"nome":"Ada Pascalina", "idade":35, "sexo": "F"},
{"nome":"Delphino da Silva", "idade":26, "sexo": "M"}
]
}'