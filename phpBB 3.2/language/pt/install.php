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
	'INSTALL_PANEL'	=> 'Installation Panel',
	'SELECT_LANG'	=> 'Select language',

	'STAGE_INSTALL'	=> 'Installing phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introduction',
	'INTRODUCTION_BODY'		=> 'Welcome to phpBB3!<br /><br />phpBB® is the most widely used open source bulletin board solution in the world. phpBB3 is the latest installment in a package line started in 2000. Like its predecessors, phpBB3 is feature-rich, user-friendly, and fully supported by the phpBB Team. phpBB3 greatly improves on what made phpBB2 popular, and adds commonly requested features that were not present in previous versions. We hope it exceeds your expectations.<br /><br />This installation system will guide you through installing phpBB3, updating to the latest version of phpBB3 from past releases, as well as converting to phpBB3 from a different discussion board system (including phpBB2). For more information, we encourage you to read <a href="../docs/INSTALL.html">the installation guide</a>.<br /><br />To read the phpBB3 license or learn about obtaining support and our stance on it, please select the respective options from the side menu. To continue, please select the appropriate tab above.',

	// Support page
	'SUPPORT_TITLE'		=> 'Support',
	'SUPPORT_BODY'		=> 'Full support will be provided for the current stable release of phpBB3, free of charge. This includes:</p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li><li>updating from Release Candidate (RC) versions to the latest stable version</li><li>converting from phpBB 2.0.x to phpBB3</li><li>converting from other discussion board software to phpBB3 (please see the <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>We encourage users still running beta versions of phpBB3 to replace their installation with a fresh copy of the latest version.</p><h2>Extensions / Styles</h2><p>For issues relating to Extensions, please post in the appropriate <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />For issues relating to styles, templates and themes, please post in the appropriate <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />If your question relates to a specific package, please post directly in the topic dedicated to the package.</p><h2>Obtaining Support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Quick Start Guide</a><br /><br />To ensure you stay up to date with the latest news and releases, why not <a href="https://www.phpbb.com/support/">subscribe to our mailing list</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Welcome to Installation',
	'INSTALL_INTRO_BODY'	=> 'With this option, it is possible to install phpBB3 onto your server.</p><p>In order to proceed, you will need your database settings. If you do not know your database settings, please contact your host and ask for them. You will not be able to continue without them. You need:</p>

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
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ou superior (direto ou via ODBC)</li>
		<li>MS SQL Server 2005 ou superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Apenas as Bases de Dados suportadas pelo seu servidor estarão disponíveis.',
	'ACP_LINK'			=> 'Aceder à <a href="%1$s">ACP</a>',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> 'File not exists',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'To be able to install phpBB the %1$s file needs to exist.',
	'FILE_NOT_WRITABLE'			=> 'File not writable',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> 'To be able to install phpBB the %1$s file needs to be writable.',

	'DIRECTORY_NOT_EXISTS'				=> 'Directory not exists',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'		=> 'To be able to install phpBB the %1$s directory needs to exist.',
	'DIRECTORY_NOT_WRITABLE'			=> 'Directory not writable',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> 'To be able to install phpBB the %1$s directory needs to be writable.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP version',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB requires PHP version 5.4.0 or higher.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize() function is required',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'In order for phpBB to function correctly, the getimagesize function needs to be available.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 support',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB will not run if your PHP installation is not compiled with UTF-8 support in the PCRE extension.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON support',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'In order for phpBB to function correctly, the PHP JSON extension needs to be available.',
	'PHP_SUPPORTED_DB'					=> 'Supported databases',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'You must have support for at least one compatible database within PHP. If no database modules are shown as available you should contact your hosting provider or review the relevant PHP installation documentation for advice.',

	'RETEST_REQUIREMENTS'	=> 'Retest requirements',

	'STAGE_REQUIREMENTS'	=> 'Check requirements'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'You must fill out all fields in this block.',

	'TIMEOUT_DETECTED_TITLE'	=> 'The installer detected a timeout',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'The installer has detected a timeout, you may try to refresh the page, which may lead to data corruption. We suggest that you either increase your timeout settings or try to use the CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Set installation data',
	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administrator details',

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
	'TABLE_PREFIX'			=> 'Prefix for tables in database',
	'TABLE_PREFIX_EXPLAIN'	=> 'The prefix must start with a letter and must only contain letters, numbers and underscores.',

	// Database options
	'DB_OPTION_MSSQL'		=> 'MSSQL Server 2000+',
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE'		=> 'SQLite 2',
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
	'INST_ERR_DB_NO_SQLITE'			=> 'The version of the SQLite extension you have installed is too old, it must be upgraded to at least 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'The version of the SQLite extension you have installed is too old, it must be upgraded to at least 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'The version of Oracle installed on this machine requires you to set the <var>NLS_CHARACTERSET</var> parameter to <var>UTF8</var>. Either upgrade your installation to 9.2+ or change the parameter.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'The database you have selected was not created in <var>UNICODE</var> or <var>UTF8</var> encoding. Try installing with a database in <var>UNICODE</var> or <var>UTF8</var> encoding.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'The schema file is not writable',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail configuration',

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
));