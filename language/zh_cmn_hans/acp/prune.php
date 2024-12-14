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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> '这里您可以将论坛中的用户删除（或者停用）。 您可以有多种形式来筛选账号。如：发帖数量和最后一次访问的时间等等... 这些方式可以自由组合， 如：您可以选用最后一次访问是2002年1月1日，且发贴量少于10篇的用户来删除。 使用星号作为通配符。您也可以不筛选，直接把用户名一行一个的放到删除名单中。 此功能须小心使用！ 一旦用户被删除后将无法再恢复。',

	'CRITERIA'				=> '筛选条件',

	'DEACTIVATE_DELETE'			=> '停用或者删除',
	'DEACTIVATE_DELETE_EXPLAIN'	=> '选择停用用户或者删除用户，注：被删除用户无法恢复！',
	'DELETE_USERS'				=> '删除',
	'DELETE_USER_POSTS'			=> '被删除用户所发表的帖子同时被删除',
	'DELETE_USER_POSTS_EXPLAIN' => '删除被删除用户发表的帖子。若用户被停用将不会被影响。',

	'JOINED_EXPLAIN'			=> '输入日期，使用 <kbd>YYYY-MM-DD</kbd> 格式。您可以两个都填表示一段间隔，或留空一处作为开放的日期范围。',

	'LAST_ACTIVE_EXPLAIN'		=> '输入日期，使用<kbd>YYYY-MM-DD</kbd> 格式。输入<kbd>0000-00-00</kbd>将删除从未登入的用户, <em>早于</em> 和 <em>后于</em> 条件将被忽略。',

	'POSTS_ON_QUEUE'			=> '等待批准的帖子',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> '仅限所选用户组里的用户。',
	'PRUNE_USERS_GROUP_NONE'	=> '所有用户组',
	'PRUNE_USERS_LIST'				=> '将被裁减的用户',
	'PRUNE_USERS_LIST_DELETE'		=> '使用选择的筛选条件， 如下的用户帐号将被删除。您可以在删除列表里通过取消勾选来移除单个用户。',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> '使用选择的筛选条件， 如下的用户帐号将被停用。您可以在停用列表里通过取消勾选来移除单个用户。',

	'SELECT_USERS_EXPLAIN'		=> '在这里输入特定用户名，他们将优先于上述的筛选标准。创始人不会被删除。',

	'USER_DEACTIVATE_SUCCESS'	=> '被选择的用户已经成功停用',
	'USER_DELETE_SUCCESS'		=> '被选择的用户已经成功删除',
	'USER_PRUNE_FAILURE'		=> '没有适合条件的用户。',

	'WRONG_ACTIVE_JOINED_DATE'	=> '输入的日期错误。 正确的格式是 <kbd>YYYY-MM-DD</kbd>。',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> '这将删除所有在规定的时间内没有新回复的主题。若您不输入数字，那么所有的文章将会被删除。默认情况下，这不会删除尚未结束的投票，置顶的主题和公告。',

	'FORUM_PRUNE'		=> '裁减版面',

	'NO_PRUNE'			=> '没有版面被裁减',

	'SELECTED_FORUM'	=> '已选版面',
	'SELECTED_FORUMS'	=> '已选版面',

	'POSTS_PRUNED'					=> '帖子已裁减',
	'PRUNE_ANNOUNCEMENTS'			=> '裁减公告',
	'PRUNE_FINISHED_POLLS'			=> '裁减已关闭的投票',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> '移除已经结束的投票主题',
	'PRUNE_FORUM_CONFIRM'			=> '您确认要以指定的设置裁减选中的版面吗？一旦开始裁减，满足条件的帖子和主题将被永远删除。',
	'PRUNE_NOT_POSTED'				=> '从最后发表的天数算起',
	'PRUNE_NOT_VIEWED'				=> '从最后查看的天数算起',
	'PRUNE_OLD_POLLS'				=> '裁减较旧的投票',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> '裁减在规定的时间内没有新投票的主题。',
	'PRUNE_STICKY'					=> '裁减置顶主题',
	'PRUNE_SUCCESS'					=> '版面裁减成功。',

	'TOPICS_PRUNED'		=> '主题已裁减',
));
