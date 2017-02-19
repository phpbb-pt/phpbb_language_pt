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
	'ADMIN_CONFIG'				=> 'Administrator configuration',
	'ADMIN_PASSWORD'			=> 'Administrator password',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirm administrator password',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Please enter a password between 6 and 30 characters in length.',
	'ADMIN_USERNAME'			=> 'Administrator username',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Please enter a username between 3 and 20 characters in length.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'The email address you entered is invalid.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'The passwords you entered did not match.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'The password you entered is too long. The maximum length is 30 characters.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'The password you entered is too short. The minimum length is 6 characters.',
	'INST_ERR_USER_TOO_LONG'		=> 'The username you entered is too long. The maximum length is 20 characters.',
	'INST_ERR_USER_TOO_SHORT'		=> 'The username you entered is too short. The minimum length is 3 characters.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Bulletin board configuration',
	'DEFAULT_LANGUAGE'	=> 'Default language',
	'BOARD_NAME'		=> 'Title of the board',
	'BOARD_DESCRIPTION'	=> 'Short description of the board',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Database settings',

	// Form labels
	'DB_CONFIG'				=> 'Database configuration',
	'DBMS'					=> 'Database type',
	'DB_HOST'				=> 'Database server hostname or DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN stands for Data Source Name and is relevant only for ODBC installs. On PostgreSQL, use localhost to connect to the local server via UNIX domain socket and 127.0.0.1 to connect via TCP. For SQLite, enter the full path to your database file.',
	'DB_PORT'				=> 'Database server port',
	'DB_PORT_EXPLAIN'		=> 'Leave this blank unless you know the server operates on a non-standard port.',
	'DB_PASSWORD'			=> 'Database password',
	'DB_NAME'				=> 'Database name',
	'DB_USERNAME'			=> 'Database username',
	'DATABASE_VERSION'		=> 'Database version',
    'TABLE_PREFIX'			=> 'Prefix for tables in database',
	'TABLE_PREFIX_EXPLAIN'	=> 'The prefix must start with a letter and must only contain letters, numbers and underscores.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Cannot load the PHP module for the selected database type.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'The prefix you entered is invalid. It must start with a letter and must only contain letters, numbers and underscores.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'The table prefix you have specified is too long. The maximum length is %d characters.',
	'INST_ERR_DB_NO_NAME'			=> 'No database name specified.',
	'INST_ERR_DB_FORUM_PATH'		=> 'The database file specified is within your board directory tree. You should put this file in a non web-accessible location.',
	'INST_ERR_DB_CONNECT'			=> 'Could not connect to the database, see error message below.',
	'INST_ERR_DB_NO_ERROR'			=> 'No error message given.',
	'INST_ERR_PREFIX'				=> 'Tables with the specified prefix already exist, please choose an alternative.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'The version of MySQL installed on this machine is incompatible with the “MySQL with MySQLi Extension” option you have selected. Please try the “MySQL” option instead.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'The version of the SQLite extension you have installed is too old, it must be upgraded to at least 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'The version of Oracle installed on this machine requires you to set the <var>NLS_CHARACTERSET</var> parameter to <var>UTF8</var>. Either upgrade your installation to 9.2+ or change the parameter.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'The database you have selected was not created in <var>UNICODE</var> or <var>UTF8</var> encoding. Try installing with a database in <var>UNICODE</var> or <var>UTF8</var> encoding.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'The schema file is not writable',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail configuration',

	// Package info
	'PACKAGE_VERSION'					=> 'Package version installed',
	'UPDATE_INCOMPLETE'				=> 'Your phpBB installation has not been correctly updated.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Please read the information below in order to fix this error.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Incomplete update</h1>

	    <p>We noticed that the last update of your phpBB installation hasn’t been completed. Visit the <a href="%1$s" title="%1$s">database updater</a>, ensure <em>Update database only</em> is selected and click on <strong>Submit</strong>. Don\'t forget to delete the "install"-directory after you have updated the database sucessfully.</p>',

    //
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Server configuration',
	'SCRIPT_PATH'				=> 'Script path',
	'SCRIPT_PATH_EXPLAIN'		=> 'The path where phpBB is located relative to the domain name, e.g. <samp>/phpBB3</samp>.',
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
	'MENU_OVERVIEW'		=> 'Overview',
	'MENU_INTRO'		=> 'Introduction',
	'MENU_LICENSE'		=> 'License',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Creating configuration file',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Adding configuration settings',
	'TASK_ADD_DEFAULT_DATA'				=> 'Adding default settings to the database',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Creating database schema file',
	'TASK_SETUP_DATABASE'				=> 'Setting up database',
	'TASK_CREATE_TABLES'				=> 'Creating tables',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registering bots',
	'TASK_ADD_LANGUAGES'	=> 'Installing available languages',
	'TASK_ADD_MODULES'		=> 'Installing modules',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Installing packaged extensions',
    'TASK_NOTIFY_USER'			=> 'Sending notification e-mail',
	'TASK_POPULATE_MIGRATIONS'	=> 'Populating migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'The installer has finished successfully',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Module not found',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'A module could not be found because the service, %s, is undefined.',

	'TASK_NOT_FOUND'				=> 'Task not found',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'A task could not be found because the service, %s, is undefined.',

	'SKIP_MODULE'	=> 'Skip “%s” module',
	'SKIP_TASK'		=> 'Skip “%s” task',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'All installer task services should start with “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installer task service definition is invalid. Service name “%1$s” given, the expected class namespace is “%2$s” for that. For more information please see the documentation of task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'The installer config file is not writable.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Install phpBB',
	'CLI_UPDATE_BOARD'				=> 'Update phpBB',
 	'CLI_INSTALL_SHOW_CONFIG'		=> 'Show the configuration which will be used',
 	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validate a configuration file',
 	'CLI_CONFIG_FILE'				=> 'Config file to use',
 	'MISSING_FILE'					=> 'Unable to access file %1$s',
 	'MISSING_DATA'					=> 'Config file is missing data or might contain invalid settings.',
 	'INVALID_YAML_FILE'				=> 'Could not parse YAML file %1$s',
	'CONFIGURATION_VALID'			=> 'The configuration file is valid',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Update phpBB installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'With this option, it is possible to update your phpBB installation to the latest version.<br />During the process all of your files will be checked for their integrity. You are able to review all differences and files before the update.<br /><br />The file update itself can be done in two different ways.</p><h2>Manual Update</h2><p>With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Release announcement</h1>

		<p>Please read the release announcement for the latest version before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation with the Automatic Update Package</h1>

		<p>The recommended way of updating your installation listed here is only valid for the automatic update package. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 automatically are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> and download the "Automatic Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed "install" and "vendor" folders to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%1$s" title="%1$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified once the update is complete.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Type of update to run',

	'UPDATE_TYPE_ALL'		=> 'Update filesystem and database',
	'UPDATE_TYPE_DB_ONLY'	=> 'Update database only',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'File updater methods',

	'UPDATE_FILE_METHOD'			=> 'File updater method',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Download modified files in an archive',
	'UPDATE_FILE_METHOD_FTP'		=> 'Update files via FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Update files via direct file access (Automatic)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP settings',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'No valid update directory was found, please make sure you uploaded the relevant files.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'OLD_UPDATE_FILES'				=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Update files',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Check files to update',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'The file differ failed to open %s.',

	'UPDATE_FILE_DIFF'		=> 'Diffing changed files',
	'ALL_FILES_DIFFED'		=> 'All modified files has been diffed.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Update files',

	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_CONFLICTS'				=> 'Download merge conflicts archive',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Search for &lt;&lt;&lt; to spot conflicts',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, you may continue with the update process.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File is already up to date.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File not allowed to be diffed.',
	'FILE_USED'						=> 'Information used from',			// Single file
	'FILES_CONFLICT'				=> 'Conflict files',
	'FILES_CONFLICT_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. phpBB determined that these files create conflicts if they are tried to be merged. Please investigate the conflicts and try to manually resolve them or continue the update choosing the preferred merging method. If you resolve the conflicts manually check the files again after you modified them. You are also able to choose between the preferred merge method for every file. The first one will result in a file where the conflicting lines from your old file will be lost, the other one will result in losing the changes from the newer file.',
	'FILES_DELETED'					=> 'Deleted files',
	'FILES_DELETED_EXPLAIN'			=> 'The following files do not exist in the new version. These files have to be deleted from your installation.',
	'FILES_MODIFIED'				=> 'Modified files',
	'FILES_MODIFIED_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. The updated file will be a merge between your modifications and the new file.',
	'FILES_NEW'						=> 'New files',
	'FILES_NEW_EXPLAIN'				=> 'The following files currently do not exist within your installation. These files will be added to your installation.',
	'FILES_NEW_CONFLICT'			=> 'New conflicting files',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'The following files are new within the latest version but it has been determined that there is already a file with the same name within the same position. This file will be overwritten by the new file.',
	'FILES_NOT_MODIFIED'			=> 'Not modified files',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'The following files are not modified and represent the original phpBB files from the version you want to update from.',
	'FILES_UP_TO_DATE'				=> 'Already updated files',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are already up to date and do not need to be updated.',
	'FILES_VERSION'					=> 'Files Version',
    'TOGGLE_DISPLAY'				=> 'View/Hide file list',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Updating files',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'File updater “%1$s“ has failed. The installer will try to fallback to “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Check files again',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Update database',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'The database update was successful.',

    'TASK_UPDATE_EXTENSIONS'	=> 'Updating extensions',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'The specified convertor does not exist.',
	'DEV_NO_TEST_FILE'			=> 'No value has been specified for the test_file variable in the convertor. If you are a user of this convertor, you should not be seeing this error, please report this message to the convertor author. If you are a convertor author, you must specify the name of a file which exists in the source board to allow the path to it to be verified.',
	'COULD_NOT_FIND_PATH'		=> 'Could not find path to your former board. Please check your settings and try again.<br />» %s was specified as the source path.',
	'CONFIG_PHPBB_EMPTY'		=> 'The phpBB3 config variable for “%s” is empty.',

	'MAKE_FOLDER_WRITABLE'		=> 'Please make sure that this folder exists and is writable by the webserver then try again:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Please make sure that these folders exist and are writable by the webserver then try again:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Test again',

	'NO_TABLES_FOUND'			=> 'No tables found.',
	'TABLES_MISSING'			=> 'Could not find these tables<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Please check your table prefix and try again.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Continue conversion',
	'CONTINUE_CONVERT_BODY'		=> 'A previous conversion attempt has been determined. You are now able to choose between starting a new conversion or continuing the conversion.',
	'CONVERT_NEW_CONVERSION'	=> 'New conversion',
	'CONTINUE_OLD_CONVERSION'	=> 'Continue previously started conversion',

	// Start conversion
	'SUB_INTRO'					=> 'Introduction',
	'CONVERT_INTRO'				=> 'Welcome to the phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'From here, you are able to import data from other (installed) board systems. The list below shows all the conversion modules currently available. If there is no convertor shown in this list for the board software you wish to convert from, please check our website where further conversion modules may be available for download.',
	'AVAILABLE_CONVERTORS'		=> 'Available convertors',
	'NO_CONVERTORS'				=> 'No convertors are available for use.',
	'CONVERT_OPTIONS'			=> 'Options',
	'SOFTWARE'					=> 'Board software',
	'VERSION'					=> 'Version',
	'CONVERT'					=> 'Convert',

	// Settings
	'STAGE_SETTINGS'			=> 'Settings',
	'TABLE_PREFIX_SAME'			=> 'The table prefix needs to be the one used by the software you are converting from.<br />» Specified table prefix was %s.',
	'DEFAULT_PREFIX_IS'			=> 'The convertor was not able to find tables with the specified prefix. Please make sure you have entered the correct details for the board you are converting from. The default table prefix for %1$s is <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Specify conversion options',
	'FORUM_PATH'				=> 'Board path',
	'FORUM_PATH_EXPLAIN'		=> 'This is the <strong>relative</strong> path on disk to your former board from the <strong>root of this phpBB3 installation</strong>.',
	'REFRESH_PAGE'				=> 'Refresh page to continue conversion',
	'REFRESH_PAGE_EXPLAIN'		=> 'If set to yes, the convertor will refresh the page to continue the conversion after having finished a step. If this is your first conversion for testing purposes and to determine any errors in advance, we suggest to set this to No.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversion in progress',

	'AUTHOR_NOTES'				=> 'Author notes<br />» %s',
	'STARTING_CONVERT'			=> 'Starting conversion process',
	'CONFIG_CONVERT'			=> 'Converting the configuration',
	'DONE'						=> 'Done',
	'PREPROCESS_STEP'			=> 'Executing pre-processing functions/queries',
	'FILLING_TABLE'				=> 'Filling table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Filling tables',
	'DB_ERR_INSERT'				=> 'Error while processing <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Error while processing <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error while executing <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error while executing <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Error while running <code>SELECT</code> query.',
	'STEP_PERCENT_COMPLETED'	=> 'Step <strong>%d</strong> of <strong>%d</strong>',
	'FINAL_STEP'				=> 'Process final step',
	'SYNC_FORUMS'				=> 'Starting to synchronise forums',
	'SYNC_POST_COUNT'			=> 'Synchronising post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronising post_counts from <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'Starting to synchronise topics',
	'SYNC_TOPIC_ID'				=> 'Synchronising topics from <var>topic_id</var> %1$s to %2$s.',
	'PROCESS_LAST'					=> 'Processing last statements',
	'UPDATE_TOPICS_POSTED'		=> 'Generating topics posted information',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'An error occurred while generating topics posted information. You can retry this step in the ACP after the conversion process is completed.',
	'CONTINUE_LAST'				=> 'Continue last statements',
	'CLEAN_VERIFY'				=> 'Cleaning up and verifying the final structure',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Naming conflict: %s and %s are both aliases<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversion completed',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'You have now successfully converted your board to phpBB 3.2. You can now login and <a href="../">access your board</a>. Please ensure that the settings were transferred correctly before enabling your board by deleting the install directory. Remember that help on using phpBB is available online via the <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Documentation</a> and the <a href="https://www.phpbb.com/community/viewforum.php?f=466">support forums</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload for attachments is enabled at the old board. Please disable the FTP upload option and make sure a valid upload directory is specified, then copy all attachment files to this new web accessible directory. Once you have done this, restart the convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'There is no configuration information available for the conversion.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Unable to get forum access information.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Unable to get categories.',
	'CONV_ERROR_GET_CONFIG'				=> 'Could not retrieve your board configuration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Unable to access/read “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Unable to get group authentication information.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistency in groups table detected in add_bots() - you need to add all special groups if you do it manually.',
	'CONV_ERROR_INSERT_BOT'				=> 'Unable to insert bot into users table.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Unable to insert bot into bots table.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Unable to insert user into user_group table.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Message parser error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note to developer: you must specify $convertor[\'avatar_path\'] to use %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'The relative path to the source board has not been specified.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note to developer: you must specify $convertor[\'avatar_gallery_path\'] to use %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Group “%1$s” could not be found in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note to developer: you must specify $convertor[\'ranks_path\'] to use %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note to developer: you must specify $convertor[\'smilies_path\'] to use %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note to developer: you must specify $convertor[\'upload_path\'] to use %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Unable to insert/update permission setting.',
	'CONV_ERROR_PM_COUNT'				=> 'Unable to select folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Unable to insert new forum replacing old category.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Unable to insert new forum replacing old forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Unable to get user authentication information.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Wrong group “%1$s” defined in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'This page collects the data required to access the source board. Enter the database details of your former board; the converter will not change anything in the database given below. The source board should be disabled to allow a consistent conversion.',
	'CONV_SAVED_MESSAGES'				=> 'Saved messages',

	'PRE_CONVERT_COMPLETE'			=> 'All pre-conversion steps have successfully been completed. You may now begin the actual conversion process. Please note that you may have to manually do and adjust several things. After conversion, especially check the permissions assigned, rebuild your search index which is not converted and also make sure files got copied correctly, for example avatars and smilies.',
));
