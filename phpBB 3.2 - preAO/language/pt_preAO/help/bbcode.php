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
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Exibir imagens nas mensagens',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Introdução',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Criar endereços',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Criar listas',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Outras matérias',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citar um texto completo ou apenas uma parte',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Formatação do texto',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'		=> 'Esta tag pode ser inserida em qualquer local da mensagem utilizando o BBCode <strong>[attachment=][/attachment]</strong>, isto se este recurso tiver sido activado pelo Administrador do Fórum e tiver permissão para anexar ficheiros. E nesse caso poderá anexar ficheiros nas mensagens. Dentro do menu de mensagens terá um bloco para anexar um ou mais ficheiros.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Anexar ficheiros na mensagem',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'O phpBB BBCode usa uma tag que permite adicionar imagens nas suas mensagens. Há, no entanto, que considerar que este uso pode não ser apreciado. O uso de imagens aumenta os tempos de espera e o consumo de tráfego. Outro factor a ter em conta é que o endereço da imagem pode ficar indisponível. Para exibir uma imagem na mensagem coloque o endereço da mesma dentro da tag <strong>[img][/img]</strong>. Por exemplo:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Como pode ver na secção da URL acima, se desejar pode inserir uma imagem numa tag <strong>[url][/url]</strong>, por exemplo:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />cria:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Anexar uma imagem à mensagem',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode é uma implementação especial do HTML. Cabe ao Administrador definir se pode ou não usar BBCode nas suas mensagens no fórum. Além disso, pode desactivar o BBCode em cada mensagem através do formulário de mensagem. O BBCode por si mesmo é similar em estilo ao HTML, as etiquetas são introduzidas entre parêntesis rectos [ e ] em vez de &lt; e &gt; e proporcionam um maior controlo do que é e como algo é apresentado. Dependendo do modelo que está a usar pode adicionar BBCode às suas mensagens é facilitada através de uma interface de botões clicáveis ​​acima da mensagem no formulário de mensagem. Mesmo com isso, pode usar o guia lhe será útil.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'O que significa BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'O BBCode do phpBB aceita um número variável de formas para criar URIs, (Uniform Resource Indicators), mais conhecidas como URLs.<ul><li>A primeira dessas formas é usando as tags <strong>[url=][/url]</strong>. Deve escrever o endereço de destino depois do sinal de =. Para criar um atalho para o phpBB.com deve fazê-lo da seguinte forma:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Visite o phpBB!<strong>[/url]</strong><br /><br />Tal resultará no seguinte atalho: <a href="https://www.phpbb.com/">Visite o phpBB!</a> Tome em atenção que o link abre na mesma janela ou numa janela nova, dependendo das configurações do seu navegador.</li><br /><li>Se deseja que o URL seja mostrado tal como ele é basta fazer da seguinte forma:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Tal resultará no seguinte atalho:<a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><br /><li>O phpBB tem um recurso extra chamado <i>Links Mágicos</i> que criam automaticamente a URL correta num atalho, sem necessidade de incluir a tag e sem especificar o http://. Por exemplo, se digitar www.phpbb.com dentro da mensagem é criado automaticamente um atalho para <a href="http://www.phpbb.com/">www.phpbb.com</a> quando vir essa mensagem.</li><br /><li>Para inserir um atalho para um endereço de email pode fazer da seguinte forma:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br /> que resultará no seguinte <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> ou pode simplesmente escrever no.one@domain.adr para que após o envio da mensagem seja convertido automaticamente em atalho.</li></ul>Como em todos os códigos BBCode aqui apresentados pode misturar URLs com quaisquer outras tags como <strong>[img][/img]</strong> (ver próxima entrada), <strong>[b][/b]</strong>, etc. Tal como nas tags de formatação de texto certifique-se que estão correctamente organizadas:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />Isto <span style="text-decoration: underline">não</span> está correcto e a sua mensagem corre o risco de ser apagada.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Criar um atalho para outro site',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'		=> 'O segundo tipo de lista, a lista ordenada , dá-lhe o controlo sobre o que aparece antes de cada item. Para criar uma lista ordenada use <strong>[list=1][/list]</strong> para criar uma lista numérica, ou em alternativa <strong>[list=a][/list]</strong> para criar uma lista alfabética. Tal como acontece com as listas não ordenadas, use <strong>[*]</strong>. Por exemplo:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir às compras<br /><strong>[*]</strong>Comprar um computador novo<br /><strong>[*]</strong>Insultar o computador quando bloqueia<br /><strong>[/list]</strong><br /><br />Vai gerar a seguinte lista:<ol style="list-style-type: decimal;"><li>Ir às compras</li><li>Comprar um computador novo</li><li>Insultar o computador quando bloqueia</li></ol>Para criar uma lista alfabética use:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>A primeira resposta<br /><strong>[*]</strong>A segunda resposta<br /><strong>[*]</strong>A terceira resposta<br /><strong>[/list]</strong><br /><br />resulta<ol style="list-style-type: lower-alpha"><li>A terceira resposta</li><li>A terceira resposta</li><li>A terceira resposta</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Criar uma lista ordenada',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'O BBCode permite listas ordenadas e não ordenadas.<br />Este código é igual ao HTML, mudando apenas o formato da tag.<br /> Uma lista não ordenada cria os itens em sequência.<br /> Para criar uma lista não ordenada deve usar <strong>[list][/list]</strong> e definir cada marcador dentro da lista usando <strong>[*]</strong>.<br /><br />Por exemplo, para as suas cores favoritas poderia fazer da seguinte forma:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Vermelho<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarelo<br /><strong>[/list]</strong><br /><br />sendo criada a seguinte lista: <br /><br /><ul><li>Vermelho</li><li>Azul</li><li>Amarelo</li></ul>De forma alternativa, poderá criar uma lista com símbolos (ponto, círculo ou quadrado) ao usar <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, ou <strong>[list=square][/list]</strong> respectivamente',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Criar uma lista não ordenada',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'		=> 'Se é Administrador ou tem as Permissões adequadas, pode adicionar BBCodes no Painel de Administração.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Posso criar as minhas próprias tags?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Para deixar o texto todo ou parte dele em formato de código deve usar as tags <strong>[code][/code]</strong>.<br /><br />Por exemplo:<br /><strong>[code]</strong>echo &quot;Isto é algum código&quot;;<strong>[/code]</strong><br /><br />Todo texto dentro das tags <strong>[code][/code]</strong> não são convertidos e mantêm-se em formato texto para poderem ser lidos como código.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Deixar o texto completo em forma de código ou apenas uma parte',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Há duas formas de fazer uma citação, com ou sem referência ao autor.<ul><li>Quando utiliza a função Citar para responder a uma mensagem no fórum, note que o texto dessa mensagem é adicionado ao corpo da mensagem incluído num bloco <strong>[quote=&quot;&quot;][/quote]</strong> Este método permite-lhe citar com referência a uma pessoa ou o que decida colocar! Por exemplo, para citar uma peça de texto que o Sr. Silva escreveu, escreverá:<br /><br /><strong>[quote=&quot;Sr. Silva&quot;]</strong> O texto que o Sr. Silva escreveu irá aparecer aqui[/quote] <strong> [/quote] </strong> <br /> <br /> O resultado será adicionado automaticamente &quot;Sr. Silva escreveu:&quot; antes do texto. Lembre-se que <strong> deve obrigatoriamente </strong> incluir as aspas &quot;&quot; à volta do nome que deseja citar.</li><br /><li>O segundo método permite-lhe citar algo cegamente. Para o fazer, englobe o texto nas tags <strong> [quote][/quote] </strong> Quando visualizar a mensagem verá o texto num bloco de citação.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Fazer uma citação nas suas respostas',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'O BBCode tem tags que permitem rapidamente alterar o estilo básico do seu texto. Isto é possível das seguintes formas: <ul><li> Para tornar uma parte de texto a negrito, coloque-o dentro de <strong>[b][/b]</strong>, por exemplo <br /><br /><strong>[b]</strong>Olá<strong>[/b]</strong><br /><br />ficará <strong>Olá</strong></li><br /><li>Para sublinhar use <strong>[u][/u]</strong>, por exemplo:<br /><br /><strong>[u]</strong>Bom dia<strong>[/u]</strong><br /><br />torna-se <span style="text-decoration: underline">Bom dia</span></li><br /><li>Para texto itálico use <strong>[i][/i]</strong>, por exemplo <br /><br />Isto é <strong>[i]</strong>Grande!<strong>[/i]</strong><br /><br />daria Isto é <i>Grande!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Formatar o texto: Negrito, Itálico e Sublinhado.',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Para alterar a cor ou o tamanho do texto as seguintes tags podem ser usadas. Tenha em mente que a forma como aparecerá no monitor depende do navegador e do sistema: <ul><li>Para modificar a cor do texto use a tag <strong>[color=][/color]</strong>.Pode usar o nome inglês para especificar um nome de uma cor conhecida (red, blue, yellow, etc.) ou o valor hexadecimal (#FFFFFF, #000000, etc.). Por exemplo para criar texto a vermelho use: <br /><br /><strong>[color=red]</strong>Olá!<strong>[/color]</strong><br /><br />ou<br /><br /><strong>[color=#FF0000]</strong>Olá!<strong>[/color]</strong><br /><br />Também pode usar <span style="color:red">Olá!</span></li><br /><li>Alterar o tamanho do texto pode ser feita de uma forma similar, usando <strong>[size=][/size]</strong>. Esta tag está dependente do modelo que o utilizador está a usar, mas o formato recomendado é um valor numérico representando o tamanho de texto em píxeis, começando em 20 (tão pequeno) até 200 (enorme) por padrão. Por exemplo:<br /><br /><strong>[size=30]</strong>Pequeno<strong>[/size]</strong><br /><br />será apresentado <span style="font-size:30%;">PEQUENO</span><br /><br />enquanto que:<br /><br /><strong>[size=200]</strong>GRANDE!<strong>[/size]</strong><br /><br />SERÁ <span style="font-size:200%;">GRANDE!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Modificar a cor e o tamanho do texto',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Sim, é claro que pode, por exemplo, para obter a atenção de alguém poderá escrever:<br /><br /><strong>[size=200][color=red][b]</strong>OLHE PARA MIM!<strong>[/b][/color][/size]</strong><br /><br />que irá aparecer <span style="color:red;font-size:200%;"><strong>OLHE PARA MIM!</strong></span><br /><br />Nós não recomendamos que use grandes lotes de texto parecidos com isto! Lembre-se que depende de si, o autor da mensagem, assegurar que os códigos sejam colocados correctamente. Por exemplo, o seguinte está incorrecto:<br /><br /><strong>[b][u]</strong>Isto é errado<strong>[/b][/u]</strong>' ,
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Posso juntar tags?',
));
