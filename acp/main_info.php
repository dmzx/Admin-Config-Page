<?php
/**
 *
 * Admin Config Page. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2025, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace dmzx\adminconfigpage\acp;

/**
 * Admin Config Page ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\dmzx\adminconfigpage\acp\main_module',
			'title'		=> 'ACP_ADMINCONFIGPAGE_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_ADMINCONFIGPAGE',
					'auth'	=> 'ext_dmzx/adminconfigpage && acl_a_board',
					'cat'	=> ['ACP_ADMINCONFIGPAGE_TITLE']
				],
			],
		];
	}
}
