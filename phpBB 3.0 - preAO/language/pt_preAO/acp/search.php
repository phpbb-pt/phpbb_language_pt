<?php
/**
*
* acp_search [Português Pré-AO]
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

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aqui pode gerir os índices de pesquisa do Fórum. Desde que normalmente utilize apenas um modo de pesquisa deve apagar todos os outros. Depois de alterar algumas das configurações da pesquisa (e.g. o número mínimo/máximo de caracteres) é preciso recriar o índice para que as novas configurações se tornem efectivas.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aqui pode definir o modo de pesquisa que será utilizado para a execução deste Sistema. Pode configurar várias opções que podem influenciar em quantos processos estas acções serão solicitadas. Algumas destas configurações são as mesmas para todos os modos de pesquisa.',

	'COMMON_WORD_THRESHOLD'					=> 'Limite de palavras comuns',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Palavras que estão incluídas em grande percentagem em todas as Mensagens, são consideradas comuns. As palavras comuns são ignoradas nas pesquisas. Escreva zero para desactivar esta opção. Apenas terá efeito se possuir mais de 100 Mensagens.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Deseja alterar o modo de pesquisa? Depois de modificar o seu modo de pesquisa, deverá criar um novo índice para o novo modo seleccionado. Se não planeia voltar ao seu modo de pesquisa antigo, poderá excluí-lo.',
	'CONTINUE_DELETING_INDEX'				=> 'Continuar processo de exclusão de índice',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Um processo de exclusão de índice foi iniciado. Para aceder à página de índice da pesquisa novamente deve completar o processo ou cancelá-lo.',
	'CONTINUE_INDEXING'						=> 'Continuar com o processo de indexar anterior',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Um processo de criação de índice foi iniciado. Para aceder à página de índice da pesquisa novamente deve completar o processo ou cancelá-lo.',
	'CREATE_INDEX'							=> 'Criar Índice',

	'DELETE_INDEX'							=> 'Apagar Índice',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Excluindo o Índice em progresso',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'A pesquisa está a apagar os Índices. Esta acção pode levar alguns minutos.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'O modo de pesquisa de textos completos do MySQL pode apenas ser utilizado com o MySQL4 ou superiores.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Índices MySQL fulltext só podem ser usados com tabelas MyISAM ou InnoDB. É necessário MySQL 5.6.4 ou posterior para fulltext indexes em tabelas InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Número Total de Mensagens indexadas',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Suporte para non-latin UTF-8 caracteres utilizando mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Suporte para non-latin UTF-8 caracteres utilizando PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Se o PCRE não tiver propriedades de carácter unicode, o sistema de pesquisa tentará utilizar o sistema de expressões regulares mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Esta pesquisa exige propriedades de carácter PCRE, que somente estão presentes nas versões superiores a PHP 4.4, 5.1, se quer procurar non-latin carácter.',
    'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Número mínimo de caracteres das palavras que são indexados para pesquisa. A alteração desta configuração tem de ser feita no mysql por si ou pelo administrador do servidor.',
    'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Número máximo de caracteres das palavras que são indexados para pesquisa. A alteração desta configuração tem de ser feita no mysql por si ou pelo administrador do servidor.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Configurações Gerais da Pesquisa',
	'GO_TO_SEARCH_INDEX'					=> 'Ir à página inicial da Pesquisa',

	'INDEX_STATS'							=> 'Índice de Estatísticas',
	'INDEXING_IN_PROGRESS'					=> 'Indexação em processo',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'A pesquisa está a indexar todas as mensagens do Fórum. Esta acção pode levar de alguns minutos a várias horas, dependendo do tamanho do Fórum.',

	'LIMIT_SEARCH_LOAD'						=> 'Limite de carga do sistema da Página de Pesquisa',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se a carga do sistema de 1 minuto exceder este valor, a página de pesquisa irá desligar-se, 1.0 igual ~100% utilização de um processador. Isto apenas funciona em Servidores UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Núm. Máximo de Caracteres indexados por pesquisa',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Palavras com não mais que estes pequenos caracteres serão indexadas para pesquisa.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Número máximo permitido de palavras-chave',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Número máximo de palavras que o utilizador pode usar nas pesquisas. O valor 0 permite um número ilimitado de palavras.',
	'MIN_SEARCH_CHARS'						=> 'Núm. Mín. de Caracteres indexados por pesquisa',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Palavras com menos que estes pequenos caracteres serão indexadas para pesquisa.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Núm. Mínimo de Caracteres do Nome do Autor',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os Utilizadores terão que escrever mais do que estes caracteres do Nome enquanto executando uma pesquisa por autor. Se o Nome do Autor for menos que este número ainda pode pesquisar pelas mensagens do autor, escrevendo o nome de utilizador completo.',

	'PROGRESS_BAR'							=> 'Barra de Progresso',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de Pesquisas para Visitantes',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Número em segundos que um Visitante deverá esperar entre pesquisas. Se um visitante realizar pesquisas todos os outros devem esperar até que o intervalo de tempo passe.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Todas as mensagens com o id superior a %1$d serão indexadas agora, do qual %2$d mensagens serão nesta etapa.<br />A taxa actual de indexação é de aproximadamente %3$.1f mensagens por segundo.<br />Indexação em progresso…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Todas as mensagens com o id superior a %1$d serão apagadas da indexação da pesquisa.<br />Remoção em progresso…',
	'SEARCH_INDEX_CREATED'					=> 'Todas as Mensagens foram indexadas na Base de Dados com sucesso.',
	'SEARCH_INDEX_REMOVED'					=> 'O Índice de Pesquisa foi apagado com sucesso.',
	'SEARCH_INTERVAL'						=> 'Intervalo de Pesquisas para Utilizadores',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Número em segundos que os utilizadores devem esperar entre uma pesquisa e outra. Este intervalo é controlado independentemente para cada utilizador.',
	'SEARCH_STORE_RESULTS'					=> 'Tamanho da Cache de resultados da pesquisa',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'A Cache dos resultados da pesquisa irá expirar após este tempo, em segundos. Escreva 0 se deseja desactivar esta opção.',
	'SEARCH_TYPE'							=> 'Modo de pesquisa',
	'SEARCH_TYPE_EXPLAIN'					=> 'O phpBB permite-lhe seleccionar o modo que será utilizado para a pesquisa de textos nos conteúdos da mensagem. Por padrão, será utilizado apenas o próprio sistema de pesquisas por textos completos.',
	'SWITCHED_SEARCH_BACKEND'				=> 'O modo de pesquisa foi seleccionado com sucesso. Agora, para utilizá-lo terá que certificar-se da existência de um índice para o modo escolhido.',

	'TOTAL_WORDS'							=> 'Número Total de Palavras indexadas',
	'TOTAL_MATCHES'							=> 'Número Total de Palavras indexadas para relações de Mensagens',

	'YES_SEARCH'							=> 'Activar Facilidades para Pesquisa',
	'YES_SEARCH_EXPLAIN'					=> 'Activar funcionalidades de pesquisa especiais incluindo a pesquisa de Membros.',
	'YES_SEARCH_UPDATE'						=> 'Activar a actualização de textos completos',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Os índices de texto completo são actualizados ao enviar uma mensagem, mesmo se a pesquisa estiver desactivada.',
));

?>