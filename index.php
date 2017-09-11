<?php
header('Content-Type: text/plain');
require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create('pt_br');
$faker->addProvider(new Providers\GolPerson($faker));
$faker->addProvider(new Providers\GolAddress($faker));
// quantidade de registros
$qtd_registros = 2000;

for ($i = 1; $i <= $qtd_registros; $i++) {
	$sqlPessoaFisica = $sqlPessoaJuridica = $sqlEmpregado = '';

	// sorteando o sexo da pessoa
	$sexo = mt_rand(1,2) === 1 ? 'male' : 'female';
	$sexoSigla = $sexo === 'male' ? 'M' : 'F'; 

	// definindo os outros dados
	$nomeEmpregado = $faker->unique()->name($sexo);
	$nomePai = $faker->unique()->name('male');
	$nomeMae = $faker->unique()->name('female');
	$email = $faker->unique()->email;
	$cpf = $faker->unique()->cpf(false);
	$cnpj = $faker->unique()->cnpj(false);
	$endereco = $faker->streetName;
	$nascimento = $faker->dateTimeBetween('1950-01-01','1980-12-31')->format('Y-m-d');
	$pis = $faker->unique()->pis(false);
	$empresa = $faker->unique()->company;
	$conta = $faker->randomNumber(5);
	$telefone = $faker->randomNumber(8);
	$cep = '40' . $faker->randomNumber(6);
	$agencia = $faker->randomNumber(4);
	$agenciaDigito = $faker->randomNumber(1);

	// dados de documentos
	$identidade = $faker->randomNumber(6);
	$cartProf = $faker->randomNumber(6);
	$numClasse = $faker->randomNumber(6);
	$cartMili = $faker->randomNumber(6);
	$cartHabilit = $faker->randomNumber(6);
	$numTitElei = $faker->randomNumber(6); 

	// criando os sqls
	$sqlPessoaFisica .= "
			 UPDATE pessoa
			 SET Nome = '$nomeEmpregado',
			 	 Nascimento = '$nascimento',
			 	 Pai = '$nomePai',
			 	 Mae = '$nomeMae',
			 	 CPF = $cpf,
			 	 Endereco = '$endereco',
			 	 Email = '$email',
			 	 ContaCFunc = '$conta',
			 	 Sexo = '$sexoSigla',
			 	 CodBancoFunc = 1,
			 	 EndTelDDD = '71',
			 	 EndTelNum = '$telefone',
			 	 EndCEP = $cep,
			 	 TipoConta = 1,
			 	 AgenciaFunc = $agencia,
			 	 AgenciaDigito = '$agenciaDigito',

			 	 NumIdentidade = '$identidade',
			 	 NumCartProf = '$cartProf',
			 	 NumClasse = '$numClasse',
			 	 NumCrtMilit = '$cartMili', 
			 	 Carthabilit = '$cartHabilit',
			 	 NumTitEleit = '$numTitElei'

			 WHERE 1=1
			   AND id = $i
			   AND tipo = 'F';
			";

	$sqlPessoaJuridica .= "
			 UPDATE pessoa
			 SET NomeRSocial = '$empresa',
			 	 NSoltNFantas = '$empresa',
			 	 NumCGC = '$cnpj',
			 	 DtaNascimento = '$nascimento'
			 WHERE 1=1
			   AND id = $i
			   AND tipo = 'J';
			";

	$sqlEmpregado .= "
			 UPDATE empregado
			 SET NumPISPASEP = $pis
			 WHERE 1=1
			   AND id = $i;
			";

	echo $sqlPessoaFisica;
	echo $sqlPessoaJuridica;
	echo $sqlEmpregado;
}