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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> '这里您可以管理搜索的后端索引。因为一般只使用一个后端引擎，因此您应当删除所有不使用的索引。在改变搜索设置（例如最小/最大字符串长度）后， 建议重新生成索引使修改生效。',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> '这里您可以设置如何使用搜索和检索帖子。您可以设置选项限制搜索动作的处理器负载。一部分设定对于所有搜索引擎后端的设定是一样的。',

	'COMMON_WORD_THRESHOLD'					=> '常用词阈值',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> '在所有的帖子中都频繁出现的单词将被识别为常用词。常用词在搜索中将被忽略。设置 0 则取消这项功能。只有当帖子数大于 100 时这个设置才能生效。调整过常用词阈值后需要重新建立索引。',
	'CONFIRM_SEARCH_BACKEND'				=> '您确认更换搜索后端吗？更换后您需要重新创建索引。如果您不打算再切换回旧的后端，您可以删除原先的索引以释放空间。',
	'CONTINUE_DELETING_INDEX'				=> '继续之前的索引删除进程',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> '存在一个已经开始的索引删除进程。要访问索引页面您必须先完成它，或取消它。',
	'CONTINUE_INDEXING'						=> '继续之前的索引生成进程',
	'CONTINUE_INDEXING_EXPLAIN'				=> '存在一个已经开始的索引生成进程。要访问索引页面您必须先完成它，或取消它。',
	'CREATE_INDEX'							=> '创建索引',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> '默认返回的字数',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> '当搜索的时候，返回结果的默认字数。设置为 0 则返回完整的帖子。',
	'DELETE_INDEX'							=> '删除索引',
	'DELETING_INDEX_IN_PROGRESS'			=> '删除索引进行中...',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '搜索后端正在清除索引，这需要几分钟的时间。',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL 全文检索后端只能在 MySQL4 或更高的版本中使用。',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'MySQL 全文索引只能用于 MyISAM 或 InnoDB 表。需要 MySQL 5.6.8 或更新版本才能对 InnoDB 表全文索引。',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> '索引帖子总数',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => '至少需要达到这个长度的词才会被检索。您必须更改 MySQL 的设定才能修改此值。',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => '不超过这个长度的词才会被检索。您必须更改 MySQL 的设定才能修改此值。',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL 全文后端只能和 PostgreSQL 一起用。',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> '索引帖子的总数',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL 版本',
	'FULLTEXT_POSTGRES_TS_NAME'				=> '文本搜索配置文件：',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> '关键字最小单词长度',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> '关键字最大单词长度',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> '这个搜索后端需要 PostgreSQL 版本 8.3 以上。',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> '文本搜索配置文件用来确定解析器和字典。',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> '至少这么多字符的单词才会被包含在数据库查询中。',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> '不超过这么多字符的单词才会被包含在数据库查询中。',

	'FULLTEXT_SPHINX_CONFIGURE'				=> '配置下面的设定来生成 Sphinx 配置文件',
	'FULLTEXT_SPHINX_DATA_PATH'				=> '数据文件夹路径',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> '它将被用来储存索引和日志文件，这个目录应该被创建在 web 访问目录之外。（应该以斜杠结尾）',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> '更新频繁的增量索引中的帖数',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx 搜索进程主机名称',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Sphinx 搜索进程 (searchd) 监听的服务器，留空将使用默认 localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> '索引内存限制',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> '此数应该总是低于您机器的可用 RAM，如果您遇到周期性的性能问题，可能是由于索引消耗太多资源，降低索引的可用内存可以解决此问题。',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> '主索引中的帖数',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx 搜索进程端口',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Sphinx 搜索进程(searchd)监听的端口，留空将使用默认 Sphinx API 端口 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sphinx 搜索 phpBB 只支持 MySQL 和 PostgreSQL。',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx 配置文件',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> '生成的内容是 Sphinx 配置文件，需要粘贴到 Sphinx.conf，用于 Sphinx 搜索进程。用您的数据库帐号密码替换 [dbuser] 和 [dbpassword] 占位符。',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Sphinx 数据目录路径未定义，请定义它们来生成配置文件。',

	'GENERAL_SEARCH_SETTINGS'				=> '综合搜索设定',
	'GO_TO_SEARCH_INDEX'					=> '前往索引页面',

	'INDEX_STATS'							=> '索引统计',
	'INDEXING_IN_PROGRESS'					=> '索引进行中',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '搜索后端正在检索论坛的所有帖子。取决于论坛数据量的大小，这可能需要几分钟的时间。',

	'LIMIT_SEARCH_LOAD'						=> '搜索页面系统负载限制',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '如果一分钟内系统负载超过这个值，搜索页面将不可用，1.0 约等于100% 的处理器负载。这个功能只在基于 UNIX 系统的服务器上有效。',

	'MAX_SEARCH_CHARS'						=> '索引的最大字符长度',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> '大于这个长度的短语将不会被检索。',
	'MAX_NUM_SEARCH_KEYWORDS'            => '搜索关键词的数目上限',
  'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => '用于限制用户用于搜索的关键词的个数。填写 0 则不作限制。',
	'MIN_SEARCH_CHARS'						=> '索引的最小字符长度',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> '小于这个长度的短语将不会被检索。',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '最小用户名长度',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '用户在搜索作者姓名时必须输入的字符串长度。如果作者用户名长度小于这个数字，您仍然可以输入完整用户名搜索用户的帖子。',

	'PROGRESS_BAR'							=> '进度条',

	'SEARCH_GUEST_INTERVAL'					=> '游客搜索间隔',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> '在多次搜索中游客必须等待的间隔时间(秒)。',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> '现有 id %2$d 的贴子已被索引，正在索引 %1$d 帖子。',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> '当前索引速率约为 %1$.1f 贴每秒。',
	),
		'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> '所有达到 id %2$d 的帖子已从搜索索引移除，其中 %1$d 帖子在此步骤中。',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		1	=> '当前删除索引的速度大约是  %1$.1f 贴每秒。',
	),
	'SEARCH_INDEX_CREATED'					=> '已经对数据库中的所有帖子建立了索引。',
	'SEARCH_INDEX_PROGRESS'					=> '完成：%1$d | 待处理：%2$d | 总共：%3$d',
	'SEARCH_INDEX_REMOVED'					=> '成功清除了这个后端的索引数据。',
	'SEARCH_INTERVAL'						=> '用户搜索间隔',
	'SEARCH_INTERVAL_EXPLAIN'				=> '用户搜索的最短间隔时间(秒)。',
	'SEARCH_STORE_RESULTS'					=> '搜索结果缓存时间',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> '缓存的结果在这个时间(秒)后将失效。设置为 0 则禁用缓存。',
	'SEARCH_TYPE'							=> '搜索后端',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB 允许您选择用于全文检索的后端类型。默认后端是 phpBB 自带的全文检索。',
	'SWITCHED_SEARCH_BACKEND'				=> '您已经更换了检索后端。要使用新的后端，您必须确认新的后端包含建好的索引。',

	'TOTAL_WORDS'							=> '已检索关键词总数',
	'TOTAL_MATCHES'							=> '与帖子索引关联的关键词总数',

	'YES_SEARCH'							=> '启用检索功能',
	'YES_SEARCH_EXPLAIN'					=> '允许用户使用搜索功能，包括搜索用户。',
	'YES_SEARCH_UPDATE'						=> '启用全文更新',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '当帖子发表时更新全文索引，如果禁用检索这个功能将停用。',
));
