<?php

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
        'CNPJ' => $faker->numberBetween($min = 10000000000000, $max = 99999999999999),
        'razao_social' => $faker->word,
        'nome_fantasia' => $faker->word,
        'CEP' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'logradouro' => $faker->word,
        'numero' => $faker->numberBetween($min = 1, $max = 10000),
        'telefone' => $faker->numberBetween($min = 1000000000, $max = 99999999999),
        'email' => $faker->safeEmail,
        'complemento' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'bairro' => $faker->word,
        'cidade' => $faker->city,
        'estado' => $faker->stateAbbr,
        'segmento' => array_random(['Produto', 'Serviço', 'Produto e Serviço']),
        'inscricao_municipal' => $faker->word,
        'inscricao_estadual' => array_random(['', $faker->word])
    ];
});
