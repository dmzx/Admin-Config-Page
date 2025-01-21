<?php
/**
 *
 * Admin Config Page. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2025, dmzx, https://www.dmzx-web.net
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'NO_CONFIG_TITLE'					=> 'No params',
	'NO_CONFIG_TEXT'					=> 'No params to display',

	'CONFIG_PURPOSE'					=> 'Purpose',
	'CONFIG_NAME'						=> 'Parameter',
	'CONFIG_VALUE'						=> 'Value',
	'IS_DYNAMIC'						=> 'Is dynamic',
	'CONFIG_CHANGED_SUCCESS'			=> 'Configuration values have been successfully changed',
	'CLICK_HERE_TO_CHANGE'				=> 'Click here to change the configuration (changes will take effect <b>immediately!</b>)',
	'TOTAL_ITEMS'						=> 'Total',
	'CRON_TASKS'						=> 'Cron tasks',
	'ATTACHMENTS'						=> 'Attachments',
	'AVATARS'							=> 'Avatars',
	'BOARD_CONFIG'						=> 'Board config',
	'BOARD_FUNCTIONS'					=> 'Board functions',
	'PM'								=> 'Private messages',
	'MESSAGES'							=> 'Messages',
	'SIGNATURES'						=> 'Signatures',
	'FEED'								=> 'Feed',
	'USER_REGISTER'						=> 'Users',
	'ANTI_SPAM'							=> 'Antispam',
	'AUTH'								=> 'Auth',
	'EMAIL'								=> 'Email',
	'CONFIG_JABBER'						=> 'Jabber',
	'COOKIES'							=> 'Cookies',
	'SERVER'							=> 'Server configuration',
	'SECURITY'							=> 'Security',
	'LOAD'								=> 'Load',
	'SEARCH'							=> 'Search',
	'MISC'								=> 'Misc',
	'REPARSING'							=> 'Reparsing',
	'CONFIG_LIST'						=> 'Configuration parameters',
	'CONFIG_LIST_EXPLAIN'				=> 'Here you can view and change the configuration .',

	'ACP_ADMINCONFIGPAGE_SETTING_SAVED'	=> 'Settings have been saved successfully!',
	'ADMINCONFIGPAGE_NOACCESS'			=> 'You don’t have access to this section',

	'cf_config_name' => [
		'active_sessions'					=> 'Restrict session',
		'allow_attachments'					=> 'Allow attachments',
		'allow_autologin'					=> 'Allow "Remember Me" logins',
		'allow_avatar'						=> 'Enable avatars',
		'allow_avatar_gravatar'				=> 'Enable gravatar avatars',
		'allow_avatar_local'				=> 'Enable gallery avatars',
		'allow_avatar_remote'				=> 'Enable remote avatars',
		'allow_avatar_remote_upload'		=> 'Enable remote avatar uploading',
		'allow_avatar_upload'				=> 'Enable avatar uploading',
		'allow_bbcode'						=> 'Allow BBCode',
		'allow_birthdays'					=> 'Allow birthdays',
		'allow_bookmarks'					=> 'Allow bookmarks',
		'allow_cdn'							=> 'Allow usage of third party content delivery networks',
		'allow_emailreuse'					=> 'Allow email address re-use',
		'allow_forum_notify'				=> 'Allow subscribing to forums',
		'allow_live_searches'				=> 'Allow live searches',
		'allow_mass_pm'						=> 'Allow sending of private messages to multiple users and groups',
		'allow_name_chars'					=> 'Limit username chars',
		'allow_namechange'					=> 'Allow username changes',
		'allow_nocensors'					=> 'Allow disabling of word censoring',
		'allow_password_reset'				=> 'Allow password reset ("Forgot Password")',
		'allow_pm_attach'					=> 'Allow attachments in private messages',
		'allow_pm_report'					=> 'Allow users to report private messages',
		'allow_post_flash'					=> 'Allow use of <code>[FLASH]</code> BBCode tag in posts',
		'allow_post_links'					=> 'Allow links in posts/private messages',
		'allow_privmsg'						=> 'Allow private messages',
		'allow_quick_reply'					=> 'Allow quick reply',
		'allow_sig'							=> 'Allow signatures',
		'allow_sig_bbcode'					=> 'Allow BBCode',
		'allow_sig_flash'					=> 'Allow use of <code>[FLASH]</code> BBCode tag in user signatures',
		'allow_sig_img'						=> 'Allow use of <code>[IMG]</code> BBCode tag in user signatures',
		'allow_sig_links'					=> 'Allow use of links in user signatures',
		'allow_sig_pm'						=> 'Allow signature in private messages',
		'allow_sig_smilies'					=> 'Allow use of smilies in user signatures',
		'allow_smilies'						=> 'Allow smilies',
		'allow_topic_notify'				=> 'Allow subscribing to topics',
		'assets_version'					=> 'Counter download new css and javascripts on enable/disable/remove data of extensions',
		'attachment_quota'					=> 'Total attachment quota',
		'auth_bbcode_pm'					=> 'Allow BBCode in private messages',
		'auth_flash_pm'						=> 'Allow use of <code>[FLASH]</code> BBCode tag',
		'auth_img_pm'						=> 'Allow use of <code>[IMG]</code> BBCode tag',
		'auth_method'						=> 'Select an authentication method',
		'auth_oauth_bitly_key'				=> 'Key Bitly',
		'auth_oauth_bitly_secret'			=> 'Secret code Bitly',
		'auth_oauth_facebook_key'			=> 'Key Facebook',
		'auth_oauth_facebook_secret'		=> 'Secret code Facebook',
		'auth_oauth_google_key'				=> 'Key Google',
		'auth_oauth_google_secret'			=> 'Secret code Google',
		'auth_smilies_pm'					=> 'Allow smilies in private messages',
		'avatar_filesize'					=> 'Maximum avatar file size',
		'avatar_gallery_path'				=> 'Avatar gallery path',
		'avatar_max_height'					=> 'Maximum avatar height (in pixels)',
		'avatar_max_width'					=> 'Maximum avatar width (in pixels)',
		'avatar_min_height'					=> 'Minimum avatar height (in pixels)',
		'avatar_min_width'					=> 'Minimum avatar width (in pixels)',
		'avatar_path'						=> 'Avatar storage path',
		'avatar_salt'						=> 'Avatar salt for filenames',
		'board_contact'						=> 'Contact email address',
		'board_contact_name'				=> 'Contact name',
		'board_disable'						=> 'Disable board',
		'board_disable_msg'					=> '',
		'board_email'						=> '',
		'board_email_form'					=> 'Users send email via board',
		'board_email_sig'					=> 'Email signature',
		'board_hide_emails'					=> '',
		'board_index_text'					=> '',
		'board_startdate'					=> '',
		'board_timezone'					=> '',
		'browser_check'						=> '',
		'bump_interval'						=> '',
		'bump_type'							=> '',
		'cache_gc'							=> '',
		'cache_last_gc'						=> '',
		'captcha_gd'						=> 'GD image',
		'captcha_gd_3d_noise'				=> 'Add 3D-noise objects',
		'captcha_gd_fonts'					=> 'Use different fonts',
		'captcha_gd_foreground_noise'		=> 'Foreground noise',
		'captcha_gd_wave'					=> 'Wave distortion',
		'captcha_gd_x_grid'					=> 'Background noise x-axis',
		'captcha_gd_y_grid'					=> 'Background noise y-axis',
		'captcha_plugin'					=> 'Installed plugins',
		'check_attachment_content'			=> '',
		'check_dnsbl'						=> '',
		'chg_passforce'						=> '',
		'confirm_refresh'					=> 'Allow users to refresh the anti-spambot task',
		'contact_admin_form_enable'			=> '',
		'cookie_domain'						=> 'Cookie domain',
		'cookie_name'						=> 'Cookie name',
		'cookie_path'						=> 'Cookie path',
		'cookie_secure'						=> 'Cookie secure',
		'cookie_notice'						=> '',
		'coppa_enable'						=> '',
		'coppa_fax'							=> 'COPPA fax number',
		'coppa_mail'						=> 'COPPA mailing address',
		'cron_lock'							=> '',
		'database_gc'						=> '',
		'database_last_gc'					=> '',
		'dbms_version'						=> '',
		'default_lang'						=> '',
		'default_style'						=> 'Default_style',
		'default_dateformat'				=> 'Date format',
		'delete_time'						=> '',
		'display_last_edited'				=> '',
		'display_last_subject'				=> '',
		'display_order'						=> '',
		'edit_time'							=> '',
		'email_check_mx'					=> '',
		'email_enable'						=> '',
		'email_function_name'				=> '',
		'email_force_sender'				=> 'email_force_sender',
		'email_max_chunk_size'				=> '',
		'email_package_size'				=> '',
		'enable_accurate_pm_button'			=> 'Enable accurate PM indicator in topic pages',
		'enable_confirm'					=> '',
		'enable_mod_rewrite'				=> '',
		'enable_pm_icons'					=> '',
		'enable_post_confirm'				=> '',
		'enable_update_hashes'				=> 'enable_update_hashes',
		'extension_force_unstable'			=> '',
		'feed_enable'						=> 'Enable feeds',
		'feed_forum'						=> 'Enable per-forum feeds',
		'feed_http_auth'					=> '',
		'feed_item_statistics'				=> '',
		'feed_limit_post'					=> '',
		'feed_limit_topic'					=> '',
		'feed_overall'						=> '',
		'feed_overall_forums'				=> '',
		'feed_topic'						=> 'Enable per-topic feeds',
		'feed_topics_active'				=> '',
		'feed_topics_new'					=> '',
		'flood_interval'					=> 'Flood interval',
		'force_server_vars'					=> '',
		'form_token_lifetime'				=> '',
		'form_token_mintime'				=> '',
		'form_token_sid_guests'				=> '',
		'forward_pm'						=> '',
		'forwarded_for_check'				=> '',
		'full_folder_action'				=> '',
		'fulltext_mysql_max_word_len'		=> '',
		'fulltext_mysql_min_word_len'		=> '',
		'fulltext_native_common_thres'		=> '',
		'fulltext_native_load_upd'			=> '',
		'fulltext_native_max_chars'			=> '',
		'fulltext_native_min_chars'			=> '',
		'fulltext_postgres_max_word_len'	=> '',
		'fulltext_postgres_min_word_len'	=> '',
		'fulltext_postgres_ts_name'			=> '',
		'fulltext_sphinx_id'				=> 'ID Sphinx Fulltext',
		'fulltext_sphinx_data_path'			=> '',
		'fulltext_sphinx_indexer_mem_limit'	=> '',
		'fulltext_sphinx_host'				=> '',
		'fulltext_sphinx_port'				=> '',
		'fulltext_sphinx_stopwords'			=> '',
		'gzip_compress'						=> '',
		'help_send_statistics'				=> '',
		'help_send_statistics_time'			=> '',
		'hot_threshold'						=> '',
		'icons_path'						=> '',
		'img_create_thumbnail'				=> '',
		'img_display_inlined'				=> '',
		'img_imagick'						=> 'Imagick',
		'img_link_height'					=> '',
		'img_link_width'					=> '',
		'img_max_height'					=> '',
		'img_max_thumb_width'				=> '',
		'img_min_thumb_filesize'			=> '',
		'img_max_width'						=> '',
		'ip_check'							=> '',
		'ip_login_limit_max'				=> '',
		'ip_login_limit_time'				=> '',
		'ip_login_limit_use_forwarded'		=> '',
		'jab_enable'						=> '',
		'jab_host'							=> '',
		'jab_package_size'					=> '',
		'jab_password'						=> '',
		'jab_port'							=> '',
		'jab_use_ssl'						=> '',
		'jab_username'						=> '',
		'jab_allow_self_signed'				=> '',
		'jab_verify_peer'					=> '',
		'jab_verify_peer_name'				=> '',
		'last_queue_run'					=> '',
		'ldap_base_dn' 						=> '',
		'ldap_email'						=> '',
		'ldap_password'						=> '',
		'ldap_port'							=> '',
		'ldap_server'						=> '',
		'ldap_uid'							=> '',
		'ldap_user'							=> '',
		'ldap_user_filter'					=> '',
		'legend_sort_groupname'				=> '',
		'limit_load'						=> '',
		'limit_search_load'					=> '',
		'load_anon_lastread'				=> '',
		'load_birthdays'					=> '',
		'load_cpf_memberlist'				=> '',
		'load_cpf_pm'						=> '',
		'load_cpf_viewprofile'				=> '',
		'load_cpf_viewtopic'				=> '',
		'load_db_lastread'					=> '',
		'load_db_track'						=> '',
		'load_jquery_url'					=> '',
		'load_jumpbox'						=> '',
		'load_moderators'					=> '',
		'load_notifications'				=> '',
		'load_online'						=> '',
		'load_online_guests'				=> '',
		'load_online_time'					=> '',
		'load_onlinetrack'					=> '',
		'load_search'						=> '',
		'load_tplcompile'					=> '',
		'load_unreads_search'				=> '',
		'load_user_activity'				=> '',
		'load_user_activity_limit'			=> '',
		'max_attachments'					=> '',
		'max_attachments_pm'				=> '',
		'max_autologin_time'				=> '',
		'max_filesize'						=> '',
		'max_filesize_pm'					=> '',
		'max_login_attempts'				=> '',
		'max_name_chars'					=> '',
		'max_num_search_keywords'			=> '',
		'max_pass_chars'					=> '',
		'max_poll_options'					=> '',
		'max_post_chars'					=> '',
		'max_post_font_size'				=> '',
		'max_post_img_height'				=> '',
		'max_post_img_width'				=> '',
		'max_post_smilies'					=> '',
		'max_post_urls'						=> '',
		'max_quote_depth'					=> '',
		'max_reg_attempts'					=> '',
		'max_sig_chars'						=> '',
		'max_sig_font_size'					=> '',
		'max_sig_img_height'				=> '',
		'max_sig_img_width'					=> '',
		'max_sig_smilies'					=> '',
		'max_sig_urls'						=> '',
		'mime_triggers'						=> '',
		'min_name_chars'					=> '',
		'min_pass_chars'					=> '',
		'min_post_chars'					=> '',
		'min_search_author_chars'			=> '',
		'new_member_group_default'			=> '',
		'new_member_post_limit'				=> '',
		'newest_user_colour'				=> '',
		'newest_user_id'					=> '',
		'newest_username'					=> '',
		'num_files'							=> '',
		'num_posts'							=> '',
		'num_topics'						=> '',
		'num_users'							=> '',
		'override_user_style'				=> '',
		'pass_complex'						=> '',
		'plupload_last_gc'					=> '',
		'plupload_salt'						=> '',
		'pm_edit_time'						=> '',
		'pm_max_boxes'						=> '',
		'pm_max_msgs'						=> '',
		'pm_max_recipients'					=> '',
		'posts_per_page'					=> '',
		'print_pm'							=> '',
		'questionnaire_unique_id'			=> '',
		'queue_interval'					=> '',
		'rand_seed'							=> '',
		'rand_seed_last_update'				=> '',
		'ranks_path'						=> '',
		'read_notification_expire_days'		=> '',
		'read_notification_gc'				=> '',
		'read_notification_last_gc'			=> '',
		'record_online_date'				=> '',
		'record_online_users'				=> '',
		'referer_validation'				=> '',
		'require_activation'				=> '',
		'script_path'						=> '',
		'search_anonymous_interval'			=> '',
		'search_block_size'					=> '',
		'search_gc'							=> '',
		'search_indexing_state'				=> '',
		'search_interval'					=> '',
		'search_last_gc'					=> '',
		'search_store_results'				=> '',
		'search_type'						=> '',
		'secure_allow_deny'					=> '',
		'secure_allow_empty_referer'		=> '',
		'secure_downloads'					=> '',
		'server_name'						=> '',
		'server_port'						=> '',
		'server_protocol'					=> '',
		'session_gc'						=> '',
		'session_last_gc'					=> '',
		'session_length'					=> '',
		'site_desc'							=> '',
		'site_home_text'					=> 'Main website text',
		'site_home_url'						=> 'Main website URL',
		'sitename'							=> 'Site name',
		'smilies_path'						=> '',
		'smilies_per_page'					=> '',
		'smtp_auth_method'					=> 'Authentication method for SMTP',
		'smtp_delivery'						=> 'Use SMTP server for email',
		'smtp_host'							=> 'SMTP server address',
		'smtp_password'						=> 'SMTP password',
		'smtp_port'							=> 'SMTP server port',
		'smtp_username'						=> 'SMTP username',
		'smtp_allow_self_signed'			=> '',
		'smtp_verify_peer'					=> '',
		'smtp_verify_peer_name'				=> '',
		'teampage_forums'					=> '',
		'teampage_memberships'				=> '',
		'topics_per_page'					=> '',
		'tpl_allow_php'						=> '',
		'upload_dir_size'					=> '',
		'upload_icons_path'					=> '',
		'upload_path'						=> '',
		'update_hashes_last_cron'			=> '',
		'update_hashes_lock'				=> '',
		'use_system_cron'					=> '',
		'version'							=> 'Version phpBB',
		'warnings_expire_days'				=> '',
		'warnings_gc'						=> '',
		'warnings_last_gc'					=> '',
		'remote_upload_verify'				=> '',
		'allow_board_notifications' 		=> 'Allow board notifications',
		'allowed_schemes_links'				=> '',

		'reparse_lock'								=> '',
		'text_reparser.pm_text_cron_interval'		=> 'PM text croninterval',
		'text_reparser.pm_text_last_cron'			=> ' ',
		'text_reparser.poll_option_cron_interval'	=> ' ',
		'text_reparser.poll_option_last_cron'		=> ' ',
		'text_reparser.poll_title_cron_interval'	=> ' ',
		'text_reparser.poll_title_last_cron'		=> ' ',
		'text_reparser.post_text_cron_interval'		=> ' ',
		'text_reparser.post_text_last_cron'			=> ' ',
		'text_reparser.user_signature_cron_interval'=> ' ',
		'text_reparser.user_signature_last_cron'	=> ' ',

		'img_strip_metadata'						=> ' ',
		'img_quality'								=> ' ',

		'recaptcha_v3_key'							=> 'Site key',
		'recaptcha_v3_secret'						=> 'Secret key',
		'recaptcha_v3_domain'						=> 'Domain',
		'recaptcha_v3_method'						=> 'Method',
		'recaptcha_v3_threshold_default'			=> '',
		'recaptcha_v3_threshold_register'			=> '',
		'recaptcha_v3_threshold_login'				=> '',
		'recaptcha_v3_threshold_post'				=> ' ',
		'recaptcha_v3_threshold_report'				=> ' ',

		'default_search_return_chars'				=> ' ',

		'feed_limit'								=> ' ',
		'feed_overall_forums_limit'					=> ' ',
		'feed_overall_topics'						=> ' ',
		'feed_overall_topics_limit'					=> ' ',

		'auth_oauth_twitter_key'					=> ' ',
		'auth_oauth_twitter_secret'					=> ' ',

		'load_font_awesome_url'						=> ' ',
		'display_unapproved_posts'					=> ' ',
		'queue_trigger_posts'						=> 'Not used in phpBB versions higher than 3.0.5',
		'enable_queue_trigger'						=> 'Not used in phpBB versions higher than 3.0.5',
		'UNKNOWN'									=> '<span style="color:#FF5D00"><em>Purpose unknown, parameter is not included in the standard set for phpBB3.2.x or 3.3.x</em></span>',
	],
));