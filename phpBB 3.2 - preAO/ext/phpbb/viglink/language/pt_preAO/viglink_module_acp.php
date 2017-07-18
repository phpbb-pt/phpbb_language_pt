<?php
/**
*
* VigLink extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @Traduzido por: http://phpbbportugal.com - segundo pré-Acordo Ortográfico
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Configurações do VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'O VigLink é um serviço de terceiros que monetiza discretamente os links publicados pelos utilizadores do seu fórum sem afectar a experiência do utilizador. Quando os utilizadores clicam nos seus links externos para produtos ou serviços e acabam por comprar algo, os comerciantes pagam à VigLink uma comissão, na qual uma percentagem é doada para o projecto phpBB. Ao optar por activar o VigLink e doar os recursos para o projecto phpBB, estará a apoiar a nossa organização de código aberto e garantindo a continuidade da segurança financeira.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Pode alterar estas configurações a qualquer momento no painel “<a href="%1$s">Configurações do VigLink</a>” .',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Deixará de ser redireccionado para esta página após preencher as suas preferências nas opções abaixo, e clicar no botão Submeter.',
	'ACP_VIGLINK_ENABLE'			=> 'Activar VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Permite o uso de serviços VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Reivindique os seus próprios ganhos (opcional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Pode reivindicar os seus próprios ganhos ao inscrever-se no VigLink Converter.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Os serviços VigLink foram desactivados pelo phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Reivindique os seus ganhos',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Pode reivindicar os ganhos, do seu fórum, de links monetários VigLink, em vez de doar os ganhos para o projecto phpBB. Para gerir as configurações da sua conta, inscreva-se em "VigLink Convert" ao clicar em "Converter conta".',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Converter conta',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Não foi possível recuperar o link da conta de conversão do VigLink.'
));
