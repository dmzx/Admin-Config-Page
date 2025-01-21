<?php
/**
 *
 * Admin Config Page. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2025, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace dmzx\adminconfigpage\migrations;

class install_adminconfigpage extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return [
			'\phpbb\db\migration\data\v330\v330'
		];
	}

	public function update_data()
	{
		return [
			['config.add', ['adminconfigpage_version', '1.0.0']],

			['module.add', [
				'acp',
				0,
				'ACP_ADMINCONFIGPAGE_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_ADMINCONFIGPAGE_TITLE',
				[
					'module_basename'	=> '\dmzx\adminconfigpage\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
