<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Português Pré-AO]
*
* @package language
* @version 1.0.9
* @Traduzido por: http://phpbbportugal.com - segundo pré-Acordo Ortográfico
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array( 
		'actions'		=> 'Acções', 
		'content'		=> 'Conteúdo', 
		'forums'		=> 'Fóruns', 
		'misc'			=> 'Diversas', 
		'permissions'	=> 'Permissões', 
		'pm'			=> 'Mensagens Privadas', 
		'polls'			=> 'Votações', 
		'post'			=> 'Mensagem', 
		'post_actions'	=> 'Acções de Mensagem', 
		'posting'		=> 'Enviando', 
		'profile'		=> 'Perfil', 
		'settings'		=> 'Configurações', 
		'topic_actions'	=> 'Acções de Tópico', 
		'user_group'	=> 'Utilizadores &amp; Grupos',	
	), 

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array( 
		'u_'			=> 'Permissões de Utilizador',
		'a_'			=> 'Permissões de Administrador', 
		'm_'			=> 'Permissões de Moderador', 
		'f_'			=> 'Permissões do Fórum',
		'global'		=> array(
			'm_'		=> 'Permissões do Moderador Global',
		),		
	), 
)); 

// User Permissions 
$lang = array_merge($lang, array( 
	'acl_u_viewprofile'	=> array('lang' => 'Pode ver perfil, lista de utilizadores e utilizadores online', 'cat' => 'profile'), 
	'acl_u_chgname'		=> array('lang' => 'Pode alterar nome do Utilizador', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Pode alterar Senha', 'cat' => 'profile'), 
	'acl_u_chgemail'	=> array('lang' => 'Pode alterar endereço de email', 'cat' => 'profile'), 
	'acl_u_chgavatar'	=> array('lang' => 'Pode alterar Avatar', 'cat' => 'profile'), 
	'acl_u_chggrp'		=> array('lang' => 'Pode alterar Grupo', 'cat' => 'profile'), 

	'acl_u_attach'		=> array('lang' => 'Pode anexar ficheiros', 'cat' => 'post'), 
	'acl_u_download'	=> array('lang' => 'Pode transferir ficheiros', 'cat' => 'post'), 
	'acl_u_savedrafts'	=> array('lang' => 'Pode guardar rascunhos', 'cat' => 'post'), 
	'acl_u_chgcensors'	=> array('lang' => 'Pode desactivar censura de palavras', 'cat' => 'post'), 
	'acl_u_sig'			=> array('lang' => 'Pode usar assinatura', 'cat' => 'post'), 

	'acl_u_sendpm'		=> array('lang' => 'Pode enviar Mensagens Privadas', 'cat' => 'pm'), 
	'acl_u_masspm'		=> array('lang' => 'Pode enviar Mensagens Privadas para diversos Utilizadores e Grupos', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Pode enviar Mensagens para Grupos', 'cat' => 'pm'), 
	'acl_u_readpm'		=> array('lang' => 'Pode ler Mensagens Privadas', 'cat' => 'pm'), 
	'acl_u_pm_edit'		=> array('lang' => 'Pode alterar as próprias Mensagens Privadas', 'cat' => 'pm'), 
	'acl_u_pm_delete'	=> array('lang' => 'Pode apagar Mensagens Privadas da sua pasta', 'cat' => 'pm'), 
	'acl_u_pm_forward'	=> array('lang' => 'Pode reenviar Mensagens Privadas', 'cat' => 'pm'), 
	'acl_u_pm_emailpm'	=> array('lang' => 'Pode enviar Mensagens Privadas por email', 'cat' => 'pm'), 
	'acl_u_pm_printpm'	=> array('lang' => 'Pode imprimir Mensagens Privadas', 'cat' => 'pm'), 
	'acl_u_pm_attach'	=> array('lang' => 'Pode anexar ficheiros nas Mensagens Privadas', 'cat' => 'pm'), 
	'acl_u_pm_download'	=> array('lang' => 'Pode transferir Ficheiros das Mensagens Privadas', 'cat' => 'pm'), 
	'acl_u_pm_bbcode'	=> array('lang' => 'Pode Usar BBCode em Mensagens Privadas', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Pode Usar Emoções nas Mensagens Privadas', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Pode Usar a tag BBCode [img] em Mensagens Privadas', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Pode Usar a tag BBCode [flash] em Mensagens Privadas', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Pode enviar emails', 'cat' => 'misc'), 
	'acl_u_sendim'		=> array('lang' => 'Pode enviar Mensagens Urgentes', 'cat' => 'misc'), 
	'acl_u_ignoreflood'	=> array('lang' => 'Pode ignorar limite de mensagens', 'cat' => 'misc'), 
	'acl_u_hideonline'	=> array('lang' => 'Pode ficar invisível', 'cat' => 'misc'), 
	'acl_u_viewonline'	=> array('lang' => 'Pode ver todos os Utilizadores online', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Pode pesquisar no Fórum', 'cat' => 'misc'), 
)); 

// Forum Permissions 
$lang = array_merge($lang, array( 
	'acl_f_list'		=> array('lang' => 'Pode ver Fóruns', 'cat' => 'post'), 
	'acl_f_read'		=> array('lang' => 'Pode ler Fóruns', 'cat' => 'post'), 
	'acl_f_post'		=> array('lang' => 'Pode criar Tópicos', 'cat' => 'post'), 
	'acl_f_reply'		=> array('lang' => 'Pode responder às Mensagens', 'cat' => 'post'), 
	'acl_f_icons'		=> array('lang' => 'Pode utilizar ícones nas Mensagens', 'cat' => 'post'), 
	'acl_f_announce'	=> array('lang' => 'Pode criar Anúncios', 'cat' => 'post'), 
	'acl_f_sticky'		=> array('lang' => 'Pode criar Tópicos Fixos', 'cat' => 'post'), 

	'acl_f_poll'		=> array('lang' => 'Pode criar Votações', 'cat' => 'polls'), 
	'acl_f_vote'		=> array('lang' => 'Pode votar', 'cat' => 'polls'), 
	'acl_f_votechg'		=> array('lang' => 'Pode modificar Votação em Curso', 'cat' => 'polls'), 

	'acl_f_attach'		=> array('lang' => 'Pode anexar Ficheiros', 'cat' => 'content'), 
	'acl_f_download'	=> array('lang' => 'Pode transferir Ficheiros', 'cat' => 'content'), 
	'acl_f_sigs'		=> array('lang' => 'Pode usar assinaturas', 'cat' => 'content'), 
	'acl_f_bbcode'		=> array('lang' => 'Pode Usar BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Pode Usar smilies', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Pode Usar a tag BBCode [img]', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Pode Usar a tag BBCode [flash]', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Pode editar as próprias Mensagens', 'cat' => 'actions'), 
	'acl_f_delete'		=> array('lang' => 'Pode eliminar as próprias Mensagens', 'cat' => 'actions'), 
	'acl_f_user_lock'	=> array('lang' => 'Pode bloquear os próprios Tópicos', 'cat' => 'actions'), 
	'acl_f_bump'		=> array('lang' => 'Pode ressuscitar Tópicos', 'cat' => 'actions'), 
	'acl_f_report'		=> array('lang' => 'Pode denunciar Mensagens', 'cat' => 'actions'), 
	'acl_f_subscribe'	=> array('lang' => 'Pode aprovar Fóruns', 'cat' => 'actions'), 
	'acl_f_print'		=> array('lang' => 'Pode imprimir Tópicos', 'cat' => 'actions'), 
	'acl_f_email'		=> array('lang' => 'Pode enviar Tópicos por email', 'cat' => 'actions'), 

	'acl_f_search'		=> array('lang' => 'Pode fazer pesquisas', 'cat' => 'misc'), 
	'acl_f_ignoreflood' => array('lang' => 'Pode fazer pesquisas sem intervalo de segurança', 'cat' => 'misc'), 
	'acl_f_postcount'	=> array('lang' => 'Aumentar o contador de mensagens<br /><em>Esta configuração só influência novas mensagens.</em>', 'cat' => 'misc'), 
	'acl_f_noapprove'	=> array('lang' => 'Pode enviar sem Aprovação', 'cat' => 'misc'), 
)); 

// Moderator Permissions 
$lang = array_merge($lang, array( 
	'acl_m_edit'		=> array('lang' => 'Pode editar Mensagens', 'cat' => 'post_actions'), 
	'acl_m_delete'		=> array('lang' => 'Pode eliminar Mensagens', 'cat' => 'post_actions'), 
	'acl_m_approve'		=> array('lang' => 'Pode aprovar Mensagens', 'cat' => 'post_actions'), 
	'acl_m_report'		=> array('lang' => 'Pode fechar e eliminar Denúncias', 'cat' => 'post_actions'), 
	'acl_m_chgposter'	=> array('lang' => 'Pode alterar Autor da Mensagem', 'cat' => 'post_actions'), 

	'acl_m_move'		=> array('lang' => 'Pode mover Tópicos', 'cat' => 'topic_actions'), 
	'acl_m_lock'		=> array('lang' => 'Pode bloquear Tópicos', 'cat' => 'topic_actions'), 
	'acl_m_split'		=> array('lang' => 'Pode subdividir Tópicos', 'cat' => 'topic_actions'), 
	'acl_m_merge'		=> array('lang' => 'Pode fundir Tópicos', 'cat' => 'topic_actions'), 

	'acl_m_info'		=> array('lang' => 'Pode ver detalhes da Mensagem', 'cat' => 'misc'), 
	'acl_m_warn'		=> array('lang' => 'Pode fazer Advertências', 'cat' => 'misc'), 
	'acl_m_ban'			=> array('lang' => 'Pode administrar Expulsões', 'cat' => 'misc'), // This moderator setting is only global (and not local) 
)); 

// Admin Permissions 
$lang = array_merge($lang, array( 
	'acl_a_board'		=> array('lang' => 'Pode alterar Configuração Geral/verificar actualizações', 'cat' => 'settings'), 
	'acl_a_server'		=> array('lang' => 'Pode alterar configurações do servidor', 'cat' => 'settings'), 
	'acl_a_jabber'		=> array('lang' => 'Pode alterar configurações Jabber', 'cat' => 'settings'), 
	'acl_a_phpinfo'		=> array('lang' => 'Pode ver as configurações do php', 'cat' => 'settings'), 

	'acl_a_forum'		=> array('lang' => 'Pode administrar Fóruns', 'cat' => 'forums'), 
	'acl_a_forumadd'	=> array('lang' => 'Pode criar Fóruns', 'cat' => 'forums'), 
	'acl_a_forumdel'	=> array('lang' => 'Pode eliminar Fóruns', 'cat' => 'forums'), 
	'acl_a_prune'		=> array('lang' => 'Pode proceder a Limpezas', 'cat' => 'forums'), 

	'acl_a_icons'		=> array('lang' => 'Pode alterar ícones de Tópicos e Emoções', 'cat' => 'posting'), 
	'acl_a_words'		=> array('lang' => 'Pode alterar censura de Palavras', 'cat' => 'posting'), 
	'acl_a_bbcode'		=> array('lang' => 'Pode definir TAGs BBCode', 'cat' => 'posting'), 
	'acl_a_attach'		=> array('lang' => 'Pode alterar as configurações dos Anexos', 'cat' => 'posting'), 

	'acl_a_user'		=> array('lang' => 'Pode administrar Utilizadores<br /><em>Inclui a visualização no navegador dos Utilizadores na lista de Utilizadores online.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Pode eliminar Utilizadores', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Pode administrar Grupos', 'cat' => 'user_group'), 
	'acl_a_groupadd'	=> array('lang' => 'Pode criar Grupos', 'cat' => 'user_group'), 
	'acl_a_groupdel'	=> array('lang' => 'Pode eliminar Grupos', 'cat' => 'user_group'), 
	'acl_a_ranks'		=> array('lang' => 'Pode administrar Classificações', 'cat' => 'user_group'), 
	'acl_a_profile'		=> array('lang' => 'Pode administrar campos do Perfil', 'cat' => 'user_group'), 
	'acl_a_names'		=> array('lang' => 'Pode administrar nomes Proibidos', 'cat' => 'user_group'), 
	'acl_a_ban'			=> array('lang' => 'Pode administrar Expulsões', 'cat' => 'user_group'), 

	'acl_a_viewauth'	=> array('lang' => 'Pode ver máscaras de Permissões', 'cat' => 'permissions'), 
	'acl_a_authgroups'	=> array('lang' => 'Pode alterar Permissões para Grupos individuais', 'cat' => 'permissions'), 
	'acl_a_authusers'	=> array('lang' => 'Pode alterar Permissões para Utilizadores individuais', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Pode alterar Categorias de Permissões de Fóruns', 'cat' => 'permissions'), 
	'acl_a_mauth'		=> array('lang' => 'Pode alterar Categorias de Permissões de Moderadores', 'cat' => 'permissions'), 
	'acl_a_aauth'		=> array('lang' => 'Pode alterar Categorias de Permissões de Administradores', 'cat' => 'permissions'), 
	'acl_a_uauth'		=> array('lang' => 'Pode alterar Categorias de Permissões de Utilizadores', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Pode administrar Funções', 'cat' => 'permissions'), 
	'acl_a_switchperm'	=> array('lang' => 'Pode utilizar outras Permissões', 'cat' => 'permissions'), 

	'acl_a_styles'		=> array('lang' => 'Pode administrar Estilos', 'cat' => 'misc'), 
	'acl_a_viewlogs'	=> array('lang' => 'Pode ver Registos', 'cat' => 'misc'), 
	'acl_a_clearlogs'	=> array('lang' => 'Pode limpar Registos', 'cat' => 'misc'), 
	'acl_a_modules'		=> array('lang' => 'Pode administrar Módulos', 'cat' => 'misc'), 
	'acl_a_language'	=> array('lang' => 'Pode administrar Idiomas', 'cat' => 'misc'), 
	'acl_a_email'		=> array('lang' => 'Pode enviar emails em massa', 'cat' => 'misc'), 
	'acl_a_bots'		=> array('lang' => 'Pode administrar Motores de Busca', 'cat' => 'misc'), 
	'acl_a_reasons'		=> array('lang' => 'Pode administrar motivos de denúncias/negações', 'cat' => 'misc'), 
	'acl_a_backup'		=> array('lang' => 'Pode copiar/restaurar a Base de Dados', 'cat' => 'misc'), 
	'acl_a_search'		=> array('lang' => 'Pode administrar backends de pesquisas e configurações', 'cat' => 'misc'), 
)); 

?>