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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>权限非常细化，可以分为四个主要部分：</p>

		<h2>全局权限</h2>
		<p>用于控制全局访问，适用于整个论坛，进一步划分为用户权限、组权限、管理员和超级版主。</p>

		<h2>基于版面的权限</h2>
		<p>用于控制基于版面的访问，进一步分为版面权限、版面版主、用户版面权限和用户组版面权限。</p>

		<h2>权限角色</h2>
		<p>用于创建不同的权限集，以便于设定不同的角色权限。默认的角色可以覆盖大大小小的论坛管理，不过在这四个权限组中您也可以添加/编辑/删除您觉得合适的角色。</p>

		<h2>权限掩码</h2>
		<p>用于查看分配给用户，版主，管理员的权限的效果。</p>
	
		<br />

		<p>需要了解更多的设定和权限管理信息，请访问 <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">快速指南的权限篇</a>.</p>
	',

	'ACL_NEVER'				=> '从不',
	'ACL_SET'				=> '权限设定',
	'ACL_SET_EXPLAIN'		=> '权限基于简单的 <strong>是</strong>/<strong>否</strong> 系统。设定用户组和用户选项为 <strong>从不</strong> 将覆盖分配给它的任何其它值。如果您不希望给这个用户或用户组设定值，请选择 <strong>否</strong>。如果值在其他地方设定，他们将在设定中使用，否则假定为 <strong>从不</strong>。所有选中的对象 (他们前面有勾选框) 将复制您设置的权限组。请注意，为创始人账户设置管理权限不会产生任何影响，因为创始人的管理权限始终设置为 <strong>是</strong>。',
	'ACL_SETTING'			=> '设定',

	'ACL_TYPE_A_'			=> '管理权限',
	'ACL_TYPE_F_'			=> '版面权限',
	'ACL_TYPE_M_'			=> '审核权限',
	'ACL_TYPE_U_'			=> '用户权限',

	'ACL_TYPE_GLOBAL_A_'	=> '管理权限',
	'ACL_TYPE_GLOBAL_U_'	=> '用户权限',
	'ACL_TYPE_GLOBAL_M_'	=> '超级版主权限',
	'ACL_TYPE_LOCAL_M_'		=> '版主权限',
	'ACL_TYPE_LOCAL_F_'		=> '版面权限',
	
	'ACL_NO'				=> '否',
	'ACL_VIEW'				=> '查看权限',
	'ACL_VIEW_EXPLAIN'		=> '这里您可以看到用户或用户组拥有的有效权限。红色方形表示用户/组没有该权限，绿色方形表示用户/组拥有该权限。',
	'ACL_YES'				=> '是',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> '这里您可以赋于管理权限给用户/组。所有拥有管理员权限的用户都能看到管理员控制面板。',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> '这里您可以将用户/组任命为版主。要设定用户访问版面的权限和设定超级版主，管理员，请使用其他相关页面。',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> '这里您可以更改哪些用户/组可以访问哪些版面。任命版主和管理员请使用其他相关页面。',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> '这里您可以将一个版面的权限复制到其它版面。',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> '这里您可以设定用户/组为超级版主。这些版主拥有一般的版主权限，但是他们可以访问论坛的任何版面。',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> '这里您可以设置用户组的版面权限。',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> '这里您可以给用户组分配全局权限 - 用户权限、超级版主权限和管理权限。用户权限包括的功能如使用头像、发送私信等等；超级版主权限如批准帖子、管理主题、管理封禁等等；管理权限如变更权限、设定 BBCode、管理版面等等。只有在极少数的情况下才需要改变单个用户权限，最好的方法是将用户归组然后给用户组分配权限。',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> '这里您可以管理管理员权限的角色。角色是一种权限的有效组合，如果您更改了角色内容，那么使用这个角色的对象就会相应的被更改权限。',
	'ACP_FORUM_ROLES_EXPLAIN'					=> '这里您可以管理版面权限的角色。角色是一种权限的有效组合，如果您更改了角色内容，那么使用这个角色的对象就会相应的被更改权限。',
	'ACP_MOD_ROLES_EXPLAIN'						=> '这里您可以管理版主权限的角色。角色是一种权限的有效组合，如果您更改了角色内容，那么使用这个角色的对象就会相应的被更改权限。',
	'ACP_USER_ROLES_EXPLAIN'					=> '这里您可以管理用户权限的角色。角色是一种权限的有效组合，如果您更改了角色内容，那么使用这个角色的对象就会相应的被更改权限。',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> '这里您可以为用户分配版面权限。',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> '这里您可以给用户分配全局权限 - 用户权限、超级版主权限和管理权限。用户权限包括的功能如使用头像、发送私信等等；超级版主权限如批准帖子、管理主题、管理封禁等等；管理权限如变更权限、定义 BBCode、版面管理等等。要变更大量用户的权限推荐使用组权限系统，用户权限应该极少被变更，优先的方法是将用户归组然后分配组权限。',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> '这里您可以查看给选中的用户/组设定的有效管理权限。',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> '这里您可以查看给选中的用户/组设定的超级版主权限。',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> '这里您可以查看给选中的用户/组和版面设定的有效版面权限。',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> '这里您可以查看给选中的用户/组和版面设定的版主权限。',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> '这里您可以查看给选中的用户/组设定的有效用户权限。',

	'ADD_GROUPS'				=> '添加用户组',
	'ADD_PERMISSIONS'			=> '添加权限',
	'ADD_USERS'					=> '添加用户',
	'ADVANCED_PERMISSIONS'		=> '高级权限',
	'ALL_GROUPS'				=> '选择所有用户组',
	'ALL_NEVER'					=> '全部选 <strong>从不</strong>',
	'ALL_NO'					=> '全部选 <strong>否</strong>',
	'ALL_USERS'					=> '选择全部用户',
	'ALL_YES'					=> '全部选 <strong>是</strong>',
	'APPLY_ALL_PERMISSIONS'		=> '应用所有权限',
	'APPLY_PERMISSIONS'			=> '应用权限',
	'APPLY_PERMISSIONS_EXPLAIN'	=> '为这个对象设置的权限和角色将只被应用到这个对象和所有选中的对象。',
	'AUTH_UPDATED'				=> '权限更新完成。',

	'COPY_PERMISSIONS_CONFIRM'				=> '您确认要执行此项操作吗? 这将覆盖目标的现有权限设定。',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> '您要从中复制权限的源版面。',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> '您想要应用复制的权限的目标版面。',
	'COPY_PERMISSIONS_FROM'					=> '复制权限自',
	'COPY_PERMISSIONS_TO'					=> '应用权限至',
	
	'CREATE_ROLE'				=> '创建角色',
	'CREATE_ROLE_FROM'			=> '使用设定自…',
	'CUSTOM'					=> '自定义…',

	'DEFAULT'					=> '默认',
	'DELETE_ROLE'				=> '删除角色',
	'DELETE_ROLE_CONFIRM'		=> '您确认您需要删除这个角色吗? 使用这个角色的对象 <strong>不会</strong> 因此丢失他们的权限设置。',
	'DISPLAY_ROLE_ITEMS'		=> '查看使用这个角色的对象',

	'EDIT_PERMISSIONS'			=> '编辑权限',
	'EDIT_ROLE'					=> '编辑角色',

	'GROUPS_NOT_ASSIGNED'		=> '没有使用这个角色的组',

	'LOOK_UP_GROUP'				=> '查找用户组',
	'LOOK_UP_USER'				=> '查找用户',

	'MANAGE_GROUPS'		=> '管理用户组',
	'MANAGE_USERS'		=> '管理用户',

	'NO_AUTH_SETTING_FOUND'		=> '未定义权限设定。',
	'NO_ROLE_ASSIGNED'			=> '没有指定角色…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> '设定为这个角色并不改变右边的权限。如果您需要重设/删除所有权限，您需要使用 “全部选 <strong>否</strong>” 链接。',
	'NO_ROLE_AVAILABLE'			=> '没有可用的角色',
	'NO_ROLE_NAME_SPECIFIED'	=> '请给角色一个名称。',
	'NO_ROLE_SELECTED'			=> '找不到角色。',
	'NO_USER_GROUP_SELECTED'	=> '您没有选择用户或组。',

	'ONLY_FORUM_DEFINED'	=> '您只设定了选中的版面，请再选中至少一个用户或用户组。',

	'PERMISSION_APPLIED_TO_ALL'		=> '权限和角色也将被应用到选中的对象上',
	'PLUS_SUBFORUMS'				=> '+子版面',

	'REMOVE_PERMISSIONS'			=> '删除权限',
	'REMOVE_ROLE'					=> '删除角色',
	'RESULTING_PERMISSION'			=> '合成权限',
	'ROLE'							=> '角色',
	'ROLE_ADD_SUCCESS'				=> '角色添加完成。',
	'ROLE_ASSIGNED_TO'				=> '用户/组应用到 %s',
	'ROLE_DELETED'					=> '角色删除完成。',
	'ROLE_DESCRIPTION'				=> '角色描述',

	'ROLE_ADMIN_FORUM'			=> '版面管理',
	'ROLE_ADMIN_FULL'			=> '完全管理',
	'ROLE_ADMIN_STANDARD'		=> '标准管理',
	'ROLE_ADMIN_USERGROUP'		=> '用户/组管理',
	'ROLE_FORUM_BOT'			=> '机器人访问',
	'ROLE_FORUM_FULL'			=> '完全访问',
	'ROLE_FORUM_LIMITED'		=> '有限访问',
	'ROLE_FORUM_LIMITED_POLLS'	=> '有限访问 + 投票',
	'ROLE_FORUM_NOACCESS'		=> '禁止访问',
	'ROLE_FORUM_ONQUEUE'		=> '版主队列',
	'ROLE_FORUM_POLLS'			=> '标准访问 + 投票',
	'ROLE_FORUM_READONLY'		=> '只读访问',
	'ROLE_FORUM_STANDARD'		=> '标准访问',
	'ROLE_FORUM_NEW_MEMBER'		=> '新注册用户访问',
	'ROLE_MOD_FULL'				=> '完全版主',
	'ROLE_MOD_QUEUE'			=> '队列版主',
	'ROLE_MOD_SIMPLE'			=> '简单版主',
	'ROLE_MOD_STANDARD'			=> '标准版主',
	'ROLE_USER_FULL'			=> '所有功能',
	'ROLE_USER_LIMITED'			=> '有限功能',
	'ROLE_USER_NOAVATAR'		=> '无头像',
	'ROLE_USER_NOPM'			=> '无私人短信',
	'ROLE_USER_STANDARD'		=> '标准功能',
	'ROLE_USER_NEW_MEMBER'		=> '新注册用户功能',
	
	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> '可以访问版面管理和版面权限设置。',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> '拥有这个论坛的所有管理员权限.<br />不推荐使用。',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> '可以行使大部分管理员功能但是不允许使用服务器/系统相关功能。',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> '可以管理用户/组： 可以更改权限，设置，管理封禁和等级。',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> '这个角色推荐给机器人和搜索爬虫使用。',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> '可以使用所有版面功能，包括发表通告和置顶。不受灌水间隔限制。<br />不推荐给普通用户。',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> '可以使用部分版面功能，但是不能发表附件和使用主题图标。',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> '和受限访问一样，但是可以创建投票。',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> '无法看见和访问版面。',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> '可以使用大多数的版面功能包括发表附件，但是帖子和主题需要版主审阅后才能发表。',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> '和标准访问一样但是可以创建投票。',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> '可以访问版面，但是不能创建也不能回复主题。',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> '可以使用大多数版面功能包括发表附件和删除自己的主题，但是不能锁定自己的主题，也不能创建投票。',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> '为新注册用户所在组指定的角色； 包含 <strong>从不</strong> 设定以锁定新用户权限。',
	'ROLE_DESCRIPTION_MOD_FULL'				=> '可以行使所用版主功能，包括封禁。',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> '可以使用版主队列审阅和编辑帖子，仅此而已。',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> '可以使用基本主题操作。不能发送警告和使用版主队列。',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> '可以使用大部分的版主工具，但是不能封禁用户和更改帖子作者。',
	'ROLE_DESCRIPTION_USER_FULL'			=> '可以使用所有的版面功能。包括更改用户名称，也不受灌水间隔限制.<br />不推荐使用。',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> '可以访问部分用户功能。但是不允许发表附件，发送 email 和私人短信。',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> '有限的功能，并且不允许使用头像功能。',
	'ROLE_DESCRIPTION_USER_NOPM'			=> '有限的功能，并且不允许使用私人短信。',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> '可以访问大多数但不是全部用户功能，例如不能更改用户名称，也受灌水间隔限制。',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> '为新注册用户所在组指定的角色； 包含 <strong>从不</strong> 设定以锁定新用户权限。',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> '您可以输入一个简短的说明，以解释这个角色的用途和意义。您这里输入的文字也会显示在权限界面上。',
	'ROLE_DESCRIPTION_LONG'			=> '角色描述太长，请压缩至4000字符以内。',
	'ROLE_DETAILS'					=> '角色细节',
	'ROLE_EDIT_SUCCESS'				=> '角色编辑完成。',
	'ROLE_NAME'						=> '角色名称',
	'ROLE_NAME_ALREADY_EXIST'		=> '指定权限类型，名为 <strong>%s</strong> 的角色已经存在。',
	'ROLE_NOT_ASSIGNED'				=> '角色尚未指派。',

	'SELECTED_FORUM_NOT_EXIST'		=> '选中的版面不存在。',
	'SELECTED_GROUP_NOT_EXIST'		=> '选中的组不存在。',
	'SELECTED_USER_NOT_EXIST'		=> '选中的用户不存在。',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> '您选中的版面将包含所有的子版面',
	'SELECT_ROLE'					=> '选择角色…',
	'SELECT_TYPE'					=> '选择类型',
	'SET_PERMISSIONS'				=> '设置权限',
	'SET_ROLE_PERMISSIONS'			=> '设置角色权限',
	'SET_USERS_PERMISSIONS'			=> '设置用户权限',
	'SET_USERS_FORUM_PERMISSIONS'	=> '设置用户版面权限',

	'TRACE_DEFAULT'					=> '默认情况下所有权限为 <strong>否</strong> (未设)。所以权限可以被其他设定覆盖。',
	'TRACE_FOR'						=> '追溯',
	'TRACE_GLOBAL_SETTING'			=> '%s (全局)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> '这个组的权限设置为 <strong>从不</strong> 所以保留旧的结果。',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> '这个组在该版面的权限被设置为 <strong>从不</strong> 与实际权限一致，所以保留实际权限。',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> '此组权限设为 <strong>从不</strong>，这成为了新的权限，因为这个值在之前并没有设置 (设置为 <strong>否</strong>)。',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> '这个组在该版面的权限被设置为 <strong>从不</strong> 这成为新的实际权限，因为之前并未设置过 (例如设置为 <strong>否</strong>)。',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> '这个组的权限被设置为 <strong>从不</strong>，这将覆盖用户的 <strong>是</strong> ，变成 <strong>从不</strong> 。',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> '这个组在该版面的权限被设置为 <strong>从不</strong> 这将用户的实际权限从 <strong>是</strong> 覆盖为 <strong>从不</strong> 。',
	'TRACE_GROUP_NO'				=> '这个组的权限是 <strong>否</strong>，所以保留旧的值。',
	'TRACE_GROUP_NO_LOCAL'			=> '这个组在该版面的权限是 <strong>否</strong> 所以保留旧的实际权限。',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> '这个组的权限被设置为 <strong>是</strong> 但是 <strong>从不</strong> 无法被覆盖。',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> '这个组在该版面的权限被设置为 <strong>是</strong> 但是无法覆盖实际权限 <strong>从不</strong>。',
	'TRACE_GROUP_YES_TOTAL_NO'		=> '这个组的权限被设置为 <strong>是</strong>，这将成为新的值，因为原值并没有设置(设置成 <strong>否</strong>)。',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> '这个组在该版面的权限被设置为 <strong>是</strong> 这将成为新的实际权限，因为之前并没有其他影响此值的设置 (例如设置为 <strong>否</strong>)。',
	'TRACE_GROUP_YES_TOTAL_YES'		=> '这个组的权限被设置为 <strong>是</strong>，并且原值也被设置为 <strong>是</strong>，所以最终还是一样的结果。',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> '这个组在该版面的权限被设置为 <strong>是</strong> 而综合权限已经被设置为 <strong>是</strong>，所以保持原设置。',
	'TRACE_PERMISSION'				=> '追溯权限 - %s',
	'TRACE_RESULT'					=> '追溯结果',
	'TRACE_SETTING'					=> '追溯设定',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> '版面的独立用户权限评估为 <strong>是</strong> 而原综合权限也已经设置为 <strong>是</strong>，所以最终还是一样的结果。%s追溯全局权限%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> '版面的独立用户权限评估为 <strong>是</strong>，这将覆盖当前本地结果<strong>从不</strong>。%s追溯全局权限%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> '版面的独立用户权限评估为 <strong>从不</strong>，这对于本地权限无影响。%s追溯全局权限%s',

	'TRACE_USER_FOUNDER'					=> '用户属于创始人，因此其管理权限总是设置为 <strong>是</strong>。',
	'TRACE_USER_KEPT'						=> '用户权限是<strong>否</strong> 所以保留旧的值。',
	'TRACE_USER_KEPT_LOCAL'					=> '用户在该版面的权限被设置为 <strong>否</strong> 所以保留旧的实际权限。',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> '用户权限设置为 <strong>从不</strong> 而原综合值也是 <strong>从不</strong>，所以没有变化。',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> '用户在该版面的权限被设置为 <strong>从不</strong> 并且原综合权限为 <strong>从不</strong>，所以保留原样。',
	'TRACE_USER_NEVER_TOTAL_NO'				=> '用户权限设置为 <strong>从不</strong>，这成为新的值（旧的值是否）。',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> '用户在该版面的权限被设置为 <strong>从不</strong> 这将成为新的实际权限因为原实际权限被设置为 <strong>否</strong>。',
	'TRACE_USER_NEVER_TOTAL_YES'			=> '用户权限设置为 <strong>从不</strong>，覆盖了原先的 <strong>是</strong>。',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> '用户在该版面的权限被设置为 <strong>从不</strong> 并覆盖了原先的 <strong>是</strong>。',
	'TRACE_USER_NO_TOTAL_NO'				=> '用户权限设置为 <strong>否</strong> 而原值也设置为否，所以最终恢复默认值 <strong>从不</strong>。',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> '用户在该版面的权限被设置为 <strong>否</strong> 并且原实际权限为 <strong>否</strong> 所以成为默认的 <strong>从不</strong>。',
	'TRACE_USER_YES_TOTAL_NEVER'			=> '用户权限设置为 <strong>是</strong> 但是无法覆盖原值 <strong>从不</strong>。',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> '用户在该版面的权限被设置为 <strong>是</strong> 无法覆盖原实际权限 <strong>从不</strong>。',
	'TRACE_USER_YES_TOTAL_NO'				=> '用户权限设置为 <strong>是</strong> 这成为新的值(旧的值是<strong>否</strong>)。',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> '用户在该版面的权限为 <strong>是</strong> 这成为新的实际权限，因为旧的实际权限为 <strong>否</strong>。',
	'TRACE_USER_YES_TOTAL_YES'				=> '用户权限设置为 <strong>是</strong> 而原值也是 <strong>是</strong>，所以没有变化。',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> '用户在该版面的权限为 <strong>是</strong> 并且原实际权限为 <strong>是</strong>，所以保留原样。',
	'TRACE_WHO'								=> '谁',
	'TRACE_TOTAL'							=> '合计',

	'USERS_NOT_ASSIGNED'			=> '没有用户被分配这个角色',
	'USER_IS_MEMBER_OF_DEFAULT'		=> '是下列默认组的成员',
	'USER_IS_MEMBER_OF_CUSTOM'		=> '是下列自定义组的成员',

	'VIEW_ASSIGNED_ITEMS'	=> '查看设置的条目',
	'VIEW_LOCAL_PERMS'		=> '本地权限',
	'VIEW_GLOBAL_PERMS'		=> '全局权限',
	'VIEW_PERMISSIONS'		=> '查看权限',

	'WRONG_PERMISSION_TYPE'	=> '选择了错误的权限类型。',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> '权限设置格式错误，phpBB 无法正确处理。',
));
