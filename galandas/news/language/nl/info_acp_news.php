<?php
/**
 *
 * Simple News Admin. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'ACP_NEWS_TITLE'				=> 'Simpel Nieuws Admin',
	'ACP_NEWS_VERSION'				=> 'Versie',
	'ACP_NEWS_ADMIN'				=> 'Beheer Simpel Nieuws Admin',
	'ACP_NEWS_CONFIG'				=> 'Configuratie',
	'ACP_NEWS_PREVIEW'				=> 'Voorbeeld van bericht Simpel Nieuws Admin',
	'ACP_NEWS_SETTINGS'				=> 'Instellingen',
	'ACP_NEWS_ENABLE'				=> 'Schakel Simpel Nieuws Admin in',
	'ACP_NEWS_ENABLE_EXPLAIN'		=> 'Indien je Simpel Nieuws Admin inschakelt zal iedereen dit kunnen bekijken, of je kan ook de groepen kiezen die Simpel Nieuws Admin mogen bekijken in de permissies -> Globale Permissies -> Groep permissies tab.',
	'ACP_NEWS_MESSAGE'				=> 'Nieuws Admin',
	'ACP_NEWS_MESSAGE_EXPLAIN'		=> 'Onderaan stel je het nieuws bericht in dat je wenst te tonen aan je gebruikers.',
	'ACP_NEWS_SETTING_SAVED'		=> 'De Simpel Nieuws Admin werd succesvol geupdate!',
	'ACP_NEWS_ADMIN_CREDITS'		=> 'Simpel Nieuws Admin Extensie door <a href="http://phpbb3world.altervista.org">Galandas</a>',
	'ACP_NEWS_DONATE'				=> '<a href="https://www.paypal.me/Galandas"><strong>Doneer</strong></a>',
	'ACP_NEWS_DONATE_EXPLAIN'		=> 'Indien je deze extensie leuk vindt, overweeg dan een donatie of koop me een pizza.',	
	'ACP_NEWS_ASPECT'				=> 'Verschijning Template',
	'ACP_NEWS_ASPECT_EXPLAIN'		=> 'Kies een template om te gebruiken, er zijn er 2 beschikbaar gemaakt. De Forabg standaard of de alternatieve Forabg2',
	'ASPECT_A'						=> 'Forabg1',
	'ASPECT_B'						=> 'Forabg2',
	// Permission groups	
	'ACL_U_AT_NEW'					=> 'Kan Simpel Nieuws Admin bekijken.',
));