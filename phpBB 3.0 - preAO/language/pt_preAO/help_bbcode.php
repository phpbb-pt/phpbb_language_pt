<?php
/**
*
* help_bbcode [Português]
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
      0 => '--', 
      1 => 'Introdução' 
   ), 
   array( 
      0 => 'O que significa BBCode?', 
      1 => 'O BBCode é uma implementação especial do HTML. A possibilidade de usar o BBCode nas mensagens é definida pelo Administrador do Fórum. O Utilizador pode desactivar o BBCode individualmente em cada mensagem. O BBCode por si mesmo é idêntico em estilo ao HTML, as etiquetas (tags) são inseridas dentro de parênteses rectos "[" e "]" ao contrário de "<" e ">", facilitando a formatação dos textos. A tarefa de adicionar BBCode às mensagens é facilitada pelo uso de um Painel colocado imediatamente acima da caixa principal das mensagens, dependendo do estilo em uso, onde pode escolher os BBCode que pretende usar. <br /><strong>Apesar da existência desse Painel, leia cuidadosamente este guia.</strong>' 
   ), 
   array( 
      0 => '--', 
      1 => 'Formatar o texto' 
   ), 
   array( 
      0 => 'Formatar o texto: Negrito, Sublinhado e Itálico.', 
      1 => '<br />O BBCode tem tags que permitem fazê-lo rápida e facilmente:<ul><br /><li>Para criar texto a negrito use a tag <strong>[b][/b]</strong>.<br />O exemplo seguinte: Hoje, vai estar um <strong>[b]</strong>bom dia<strong>[/b]</strong>.<br />Terá este resultado: Hoje, vai estar um <strong>bom dia</strong></li><br /><br /><li>Para criar texto sublinhado use a tag <strong>[u][/u]</strong>.<br />O exemplo seguinte: Hoje, vai estar um <strong>[u]</strong>bom dia<strong>[/u]</strong><br />Terá este resultado: Hoje, vai estar um <u>bom dia</u></li><br /><br /><li>Para criar texto a itálico use a tag <strong>[i][/i]</strong><br />O exemplo seguinte: Hoje, vai estar um <strong>[i]</strong>bom dia<strong>[/i]</strong><br />Terá este resultado: Hoje, vai estar um <i>bom dia</i></li></ul>' 
   ), 
   array( 
      0 => 'Modificar a cor e o tamanho do texto', 
      1 => '<br />Para alterar a cor ou o tamanho do texto deverá utilizar as tags da seguinte forma: <ul><br /><li>Para modificar a cor do texto use a tag <strong>[color=][/color]</strong>.<br />Depois do <strong>=</strong> use o nome inglês (red, blue, yellow, etc.) ou o valor hexadecimal (#FFFFFF, #000000, etc.).<br /><br />Para criar texto a vermelho use a tag <strong>[color=red][/color]</strong> ou <strong>[color=#FF0000][/color]</strong><br />O exemplo seguinte: Hoje, vai estar um <strong>[color=red]</strong>bom dia<strong>[/color]</strong> ou: <strong>[color=#FF0000]</strong>bom dia<strong>[/color]</strong><br />Terá este resultado: Hoje, vai estar um <span style="color:red">bom dia</span></li><br /><br /><li>Para modificar o tamanho do texto use a tag <strong>[size=][/size]</strong>.<br /> Esta está dependente do Templat do Fórum, variando o tamanho padrão da fonte com o Template.<br /> Este BBCode começa em 1 (invisível) até 29 (muito grande).<br /><br />O exemplo seguinte: Hoje, vai estar um <strong>[size=9]</strong>bom dia<strong>[/size]</strong><br />Terá este resultado: Hoje, vai estar um <span style="font-size:9px;">bom dia</span><br /><br />O exemplo seguinte: Hoje, vai estar um <strong>[size=24]</strong>bom dia<strong>[/size]</strong><br />Terá este resultado: Hoje, vai estar um <span style="font-size:24px;">bom dia</span></li></ul>Os resultados destas formatações dependem do navegador e do sistema do Utilizador, podendo apresentar ligeiras variações.' 
   ), 
   array( 
      0 => 'Posso juntar tags?', 
      1 => '<br />Sim, as tags podem ser usadas individualmente ou em conjunto.<br /><br /><ul><li>Para alterar o tamanho, a cor e colocar o texto a negrito use as tags <strong>[size=][color=][b][/b][/color][/size]</strong><br />O exemplo seguinte: Hoje, vai estar um <strong>[size=18][color=red][b]</strong>bom dia<strong>[/b][/color][/size]</strong><br />Terá este resultado: Hoje, vai estar um <span style="color:red;font-size:18px;"><strong>bom dia</strong></span></li></ul><br />Verifique sempre se as tags estão fechadas e correctamente organizadas, evitando assim resultados desastrosos.<br /><br /><ul><li>Um exemplo de como não deve organizar as tags:<br /><strong>[b][u][/b][/u]</strong></li><br /><br /><li>As mesmas tags organizadas correctamente:<br /><strong>[b][u][/u][/b]</strong></li></ul>' 
   ), 
   array( 
      0 => '--', 
      1 => 'Citar um texto completo ou apenas uma parte' 
   ), 
   array( 
      0 => 'Fazer uma citação nas suas respostas', 
      1 => '<br />Quando faz uma citação o texto é colocado dentro de uma moldura. Há duas formas de fazer uma citação. Fazendo referência ao autor ou sem referenciar o autor.<ul><br /><li>Para fazer uma citação referindo o autor use as tags: <strong>[quote="Autor"]</strong><strong>[/quote]</strong><br />Para citar parcialmente um texto do Sr. Blobby use a tag da seguinte forma:<br /><strong>[quote="Sr. Blobby"]</strong>O texto do Sr. Blobby que queremos citar deverá estar aqui.<strong>[/quote]</strong><br />Desta forma é adicionado automaticamente <strong>"Sr. Blobby escreveu"</strong> antes do texto.<br /> <strong>Deve obrigatoriamente</strong> incluir as aspas <strong>""</strong> em volta do nome que está a citar.</li><br /><br /><li>Para fazer uma citação não referindo o autor use as tags: <strong>[quote]</strong><strong>[/quote]</strong><br />Para citar parcialmente um texto sem referência ao autor use a tag da seguinte forma:<br /> <strong>[quote]</strong>O texto sem autor que queremos citar deverá estar aqui.<strong>[/quote]</strong><br />Quando o faz aparece unicamente um símbolo de <strong>Citação</strong> antes do texto.</li></ul>' 
   ), 
   array( 
      0 => 'Deixar o texto completo em forma de código ou apenas uma parte', 
      1 => 'Para deixar o texto todo ou parte dele em formato de código deve usar as <strong>[code][/code]</strong> tags.<br /><br />Por exemplo:<br /><strong>[code]</strong>echo "Isto é algum código";<strong>[/code]</strong><br /><br />Todo texto dentro das tags <strong>[code][/code]</strong> pode ser modificado ou eliminado.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Criar listas' 
   ), 
   array( 
      0 => 'Criar uma lista não ordenada', 
      1 => 'O BBCode permite listas ordenadas e as não ordenadas.<br />Este código é igual ao HTML, mudando apenas o formato da tag.<br /> Uma lista não ordenada cria os itens em sequencia.<br /> Para criar uma lista não ordenada deve usar <strong>[list][/list]</strong> e definir cada marcador dentro da lista usando <strong>[*]</strong>.<br /><br />Por exemplo, para as suas cores favoritas poderia fazer da seguinte forma:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Vermelho<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarelo<br /><strong>[/list]</strong><br /><br />sendo criada a seguinte lista: <br /><br /><ul><li>Vermelho</li><li>Azul</li><li>Amarelo</li></ul>' 
   ), 
   array( 
      0 => 'Criar uma lista ordenada', 
      1 => 'O segundo tipo de lista é uma lista ordenada onde pode controlar o que é exibido antes de cada item.<br /> Para criar listas ordenadas use <strong>[list=1][/list]</strong> para listas numeradas, ou <strong>[list=a][/list]</strong> para listas alfabéticas.<br /> Como nas listas não ordenadas os itens são precedidos de um <strong>[*]</strong>.<br /><br />Por exemplo, para uma lista numérica proceda da seguinte forma:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Vá às lojas<br /><strong>[*]</strong>Compre um novo computador<br /><strong>[*]</strong>Compre com garantia e mande para o conserto se estragar<br /><strong>[/list]</strong><br /><br />sendo criada a seguinte lista:<ol type="1"><li>Vá às lojas</li><li>Compre um novo computador</li><li>Compre com garantia e mande para o conserto se estragar</li></ol>Para uma lista alfabética proceda da seguinte forma:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>A primeira possível resposta<br /><strong>[*]</strong>A segunda possível resposta<br /><strong>[*]</strong>A terceira possível resposta<br /><strong>[/list]</strong><br /><br />sendo criada a seguinte lista:<ol type="a"><li>A primeira possível resposta</li><li>A segunda possível resposta</li><li>A terceira possível resposta</li></ol>'
   ), 
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => 'A criar uma lista Ordenada',
		1 => 'O segundo tipo de lista dá-lhe uma lista ordenada, permite-lhe o controle de saída antes de cada item. Para criar uma lista ordenada use <strong>[list=1][/list]</strong> para criar uma lista ordenada ou em alternativa <strong>[list=a][/list]</strong> para uma lista alfanumérica. Tal como uma lista não ordenada os items são especificados como <strong>[*]</strong>. Por exemplo:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir às compras<br /><strong>[*]</strong>Comprar um computador novo<br /><strong>[*]</strong>Insultar o computador quando ele avaria<br /><strong>[/list]</strong><br /><br />criará o seguinte:<ol style="list-style-type: decimal;"><li>Ir às compras</li><li>Comprar um computador novo</li><li>Insultar o computador quando ele avaria</li></ol>Onde exista para uma lista alfabética poderá usar:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>A primeira resposta possível<br /><strong>[*]</strong>A segunda resposta possível<br /><strong>[*]</strong>A terceira resposta possível<br /><strong>[/list]</strong><br /><br />obtendo<ol style="list-style-type: lower-alpha"><li>A primeira resposta possível</li><li>A segunda resposta possível</li><li>A terceira resposta possível</li></ol>'
	),
   array( 
      0 => '--', 
      1 => 'Criar atalhos' 
   ), 
   array( 
      0 => 'Criar um atalho para outro site', 
      1 => 'O phpBB BBCode aceita um número variável de formas para criar URIs, Uniform Resource Indicators, mais conhecidas como URLs.<ul><br /><li>A primeira dessas formas é usando as tags <strong>[url=][/url]</strong>.<br /> Deve escrever o endereço de destino depois do sinal de =.<br /><br /> <li>Para criar um atalho para o phpBB.com deve fazê-lo da seguinte forma:<br /><strong>[url=http://www.phpbb.com/]</strong>Visite o phpBB!<strong>[/url]</strong><br /><br />Tal resultará no seguinte atalho: <a href="http://www.phpbb.com/" target="_blank">Visite o phpBB!</a><br /><br /><li>Para mostrar a URL basta fazer da seguinte forma:<br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Tal resultará no seguinte atalho: <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a></li><br /><li>O phpBB tem um recurso extra chamado <i>Links Mágicos</i> que criam automaticamente a URL correta num atalho, sem necessidade de incluir a tag e sem especificar o endereço.<br /><br /> Por exemplo, se digitar www.phpbb.com dentro da mensagem é criado automaticamente um atalho para <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a>.<br />Estas alterações produzem-se ao visualizar a mensagem.</li><br /><li>Para inserir um atalho para um endereço de email pode fazer da seguinte forma:<br /><strong>[email]</strong>email@servidor.pt<strong>[/email]</strong><br /><br />Tal resultará no seguinte atalho: <a href="mailto:email@servidor.pt">email@servidor.pt</a><br />Pode simplesmente escrever email@servidor.pt para que após o envio da mensagem seja convertido automaticamente em atalho.</li></ul>Como com todas as outras, pode juntar duas ou mais tags e formar algo como:<br /> <strong>[img][/img]</strong>(veja o próximo exemplo)<strong>[b][/b]</strong>, etc.<br /><br /> Tal como nas tags de formatação de texto certifique-se que estão correctamente organizadas:<br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><u>Isto não está</u> correcto e a sua mensagem corre o risco de ser apagada.'
   ), 
   array( 
      0 => '--', 
      1 => 'Exibir imagens nas suas mensagens' 
   ), 
   array( 
      0 => 'Anexar uma imagem à mensagem', 
      1 => 'O phpBB BBCode usa uma tag que permite adicionar imagens nas suas mensagens. Há, no entanto que considerar que este uso pode não ser apreciado. O uso de imagens aumenta os tempos de espera e o consumo de tráfego da ligação. Outro fato a ter em conta que é o endereço da imagem que pode ficar indisponível.<br /><br /><ul><br /><li>Para exibir uma imagem na mensagem coloque o endereço da mesma dentro da tag <strong>[img][/img]</strong>.<br /><br /> Por exemplo:<br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Terá como resultado:<br /><a <img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a><br /><br /><li>Para associar um atalho à imagem use a tag <strong>[url][/url]</strong>.<br /><br />Por exemplo:<br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />Obterá a mesma imagem. No entanto se clicar nela será direccionado para o atalho introduzido:<br /><a href="http://www.google.com/" target="_blank"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a></ul><br /><li>' 
   ), 
   array( 
      0 => 'Anexar ficheiros na mensagem', 
      1 => 'Esta tag pode ser inserida em qualquer local da mensagem utilizando o <strong>[attachment=][/attachment]</strong>, este o recurso tiver sido activado pelo Administrador do Fórum e tiver permissão para anexar ficheiros. Neste caso pode anexar ficheiros nas mensagens. Dentro do menu de mensagens terá um bloco para anexar um ou mais ficheiros.' 
   ), 
   array( 
      0 => '--', 
      1 => 'Outras matérias' 
   ), 
   array( 
      0 => 'Posso criar as minhas próprias tags?', 
      1 => 'Se é Administrador ou tem as Permissões adequadas, pode adicionar BBCodes no Painel de Administração.' 
   ) 
); 

?>