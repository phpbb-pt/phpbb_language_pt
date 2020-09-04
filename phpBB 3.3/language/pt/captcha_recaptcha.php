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
* @Traduzido por: http://www.phpbb-pt.com - segundo as normas do Acordo Ortográfico
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

$lang = array_merge($lang, array(
	
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'pt-PT',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'			=> 'A solução apresentada não é correta',
	'RECAPTCHA_NOSCRIPT'			=> 'Por favor, ative o JavaScript no seu navegador para carregar o desafio.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Para usar o reCaptcha tem que criar uma conta em <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'			=> 'Este CAPTCHA é realmente invisível. Para verificar se funciona, um pequeno ícone deve aparecer no canto inferior direito desta página.',
 
	
	'RECAPTCHA_PUBLIC'				=> 'Chave de site',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'A sua chave de site do reCAPTCHA. Chaves podem ser obtidas em <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Por favor, use o reCAPTCHA v2 &gt; Selo de reCAPTCHA invisível',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'A chave do seu site do reCAPTCHA. As chaves podem ser obtidas em <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Por favor, use o reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Chave secreta',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'A sua chave secreta do reCAPTCHA. Chaves podem ser obtidas em <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Por favor, use o reCAPTCHA v2 &gt; Selo de reCAPTCHA invisível',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'A sua chave secreta do reCAPTCHA. Chaves podem ser obtidas em <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Por favor, use o reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Domínio solicitado',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'O domínio a ser usado para recuperar o script ao verificar a consulta.<br>Use <samp>recaptcha.net</samp> quando <samp>google.com</samp> não estiver acessível.',

	'RECAPTCHA_V3_METHOD'				=> 'Método de solicitação',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'O método a ser usado ao verificar a solicitação.<br>As opções desativadas não estão disponíveis nas suas configurações.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Limite padrão',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Usado quando nenhuma das outras ações é aplicável.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Limite de conexão',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Limite de postar ',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Limite de registro',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Limite de denúncias',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Limites',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 retorna uma pontuação (<samp>1.0</samp> é muito provável que seja uma boa interação enquanto <samp>0.0</samp> é muito provável que seja um robô). Aqui você pode definir a pontuação mínima por ação.',	
));
