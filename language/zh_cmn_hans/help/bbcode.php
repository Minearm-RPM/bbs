<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 * @简体中文语言　David Yin <https://www.phpbbchinese.com/>
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> '在帖子中显示图片',
	'HELP_BBCODE_BLOCK_INTRO'	=> '简介',
	'HELP_BBCODE_BLOCK_LINKS'	=> '创建链接',
	'HELP_BBCODE_BLOCK_LISTS'	=> '创建列表',
	'HELP_BBCODE_BLOCK_OTHERS'	=> '其他内容',
	'HELP_BBCODE_BLOCK_QUOTES'	=> '引用和输出固定宽度文字',
	'HELP_BBCODE_BLOCK_TEXT'	=> '文本格式',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> '新的 <strong>[attachment=][/attachment]</strong> BBCode 允许您在帖子中任何地方添加附件，如果论坛管理员启用了附件功能，并且您有发表附件的权限。在发布帖子的窗口可以通过附件下拉菜单（或是按钮）将附件粘贴到帖子中。',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> '在帖子中添加附件',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode 集成了在帖子中显示图片的标签。请在使用这个标签时注意两点： 许多用户可能对帖子中大量的图片产生厌烦，而且您输入的图片地址必须是存在于互联网上的 (它不能只存在于您自己的电脑上，除非您的电脑是一台网上的服务器!)。要显示一幅图片，您必须在图片的链接地址两边使用 <strong>[img][/img]</strong> 标签包围。例如：<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />就像上面链接部分提到的，您可以用 <strong>[url][/url]</strong> 标签包围图片，例如 <br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br /> 将生成: <br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> '在帖子中添加图片',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode 是一种特殊的 HTML 实现方式。 您能否在帖子中使用 BBCode 由管理员设定. 此外您可以在发表的时候设定帖子是否使用 BBCode。 BBCode 本身和 HTML 相似， 标签由方括号 [ 和 ] 封装而不是 &lt; 和 &gt; ，并且它能提供更多的显示控制。 取决于您使用的模板，您会发现在发布帖子的过程中使用可点击的界面添加 BBCode 非常容易。 即使如此， 以下的内容对您还是很有用的。',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> '什么是 BBCode？',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode 可以通过好几种方式创建链接 ( URIs, Uniform Resource Indicators, 也叫 URLs)。<ul><li>首先可以使用 <strong>[url=][/url]</strong> 标签，无论您在等号后面添加什么内容，他都将变成一个链接。例如指向 phpBB.com 的链接，您可以使用：<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br /> 这将生成链接: <a href="https://www.phpbb.com/">Visit phpBB!</a> 请注意链接会在同一个窗口还是新窗口中打开取决于用户的浏览器设置 </li><li>如果您希望链接的文字本身显示这个链接，您可以使用：<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />这将生成链接: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>另外， phpBB 允许一些自动链接检测， 这将任何语法正确的链接转变为可以点击的链接， 您可以不必输入标签以及 https://. 例如输入 www.phpbb.com 到内容中，将在浏览帖子时自动转换为 <a href="https://www.phpbb.com/">www.phpbb.com</a> 输出.</li><li>对于email地址也是一样的，您可以使用标签指定，例如：<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />输出 <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> 或者您也可以只输入 no.one@domain.adr， 这将在浏览帖子时自动被转换为email链接。</li></ul>对于所有的BBCode， 您可以在外面使用链接标签封装，例如 <strong>[img][/img]</strong> (see next entry)，<strong>[b][/b]</strong>，等等。同其它标签一样，它是否正常工作取决于您是否按嵌套顺序正确的关闭每个标签，例如:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />是 <span style="text-decoration: underline">不正确</span> 的，这将导致您的帖子显示不正常，所以要格外注意。',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> '链接到其它网站',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> '第二种列表, 有序的列表让您可以控制每个元素前显示的符号。 创建一个有序列表可以使用 <strong>[list=1][/list]</strong> 来创建一个数字列表，或者用 <strong>[list=a][/list]</strong> 生成一个字母排序的列表。 同无序列表一样，用 <strong>[*]</strong> 来定义元素。 例如：<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br /> 会生成下面的列表:<ol style="list-style-type: decimal;"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol> 字母排序的有序列表是这样的:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br /> 显示为 <ol style="list-style-type: lower-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />显示为<ol style="list-style-type: upper-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />显示为<ol style="list-style-type: lower-roman"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />显示为<ol style="list-style-type: upper-roman"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> '创建有序列表',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode 支持两种列表， 有序的和无序的。 他们本质上在 HTML 中是一样的。 一个无序的列表依次输出每个元素。 创建一个无序的列表您可以使用 <strong>[list][/list]</strong> 并在列表中使用 <strong>[*]</strong> 定义每个元素。 例如列出您最喜爱的颜色：<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br />它会显示下面的样子：<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul><br />另外您可以替换元素前的符号 <strong>[list=disc][/list]</strong>， <strong>[list=circle][/list]</strong>， 或者 <strong>[list=square][/list]</strong>。',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> '创建无序列表',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> '如果您是这个论坛的管理员并且拥有相应的权限，您可以通过自定义 BBCode 添加更多的 BBCodes。',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> '我能添加自己的标签吗？',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> '如果您需要输出一段固定宽度的代码或其他任何东西， 例如 Courier 字体， 您必须将文字包含在 <strong>[code][/code]</strong> 标签中， 例如<br /><br /><strong>[code]</strong>显示 "This is some code";<strong>[/code]</strong><br /><br />所有使用 <strong>[code][/code]</strong> 标签包围的文字格式将会以原来的形式显示。',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> '输出代码或固定宽度数据',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> '引用文字有两种方式， 带引用名或者不带。 <ul><li>当您利用引用功能回复一个帖子时， 您会注意到添加到内容中的帖子文字被 <strong>[quote=""][/quote]</strong> 包围起来。 这种方式会带被引用的用户名。 例如要引用Mr. Blobby 写的一段文字， 您可以输入：<br /><br /><strong>[quote="Mr. Blobby"]</strong>Mr. Blobby 写的文字<strong>[/quote]</strong><br /><br />显示中会自动在引用的文字前添上 &quot;Mr. Blobby 写道:&quot;。 记住您 <strong>必须</strong> 在您引用的人名外加上双引号 ""。</li><li>第二种方式可以进行随意的引用。 在帖子中使用 <strong>[quote][/quote]</strong> 标签即可。 当您查看帖子时， 这将在文字前显示一个引用块。</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> '在回复中引用文字',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode 包含了允许您快速更改文字基础风格的标签。 这由以下方法实现：<ul><li>用<strong>[b][/b]</strong>封装一段文字使其变粗， 例如： <br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong><br /><br />将变成 <strong>Hello</strong></li><li>添加下划线则使用 <strong>[u][/u]</strong>， 例如：<br /><br /><strong>[u]</strong>Good Morning<strong>[/u]</strong><br /><br />变成 <span style="text-decoration: underline">Good Morning</span></li><li>变成斜体使用 <strong>[i][/i]</strong>， 例如： <br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong><br /><br />将得到 This is <i>Great!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> '如何创建粗体字，斜体字和下划线字',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> '下列标签可以用于改变文字的颜色和大小。 需要记住的是显示效果将取决于浏览者使用的浏览器和操作系统：<ul><li>改变文字的颜色使用标签 <strong>[color=][/color]</strong>。 您可以指定一个可被识别的颜色 (例如 red, blue, yellow, 等等。) 或者是十六进制数组， 例如 #FFFFFF, #000000。 举个例子， 要来一段红色的文字您可以使用：<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />或者<br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />它们将会输出 <span style="color:red">Hello!</span></li><li>类似的, 改变文字的大小使用标签 <strong>[size=][/size]</strong>。 这个标签取决于用户所选择的界面模板， 不过建议的格式是体现文字百分比大小的数字值， 从20 (非常小) 开始直到200 (非常大)。 例如：<br /><br /><strong>[size=30]</strong>SMALL<strong>[/size]</strong><br /><br />将输出 <span style="font-size:30%;">SMALL</span><br /><br />以及：<br /><br /><strong>[size=200]</strong>HUGE!<strong>[/size]</strong><br /><br />将显示 <span style="font-size:200%;">HUGE!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> '如何改变文字的颜色和大小',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> '当然可以， 例如为了引起注意您可以这样写：<br /><br /><strong>[size=200][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br />这将输出 <span style="color:red;font-size:200%;"><strong>LOOK AT ME!</strong></span><br /><br />我们不推荐您在帖子中大量使用这样形式的文字， 因为这样会引起他人反感。 在使用的过程中请注意每个标签都必须正确关闭， 否则不能正常解析。下列的例子就是错误的：<br /><br /><strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> '我可以使用标签组合吗？',
));
