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
* @Traduzido por: http://phpbbportugal.com - segundo pré-Acordo Ortográfico
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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Defina esta opção se a opção de configuração muda com muita frequência para ser eficiente em cache.',
	'CLI_CONFIG_CURRENT'				=> 'Valor actual configuração, use 0 e 1 para especificar valores booleanos',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Configuração eliminada com sucesso %s.',
	'CLI_CONFIG_NEW'					=> 'Novo valor de configuração, use 0 e 1 para especificar valores booleanos',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Configuração %s não existe',
	'CLI_CONFIG_OPTION_NAME'			=> 'O nome da opção de configuração',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Defina esta opção se o valor deve ser impresso sem uma nova linha no final.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Valor de incrementar de',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Configuração %s incrementada com sucesso',
	'CLI_CONFIG_SET_FAILURE'			=> 'Não foi possível definir a configuração %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Configuração definida com sucesso %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Imprime a lista de tarefas Cron agendadas prontas e não prontas.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Executa todas as tarefas Cron prontas agendadas.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nome da tarefa a ser executada',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Actualiza a Base de Dados através da aplicação de migrações.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Elimina uma opção de configuração',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Desactiva a extensão especificada.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Activa a extensão especificada.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Encontra migrações não dependentes.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Corrige a estrutura da árvore dos fóruns e dos módulos.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Obtém o valor de uma opção de configuração',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Aumenta o valor de uma opção de configuração',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lista todas as Extensões na Base de Dados e no sistema de ficheiros.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Executar em modo de segurança (sem extensões).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Iniciar o modo shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Limpa a extensão especificada.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Recalcula a coluna user_email_hash da Tabela de Utilizadores.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Define o valor de uma opção de configuração só se o anterior corresponde ao valor actual',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Define o valor de uma opção de configuração',
	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Actualiza as senhas com hashes desactualizadas por novas com hashes encriptadas por bcrypt. ',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Não foi possível desactivar a extensão %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'A Extensão %s foi desactivada com sucesso',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Não foi possível activar a Extensão %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensão %s activada com sucesso',
	'CLI_EXTENSION_NAME'				=> 'Nome da Extensão',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Não foi possível limpar a Extensão %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'A Extensão %s foi limpa com sucesso',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Não foram encontradas Extensões.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponível',
	'CLI_EXTENSIONS_DISABLED'			=> 'Desactivado',
	'CLI_EXTENSIONS_ENABLED'			=> 'Activado',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Correcção da estrutura da árvore dos fóruns e dos módulos efectuada com sucesso.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Todos os hashes de e-mail foram recalculados com sucesso.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Senhas com hashes desactualizadas foram encriptadas por bcrypt com sucesso.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opcionalmente você pode especificar um nome de tarefa cron para executar apenas a tarefa cron especificado. ',
));
