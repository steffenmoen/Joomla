<?php
class JConfig {
	public $offline = '0';
	public $offline_message = 'Dette nettstedet er nede for vedlikehold.<br /> Velkommen tilbake litt senere.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'byttes_sidenavn';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $dbtype = 'mysqli';
	public $host = 'centos1086.local.steffenmoen.no';
	public $user = 'joomlauser';
	public $password = 'admin';
	public $db = 'joomladb';
	public $dbprefix = 'mzuax_';
	public $live_site = '';
	public $secret = '0lMJLq4ABpFxK9nq';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $mailonline = '1';
	public $mailer = 'mail';
	public $mailfrom = 'byttes@1481.no';
	public $fromname = 'byttes_sidenavn';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $cache_platformprefix = '0';
	public $MetaDesc = 'byttes_metatekst';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $feed_email = 'none';
	public $log_path = '/var/www/html/joomla/logs';
	public $tmp_path = '/var/www/html/joomla/tmp';
	public $lifetime = '15';
	public $session_handler = 'database';
}