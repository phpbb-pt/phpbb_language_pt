<?php
/**
*
* viewtopic [Português]
*
* @package language
* @version 1.0.9
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ATTACHMENT'						=> 'Anexo',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Anexos foram desativados',

	'BOOKMARK_ADDED'					=> 'Tópico adicionado aos Favoritos.',
	'BOOKMARK_ERR'						=> 'Erro ao adicionar o Tópico aos favoritos. Por favor, tente novamente.',
	'BOOKMARK_REMOVED'					=> 'Tópico removido dos Favoritos.',
	'BOOKMARK_TOPIC'					=> 'Adicionar Tópico aos Favoritos',
	'BOOKMARK_TOPIC_REMOVE'				=> 'Remover Tópico dos Favoritos',
	'BUMPED_BY'							=> 'Ressuscitado pela última vez por %1$s em %2$s.',
	'BUMP_TOPIC'						=> 'Ressuscitar Tópico',

	'CODE'								=> 'Código',
	'COLLAPSE_QR'						=> 'Ocultar Resposta Rápida',

	'DELETE_TOPIC'						=> 'Eliminar Tópico',
	'DOWNLOAD_NOTICE'					=> 'Não tem Permissão para ver os Ficheiros anexados nesta Mensagem.',

	'EDITED_TIMES_TOTAL'				=> 'Editado pela última vez por %1$s em %2$s, num total de %3$d vezes.',
	'EDITED_TIME_TOTAL'					=> 'Editado pela última vez por %1$s em %2$s, num total de %3$d vez.',
	'EMAIL_TOPIC'						=> 'Enviar a um amigo',
	'ERROR_NO_ATTACHMENT'				=> 'O anexo selecionado não existe',

	'FILE_NOT_FOUND_404'				=> 'O Ficheiro <strong>%s</strong> não existe.',
	'FORK_TOPIC'						=> 'Copiar Tópico',
	'FULL_EDITOR'						=> 'Editor completo',	

	'LINKAGE_FORBIDDEN'					=> 'Não está autorizado a ver o atalho para esta página.',
	'LOGIN_NOTIFY_TOPIC'				=> 'Foi notificado por este Tópico, ligue-se para vê-lo.',
	'LOGIN_VIEWTOPIC'					=> 'Tem que estar Registado e ligado para ver este Tópico.',

	'MAKE_ANNOUNCE'						=> 'Alterar para “Anúncio”',
	'MAKE_GLOBAL'						=> 'Alterar para “Global”',
	'MAKE_NORMAL'						=> 'Alterar para “Tópico Normal”',
	'MAKE_STICKY'						=> 'Alterar para “Fixo”',
	'MAX_OPTIONS_SELECT'				=> 'Pode selecionar até <strong>%d</strong> opções',
	'MAX_OPTION_SELECT'					=> 'Pode selecionar só <strong>1</strong> opção',
	'MISSING_INLINE_ATTACHMENT'			=> 'O Ficheiro <strong>%s</strong> não está disponível',
	'MOVE_TOPIC'						=> 'Mover Tópico',

	'NO_ATTACHMENT_SELECTED'			=> 'Não selecionou nenhum Ficheiro para transferência.',
	'NO_NEWER_TOPICS'					=> 'Não há Tópicos novos neste Fórum.',
	'NO_OLDER_TOPICS'					=> 'Não há Tópicos antigos neste Fórum.',
	'NO_UNREAD_POSTS'					=> 'Não há Mensagens novas não lidas neste Tópico.',
	'NO_VOTE_OPTION'					=> 'Deve selecionar uma opção para votar.',
	'NO_VOTES'							=> 'Sem votos',

	'POLL_ENDED_AT'						=> 'Votação encerrada em %s',
	'POLL_RUN_TILL'						=> 'A votação será encerrada em %s',
	'POLL_VOTED_OPTION'					=> 'Votou nesta opção',
	'PRINT_TOPIC'						=> 'Versão para impressão',

	'QUICK_MOD'							=> 'Ferramentas Rápidas',
	'QUICKREPLY'						=> 'Resposta Rápida',
	'QUOTE'								=> 'Citar',

	'REPLY_TO_TOPIC'					=> 'Responder a este Tópico',
	'RETURN_POST'						=> '%sVoltar a Mensagem%s',

	'SHOW_QR'							=> 'Resposta Rápida',
	'SUBMIT_VOTE'						=> 'Votar',

	'TOTAL_VOTES'						=> 'Total de votos',

	'UNLOCK_TOPIC'						=> 'Desbloquear Tópico',

	'VIEW_INFO'							=> 'Detalhes da Mensagem',
	'VIEW_NEXT_TOPIC'					=> 'Próximo Tópico',
	'VIEW_PREVIOUS_TOPIC'				=> 'Tópico anterior',
	'VIEW_RESULTS'						=> 'Ver Resultado',
	'VIEW_TOPIC_POST'					=> '1 Mensagem',
	'VIEW_TOPIC_POSTS'					=> '%d mensagens',
	'VIEW_UNREAD_POST'					=> 'Mensagens por ler',
	'VISIT_WEBSITE'						=> 'Visitar o sítio web do Utilizador',
	'VOTE_SUBMITTED'					=> 'O seu voto foi registado.',
	'VOTE_CONVERTED'					=> 'Não é possível alterar votos .',
	
));

?>