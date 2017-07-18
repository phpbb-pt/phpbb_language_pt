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
	'CLI_DESCRIPTION_DB_LIST'					=> 'Listar todas as migrações instaladas e disponíveis.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Actualiza a Base de Dados através da aplicação de migrações.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Reverter uma migração.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Elimina uma opção de configuração',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Desactiva a extensão especificada.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Activa a extensão especificada.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Encontra migrações não dependentes.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Corrige a estrutura da árvore dos fóruns e dos módulos.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Obtém o valor de uma opção de configuração',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Aumenta o valor de uma opção de configuração',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lista todas as Extensões na Base de Dados e no sistema de ficheiros.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Nome do ambiente.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Executar em modo de segurança (sem extensões).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Iniciar o modo shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Limpa a extensão especificada.',

	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Lista os tipos de texto que podem ser reanalisados.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'		=> 'Reanalisadores disponíveis:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> 'Texto reanalisado guardado com o serviço actual de text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Tipo de texto a reanalisar. Deixe em branco para reanalisar tudo.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Sem quaisquer alterações, apenas veja o resultado que seria desta operação',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'ID do registo menor a ser processado',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'ID do registo maior a ser processado',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Número aproximado de registos a serem processados de cada vez',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Começar a reanalisar desde onde a última execução parou',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Recalcula a coluna user_email_hash da Tabela de Utilizadores.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Define o valor de uma opção de configuração só se o anterior corresponde ao valor actual',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Define o valor de uma opção de configuração',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Remover todas as miniaturas existentes.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Criar todas as miniaturas que estão em falta.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Recriar todas as miniaturas.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Verificar se o fórum esta actualizado.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Nome da extensão a verificar(se seleccionar todos, verificará todas as extensões)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Executar comando de verificação com cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Executar comando escolhendo para verificar somente versões estáveis ou instáveis.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Actualiza as senhas com hashes desactualizadas por novas com hashes encriptadas por bcrypt. ',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" precisa de ser definido como "estável" ou "instável".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Activar (ou desactivar) uma conta de utilizador.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Nome de Utilizador da conta a activar.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Desactivar a conta do utilizador',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'O utilizador já se encontra activo.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'O utilizador já se encontra inactivo.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Adicionar novo utilizador.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Nome de Utilizador do novo utilizador',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Senha do novo utilizador',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Endereço e-mail do novo utilizador',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Enviar email de activação da conta para o novo utilizador (não enviado por defeito)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Remover a conta de utilizador.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Nome de Utilizador do utilizador a remover',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Remover todas as mensagens do utilizador. Sem esta opção, as mensagens do utilizador serão mantidas.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Reforçar limpeza dos nomes de utilizadores.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Não foi possível desactivar a extensão %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'A Extensão %s foi desactivada com sucesso',
	'CLI_EXTENSION_DISABLED'			=> 'A Extensão %s não está activada',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Não foi possível activar a Extensão %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensão %s activada com sucesso',
	'CLI_EXTENSION_ENABLED'				=> 'A Extensão %s já se encontrava activada',
	'CLI_EXTENSION_NAME'				=> 'Nome da Extensão',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Não foi possível limpar a Extensão %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'A Extensão %s foi limpa com sucesso',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Não foi possível actualizar a extensão %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'A extensão %s foi actualizada com sucesso',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Não foram encontradas Extensões.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponível',
	'CLI_EXTENSIONS_DISABLED'			=> 'Desactivado',
	'CLI_EXTENSIONS_ENABLED'			=> 'Activado',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Correcção da estrutura da árvore dos fóruns e dos módulos efectuada com sucesso.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Todos os hashes de e-mail foram recalculados com sucesso.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Senhas com hashes desactualizadas foram encriptadas por bcrypt com sucesso.',

	'CLI_MIGRATION_NAME'					=> 'Nome da migração, incluindo o conjunto de nomes (utilize barras inclinadas ao invés de contra-barras para evitar problemas).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Migrações disponíveis',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Migrações instaladas',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'			=> 'Mostrar apenas as migrações disponíveis',
	'CLI_MIGRATIONS_EMPTY'				  => 'Sem migrações.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'A reanalisar %1$s (intervalo %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'A reanalisar %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Reanálise terminada com sucesso',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) apagadas.',
	'CLI_THUMBNAIL_DELETING'	=> 'A apagar miniaturas',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) ignoradas.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) geradas.',
	'CLI_THUMBNAIL_GENERATING'	=> 'A criar miniaturas',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Todas as miniaturas foram recriadas.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Todas as miniaturas foram apagadas.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Sem miniaturas para criar.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Sem miniaturas para apagar.',
	
	'CLI_USER_ADD_SUCCESS'		=> 'Utilizador %s adicionado com sucesso.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Tem a certeza que deseja remover ‘%s’? [s/N]',
	'CLI_USER_RECLEAN_START'	=> 'A limpar nomes de utilizadores',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Limpeza completa. Nenhum nome de utilizador precisava de ser limpo.',
		1	=> 'Limpeza completa. %d nome de utilizador limpo.',
		2	=> 'Limpeza completa. %d nomes de utilizadores limpos.',
	],
	));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opcionalmente pode especificar um nome de tarefa cron para executar apenas a tarefa cron especificada. ',
	'CLI_HELP_USER_ACTIVATE'	=> 'Activar conta de utilizador, ou desactivar uma conta fazendo uso da opção <info>--deactivate</info>.
Para enviar, opcionalmente, um email de activação de conta para o utilizador, utilize a opção <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'O comando <info>%command.name%</info> adiciona um novo utilizador:
Caso este comando seja executado sem opções, será questionado para as introduzir.
Para enviar, opcionalmente, um email ao novo utilizador, utilize a opção <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Ao reforçar a limpeza dos nomes dos utilizadores irá verificar e certificar-se que todos os nomes de utilizadores possuem versões limpas dos nomes de utilizadores guardadas. Nomes de utilizadores limpos significa que se encontram em minúsculas, normalizadas em NFC e transformadas em ASCII.',
	));
