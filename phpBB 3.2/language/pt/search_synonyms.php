<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

$synonyms = array(
	'abençoar'				=> 'abençoado',
	'abreviar'				=> 'reduzir',
	'abr'					=> 'abril',
	'acomodar'				=> 'relaxar',
	'administração'			=> 'sustentação',
	'ago'					=> 'agosto',
	'altura'				=> 'estatura',
	'andré'					=> 'nome',
	'anemia'				=> 'doença',
	'anémico'				=> 'doente',
	'anestesia'				=> 'sensibilidade',
	'anexo'					=> 'ficheiro',
	'anúncios'				=> 'notícias',
	'apatia'				=> 'indiferença',
	'armadura'				=> 'uniforme',
	'arqueiro'				=> 'guerreiro',
	'arqueologia'			=> 'antiguidade',
	'arqueozologia'			=> 'arqueológico',
	'ártico'				=> 'do norte',
	'atendimento'			=> 'recepção',
	'ausência'				=> 'falta',
	'avião'					=> 'aeronave',

	'biologia'				=> 'natural',

	'calendário'			=> 'data',
	'cancelado'				=> 'eliminado',
	'capturar'				=> 'prender',
	'carro'					=> 'automóvel',
	'catálogo'				=> 'guia',
	'cenozóico'				=> 'antigo',
	'centro'				=> 'meio',
	'churrasco'				=> 'churrasqueira',
	'cinza'					=> 'grisalho',
	'comissão'				=> 'multidão',
	'conceder'				=> 'entregar',
	'concordar'				=> 'combinar',
	'conexo'				=> 'ligação',
	'cor'					=> 'tom',
	'criar'					=> 'gerar',
	'curriculum'			=> 'currículo',

	'defesa'				=> 'proteção',
	'desconhecido' 			=> 'ignorado',
	'descrição'				=> 'características',
	'desculpas'				=> 'perdão',
	'desenvolver'			=> 'progredir',
	'dez'					=> 'dezembro',
	'disciplina'	 		=> 'comportamento',

	'enciclopédia'  		=> 'obras',
	'equipes'				=> 'grupos',
	'escritos'				=> 'textos',
	'estético'				=> 'visual',
	'estrangeiro'			=> 'externo',
	'etimologia'			=> 'etimológico',
	'executando'			=> 'rodando',
	'existência'			=> 'vida',
	'exorbitante'			=> 'exagero',
	'exuberante'	 		=> 'abundante',

	'fev'					=> 'fevereiro',
	'favorito'				=> 'predileto',
	'feto'					=> 'ser vivo',
	'fição'					=> 'efeitos',
	'flores'				=> 'florescente',

	'galera'				=> 'pessoal',
	'genealogia'			=> 'genealógica',
	'ginecologia'			=> 'ginecologista',
	'gramática'				=> 'Idioma',
	'guerrilha'				=> 'revolta',

	'haver'					=> 'existir',
	'hemácia'				=> 'hemoglobina',
	'hematina'				=> 'glóbulos',
	'hematite'				=> 'células',
	'hematologia'			=> 'sangue',
	'hipoteca'				=> 'hipotecar',
	'honra'					=> 'dignidade',

	'ID'					=> 'identificação',
	'inocular'				=> 'inoculação',
	'instalar'				=> 'instalação',
	'irrelevante'			=> 'sem importância',

	'jan'					=> 'janeiro',
	'jóias'					=> 'bijuteria',
	'jul'					=> 'julho',
	'julgamento'			=> 'sentença',
	'jun'					=> 'junho',

	'km'					=> 'quilómetro',

	'lazer'					=> 'descanso',
	'licença'				=> 'autorização',
	'limite'				=> 'fronteira',
	'liquificar'			=> 'líquido',

	'm'						=> 'metro',
	'manutenção'			=> 'gerência',
	'mai'					=> 'maio', 
	'mar'					=> 'março', 
	'medieval'				=> 'clássico',
	'milha'					=> 'medida',
	'miscelânea'			=> 'mistura',

	'números'				=> 'quarenta',
	'nov'					=> 'novembro',

	'ocorrência'			=> 'acontecimento',
	'ofensa'				=> 'mágoa',
	'ok'					=> 'correto',
	'omissão'				=> 'falta',
	'organizar'				=> 'arrumar',
	'optimizar'				=> 'óptimo',
	'out'					=> 'Outubro',

	'país'					=> 'não',
	'paleografia'			=> 'decifrar',
	'paleolítico'			=> 'idade da pedra',
	'paleontologia'			=> 'fósseis',
	'paleontólogo'			=> 'paleontologista',
	'paleozóico'			=> 'era primária',
	'panfleto'				=> 'bilhete',
	'paralelo'				=> 'semelhante',
	'parlamento'			=> 'assembleia',
	'PC'					=> 'computador',
	'pediatra'				=> 'infantil',
	'pediatria'				=> 'crianças',
	'peralta'				=> 'peralta',
	'perodontia'			=> 'parodontia',
	'phpBB'					=> 'phpBB.com',
	'pijamas'				=> 'vestes',
	'porto'					=> 'parada',
	'possuir'				=> 'ter',
	'praticar'				=> 'desempenhar',
	'projecto'				=> 'programa',
	'vc'					=> 'você',
	'tb'					=> 'também',
	'tbr'					=> 'trabalhar',
	'provisório'			=> 'temporário',
	'psi'					=> 'psicologia',

	'guito'					=> 'dinheiro',

	'questionário'			=> 'interrogatório',

	'rarefazer'				=> 'dilatar',
	'receber'				=> 'aceitar',
	'recomendar'			=> 'aconselhar',
	'registo'				=> 'cadastro',
	'resistência'			=> 'relutância',
	'resumir'				=> 'sintetizar',
	'reunião'				=> 'comité',
	'rotulado'				=> 'nomeado',

	'sabor'					=> 'gosto',
	'salvador'				=> 'herói',
	'separar'				=> 'dividir',
	'set'					=> 'setembro',
	'sincero'				=> 'verdadeiro',
	'sincronizar'			=> 'ajustar',
	'substituído'			=> 'trocado',
	'sucesso'				=> 'êxito',
	'superintendente'		=> 'supervisor',
	'surpresa'				=> 'inesperado',

	'teatro'				=> 'cinema',
	'trabalhador'			=> 'funcionário',
	'trabalhadores'			=> 'funcionários',
	'trabalho'				=> 'emprego',
	'tradução'				=> 'adaptação',
	'transferido'			=> 'transmitido',

	'usual'					=> 'comum',

	'valor'					=> 'nota',
	'vencer'				=> 'derrotar',
	'verificar'				=> 'verificar',
	'vigor'					=> 'vitalidade',
	'visível'				=> 'notável',
	'vol'					=> 'volume',
);
