<?php
/**
*
* help_faq [Português]
*
* @package language
* @version 1.0.4
* @Traduzido por: http://phpbbportugal.com | pré-Acordo Ortográfico
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0	=> '--',
		1	=> 'Sobre o <b>Login</b> e o <b>Registo</b>',
	),
	array(
		0	=> 'Por que é que não consigo entrar no Fórum?',
		1	=> 'Já se <b>Registou</b>? Deve <b>Registar-se</b> para poder <b>Entrar</b> no <b>Fórum</b>. Foi expulso? Se foi expulso deverá receber uma <b>Mensagem</b> a informá-lo da ocorrência. Se discordar das razões apontadas contacte o <b>Administrador</b>. Se está <b>registado</b>, não se encontra expulso e mesmo assim não conseguir entrar, verifique se o seu <b>Nome de Utilizador</b> e <b>Senha</b> estão correctos. Normalmente é esse o problema. Se mesmo assim, não encontra uma explicação para a situação, contacte o <b>Administrador</b> porque pode haver alguma configuração errada no Sistema.',
	),
	array(
		0	=> 'O Registo é obrigatório?',
		1	=> 'É da exclusiva responsabilidade do <b>Administrador</b> deste Fórum decidir se o <b>Registo</b> é ou não obrigatório. No entanto, o <b>Registo</b> dar-lhe-á acesso a ferramentas adicionais não disponíveis aos <b>Visitantes</b>, como a definição de <b>Avatares</b>, o uso de <b>Mensagens Privadas</b>, o envio de <b>emails</b> para outros <b>Utilizadores</b>, a sua participação em <b>Grupos</b>, etc. São necessários apenas alguns segundos para se fazer o <b>Registo</b>, é do seu interesse que o faça.',
	),
	array(
		0	=> 'Por que entro automaticamente no Fórum?',
		1	=> 'Porque anteriormente assinalou a opção <b>Na próxima visita entrar automaticamente</b>. Nunca assinalar esta opção se usar um computador acessível a outras pessoas. <b>Isso evita o uso abusivo por terceiros da sua conta</b>. Para que esta opção perca efeito, da próxima vez que sair do Fórum clique em: <b>Sair [ Utilizador ]</b>',
	),
	array(
		0	=> 'Posso ocultar o meu Nome de <b>Utilizador</b> da Lista de <b>Utilizadores</b> Online?',
		1	=> 'No <b>Painel de Controlo do Utilizador [UCP]</b>, aba <b>Preferências</b>, opção <b>Configurações Pessoais</b>, seleccione <b>Sim</b> em <b>Ocultar o meu Status Online</b>. Desta forma só o <b>Administrador</b> e os <b>Moderadores</b> poderão vê-lo Online. Passará a ser considerado <b>Utilizador</b> invisível pelo Sistema.',
	),
	array(
		0	=> 'Esqueci-me da minha Senha, e agora?',
		1	=> 'A sua <b>Senha</b> não pode ser recuperada, no entanto pode pedir uma nova. Proceda como que se estivesse a entrar no <b>Fórum</b> pela primeira vez. Clique em <b>Entrar</b> e em seguida em <b>Esqueci-me da senha</b>. Siga as instruções, e voltará a entrar no <b>Fórum</b> em poucos minutos, com uma <b>Senha</b> nova.',
	),
	array(
		0	=> 'Registei-me mas não consigo entrar!',
		1	=> 'Verifique se escreve correctamente o <b>Nome de Utilizador</b> e a <b>Senha</b>.  Se tem a certeza de que estão correctos tenha em atenção um de dois factores. Se a função <a href="http://www.coppa.org/coppa.htm" target="_blank";" title="Abrir numa janela nova"><i><b>COPPA</b> (Childrens Online Privacy Protection Act)</i></a> estiver activa no <b>Fórum</b> e assinalou a uma <b>idade inferior a 13 anos</b> durante o <b>Registo</b>, então tem que seguir as instruções que recebeu. Se não é este o seu caso, então o seu <b>Registo</b> ainda não se encontra-se activado. Alguns <b>Fóruns</b> obrigam à activação dos novos <b>Registos</b>. A Activação tanto pode ser feita pelo <b>Administrador</b> como pelo próprio <b>Utilizador</b>, que neste último caso receberá um email para esse efeito. Esta informação é fornecida aos novos <b>Utilizadores</b> durante o <b>Registo</b>. Se recebeu um email, siga as suas instruções. Se não recebeu nenhum email pode ter escrito incorrectamente o endereço de email ou então está considerado como spam pelo seu cliente de email. Se tem certeza que o endereço de email que forneceu é válido e correto, tente contactar o <b>Administrador do Fórum</b>.',
	),
	array(
		0	=> 'Registei-me e já entrei anteriormente mas agora não!',
		1	=> 'É possível que o administrador tenha excluído o seu registo por algum motivo. Além disso, os administradores removerem registos de utilizadores que nunca colocaram mensagens, de modo a reduzir o tamanho da Base de Dados. Se isso aconteceu, tente registar-se novamente e participar das discussões.',
	),
	array(
		0	=> 'O que é <b>COPPA</b>?',
		1	=> 'A <a href="http://www.coppa.org/coppa.htm" target="_blank";" title="Abrir numa janela nova"><i><b>COPPA</b> (Childrens Online Privacy Protection Act)</i></a> é uma Lei de 1998 dos EUA que exige uma autorização para guardar as informações relativas a menores de 13 anos de idade.',
	),
	array(
		0	=> 'Por que não consigo Registar-me?',
		1	=> 'É possível que o <b>Administrador</b> tenha expulso o seu <b>Endereço de IP</b> ou adicionado como <b>Nome Proibido</b> o <b>Nome de Utilizador</b> que deseja usar. Os <b>Registos</b> também podem encontrar-se temporariamente desactivados, por razões não especificadas.',
	),
	array(
		0	=> 'Para que serve a opção <b>Apagar cookies</b>?',
		1	=> 'Apaga do seu PC todos os <b>Cookies</b> criados pelo phpBB3 e que servem para o manter ligado e autenticado, e permitem o pleno funcionamento das opções activadas pelo <b>Administrador</b>.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre as <b>Preferências e configurações de Utilizadores</b>',
	),
	array(
		0	=> 'Como altero as configuração do meu Perfil?',
		1	=> 'As configurações (depois do Registo) são guardadas numa <b>Base de Dados</b>. Para alterá-las aceda ao <b>Painel de Controlo do Utilizador [UCP]</b>, aba <b>Perfil</b>. Aí pode alterar os dados do seu Registo.'
	),
	array(
		0	=> 'A Data e Hora estão erradas!',
		1	=> 'Provavelmente as datas estão correctas, pode acontecer que esteja a visualizar as horas de um Fuso Horário diferente do seu. Pode alterar o Fuso Horário do Fórum no seu Perfil na opção <b>Fuso Horário</b> Seleccione <b>[GMT] Dublin, Edinburgh, Iceland, Lisboa, London, Casablanca</b>. A mudança do Fuso Horário só é permitida aos <b>Utilizadores Registados</b>.',
	),
	array(
		0	=> 'Alterei o Fuso Horário, mas a Data e Hora continuam erradas!',
		1	=> 'Se tem a certeza que o fuso horário que escolheu é a <b>[GMT] Dublin, Edinburgh, Iceland, Lisboa, London, Casablanca</b> é possível que seja devido à mudança de horário de Verão/Inverno.',
	),
	array(
		0	=> 'O meu idioma não está na lista!',
		1	=> 'Este Fórum usa o Português europeu como Idioma oficial.',
	),
	array(
		0	=> 'Como posso exibir uma Imagem junto ao meu Nome de <b>Utilizador</b>?',
		1	=> 'Há duas imagens que podem aparecer junto com um nome de <b>Utilizador</b> quando se vêem as Mensagens. Uma delas pode ser uma imagem associada à sua classificação, geralmente na forma de blocos, estrelas ou pontos, indicando a quantidade de mensagens que tenha feito ou o seu estatuto no Fórum. Outra, geralmente uma imagem maior, é conhecida como um <b>Avatar</b>, que é normalmente única ou pertencente a cada <b>Utilizador</b>. Cabe ao Administrador permitir ou não o uso de <b>Avatar</b> e definir como podem ser usados. Se não conseguir utilizar <b>Avatares</b>, contacte o Administrador do Fórum.',
	),
	array(
		0	=> 'Como posso alterar a minha Classificação?',
		1	=> 'De uma forma geral, o <b>Utilizador</b> Normal não pode alterar directamente a sua Classificação (as Classificação aparecem por debaixo do Nome de Utilizador nos Tópicos e no Perfil, dependendo do Template em uso). A maior parte das Classificação existentes, indicam o Número de Mensagens enviadas ou indicam certo tipo de <b>Utilizadores</b>, ou seja, Moderadores e Administradores poderão ter uma Classificação Especial. Por Favor, não abuse do Fórum enviando Mensagens desnecessárias apenas para aumentar o Nível da sua Classificação, pois os Administradores ou Moderadores podem tomar alguma atitude contra si, se considerarem que está a ter atitudes abusivas.',
	),
	array(
		0	=> 'Quando clico no email de um <b>Utilizador</b>, pede-me para ligar no fórum?!',
		1	=> 'Só os <b>Utilizadores Registados</b> podem enviar <b>emails</b> através do formulário exclusivo do Fórum (se esta função se encontrar activada). Isso evita o uso malicioso do sistema de email por <b>Visitantes</b>.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre as <b>Mensagens</b>',
	),
   array( 
      0 => 'Como posso enviar uma mensagem?', 
      1 => 'Para enviar um novo <b>Tópico</b> num <b>Fórum</b>, clique no botão relevante das páginas dos <b>Fóruns</b> e <b>Tópicos</b>. Deverá registar-se antes de enviar uma <b>mensagem</b>. Uma lista de suas permissões de cada Fórum está disponível no fundo das páginas dos Fóruns e Tópicos. Exemplo: Pode criar novos Tópicos, votações, etc.' 
   ), 
	array(
		0	=> 'Como crio um Tópico no Fórum?',
		1	=> 'Isso é fácil, clique no botão <b>Novo Tópico</b> ou <b>Responder</b>. Estes botões só são visíveis nas situações em que está autorizado a fazê-lo.',
	),
	array(
		0	=> 'Como posso Editar ou apagar uma Mensagem?',
		1	=> 'A menos que seja <b>Administrador</b> ou <b>Moderador</b>, apenas pode editar ou excluir as suas próprias mensagens. Pode editar a mensagem clicando no botão de edição. Por vezes, apenas o poderá fazer por um período limitado de tempo, após o envio da mensagem. Caso alguém tenha já respondido, encontrará um pequeno texto abaixo da mensagem que reporta o número de vezes que a editou, juntamente com a data e a hora. Isto não aparece apenas caso alguém não tenha respondido. Não aparecerá igualmente se um <b>Administrador</b> ou <b>Moderador</b> editarem a mensagem, embora possam deixar uma nota informar o critério que justificou a edição. Por favor note que os <b>Utilizadores</b> normais não podem apagar uma mensagem após alguém já ter respondido.',
	),
	array(
		0	=> 'Como posso adicionar uma assinatura às minhas Mensagens?',
		1	=> 'Vá ao <b>Painel de Controlo do Utilizador [UCP]</b> aba <b>Perfil</b> opção <b>A sua assinatura</b>, e adicione a assinatura pretendida. Ainda no <b>[UCP]</b>, mas aba <b>Preferências</b> opção <b>Mensagens enviadas</b> seleccione <b>Activar sempre a Minha Assinatura</b>. Nas suas <b>Mensagens</b> pode, se assim o desejar, desactivar caso a caso a opção <b>Anexar assinatura</b>.',
	),
	array(
		0	=> 'Como posso criar uma votação?',
		1	=> 'Criar uma votação é fácil. Quando envia um <b>Tópico</b> novo (ou Edita a primeira mensagem de um Tópico, caso tenha permissão para tal), encontra na parte inferior à caixa principal da mensagem, um painel com o Título <b>Adicionar Votação</b> (se não vê isto, é porque provavelmente não tem permissão para criar Votação ou o Tópico não é de sua autoria). Deve escrever um Título para a Votação e em seguida, escrever pelo menos Duas <b>Opções de Voto</b> (para adicionar uma opção de votação, escreva o que pretende, e clique no botão <b>Adicionar opção de Voto</b>). Deverá também estipular um tempo limite para a Votação, sendo 0 ilimitado. Poderá acontecer de existir um limite no Número de Opções de Voto, estando esse limite ao critério e configuração do <b>Administrador</b>.',
	),
	array(
		0	=> 'Como posso Editar ou apagar uma votação?',
		1	=> 'Da mesma forma que as <b>Mensagens</b>, as votações só podem ser editadas pelo seu autor, <b>Moderadores</b> ou <b>Administradores</b> do <b>Fórum</b>. Para editar uma votação, clique na primeira mensagem do <b>Tópico</b> (esta mensagem é a que tem a votação associada ao Tópico). Caso ninguém tenha submetido voto, os seus autores podem apagar a votação ou editar as suas opções de voto. Contudo, se os <b>Utilizadores</b> já submeteram votos, apenas <b>Moderadores</b> e <b>Administradores</b> podem editar ou apagar essa votação. Isso é para evitar com que sejam alteradas as opções de voto em votações em curso.',
	),
	array(
		0	=> 'Por que não consigo entrar num Fórum?',
		1	=> 'O acesso a algumas secções poderá estar limitado apenas a determinados <b>Utilizadores</b> ou Grupos. Para ver, ler, enviar Mensagens, etc., tem que ter de uma autorização especial. Apenas o Moderador dessa secção e um <b>Administrador</b> podem permitir esse acesso. Entre em contacto, caso ache necessário.',
	),
	array(
		0	=> 'Por que não posso Votar?',
		1	=> 'Apenas <b>Utilizadores</b> Registados podem submeter os seus Votos (para impedir duplicação nos resultados). Caso esteja registado, mas mesmo assim não consiga votar, então possivelmente não lhe foi atribuída permissão para tal.',
	),
	array(
		0	=> 'Por que não consigo anexar ficheiros?',
		1	=> 'Em algumas secções, anexar ficheiros pode estar restrito a alguns <b>Utilizadores</b> ou Grupos. Para anexar um arquivo, tem que ter de uma autorização especial. Apenas o Moderador do Fórum e os Administradores podem lhe dar esse acesso. Por Favor, contacte-os.',
	),
	array(
		0	=> 'Por que recebi uma Advertência?',
		1	=> 'Leia as <b>Regras</b> do <b>Fórum</b> cuidadosamente e cumpra-as rigorosamente. Por Favor, note que esta é a decisão do <b>Administrador</b> do <b>Fórum</b>, e o <b>phpBB Group</b> não tem autoridade nenhuma sobre a advertência enviada.',
	),
	array(
		0	=> 'Como posso Denunciar Mensagens?',
		1	=> 'Se o <b>Administrador</b> tiver activado esta opção, vá até à mensagem que deseja denunciar e verá um botão que serve para denunciar Mensagens. Clicando ali, será encaminhado às etapas necessárias para denunciar a mensagem.',
	),
	array(
		0	=> 'Para que serve o botão <b>Guardar</b> no <b>Painel de Mensagens</b>?',
		1	=> 'Esta opção permite-lhe arquivar o rascunho da mensagem enviá-la mais tarde. Para recarregá-la, vá ao <b>Painel de Controlo do Utilizador [UCP]</b> aba <b>Geral</b> opção <b>Rascunhos Arquivados</b> e siga as devidas opções.',
	),
	array(
		0	=> 'Do que necessita a minha Mensagem para ser Aprovada?',
		1	=> 'O <b>Administrador</b> pode decidir se na secção em que está postando, as Mensagens precisem ser revisadas ou não. E também é possível que o <b>Administrador</b> O tenha adicionado a um Grupo de <b>Utilizadores</b> que precise ter suas Mensagens aprovadas antes de enviá-las ao Fórum. Por Favor, contacte o <b>Administrador</b> para maiores informações.',
	),
	array(
		0	=> 'Como posso ressuscitar os meus Tópicos?',
		1	=> 'Clicando em <b>Ressuscitar Tópico</b>, quando estiver a visualizar o mesmo, pode ressuscitar o Tópico para o topo do Fórum na primeira página. Porém, se não vir esta opção, então esta ferramenta encontra-se desactivada. Também o pode fazer simplesmente respondendo ao Tópico. Entretanto, fique atento às regras do sítio web.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre os <b>Formatos</b> e <b>Tipos de Tópicos</b>',
	),
	array(
		0	=> 'O que é BBCode?',
		1	=> 'O <b>BBCode</b> é uma implementação especial do HTML. A possibilidade usar BBCode nas mensagens é determinada pelo <b>Administrador</b> do Fórum. Adicionalmente, pode poderá desactivar o BBCode em cada mensagem, seleccionando <b>Desactivar BBCode nesta Mensagem</b> abaixo da caixa principal de cada mensagem. BBCode por si mesmo é similar em estilo ao HTML, as Etiquetas (TAGs) são incluídas entre parênteses rectos, como por <b>[exemplo]</b>, em vez de <b>&lt;exemplo&gt</b>; proporcionando uma maior facilidade na formatação dos textos e mensagens dentro do Fórum. Para mais informações, consulte o <b>Guia BBCode</b>, acessível através de um atalho no Painel de Mensagens.',
	),
	array(
		0	=> 'Posso usar HTML?',
		1	=> 'Não, não é possível enviar Mensagens em HTML neste Fórum. A maioria dos formatos utilizados no HTML podem ser reproduzidos na utilização das TAGs do BBCode.',
	),
	array(
		0	=> 'O que são Emoções?',
		1	=> 'As <b>Emoções</b>, ou <b>Smileys</b>, são pequenas representações gráficas que são usadas para expressar sentimentos através da utilização de poucos caracteres. :) quer dizer Feliz, :( quer dizer Triste. A lista completa de pode ser vista no formulário junto à caixa de cada mensagem. Evite o uso excessivo de <b>Emoções</b>, já que podem tornar uma <b>Mensagem</b> ilegível, podendo o <b>Administrador</b> ou um <b>Moderador</b> excluí-las ou apagar a mensagem inteira.',
	),
	array(
		0	=> 'Posso exibir Imagens?',
		1	=> 'Regra geral pode incluir imagens nas suas Mensagens. No entanto não existe forma de as armazenar usando o phpBB. Para exibir uma imagem utilize as TAGs BBcode <b>[img]http://endereço.da.imagem.com[/img]</b>, (consulte o <b>Guia de BBCode</b>, acessível no Painel de Mensagens, para mais informações). A menos que possua um Servidor publicamente acessível não pode exibir imagens guardadas no seu próprio PC, nem que necessitem de autenticação, como por exemplo email do Hotmail ou Yahoo, páginas protegidas por senha, etc.',
	),
	array(
		0	=> 'O que são Anúncios Globais?',
		1	=> 'Os <b>Anúncios Globais</b> contêm normalmente informações importantes e devem ser lidos logo que forem publicados. Eles irão aparecer no topo de todas as secções e também com o seu Painel de <b>Utilizadores</b>. Se pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo <b>Administrador</b>.',
	),
	array(
		0	=> 'O que são Anúncios?',
		1	=> 'Os <b>Anúncios</b> contêm normalmente informações importantes e devem ser lidos logo que forem publicados. Os Anúncios são automaticamente colocados no topo de cada página de cada secção. Se pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo <b>Administrador</b>.',
	),
	array(
		0	=> 'O que são Tópicos Fixos?',
		1	=> 'Os <b>Tópicos Fixos</b> aparecem abaixo dos Anúncios, e apenas na primeira página de cada secção. São Tópicos com conteúdo importante e devem ser lidos logo que enviados. Da mesma forma que os Anúncios, está ao critério do <b>Administrador</b> determinar as permissões necessárias para enviar Tópicos Fixos em cada secção.',
	),
	array(
		0	=> 'O que são Tópicos Bloqueados?',
		1	=> 'Os <b>Tópicos Bloqueados</b> são assim colocados por um <b>Administrador</b>, ou Moderador de cada secção. Quando um Tópico se encontra trancado, os <b>Utilizadores</b> do Fórum não podem mais respondê-lo, e qualquer votação em curso, logo será finalizada. Apenas Administradores e Moderadores podem responder nestes Tópicos. Algum determinado Tópico pode ser Trancado por vários motivos.',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> 'O que são Ícones de Tópicos?',
		1	=> 'Os <b>Ícones de Tópicos</b> são imagens que podem ser associadas com as Mensagens para indicar o seu conteúdo. Se pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo <b>Administrador</b>.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre os <b>Níveis de Utilizadores</b> e <b>Grupos</b>',
	),
	array(
		0	=> 'O que são Administradores?',
		1	=> '<b>Administradores</b> são os <b>Utilizadores</b> que possuem o Nível Máximo de controlo sobre todos os aspectos do Fórum. Podem controlar toda a operação das secções, incluindo criar, editar ou apagar secções, determinar permissões, expulsar <b>Utilizadores</b>, criar Grupos de <b>Utilizadores</b> ou Moderadores, etc. E ainda possuem todos os poderes de Moderador em todas as secções existentes.',
	),
	array(
		0	=> 'O que são Moderadores?',
		1	=> '<b>Moderadores</b> são os <b>Utilizadores</b> (ou Grupos de Utilizadores) em que seu trabalho é supervisionar diariamente o andamento das secções que lhes estejam designadas. Eles possuem o poder de editar ou apagar Mensagens, trancar, destrancar, mover e subdividir Tópicos nas secções onde são Moderadores. Geralmente os Moderadores fiscalizam Mensagens que possam ir <b>Além do Assunto em Discussão</b> ou o uso de material abusivo ou ofensivo.',
	),
	array(
		0	=> 'O que são Grupos de <b>Utilizadores</b>?',
		1	=> '<b>Grupos de Utilizadores</b> são uma forma dos Administradores agrupar <b>Utilizadores</b>. Cada <b>Utilizador</b> pode pertencer a Vários Grupos (isto difere da maioria dos outros tipos de Quadros de Mensagens) e a cada Grupo podem ser dados direitos de acesso individuais. Isto torna mais fácil aos Administradores destinar vários <b>Utilizadores</b> como Moderadores de uma determinada secção ou dar-lhes acesso a uma secção privada, etc.',
	),
	array(
		0	=> 'Como me inscrevo num <b>Grupo de Utilizadores</b>?',
		1	=> 'Para se inscrever num Grupo de <b>Utilizadores</b>, clique no atalho de <b>Grupos</b> no topo da página (dependendo da template em uso), podendo então ver todos os Grupos. Nem todos os Grupos possuem um <b>acesso aberto</b>, alguns estão fechados e alguns poderão inclusive encontrar-se invisíveis. Se o Grupo se encontrar aberto, poderá solicitar sua inscrição clicando no botão apropriado. O Líder do Grupo de <b>Utilizadores</b> precisará aprovar a sua inscrição, podendo perguntar-lhe o motivo do mesmo. Por Favor, não insista a um Líder de Grupo caso a sua inscrição seja recusada. Ele deverá informá-lo a respeito de qualquer decisão.',
	),
	array(
		0	=> 'Como posso ser Líder de um Grupo?',
		1	=> 'Os Grupos de <b>Utilizadores</b> são inicialmente criados pelo <b>Administrador</b> do Fórum o qual encarrega alguém de ser responsável pelo mesmo, no caso, o Líder do Grupo. Se está interessado em Criar um Grupo de <b>Utilizadores</b>, deverá primeiramente contactar o <b>Administrador</b>, ao qual deverá contactar com uma <b>Mensagem Privada</b> circunstanciada.',
	),
	array(
		0	=> 'Por que alguns Grupos aparecem em diferentes cores?',
		1	=> 'O <b>Administrador</b> do Fórum pode atribuir cores aos <b>Utilizadores</b> de um determinado grupo, para identificá-los diante de outros <b>Utilizadores</b> e grupos.',
	),
	array(
		0	=> 'O que é um Grupo Padrão?',
		1	=> 'Se é <b>Utilizador</b> de mais de um Grupo de <b>Utilizadores</b>, será determinado qual Cor e Classificação lhe serão atribuídos por padrão. O <b>Administrador</b> poderá lhe conceder a opção de escolha do seu Grupo Padrão pelo Painel de <b>Utilizadores</b>.',
	),
	array(
		0	=> 'O que é a Equipa de Responsáveis do Fórum?',
		1	=> 'A <b>Equipa de Responsáveis do Fórum</b> é uma página onde é exibida a Lista detalhada dos membros da equipa responsável pelo Fórum, incluindo Administradores e Moderadores, bem como os detalhes de cada um deles.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre as <b>Mensagens Privadas</b>',
	),
	array(
		0	=> 'Não consigo enviar Mensagens Privadas!',
		1	=> 'Existem três razões para que tal possa acontecer: Não está Registado no Fórum e/ou não se encontra Online, o <b>Administrador</b> terá desactivado a opção de Mensagens Privadas em todo o Fórum ou o impede por algum motivo de enviar Mensagens. Se este último é o seu caso, pergunte ao <b>Administrador</b> qual o motivo, caso realmente não saiba.',
	),
	array(
		0	=> 'Recebo Mensagens Privadas indesejáveis!',
		1	=> 'Pode bloquear as Mensagens Privadas enviadas por um <b>Utilizador</b> em específico utilizando o seu Painel de <b>Utilizadores</b>. Se estiver recebendo Mensagens indesejáveis por parte de algum <b>Utilizador</b>, contacte o <b>Administrador</b> do Fórum para que possa proibir o determinado utilizador de enviar este tipo de Mensagens.',
	),
	array(
		0	=> 'Recebi de alguém neste Fórum um email com assuntos irrelevantes ou abusivos!',
		1	=> 'Embora o sistema de emails deste Fórum tenha funções de segurança que tentam detectar <b>Utilizadores</b> que enviam este tipo de Mensagens, lamentamos que tal tenha acontecido. Informe o <b>Administrador</b> do Fórum enviando uma cópia completa do email recebido, sendo muito importante que inclua os cabeçalhos (é onde se encontram os detalhes do Utilizador que enviou o email). O <b>Administrador</b> poderá então agir em conformidade.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre os <b>Amigos</b> e <b>Inimigos</b>',
	),
	array(
		0	=> 'O que é a Lista de Amigos e Inimigos?',
		1	=> 'Pode utilizar esta lista para organizar os outros <b>Utilizadores</b> do Fórum. Os <b>Utilizadores</b> adicionados na sua Lista de Amigos serão listados com o seu <b>Painel de Controlo do Utilizador</b> com acesso rápido para ver seus Status Online e para enviá-los Mensagens Privadas. Se solicitar ao Suporte de Templates, as Mensagens enviadas por estes <b>Utilizadores</b> poderão aparecer em destaque. Se adicionar um <b>Utilizador</b> na sua Lista de Inimigos, então qualquer mensagem enviada por ele, será ocultada de forma padrão.',
	),
	array(
		0	=> 'Como posso Adicionar/apagar de minha Lista de Amigos e Inimigos?',
		1	=> 'Pode adicionar <b>Utilizadores</b> na sua lista de duas formas. Através do Perfil de cada <b>Utilizador</b>, existe um atalho para adicioná-los à sua lista. De maneira alternativa, pode adicionar <b>Utilizadores</b> directamente escrevendo os seus Nomes de <b>Utilizadores</b>. Pode também apagar <b>Utilizadores</b> de sua lista utilizando a mesma página.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre a <b>Pesquisa</b>',
	),
	array(
		0	=> 'Como posso Pesquisar?',
		1	=> 'Escrevendo um Termo de Pesquisa na respectiva página localizada no Índice do Fórum, Visualizando Tópicos ou Secções. Pode aceder à Pesquisa Avançada clicando no atalho <b>Pesquisar</b> que encontra-se disponível em todas as páginas do Fórum.',
	),
	array(
		0	=> 'Por que a minha Pesquisa resultou em nenhuma ocorrência?',
		1	=> 'A Sua Pesquisa foi provavelmente muito vaga e foram escritos muitos termos comuns que não são incluídos pelo phpBB3. Seja mais específico e utilize as opções disponíveis com a Pesquisa Avançada.',
	),
	array(
		0	=> 'Por que a minha Pesquisa resultou em uma página em branco!?',
		1	=> 'A sua Pesquisa resultou em inúmeras ocorrências. Use a Pesquisa Avançada e seja mais específico nos termos escritos e seleccione secções onde possam ser pesquisados.',
	),
	array(
		0	=> 'Como posso Pesquisar por <b>Utilizadores</b>?',
		1	=> 'Entre na Página dos <b>Utilizadores</b> e clique no atalho Pesquisar um <b>Utilizador</b>. Ao seleccionar, siga restritamente às opções descritas na página.',
	),
	array(
		0	=> 'Como posso Pesquisar minhas Próprias Mensagens e Tópicos?',
		1	=> 'As suas próprias Mensagens podem ser exibidas clicando em Mensagens do <b>Utilizador</b> através do Painel de <b>Utilizadores</b> ou apenas pelo seu próprio Perfil. Para encontrar os seus Tópicos, utilize a Pesquisa Avançada e preencha correctamente as opções.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre a <b>Subscrição de Tópicos</b> e <b>Marcadores</b>',
	),
	array(
		0	=> 'Qual é a diferença existente entre Marcadores e Subscrição?',
		1	=> 'Os Marcadores no phpBB3 são muito parecidos com os marcadores do navegador. Não será necessariamente alertado quando houver alguma actualização, mas pode depois voltar ao Tópico. Mas ao contrário disso, a Subscrição irá lhe avisar quando houver qualquer actualização ao Tópico ou secção no Fórum pelo seu método ou métodos seleccionados.',
	),
	array(
		0	=> 'Como posso Observar um <b>Tópico</b> ou <b>Fórum</b>?',
		1	=> 'Em todos os <b>Fóruns</b> e <b>Tópicos</b> há um atalho chamado respectivamente <b>Observar Tópico / Observar Tópico</b>. Clicando sobre ele subscreverá o <b>Fórum</b> ou o <b>Tópico</b> respectivo. Sempre que responder a um <b>Tópico</b> pode seleccionar a opção <b>Enviar-me um email quando houver uma resposta enviada</b>, desta forma ficará a <b>Observar o Tópico</b> em causa.',
	),
	array(
		0	=> 'Como posso apagar as minhas Subscrições?',
		1	=> 'Para apagar as suas <b>Subscrições</b>, aceda ao <b>Painel de Controlo do Utilizador [UCP]</b>, aba <b>Geral</b>, opção <b>Administrar Subscrições</b> e seguir as opções de disponíveis.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre os <b>Anexos</b>',
	),
	array(
		0	=> 'Quais os Anexos que são permitidos no Fórum?',
		1	=> 'Cada <b>Administrador</b> pode activar ou desactivar os tipos de anexos que desejar. Se não tem certeza sobre o que pode ser enviado, contacte o <b>Administrador</b> para mais informações.',
	),
	array(
		0	=> 'Como posso encontrar Anexos que enviei?',
		1	=> 'Para encontrar a lista dos <b>Anexos</b> que já enviou para o Fórum, vá ao <b>Painel de Controlo do Utilizador</b> (UCP)</b>, na aba <b>Geral</b> clique em <b>Anexos</b>.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre o <b>Sistema phpBB3</b>',
	),
	array(
		0	=> 'Quem Escreveu o phpBB?',
		1	=> 'Este Software é produzido, publicado e com direitos reservados pelo <a href="http://www.phpbb.com" target="_blank";" title="Abrir numa janela nova"><b>phpBB Group</b></a>. Está disponível sob a licença <b>GNU - General Public Licence</b> e pode ser distribuído gratuitamente.',
	),
	array(
		0	=> 'Quem traduziu o phpBB3?',
		1	=> 'O phpBB3 foi traduzido para a Língua Portuguesa por <a href="http://phpbbportugal.com" target="_blank"><b>phpBB Portugal</b></a>, sendo esta tradução de distribuição livre e gratuita. Se encontrar erros ou incorrecções, ou ainda, se tiver alguma sugestão a fazer visite-nos em <a href="http://phpbbportugal.com" target="_blank"><b>phpBB Portugal</b></a>. Agradecemos antecipadamente a sua visita e as contribuições que entender dar-nos, prometendo analisá-las cuidadosamente e dar-lhe resposta tão breve quanto possível.',
	),
	array(
		0	=> 'Por que não existe a Função X?',
		1	=> 'Este software foi escrito e licenciado pelo Grupo phpBB. Se acredita que alguma função pode ser adicionada, ou se quer relatar um erro, por favor visite o site <a href="http://area51.phpbb.com/">Area51</a>, onde encontrará recursos para o fazer.',
	),
	array(
		0	=> 'Contactos sobre questões abusivas e/ou ilegais relativas ao Fórum.',
		1	=> 'Contacte o <b>Administrador</b> deste Fórum. Veja no canto superior direito da imagem encontrará um atalho para a lista de <b>Utilizadores</b> onde está o <b>Administrador</b>. Envie-lhe uma <b>Mensagem Privada</b> a expor o assunto.',
	),
);

?>