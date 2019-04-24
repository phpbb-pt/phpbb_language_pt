<?php
/**
*
* help_faq [Português]
*
* @package language
* @version 1.0.9
* @Traduzido por: http://www.phpbb-pt.com - segundo as normas do Acordo Ortográfico
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
		1	=> 'Sobre o Login e o Registo',
	),
	array(
		0	=> 'Por que é que não consigo entrar no Fórum?',
		1	=> 'Já se Registou? Deve Registar-se para poder Entrar no Fórum. Foi expulso? Se foi expulso deverá receber uma Mensagem a informá-lo da ocorrência. Se discordar das razões apontadas contacte o Administrador. Se está registado, não se encontra expulso e mesmo assim não conseguir entrar, verifique se o seu Nome de Utilizador e Senha estão corretos. Normalmente é esse o problema. Se mesmo assim, não encontra uma explicação para a situação, contacte o Administrador porque pode haver alguma configuração errada no Sistema.',
	),
	array(
		0	=> 'O Registo é obrigatório?',
		1	=> 'É da exclusiva responsabilidade do Administrador deste Fórum decidir se o Registo é ou não obrigatório. No entanto, o Registo dar-lhe-á acesso a ferramentas adicionais não disponíveis aos Visitantes, como a definição de Avatares, o uso de Mensagens Privadas, o envio de emails para outros Utilizadores, a sua participação em Grupos, etc. São necessários apenas alguns segundos para se fazer o Registo, é do seu interesse que o faça.',
	),
	array(
		0	=> 'Por que entro automaticamente no Fórum?',
		1	=> 'Porque anteriormente assinalou a opção Na próxima visita entrar automaticamente. Nunca assinalar esta opção se usar um computador acessível a outras pessoas. Isso evita o uso abusivo por terceiros da sua conta. Para que esta opção perca efeito, da próxima vez que sair do Fórum clique em: Sair [ Utilizador ]',
	),
	array(
		0	=> 'Posso ocultar o meu Nome de Utilizador da Lista de Utilizadores Online?',
		1	=> 'No Painel de Controlo do Utilizador [UCP], aba Preferências, opção Configurações Pessoais, selecione Sim em Ocultar o meu Status Online. Desta forma só o Administrador e os Moderadores poderão vê-lo Online. Passará a ser considerado Utilizador invisível pelo Sistema.',
	),
	array(
		0	=> 'Esqueci-me da minha Senha, e agora?',
		1	=> 'A sua Senha não pode ser recuperada, no entanto pode pedir uma nova. Proceda como que se estivesse a entrar no Fórum pela primeira vez. Clique em Entrar e em seguida em Esqueci-me da senha. Siga as instruções, e voltará a entrar no Fórum em poucos minutos, com uma Senha nova.',
	),
	array(
		0	=> 'Registei-me mas não consigo entrar!',
		1	=> 'Verifique se escreve corretamente o Nome de Utilizador e a Senha.  Se tem a certeza de que estão corretos tenha em atenção um de dois fatores. Se a função COPPA (Childrens Online Privacy Protection Act) estiver ativa no Fórum e assinalou a uma idade inferior a 13 anos durante o Registo, então tem que seguir as instruções que recebeu. Se não é este o seu caso, então o seu Registo ainda não se encontra-se ativado. Alguns Fóruns obrigam à ativação dos novos Registos. A Ativação tanto pode ser feita pelo Administrador como pelo próprio Utilizador, que neste último caso receberá um email para esse efeito. Esta informação é fornecida aos novos Utilizadores durante o Registo. Se recebeu um email, siga as suas instruções. Se não recebeu nenhum email pode ter escrito incorretamente o endereço de email ou então está considerado como spam pelo seu cliente de email. Se tem certeza que o endereço de email que forneceu é válido e correto, tente contactar o Administrador do Fórum.',
	),
	array(
		0	=> 'Registei-me e já entrei anteriormente mas agora não!',
		1	=> 'É possível que o administrador tenha excluído o seu registo por algum motivo. Além disso, os administradores removerem registos de utilizadores que nunca colocaram mensagens, de modo a reduzir o tamanho da Base de Dados. Se isso aconteceu, tente registar-se novamente e participar das discussões.',
	),
	array(
		0	=> 'O que é COPPA?',
		1	=> 'A COPPA (Childrens Online Privacy Protection Act) é uma Lei de 1998 dos EUA que exige uma autorização para guardar as informações relativas a menores de 13 anos de idade.',
	),
	array(
		0	=> 'Por que não consigo Registar-me?',
		1	=> 'É possível que o Administrador tenha expulso o seu Endereço de IP ou adicionado como Nome Proibido o Nome de Utilizador que deseja usar. Os Registos também podem encontrar-se temporariamente desativados, por razões não especificadas.',
	),
	array(
		0	=> 'Para que serve a opção Apagar cookies?',
		1	=> 'Apaga do seu PC todos os Cookies criados pelo phpBB3 e que servem para o manter ligado e autenticado, e permitem o pleno funcionamento das opções ativadas pelo Administrador.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre as Preferências e configurações de Utilizadores',
	),
	array(
		0	=> 'Como altero as configuração do meu Perfil?',
		1	=> 'As configurações (depois do Registo) são guardadas numa Base de Dados. Para alterá-las aceda ao Painel de Controlo do Utilizador [UCP], aba Perfil. Aí pode alterar os dados do seu Registo.'
	),
	array(
		0	=> 'A Data e Hora estão erradas!',
		1	=> 'Provavelmente as datas estão corretas, pode acontecer que esteja a visualizar as horas de um Fuso Horário diferente do seu. Pode alterar o Fuso Horário do Fórum no seu Perfil na opção Fuso Horário Selecione [GMT] Dublin, Edinburgh, Iceland, Lisboa, London, Casablanca. A mudança do Fuso Horário só é permitida aos Utilizadores Registados.',
	),
	array(
		0	=> 'Alterei o Fuso Horário, mas a Data e Hora continuam erradas!',
		1	=> 'Se tem a certeza que o fuso horário que escolheu é a [GMT] Dublin, Edinburgh, Iceland, Lisboa, London, Casablanca é possível que seja devido à mudança de horário de Verão/Inverno.',
	),
	array(
		0	=> 'O meu idioma não está na lista!',
		1	=> 'Este Fórum usa o Português europeu como Idioma oficial.',
	),
	array(
		0	=> 'Como posso exibir uma Imagem junto ao meu Nome de Utilizador?',
		1	=> 'Há duas imagens que podem aparecer junto com um nome de Utilizador quando se veem as Mensagens. Uma delas pode ser uma imagem associada à sua classificação, geralmente na forma de blocos, estrelas ou pontos, indicando a quantidade de mensagens que tenha feito ou o seu estatuto no Fórum. Outra, geralmente uma imagem maior, é conhecida como um Avatar, que é normalmente única ou pertencente a cada Utilizador. Cabe ao Administrador permitir ou não o uso de Avatar e definir como podem ser usados. Se não conseguir utilizar Avatares, contacte o Administrador do Fórum.',
	),
	array(
		0	=> 'Como posso alterar a minha Classificação?',
		1	=> 'De uma forma geral, o Utilizador Normal não pode alterar diretamente a sua Classificação (as Classificações aparecem por debaixo do Nome de Utilizador nos Tópicos e no Perfil, dependendo do Template em uso). A maior parte das Classificação existentes, indicam o Número de Mensagens enviadas ou indicam certo tipo de Utilizadores, ou seja, Moderadores e Administradores poderão ter uma Classificação Especial. Por Favor, não abuse do Fórum enviando Mensagens desnecessárias apenas para aumentar o Nível da sua Classificação, pois os Administradores ou Moderadores podem tomar alguma atitude contra si, se considerarem que está a ter atitudes abusivas.',
	),
	array(
		0	=> 'Quando clico no email de um Utilizador, pede-me para ligar no fórum?!',
		1	=> 'Só os Utilizadores Registados podem enviar emails através do formulário exclusivo do Fórum (se esta função se encontrar ativada). Isso evita o uso malicioso do sistema de email por Visitantes.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre as Mensagens',
	),
   array( 
      0 => 'Como posso enviar uma mensagem?', 
      1 => 'Para enviar um novo Tópico num Fórum, clique no botão relevante das páginas dos Fóruns e Tópicos. Deverá registar-se antes de enviar uma mensagem. Uma lista de suas permissões de cada Fórum está disponível no fundo das páginas dos Fóruns e Tópicos. Exemplo: Pode criar novos Tópicos, votações, etc.' 
   ), 
	array(
		0	=> 'Como crio um Tópico no Fórum?',
		1	=> 'Isso é fácil, clique no botão Novo Tópico ou Responder. Estes botões só são visíveis nas situações em que está autorizado a fazê-lo.',
	),
	array(
		0	=> 'Como posso Editar ou apagar uma Mensagem?',
		1	=> 'A menos que seja Administrador ou Moderador, apenas pode editar ou excluir as suas próprias mensagens. Pode editar a mensagem clicando no botão de edição. Por vezes, apenas o poderá fazer por um período limitado de tempo, após o envio da mensagem. Caso alguém tenha já respondido, encontrará um pequeno texto abaixo da mensagem que reporta o número de vezes que a editou, juntamente com a data e a hora. Isto não aparece apenas caso alguém não tenha respondido. Não aparecerá igualmente se um Administrador ou Moderador editarem a mensagem, embora possam deixar uma nota informar o critério que justificou a edição. Por favor note que os Utilizadores normais não podem apagar uma mensagem após alguém já ter respondido.',
	),
	array(
		0	=> 'Como posso adicionar uma assinatura às minhas Mensagens?',
		1	=> 'Vá ao Painel de Controlo do Utilizador [UCP] aba Perfil opção A sua assinatura, e adicione a assinatura pretendida. Ainda no [UCP], mas aba Preferências opção Mensagens enviadas selecione Ativar sempre a Minha Assinatura. Nas suas Mensagens pode, se assim o desejar, desativar caso a caso a opção Anexar assinatura.',
	),
	array(
		0	=> 'Como posso criar uma votação?',
		1	=> 'Criar uma votação é fácil. Quando envia um Tópico novo (ou Edita a primeira mensagem de um Tópico, caso tenha permissão para tal), encontra na parte inferior à caixa principal da mensagem, um painel com o Título Adicionar Votação (se não vê isto, é porque provavelmente não tem permissão para criar Votação ou o Tópico não é de sua autoria). Deve escrever um Título para a Votação e em seguida, escrever pelo menos Duas Opções de Voto (para adicionar uma opção de votação, escreva o que pretende, e clique no botão Adicionar opção de Voto). Deverá também estipular um tempo limite para a Votação, sendo 0 ilimitado. Poderá acontecer de existir um limite no Número de Opções de Voto, estando esse limite ao critério e configuração do Administrador.',
	),
	array(
		0	=> 'Como posso Editar ou apagar uma votação?',
		1	=> 'Da mesma forma que as Mensagens, as votações só podem ser editadas pelo seu autor, Moderadores ou Administradores do Fórum. Para editar uma votação, clique na primeira mensagem do Tópico (esta mensagem é a que tem a votação associada ao Tópico). Caso ninguém tenha submetido voto, os seus autores podem apagar a votação ou editar as suas opções de voto. Contudo, se os Utilizadores já submeteram votos, apenas Moderadores e Administradores podem editar ou apagar essa votação. Isso é para evitar com que sejam alteradas as opções de voto em votações em curso.',
	),
	array(
		0	=> 'Por que não consigo entrar num Fórum?',
		1	=> 'O acesso a algumas secções poderá estar limitado apenas a determinados Utilizadores ou Grupos. Para ver, ler, enviar Mensagens, etc., tem que ter de uma autorização especial. Apenas o Moderador dessa secção e um Administrador podem permitir esse acesso. Entre em contacto, caso ache necessário.',
	),
	array(
		0	=> 'Por que não posso Votar?',
		1	=> 'Apenas Utilizadores Registados podem submeter os seus Votos (para impedir duplicação nos resultados). Caso esteja registado, mas mesmo assim não consiga votar, então possivelmente não lhe foi atribuída permissão para tal.',
	),
	array(
		0	=> 'Por que não consigo anexar ficheiros?',
		1	=> 'Em algumas seções, anexar ficheiros pode estar restrito a alguns Utilizadores ou Grupos. Para anexar um arquivo, tem que ter de uma autorização especial. Apenas o Moderador do Fórum e os Administradores podem lhe dar esse acesso. Por Favor, contacte-os.',
	),
	array(
		0	=> 'Por que recebi uma Advertência?',
		1	=> 'Leia as Regras do Fórum cuidadosamente e cumpra-as rigorosamente. Por Favor, note que esta é a decisão do Administrador do Fórum, e o phpBB Group não tem autoridade nenhuma sobre a advertência enviada.',
	),
	array(
		0	=> 'Como posso Denunciar Mensagens?',
		1	=> 'Se o Administrador tiver ativado esta opção, vá até à mensagem que deseja denunciar e verá um botão que serve para denunciar Mensagens. Clicando ali, será encaminhado às etapas necessárias para denunciar a mensagem.',
	),
	array(
		0	=> 'Para que serve o botão Guardar no Painel de Mensagens?',
		1	=> 'Esta opção permite-lhe arquivar o rascunho da mensagem enviá-la mais tarde. Para recarregá-la, vá ao Painel de Controlo do Utilizador [UCP] aba Geral opção Rascunhos Arquivados e siga as devidas opções.',
	),
	array(
		0	=> 'Do que necessita a minha Mensagem para ser Aprovada?',
		1	=> 'O Administrador pode decidir se na secção em que está postando, as Mensagens precisem ser revisadas ou não. E também é possível que o Administrador O tenha adicionado a um Grupo de Utilizadores que precise ter suas Mensagens aprovadas antes de enviá-las ao Fórum. Por Favor, contacte o Administrador para maiores informações.',
	),
	array(
		0	=> 'Como posso ressuscitar os meus Tópicos?',
		1	=> 'Clicando em Ressuscitar Tópico, quando estiver a visualizar o mesmo, pode ressuscitar o Tópico para o topo do Fórum na primeira página. Porém, se não vir esta opção, então esta ferramenta encontra-se desativada. Também o pode fazer simplesmente respondendo ao Tópico. Entretanto, fique atento às regras do sítio web.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre os Formatos e Tipos de Tópicos',
	),
	array(
		0	=> 'O que é BBCode?',
		1	=> 'O BBCode é uma implementação especial do HTML. A possibilidade usar BBCode nas mensagens é determinada pelo Administrador do Fórum. Adicionalmente, pode poderá desativar o BBCode em cada mensagem, selecionando Desativar BBCode nesta Mensagem abaixo da caixa principal de cada mensagem. BBCode por si mesmo é similar em estilo ao HTML, as Etiquetas (TAGs) são incluídas entre parênteses retos, como por [exemplo], em vez de &lt;exemplo&gt; proporcionando uma maior facilidade na formatação dos textos e mensagens dentro do Fórum. Para mais informações, consulte o Guia BBCode, acessível através de um atalho no Painel de Mensagens.',
	),
	array(
		0	=> 'Posso usar HTML?',
		1	=> 'Não, não é possível enviar Mensagens em HTML neste Fórum. A maioria dos formatos utilizados no HTML podem ser reproduzidos na utilização das TAGs do BBCode.',
	),
	array(
		0	=> 'O que são Emoções?',
		1	=> 'As Emoções, ou Smilies, são pequenas representações gráficas que são usadas para expressar sentimentos através da utilização de poucos caracteres. :) quer dizer Feliz, :( quer dizer Triste. A lista completa de pode ser vista no formulário junto à caixa de cada mensagem. Evite o uso excessivo de Emoções, já que podem tornar uma Mensagem ilegível, podendo o Administrador ou um Moderador excluí-las ou apagar a mensagem inteira.',
	),
	array(
		0	=> 'Posso exibir Imagens?',
		1	=> 'Regra geral pode incluir imagens nas suas Mensagens. No entanto não existe forma de as armazenar usando o phpBB. Para exibir uma imagem utilize as TAGs BBcode [img]http://endereço.da.imagem.com[/img], (consulte o Guia de BBCode, acessível no Painel de Mensagens, para mais informações). A menos que possua um Servidor publicamente acessível não pode exibir imagens guardadas no seu próprio PC, nem que necessitem de autenticação, como por exemplo email do Hotmail ou Yahoo, páginas protegidas por senha, etc.',
	),
	array(
		0	=> 'O que são Anúncios Globais?',
		1	=> 'Os Anúncios Globais contêm normalmente informações importantes e devem ser lidos logo que forem publicados. Eles irão aparecer no topo de todas as secções e também com o seu Painel de Utilizadores. Se pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo Administrador.',
	),
	array(
		0	=> 'O que são Anúncios?',
		1	=> 'Os Anúncios contêm normalmente informações importantes e devem ser lidos logo que forem publicados. Os Anúncios são automaticamente colocados no topo de cada página de cada secção. Se pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo Administrador.',
	),
	array(
		0	=> 'O que são Tópicos Fixos?',
		1	=> 'Os Tópicos Fixos aparecem abaixo dos Anúncios, e apenas na primeira página de cada secção. São Tópicos com conteúdo importante e devem ser lidos logo que enviados. Da mesma forma que os Anúncios, está ao critério do Administrador determinar as permissões necessárias para enviar Tópicos Fixos em cada secção.',
	),
	array(
		0	=> 'O que são Tópicos Bloqueados?',
		1	=> 'Os Tópicos Bloqueados são assim colocados por um Administrador, ou Moderador de cada secção. Quando um Tópico se encontra trancado, os Utilizadores do Fórum não podem mais respondê-lo, e qualquer votação em curso, logo será finalizada. Apenas Administradores e Moderadores podem responder nestes Tópicos. Algum determinado Tópico pode ser Trancado por vários motivos.',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> 'O que são Ícones de Tópicos?',
		1	=> 'Os Ícones de Tópicos são imagens que podem ser associadas com as Mensagens para indicar o seu conteúdo. Se pode ou não utilizar essa função, depende das permissões que lhe foram dadas e configuradas pelo Administrador.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre os Níveis de Utilizadores e Grupos',
	),
	array(
		0	=> 'O que são Administradores?',
		1	=> 'Administradores são os Utilizadores que possuem o Nível Máximo de controlo sobre todos os aspetos do Fórum. Podem controlar toda a operação das secções, incluindo criar, editar ou apagar secções, determinar permissões, expulsar Utilizadores, criar Grupos de Utilizadores ou Moderadores, etc. E ainda possuem todos os poderes de Moderador em todas as secções existentes.',
	),
	array(
		0	=> 'O que são Moderadores?',
		1	=> 'Moderadores são os Utilizadores (ou Grupos de Utilizadores) em que seu trabalho é supervisionar diariamente o andamento das secções que lhes estejam designadas. Eles possuem o poder de editar ou apagar Mensagens, trancar, destrancar, mover e subdividir Tópicos nas secções onde são Moderadores. Geralmente os Moderadores fiscalizam Mensagens que possam ir Além do Assunto em Discussão ou o uso de material abusivo ou ofensivo.',
	),
	array(
		0	=> 'O que são Grupos de Utilizadores?',
		1	=> 'Grupos de Utilizadores são uma forma dos Administradores agrupar Utilizadores. Cada Utilizador pode pertencer a Vários Grupos (isto difere da maioria dos outros tipos de Quadros de Mensagens) e a cada Grupo podem ser dados direitos de acesso individuais. Isto torna mais fácil aos Administradores destinar vários Utilizadores como Moderadores de uma determinada secção ou dar-lhes acesso a uma secção privada, etc.',
	),
	array(
		0	=> 'Como me inscrevo num Grupo de Utilizadores?',
		1	=> 'Para se inscrever num Grupo de Utilizadores, clique no atalho de Grupos no topo da página (dependendo da template em uso), podendo então ver todos os Grupos. Nem todos os Grupos possuem um acesso aberto, alguns estão fechados e alguns poderão inclusive encontrar-se invisíveis. Se o Grupo se encontrar aberto, poderá solicitar sua inscrição clicando no botão apropriado. O Líder do Grupo de Utilizadores precisará aprovar a sua inscrição, podendo perguntar-lhe o motivo do mesmo. Por Favor, não insista a um Líder de Grupo caso a sua inscrição seja recusada. Ele deverá informá-lo a respeito de qualquer decisão.',
	),
	array(
		0	=> 'Como posso ser Líder de um Grupo?',
		1	=> 'Os Grupos de Utilizadores são inicialmente criados pelo Administrador do Fórum o qual encarrega alguém de ser responsável pelo mesmo, no caso, o Líder do Grupo. Se está interessado em Criar um Grupo de Utilizadores, deverá primeiramente contactar o Administrador, ao qual deverá contactar com uma Mensagem Privada circunstanciada.',
	),
	array(
		0	=> 'Por que alguns Grupos aparecem em diferentes cores?',
		1	=> 'O Administrador do Fórum pode atribuir cores aos Utilizadores de um determinado grupo, para identificá-los diante de outros Utilizadores e grupos.',
	),
	array(
		0	=> 'O que é um Grupo Padrão?',
		1	=> 'Se é Utilizador de mais de um Grupo de Utilizadores, será determinado qual Cor e Classificação lhe serão atribuídos por padrão. O Administrador poderá lhe conceder a opção de escolha do seu Grupo Padrão pelo Painel de Utilizadores.',
	),
	array(
		0	=> 'O que é a Equipa de Responsáveis do Fórum?',
		1	=> 'A Equipa de Responsáveis do Fórum é uma página onde é exibida a Lista detalhada dos membros da equipa responsável pelo Fórum, incluindo Administradores e Moderadores, bem como os detalhes de cada um deles.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre as Mensagens Privadas',
	),
	array(
		0	=> 'Não consigo enviar Mensagens Privadas!',
		1	=> 'Existem três razões para que tal possa acontecer: Não está Registado no Fórum e/ou não se encontra Online, o Administrador terá desativado a opção de Mensagens Privadas em todo o Fórum ou o impede por algum motivo de enviar Mensagens. Se este último é o seu caso, pergunte ao Administrador qual o motivo, caso realmente não saiba.',
	),
	array(
		0	=> 'Recebo Mensagens Privadas indesejáveis!',
		1	=> 'Pode bloquear as Mensagens Privadas enviadas por um Utilizador em específico utilizando o seu Painel de Utilizadores. Se estiver recebendo Mensagens indesejáveis por parte de algum Utilizador, contacte o Administrador do Fórum para que possa proibir o determinado utilizador de enviar este tipo de Mensagens.',
	),
	array(
		0	=> 'Recebi de alguém neste Fórum um email com assuntos irrelevantes ou abusivos!',
		1	=> 'Embora o sistema de emails deste Fórum tenha funções de segurança que tentam detetar Utilizadores que enviam este tipo de Mensagens, lamentamos que tal tenha acontecido. Informe o Administrador do Fórum enviando uma cópia completa do email recebido, sendo muito importante que inclua os cabeçalhos (é onde se encontram os detalhes do Utilizador que enviou o email). O Administrador poderá então agir em conformidade.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre os Amigos e Inimigos',
	),
	array(
		0	=> 'O que é a Lista de Amigos e Inimigos?',
		1	=> 'Pode utilizar esta lista para organizar os outros Utilizadores do Fórum. Os Utilizadores adicionados na sua Lista de Amigos serão listados com o seu Painel de Controlo do Utilizador com acesso rápido para ver seus Status Online e para enviá-los Mensagens Privadas. Se solicitar ao Suporte de Templates, as Mensagens enviadas por estes Utilizadores poderão aparecer em destaque. Se adicionar um Utilizador na sua Lista de Inimigos, então qualquer mensagem enviada por ele, será ocultada de forma padrão.',
	),
	array(
		0	=> 'Como posso Adicionar/apagar de minha Lista de Amigos e Inimigos?',
		1	=> 'Pode adicionar Utilizadores na sua lista de duas formas. Através do Perfil de cada Utilizador, existe um atalho para adicioná-los à sua lista. De maneira alternativa, pode adicionar Utilizadores diretamente escrevendo os seus Nomes de Utilizadores. Pode também apagar Utilizadores de sua lista utilizando a mesma página.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre a Pesquisa',
	),
	array(
		0	=> 'Como posso Pesquisar?',
		1	=> 'Escrevendo um Termo de Pesquisa na respetiva página localizada no Índice do Fórum, Visualizando Tópicos ou Secções. Pode aceder à Pesquisa Avançada clicando no atalho Pesquisar que encontra-se disponível em todas as páginas do Fórum.',
	),
	array(
		0	=> 'Por que a minha Pesquisa resultou em nenhuma ocorrência?',
		1	=> 'A Sua Pesquisa foi provavelmente muito vaga e foram escritos muitos termos comuns que não são incluídos pelo phpBB3. Seja mais específico e utilize as opções disponíveis com a Pesquisa Avançada.',
	),
	array(
		0	=> 'Por que a minha Pesquisa resultou em uma página em branco!?',
		1	=> 'A sua Pesquisa resultou em inúmeras ocorrências. Use a Pesquisa Avançada e seja mais específico nos termos escritos e selecione secções onde possam ser pesquisados.',
	),
	array(
		0	=> 'Como posso Pesquisar por Utilizadores?',
		1	=> 'Entre na Página dos Utilizadores e clique no atalho Pesquisar um Utilizador. Ao selecionar, siga restritamente às opções descritas na página.',
	),
	array(
		0	=> 'Como posso Pesquisar minhas Próprias Mensagens e Tópicos?',
		1	=> 'As suas próprias Mensagens podem ser exibidas clicando em Mensagens do Utilizador através do Painel de Utilizadores ou apenas pelo seu próprio Perfil. Para encontrar os seus Tópicos, utilize a Pesquisa Avançada e preencha corretamente as opções.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre a Subscrição de Tópicos e Marcadores',
	),
	array(
		0	=> 'Qual é a diferença existente entre Marcadores e Subscrição?',
		1	=> 'Os Marcadores no phpBB3 são muito parecidos com os marcadores do navegador. Não será necessariamente alertado quando houver alguma atualização, mas pode depois voltar ao Tópico. Mas ao contrário disso, a Subscrição irá lhe avisar quando houver qualquer atualização ao Tópico ou secção no Fórum pelo seu método ou métodos selecionados.',
	),
	array(
		0	=> 'Como posso Observar um Tópico ou Fórum?',
		1	=> 'Em todos os Fóruns e Tópicos há um atalho chamado respetivamente Observar Tópico / Observar Tópico. Clicando sobre ele subscreverá o Fórum ou o Tópico respetivo. Sempre que responder a um Tópico pode selecionar a opção Enviar-me um email quando houver uma resposta enviada, desta forma ficará a Observar o Tópico em causa.',
	),
	array(
		0	=> 'Como posso apagar as minhas Subscrições?',
		1	=> 'Para apagar as suas Subscrições, aceda ao Painel de Controlo do Utilizador [UCP], aba Geral, opção Administrar Subscrições e seguir as opções de disponíveis.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre os Anexos',
	),
	array(
		0	=> 'Quais os Anexos que são permitidos no Fórum?',
		1	=> 'Cada Administrador pode ativar ou desativar os tipos de anexos que desejar. Se não tem certeza sobre o que pode ser enviado, contacte o Administrador para mais informações.',
	),
	array(
		0	=> 'Como posso encontrar Anexos que enviei?',
		1	=> 'Para encontrar a lista dos Anexos que já enviou para o Fórum, vá ao Painel de Controlo do Utilizador (UCP), na aba Geral clique em Anexos.',
	),
	array(
		0	=> '--',
		1	=> 'Sobre o Sistema phpBB3',
	),
	array(
		0	=> 'Quem Escreveu o phpBB?',
		1	=> 'Este Software é produzido, publicado e com direitos reservados pelo <a href="https://www.phpbb.com/">phpBB Group</a>. Está disponível sob a licença GNU - General Public Licence e pode ser distribuído gratuitamente.',
	),
	array(
		0	=> 'Quem traduziu o phpBB3?',
		1	=> 'O phpBB3 foi traduzido para a Língua Portuguesa por phpBB Portugal, sendo esta tradução de distribuição livre e gratuita. Se encontrar erros ou incorreções, ou ainda, se tiver alguma sugestão a fazer visite-nos em phpBB Portugal. Agradecemos antecipadamente a sua visita e as contribuições que entender dar-nos, prometendo analisá-las cuidadosamente e dar-lhe resposta tão breve quanto possível.',
	),
	array(
		0	=> 'Por que não existe a Função X?',
		1	=> 'Este software foi escrito e licenciado pelo Grupo phpBB. Se acredita que alguma função pode ser adicionada, ou se quer relatar um erro, por favor visite o site <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, onde encontrará recursos para o fazer.',
	),
	array(
		0	=> 'Contactos sobre questões abusivas e/ou ilegais relativas ao Fórum.',
		1	=> 'Contacte o Administrador deste Fórum. Veja no canto superior direito da imagem encontrará um atalho para a lista de Utilizadores onde está o Administrador. Envie-lhe uma Mensagem Privada a expor o assunto.',
	),
);

?>