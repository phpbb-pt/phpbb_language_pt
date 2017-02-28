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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Painel de Instalação',
	'SELECT_LANG'	=> 'Selecione o idioma',

	'STAGE_INSTALL'	=> 'Instalando o phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introdução',
	'INTRODUCTION_BODY'		=> 'Bem-vindo ao phpBB3!<br /><br />phpBB® É a solução de forum de código aberto mais utilizada no mundo. PhpBB3 é a última parcela de uma linha de pacotes iniciada em 2000. Como seus Antecessores, o phpBB3 é rico em recursos, é fácil de usar e é totalmente suportado pela equipe do phpBB.  PhpBB3 melhora muito o que fez phpBB2 popular, e adiciona recursos geralmente solicitados que não estavam presentes em versões anteriores. Esperamos que exceda suas expectativas.<br /><br />Este sistema de instalação irá guiá-lo através da instalação phpBB3, atualizando para a versão mais recente do phpBB3 de versões anteriores, bem como a conversão para phpBB3 a partir de um sistema de discussão diferente forum (incluindo phpBB2). Para obter mais informações, recomendamos que você leia <a href="../docs/INSTALL.html">the installation guide</a>.<br /><br />Para ler a licença phpBB3 ou aprender sobre a obtenção de suporte e nossa posição sobre ele, por favor, selecione as opções respectivas no menu lateral. Para continuar, selecione a guia apropriada acima.',

	// Support page
	'SUPPORT_TITLE'		=> 'Suporte',
	'SUPPORT_BODY'		=> 'O suporte total será fornecido para a versão estável atual do phpBB3, gratuitamente. Isso inclui:</p><ul><li>instalação</li><li>configuração</li><li>Questões técnicas</li><li>problemas relacionados com potenciais bugs no software</li><li>atualizando do Release Candidate (RC) versões para a versão mais recente version</li><li>conversão de phpBB 2.0.x para phpBB3</li><li>conversão de outros softwares de discussão para phpBB3 (please see the <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Encorajamos os usuários ainda executando versões beta do phpBB3 a substituir a instalação por uma nova cópia da versão mais recente.</p><h2>Extensions / Styles</h2><p>Para questões relacionadas com extensões, por favor, postar no adequado <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />Para questões relacionadas a estilos, modelos e temas, publique no <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Se a sua pergunta se refere a um pacote específico, publique diretamente no tópico dedicado ao pacote.</p><h2>Obtaining Support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Quick Start Guide</a><br /><br />Para garantir que você fique atualizado com as últimas notícias e lançamentos, por que não <a href="https://www.phpbb.com/support/">subscribe to our mailing list</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Licença Pública Geral',

	// Install page
	'INSTALL_INTRO'			=> 'Bem-vindo à Instalação',
	'INSTALL_INTRO_BODY'	=> 'Com esta opção, é possível instalar o phpBB3 no seu servidor.</p><p>Para prosseguir, você precisará de suas configurações de banco de dados. Se você não souber suas configurações de banco de dados, entre em contato com o seu host e peça por elas. Você não será capaz de continuar sem eles. Você precisa:</p>

	<ul>
		<li>O Tipo da Base de Dados - a Base de Dados que irá utilizar.</li>
		<li>O Endereço ou DNS do seu servidor de Base de Dados - o endereço do servidor da Base de Dados.</li>
		<li>A Porta do servidor de Base de Dados - a porta do servidor da Base de Dados (geralmente não é necessário).</li>
		<li>O Nome da Base de Dados - o nome da Base de Dados no servidor.</li>
		<li>P Nome do utilizador e Senha da Base de Dados - os dados para aceder à Base de Dados.</li>
	</ul>

	<p><strong>Nota:</strong> Se a sua instalação utiliza SQLite, tem que indicar o endereço completo dos ficheiros da Base de Dados no campo DNS e deixar em branco o Nome de Utilizador e Senha. Por razões de segurança, deve certificar-se que este ficheiro da Base de Dados não esteja em locais acessíveis pela web.</p>

	<p>Bases de Dados suportadas pelo phpBB3:</p>
	<ul>
		<li>MySQL 3.23 ou superior (Suporte a MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ou superior (direto ou via ODBC)</li>
		<li>MS SQL Server 2005 ou superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Apenas as Bases de Dados suportadas pelo seu servidor estarão disponíveis.',

	'ACP_LINK'			=> 'Aceder à <a href="%1$s">ACP</a>',

    'INSTALL_PHPBB_INSTALLED'		=> 'phpBB já está instalado.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB ainda não está instalado.'
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Arquivo não existe',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Para poder instalar o phpBB o %1$s arquivo precisa existir.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Recomenda-se que o arquivo %1$s existe para uma melhor experiência do usuário do fórum.',
	'FILE_NOT_WRITABLE'						=> 'O arquivo não pode ser gravado',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Para poder instalar o phpBB, o arquivo %1$s precisa ser gravável.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que o arquivo %1$s seja gravável para uma melhor experiência do usuário do fórum.',

	'DIRECTORY_NOT_EXISTS'						=> 'O diretório não existe',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Para poder instalar o phpBB, o diretório %1$s precisa existir.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Recomenda-se que o diretório %1$s exista para uma melhor experiência do usuário do fórum.',
	'DIRECTORY_NOT_WRITABLE'					=> 'O diretório não pode ser gravado',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Para poder instalar o phpBB, o diretório %1$s precisa ser gravável.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que o diretório %1$s seja gravável para uma melhor experiência do usuário do fórum.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Versão do PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'PhpBB requer PHP versão 5.4.0 ou superior.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'A função PHP getimagesize() é necessária',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Para que o phpBB funcione corretamente, a função getimagesize precisa estar disponível.',
	'PCRE_UTF_SUPPORT'					=> 'Suporte PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'PhpBB não será executado se sua instalação PHP não for compilada com suporte UTF-8 na extensão PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Suporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Para que phpBB funcione corretamente, a extensão PHP JSON precisa estar disponível.',
	'PHP_XML_SUPPORT'					=> 'Suporte PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Para que phpBB funcione corretamente, a extensão PHP XML/DOM precisa estar disponível.',
    'PHP_SUPPORTED_DB'					=> 'Bancos de dados suportados',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Você deve ter suporte para pelo menos um banco de dados compatível dentro do PHP. Se nenhum módulo de banco de dados for mostrado como disponível, você deve entrar em contato com seu provedor de hospedagem ou revisar a documentação de instalação relevante do PHP para obter orientação.',

	'RETEST_REQUIREMENTS'	=> 'Teste de novo os requisitos',

	'STAGE_REQUIREMENTS'	=> 'Verificação de requisitos'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Você deve preencher todos os campos deste bloco.',

	'TIMEOUT_DETECTED_TITLE'	=> 'O instalador detectou um tempo limite',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'O instalador detectou um tempo limite, você pode tentar atualizar a página, o que pode levar a corrupção de dados. Sugerimos que você aumente suas configurações de tempo limite ou tente usar o CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Definir dados de instalação',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Detalhes do Administrador',

	// Form labels
	'ADMIN_CONFIG'				=> 'Configuração do Administrador',
	'ADMIN_PASSWORD'			=> 'Senha do Administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmar senha de Administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Introduza uma palavra-passe com um comprimento entre 6 e 30 caracteres.',
	'ADMIN_USERNAME'			=> 'Nome de usuário do Administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Introduza um nome de utilizador com um comprimento entre 3 e 20 caracteres.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'O endereço de e-mail inserido é inválido.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'As senhas fornecidas não correspondem.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'A senha inserida é muito longa. O comprimento máximo é de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A senha inserida é muito curta. O comprimento mínimo é de 6 caracteres.',
	'INST_ERR_USER_TOO_LONG'		=> 'O nome de usuário inserido é muito longo. O comprimento máximo é de 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'		=> 'O nome de usuário inserido é muito curto. O comprimento mínimo é de 3 caracteres.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Configuração do forum',
	'DEFAULT_LANGUAGE'	=> 'Idioma padrão',
	'BOARD_NAME'		=> 'Título do forum',
	'BOARD_DESCRIPTION'	=> 'Breve descrição do forum',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Configurações do banco de dados',

	// Form labels
	'DB_CONFIG'				=> 'Configuração do banco de dados',
	'DBMS'					=> 'Tipo de banco de dados',
	'DB_HOST'				=> 'Nome do servidor do banco de dados ou DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN significa Data Source Name e é relevante apenas para instalações ODBC. No PostgreSQL, use o localhost para se conectar ao servidor local via soquete de domínio UNIX e 127.0.0.1 para se conectar via TCP. Para SQLite, digite o caminho completo para seu arquivo de banco de dados.',
	'DB_PORT'				=> 'Porta do servidor de banco de dados',
	'DB_PORT_EXPLAIN'		=> 'Deixe isso em branco, a menos que saiba que o servidor opera em uma porta não padrão.',
	'DB_PASSWORD'			=> 'Senha do banco de dados',
	'DB_NAME'				=> 'Nome do banco de dados',
	'DB_USERNAME'			=> 'Nome de usuário do banco de dados',
	'DATABASE_VERSION'		=> 'Versão da base de dados',
    'TABLE_PREFIX'			=> 'Prefixo para tabelas no banco de dados',
	'TABLE_PREFIX_EXPLAIN'	=> 'O prefixo deve começar com uma letra e deve conter apenas letras, números e sublinhados.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Não é possível carregar o módulo PHP para o tipo de banco de dados selecionado.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'O prefixo inserido é inválido. Deve começar com uma letra e deve conter apenas letras, números e sublinhados.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'O prefixo de tabela que você especificou é muito longo. O comprimento máximo %d caracteres.',
	'INST_ERR_DB_NO_NAME'			=> 'Nenhum nome de banco de dados especificado.',
	'INST_ERR_DB_FORUM_PATH'		=> 'O arquivo de banco de dados especificado está dentro da árvore de diretórios do forum. Você deve colocar esse arquivo em um local não acessível pela web.',
	'INST_ERR_DB_CONNECT'			=> 'Não foi possível conectar-se ao banco de dados, veja a mensagem de erro abaixo.',
	'INST_ERR_DB_NO_ERROR'			=> 'Nenhuma mensagem de erro fornecida.',
	'INST_ERR_PREFIX'				=> 'Tabelas com o prefixo especificado já existem, escolha uma alternativa.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'A versão do MySQL instalada nesta máquina é incompatível com a opção “MySQL com MySQLi Extension” que você selecionou. Por favor, tente a opção “MySQL” em vez disso.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'A versão da extensão SQLite que você instalou é muito antiga, ele deve ser atualizado para pelo menos 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'A versão do Oracle instalada nesta máquina requer que você defina o parâmetro <var>NLS_CHARACTERSET</var> em <var>UTF8</var>. Atualize sua instalação para 9.2+ ou altere o parâmetro.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'O banco de dados selecionado não foi criado na codificação <var>UNICODE</var> ou <var>UTF8</var>. Tente instalar com um banco de dados em <var>UNICODE</var> ou <var>UTF8</var> .',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'O arquivo de esquema não pode ser gravado',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Configuração de e-mail',

	// Package info
	'PACKAGE_VERSION'					=> 'Versão do pacote instalada',
	'UPDATE_INCOMPLETE'				=> 'Sua instalação do phpBB não foi atualizada corretamente.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Por favor, leia as informações abaixo para corrigir este erro.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Atualização incompleta</h1>

	    <p>Percebemos que a última atualização da sua instalação do phpBB não foi concluída. Visite o <a href="%1$s" title="%1$s">atualizador de banco de dados</a>, verifique se <em>Atualizar banco de dados somente</em> está selecionado e clique em <strong>Enviar </strong>. Não se esqueça de apagar o diretório "install" depois de atualizar o banco de dados com êxito.</p>',

    //
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Configuração do servidor',
	'SCRIPT_PATH'				=> 'Caminho de script',
	'SCRIPT_PATH_EXPLAIN'		=> 'O caminho onde phpBB está localizado em relação ao nome de domínio, ex. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'			=> 'Atenciosamente, A Administração',
	'CONFIG_SITE_DESC'					=> 'Escreva um pequeno texto a descrever o seu Fórum',
	'CONFIG_SITENAME'					=> 'oseudominio.com',

	'DEFAULT_INSTALL_POST'				=> 'Esta é uma Mensagem de exemplo, (criada automaticamente durante a instalação) do seu novo Fórum phpBB3. Pode apagar esta Mensagem, o Tópico e o Fórum quando quiser! Se tiver alguma dúvida, sugestão ou comentário sobre esta tradução para português europeu do phpBB3x, consulte a comunidade phpBB Portugal. Da mesma forma, pode visitar-nos, se desejar fazer alguma observação sobre esta tradução e o acordo ortográfico da língua portuguesa. Estamos a construir uma Comunidade phpBB em Portugal. O contributo de todos é importante. O nosso compromisso é ajudar quem nos procura. Responderemos a todos os contactos tão rápido quanto possível. A sua participação é o maior incentivo que pode nos dar. A tradução deste Fórum respeita o acordo ortográfico da língua portuguesa em vigor desde Janeiro de 2009.',

	'FORUMS_FIRST_CATEGORY'				=> 'A minha primeira Categoria',
	'FORUMS_TEST_FORUM_DESC'			=> 'Este é um Fórum de Testes.',
	'FORUMS_TEST_FORUM_TITLE'			=> 'O meu primeiro Fórum',

	'RANKS_SITE_ADMIN_TITLE'			=> 'Administrador',
	'REPORT_WAREZ'						=> 'A mensagem denunciada contém endereços ilegais ou de software pirateado.',
	'REPORT_SPAM'						=> 'A mensagem denunciada tem apenas o propósito de anunciar um sítio web ou um produto.',
	'REPORT_OFF_TOPIC'					=> 'A mensagem denunciada é desnecessária, e não faz sentido.',
	'REPORT_OTHER'						=> 'A mensagem denunciada não se encaixa em nenhuma outra categoria, use o campo de descrição para especificar uma.',

	'SMILIES_ARROW'						=> 'Seta',
	'SMILIES_CONFUSED'					=> 'Confuso',
	'SMILIES_COOL'						=> 'Fixe',
	'SMILIES_CRYING'					=> 'A chorar ou muito triste',
	'SMILIES_EMARRASSED'				=> 'Envergonhado',
	'SMILIES_EVIL'						=> 'Maligno ou muito mau',
	'SMILIES_EXCLAMATION'				=> 'Exclamação',
	'SMILIES_GEEK'						=> 'Cromo',
	'SMILIES_IDEA'						=> 'Ideia',
	'SMILIES_LAUGHING'					=> 'Alegre',
	'SMILIES_MAD'						=> 'Zangado',
	'SMILIES_MR_GREEN'					=> 'Sr. Verde',
	'SMILIES_NEUTRAL'					=> 'Neutro',
	'SMILIES_QUESTION'					=> 'Pergunta',
	'SMILIES_RAZZ'						=> 'Gargalhada',
	'SMILIES_ROLLING_EYES'				=> 'Olhos rolantes',
	'SMILIES_SAD'						=> 'Triste',
	'SMILIES_SHOCKED'					=> 'Chocado',
	'SMILIES_SMILE'						=> 'Sorridente',
	'SMILIES_SURPRISED'					=> 'Surpreendido',
	'SMILIES_TWISTED_EVIL'				=> 'Muito Mau',
	'SMILIES_UBER_GEEK'					=> 'Grande Cromo',
	'SMILIES_VERY_HAPPY'				=> 'Muito Feliz',
	'SMILIES_WINK'						=> 'Piscar o olho',

	'TOPICS_TOPIC_TITLE'				=> 'Bem-vindo ao phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Visão geral',
	'MENU_INTRO'		=> 'Introdução',
	'MENU_LICENSE'		=> 'Licença',
	'MENU_SUPPORT'		=> 'Suporte',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Criando arquivo de configuração',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Adicionar definições de configuração',
	'TASK_ADD_DEFAULT_DATA'				=> 'Adicionando configurações padrão ao banco de dados',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Criando arquivo de esquema de banco de dados',
	'TASK_SETUP_DATABASE'				=> 'Configurando o banco de dados',
	'TASK_CREATE_TABLES'				=> 'Criando tabelas',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registrando bots',
	'TASK_ADD_LANGUAGES'	=> 'Instalação de idiomas disponíveis',
	'TASK_ADD_MODULES'		=> 'Instalação de módulos',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Instalando extensões empacotadas',
    'TASK_NOTIFY_USER'			=> 'Enviando e-mail de notificação',
	'TASK_POPULATE_MIGRATIONS'	=> 'Preencher Migrações',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'O instalador foi concluído com êxito',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Módulo não encontrado',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Não foi possível encontrar um módulo porque o serviço, %s, é indefinido.',

	'TASK_NOT_FOUND'				=> 'Tarefa não encontrada',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Não foi possível encontrar uma tarefa porque o serviço, %s, é indefinido.',

	'SKIP_MODULE'	=> 'Ignorar o módulo“%s”',
	'SKIP_TASK'		=> 'Ignorar a tarefa“%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Todos os serviços de tarefa do instalador devem começar com“installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'A definição do serviço da tarefa do instalador é inválida. O nome do serviço prestado“%1$s” class namespace que é esperado para “%2$s” . Para mais informações, por favor consulte a documentação do task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'O arquivo de instalação de configuração não é gravável.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Instalar phpBB',
	'CLI_UPDATE_BOARD'				=> 'Atualizar phpBB',
 	'CLI_INSTALL_SHOW_CONFIG'		=> 'Mostrar a configuração que será usada',
 	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validar um arquivo de configuração',
 	'CLI_CONFIG_FILE'				=> 'Arquivo de configuração a ser usado',
 	'MISSING_FILE'					=> 'Não é possível acessar o arquivo %1$s',
 	'MISSING_DATA'					=> 'O arquivo de configuração está faltando dados ou pode conter configurações inválidas.',
 	'INVALID_YAML_FILE'				=> 'Não foi possível analisar o arquivo YAML %1$s',
	'CONFIGURATION_VALID'			=> 'O arquivo de configuração é válido',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Atualizar a instalação do phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Com esta opção, é possível atualizar sua instalação do phpBB para a versão mais recente.<br />Durante o processo, todos os seus arquivos serão verificados quanto à integridade. Você pode rever todas as diferenças e arquivos antes da atualização.<br /><br />A atualização do arquivo em si pode ser feita de duas maneiras diferentes.</p><h2>Atualização manual</h2><p>Com esta atualização você só faz o download do seu conjunto pessoal de arquivos alterados para se certificar de que não perde as modificações de arquivos que você pode ter feito. Depois de fazer o download deste pacote, você precisa carregar manualmente os arquivos para a posição correta no diretório raiz phpBB. Uma vez feito, você é capaz de fazer a etapa de verificação de arquivo novamente para ver se você moveu os arquivos para sua localização correta.</p><h2>Atualização automática com FTP</h2><p>Este método é semelhante ao primeiro, mas sem a necessidade de baixar os arquivos alterados e enviá-los por conta própria. Isso será feito para você. Para usar este método você precisa saber seus detalhes de login FTP, pois você será perguntado por eles. Uma vez terminado, você será redirecionado para a verificação de arquivo novamente para se certificar de que tudo foi atualizado corretamente.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anúncio de lançamento</h1>

		<p>Leia o anúncio de lançamento da versão mais recente antes de continuar o seu processo de atualização, pois ele pode conter informações úteis. Ele também contém links de download completo, bem como o log de alterações.</p>

		<br />

		<h1>Como atualizar sua instalação com o pacote de atualização automática</h1>

		<p>A forma recomendada de atualizar sua instalação listada aqui é válida apenas para o pacote de atualização automática. Você também pode atualizar sua instalação usando os métodos listados no documento INSTALL.html. As etapas para atualizar o phpBB3 automaticamente são:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vá para a <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">página de downloads do phpBB.com</a> e faça o download do arquivo "Automatic Update Package".<br /><br /></li>
			<li>Descompacte o arquivo.<br /><br /></li>
			<li>Faça o upload das pastas descompactadas "install" e "vendor" para o diretório raiz phpBB (onde está o arquivo config.php).<br /><br /></li>
		</ul>

		<p>Uma vez carregado, seu forum ficará off-line para usuários normais devido ao diretório de instalação que você carregou agora presente.<br /><br />
		<strong><a href="%1$s" title="%1$s">Agora inicie o processo de atualização apontando o navegador para a pasta de instalação</a>.</strong><br />
		<br />
		Você será guiado pelo processo de atualização. Você será notificado assim que a atualização for concluída.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Tipo de atualização a ser executada',

	'UPDATE_TYPE_ALL'		=> 'Atualizar sistema de arquivos e banco de dados',
	'UPDATE_TYPE_DB_ONLY'	=> 'Atualizar apenas o banco de dados',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Métodos de atualização de arquivos',

	'UPDATE_FILE_METHOD'			=> 'Método de atualização de arquivos',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Transferir ficheiros modificados num arquivo',
	'UPDATE_FILE_METHOD_FTP'		=> 'Atualizar arquivos via FTP (Automático)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Atualizar arquivos via acesso direto ao arquivo (Automático)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecione o formato do arquivo de download',

	// FTP settings
	'FTP_SETTINGS'			=> 'Configurações de FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Nenhum diretório de atualização válido foi encontrado, verifique se carregou os arquivos relevantes.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Sua versão está atualizada. Não é necessário executar a ferramenta de atualização. Se você quiser fazer uma verificação de integridade em seus arquivos, verifique se carregou os arquivos de atualização corretos.',
	'OLD_UPDATE_FILES'				=> 'Os arquivos de atualização estão desatualizados. Os arquivos de atualização encontrados são para atualizar de phpBB %1$s para phpBB %2$s mas a versão mais recente do phpBB é %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Os arquivos de atualização encontrados são incompatíveis com a versão instalada. Sua versão instalada é %1$s e o arquivo de atualização é para atualizar phpBB %2$s para %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Atualizar arquivos',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Verificar arquivos para atualizar',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Falha na abertura do arquivo %s.',

	'UPDATE_FILE_DIFF'		=> 'Arquivos diferenciados modificados ',
	'ALL_FILES_DIFFED'		=> 'Todos os arquivos diferentes foram modificados.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Atualizar arquivos',

	'DOWNLOAD'							=> 'Transferir',
	'DOWNLOAD_CONFLICTS'				=> 'Transferir  e unir arquivos em conflitos ',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Procure por &lt;&lt;&lt; para detectar conflitos',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Transferir arquivos modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Uma vez baixado, você deve descompactar o arquivo. Você vai encontrar os arquivos modificados que você precisa para carregar para o seu diretório phpBB raiz dentro dele. Por favor, faça o upload dos arquivos para suas respectivas localizações. Depois de carregar todos os arquivos, você pode continuar com o processo de atualização.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'O arquivo já está atualizado.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Arquivo não permitido para ser fundido.',
	'FILE_USED'						=> 'Informação utilizada',			// Single file
	'FILES_CONFLICT'				=> 'Arquivos de conflitos',
	'FILES_CONFLICT_EXPLAIN'		=> 'Os arquivos a seguir são modificados e não representam os arquivos originais da versão antiga. PhpBB determinou que esses arquivos criam conflitos se eles são tentados a serem mesclados. Investigue os conflitos e tente resolvê-los manualmente ou continuar a atualização escolhendo o método de mesclagem preferido. Se você resolver os conflitos, verifique manualmente os arquivos novamente depois de os modificar. Você também pode escolher entre o método de mesclagem preferido para cada arquivo. O primeiro resultará em um arquivo onde as linhas conflitantes do seu arquivo antigo serão perdidas, o outro resultará em perder as alterações do arquivo mais recente.',
	'FILES_DELETED'					=> 'Arquivos excluídos',
	'FILES_DELETED_EXPLAIN'			=> 'Os seguintes arquivos não existem na nova versão. Esses arquivos devem ser excluídos da sua instalação.',
	'FILES_MODIFIED'				=> 'Arquivos modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Os arquivos a seguir são modificados e não representam os arquivos originais da versão antiga. O arquivo atualizado será uma fusão entre suas modificações e o novo arquivo.',
	'FILES_NEW'						=> 'Novos arquivos',
	'FILES_NEW_EXPLAIN'				=> 'Atualmente, os arquivos a seguir não existem na sua instalação. Esses arquivos serão adicionados à sua instalação.',
	'FILES_NEW_CONFLICT'			=> 'Novos arquivos em conflito',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Os seguintes arquivos são novos dentro da versão mais recente, mas foi determinado que já existe um arquivo com o mesmo nome dentro da mesma posição. Este arquivo será substituído pelo novo arquivo.',
	'FILES_NOT_MODIFIED'			=> 'Arquivos não modificados',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os seguintes arquivos não são modificados e representam os arquivos phpBB originais da versão que você deseja atualizar a partir de .',
	'FILES_UP_TO_DATE'				=> 'Arquivos já atualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are alOs seguintes arquivos já estão atualizados e não precisam ser atualizadosready up to date and do not need to be updated.',
	'FILES_VERSION'					=> 'Versão de Arquivos',
    'TOGGLE_DISPLAY'				=> 'Exibir / Ocultar lista de arquivos',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Atualizando arquivos',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'O atualizador de arquivos “%1$s“ falhou.  O instalador tentará retornar para “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'O atualizador de arquivos falhou. Não estão disponíveis mais métodos alternativos.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continuar processo de atualização',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Verificar arquivos novamente',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Atualizar o banco de dados',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'A atualização do banco de dados foi bem-sucedida.',

    'TASK_UPDATE_EXTENSIONS'	=> 'Atualizando extensões',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'O conversor especificado não existe.',
	'DEV_NO_TEST_FILE'			=> 'Nenhum valor foi especificado para a variável test_file no conversor. Se você é um usuário deste conversor, você não deve estar vendo este erro, informe esta mensagem para o autor do conversor. Se você for um autor de conversor, você deve especificar o nome de um arquivo que existe na placa de origem para permitir que o caminho para ele seja verificado.',
	'COULD_NOT_FIND_PATH'		=> 'Não foi possível encontrar o caminho para o forum anterior. Por favor, verifique suas configurações e tente novamente.<br />» %s Foi especificado como o caminho de origem.',
	'CONFIG_PHPBB_EMPTY'		=> 'A variável de configuração phpBB3 para “%s” está vazia.',

	'MAKE_FOLDER_WRITABLE'		=> 'Certifique-se de que esta pasta existe e é gravável pelo servidor web, em seguida, tente novamente:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Certifique-se de que estas pastas existem e são graváveis pelo servidor Web, em seguida, tente novamente:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Teste novamente',

	'NO_TABLES_FOUND'			=> 'Nenhuma tabela encontrada.',
	'TABLES_MISSING'			=> 'Não foi possível encontrar essas tabelas<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Verifique o prefixo da tabela e tente novamente.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Continuar a conversão',
	'CONTINUE_CONVERT_BODY'		=> 'Uma tentativa de conversão anterior foi determinada. Agora você pode escolher entre iniciar uma nova conversão ou continuar a conversão.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova conversão',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar a conversão iniciada anteriormente',

	// Start conversion
	'SUB_INTRO'					=> 'Introdução',
	'CONVERT_INTRO'				=> 'Bem-vindo ao phpBB Unified Converter Framework',
	'CONVERT_INTRO_BODY'		=> 'A partir daqui, você pode importar dados de outros sistemas do forum (instalados). A lista abaixo mostra todos os módulos de conversão atualmente disponíveis. Se não houver um conversor mostrado nesta lista para o software do forum do qual você deseja converter, verifique nosso site onde mais módulos de conversão podem estar disponíveis para download.',
	'AVAILABLE_CONVERTORS'		=> 'Conversores disponíveis',
	'NO_CONVERTORS'				=> 'Não há conversores disponíveis para uso.',
	'CONVERT_OPTIONS'			=> 'Opções',
	'SOFTWARE'					=> 'Software do forum',
	'VERSION'					=> 'Versão',
	'CONVERT'					=> 'Converter',

	// Settings
	'STAGE_SETTINGS'			=> 'Configurações',
	'TABLE_PREFIX_SAME'			=> 'O prefixo da tabela precisa ser o usado pelo software que você está convertendo .<br />» O prefixo de tabela especificado foi %s.',
	'DEFAULT_PREFIX_IS'			=> 'O conversor não foi capaz de localizar tabelas com o prefixo especificado. Certifique-se de que introduziu os detalhes correctos para o forum que está a converter. O prefixo de tabela padrão para %1$s e <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Especificar opções de conversão',
	'FORUM_PATH'				=> 'Caminho do forum',
	'FORUM_PATH_EXPLAIN'		=> 'Este é o caminho <strong>relativo</strong> no disco para o seu forum anterior a partir da <strong>raiz desta instalação phpBB3</strong>.',
	'REFRESH_PAGE'				=> 'Atualizar página para continuar a conversão',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se definido como Sim, o conversor irá atualizar a página para continuar a conversão após ter concluído uma etapa. Se esta for a sua primeira conversão para fins de teste e para determinar quaisquer erros com antecedência, sugerimos que defina isto como Não.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversão em andamento',

	'AUTHOR_NOTES'				=> 'Notas do autor<br />» %s',
	'STARTING_CONVERT'			=> 'Iniciando processo de conversão',
	'CONFIG_CONVERT'			=> 'Convertendo a configuração',
	'DONE'						=> 'Feito',
	'PREPROCESS_STEP'			=> 'Executar pré-processamento de funções / consultas',
	'FILLING_TABLE'				=> 'Tabela de preenchimento <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Preenchendo tabelas',
	'DB_ERR_INSERT'				=> 'Erro ao processar a consulta <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Erro ao processar <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Erro ao executar <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Erro ao executar <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Erro ao executar a consulta <code>SELECT</code>.',
	'STEP_PERCENT_COMPLETED'	=> 'Etapa <strong>%d</strong> de <strong>%d</strong>',
	'FINAL_STEP'				=> 'Etapa final do processo',
	'SYNC_FORUMS'				=> 'Começando a sincronizar fóruns',
	'SYNC_POST_COUNT'			=> 'Sincronizando post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizando post_counts de <var>entry</var> %1$s para %2$s.',
	'SYNC_TOPICS'				=> 'Começando a sincronizar tópicos',
	'SYNC_TOPIC_ID'				=> 'Sincronizando tópicos de <var>topic_id</var> %1$s para %2$s.',
	'PROCESS_LAST'				    => 'Processando as últimas instrução',
	'UPDATE_TOPICS_POSTED'		=> 'Gerando tópicos de informações postadas',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Ocorreu um erro ao gerar informações publicadas por tópicos. Você pode repetir essa etapa no ACP após o processo de conversão ser concluído.',
	'CONTINUE_LAST'				=> 'Continuar as últimas instruções',
	'CLEAN_VERIFY'				=> 'Limpeza e verificação da estrutura final',
	'NOT_UNDERSTAND'			=> 'Não foi possível entender %s #%d, tabela %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Conflito de nomeação: %s e %s são ambos apelidos <br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversão concluída',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Agora você converteu seu forum com sucesso para phpBB 3.2. Agora pode iniciar sessão e <a href="../">aceder ao seu forum</a>. Certifique-se de que as configurações foram transferidas corretamente antes de ativar seu forum, excluindo o diretório de instalação. Lembre-se de que a ajuda sobre o uso do phpBB está disponível on-line através de <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Documentação</a> e o <a href="https://www.phpbb.com/community/viewforum.php?f=466">suporte forums</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'O upload de FTP para anexos é ativado no forum antiga. Desative a opção de upload de FTP e verifique se um diretório de upload válido é especificado e, em seguida, copie todos os arquivos de anexo para este novo diretório acessível da Web. Depois de ter feito isso, reinicie o conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Não há informações de configuração disponíveis para a conversão.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Não é possível obter informações de acesso ao fórum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Não é possível obter categorias.',
	'CONV_ERROR_GET_CONFIG'				=> 'Não foi possível recuperar a configuração do forum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Não é possível acessar/ler “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Não é possível obter informações de autenticação de grupo.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistência na tabela de grupos detectada em add_bots() - você precisa adicionar todos os grupos especiais se você fizer isso manualmente.',
	'CONV_ERROR_INSERT_BOT'				=> 'Não é possível inserir o bot na tabela de usuários.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Não é possível inserir o bot na tabela de bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Não é possível inserir o usuário na tabela  user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Erro do analisador de mensagens',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota para o desenvolvedor: você deve especificar  $convertor[\'avatar_path\'] para usar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'O caminho relativo para o forum de origem não foi especificado.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota para o desenvolvedor: você deve especificar  $convertor[\'avatar_gallery_path\'] para usar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'O grupo “%1$s” não pôde ser encontrado em %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota para o desenvolvedor: você deve especificar $convertor[\'ranks_path\'] para usar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota para o desenvolvedor: você deve especificar $convertor[\'smilies_path\'] para usar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota para o desenvolvedor: você deve especificar $convertor[\'upload_path\'] para usar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Impossível inserir/atualizar a configuração de permissão.',
	'CONV_ERROR_PM_COUNT'				=> 'Não é possível selecionar a pasta para a contagem MP.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Não é possível inserir novo fórum substituindo a categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Não é possível inserir novo fórum substituindo o fórum antigo.',
	'CONV_ERROR_USER_ACCESS'			=> 'Não é possível obter informações de autenticação do usuário.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grupo errado “%1$s” definido em %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Esta página coleta os dados necessários para acessar ao forum de origem. Insira os detalhes do banco de dados do seu forum anterior; O conversor não irá alterar nada no banco de dados fornecido abaixo. O forum de origem deve ser desativada para permitir uma conversão consistente.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens guardadas',

	'PRE_CONVERT_COMPLETE'			=> 'Todas as etapas de pré-conversão foram concluídas com êxito. Agora você pode iniciar o processo de conversão real. Por favor note que você pode ter que manualmente fazer e ajustar várias coisas. Após a conversão, especialmente verificar as permissões atribuídas, reconstruir o índice de pesquisa que não é convertido e também certifique-se que os arquivos foram copiados corretamente, por exemplo, avatares e smilies.',
));
