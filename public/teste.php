<?php
$cesta = array("laranja", "morango");
array_push($cesta, "melancia", "batata");
print_r($cesta);


$rules = [
    'descricao' => 'required',
    'sigla' => ['required']
];

array_push($rules['sigla'], 'unique:tipos,sigla');

print_r($rules);

?>