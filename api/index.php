<?php
$request = json_decode(file_get_contents("php://input"));

$mockData = [
  ['id' => '6415b1d4d1e29', 'name' => 'Ashtyn Parrish', 'cpf' => '000.111.222-33', 'uf' => 'MG'],
  ['id' => '6415b1d4d1e31', 'name' => 'Richard Conrad', 'cpf' => '000.222.333-44', 'uf' => 'BA'],
  ['id' => '6415b1d4d1e32', 'name' => 'Adam Bray', 'cpf' => '000.333.444-55', 'uf' => 'AC'],
  ['id' => '6415b1d4d1e33', 'name' => 'Sadie Lambert', 'cpf' => '000.444.555-66', 'uf' => 'AM'],
  ['id' => '6415b1d4d1e34', 'name' => 'Kadence Walker', 'cpf' => '000.555.666-77', 'uf' => 'MA'],
  ['id' => '6415b1d4d1e35', 'name' => 'Frederick Tate', 'cpf' => '000.666.777-88', 'uf' => 'PA'],
  ['id' => '6415b1d4d1e36', 'name' => 'Janiyah Montgomery', 'cpf' => '000.777.888-99', 'uf' => 'PE'],
  ['id' => '6415b1d4d1e37', 'name' => 'Olive Rivera', 'cpf' => '000.888.999-00', 'uf' => 'RN'],
  ['id' => '6415b1d4d1e38', 'name' => 'Bryson Riley', 'cpf' => '000.999.000-11', 'uf' => 'TO'],
  ['id' => '6415b1d4d1e39', 'name' => 'Mya Wilkinson', 'cpf' => '111.000.222-22', 'uf' => 'GO'],
  ['id' => '6415b1d4d1e3a', 'name' => 'Kirsten Frye', 'cpf' => '111.222.333-33', 'uf' => 'MS'],
];


foreach ($mockData as $i => $v) {
  if ($v['id'] === $request->id) {
    die(json_encode([
      'type' => 'success',
      'data' => $mockData[$i]
    ]));
  }
}

die(json_encode([
  'type' => 'error',
  'data' => ['cidadao' => 'Cidadão inválido']
]));
