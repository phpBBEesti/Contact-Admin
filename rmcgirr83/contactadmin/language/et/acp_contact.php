<?php
/**
*
* Contact admin extension for the phpBB Forum Software package.
*
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CONTACT_CONFIG_SAVED'			=> 'Kontaktilehe seaded uuendatud',
	'CONTACT_ENABLE'				=> 'Luba kontakteerumise laiendus',
	'CONTACT_ENABLE_EXPLAIN'		=> 'Luba või keela laiendus globaalselt',
	'CONTACT_ACP_CONFIRM'				=> 'Luba visuaalne kinnitus',
	'CONTACT_ACP_CONFIRM_EXPLAIN'		=> 'Selle valiku lubamisel peavad kasutajad sõnumi saatmiseks sisestama visuaalse kinnituse.<br>Selle eesmärk on vältida rämpsposti. Pange tähele, et see valik on mõeldud ainult kontaktide lehele. See ei mõjuta muid visuaalse kinnituse seadeid.',
	'CONTACT_ATTACHMENTS'				=> 'Manused on lubatud',
	'CONTACT_ATTACHMENTS_EXPLAIN'		=> 'Kui seadistatud manused on foorumisse ja privaatsõnumite postitamisel lubatud.<br>Lubatud laiendused on samad kui foorumi konfiguratsioon.<br><span style="color:red;">Ei kehti kontaktmeetodi kohta “E-Posti” kohta.</span>',
	'CONTACT_CONFIRM_GUESTS'			=> 'Visuaalne kinnitus ainult külalistele',
	'CONTACT_CONFIRM_GUESTS_EXPLAIN'	=> 'Kui see valik on lubatud, kuvatakse visuaalne kinnitus ainult külalistele (kui see on lubatud).',
	'CONTACT_FOUNDER'					=> 'Võta ühendust ainult foorumi asutajaga',
	'CONTACT_FOUNDER_EXPLAIN'			=> 'Kui see on lubatud, saab e-posti või PM-teate ainult foorumi asutaja.',
	'CONTACT_GENERAL_SETTINGS'			=> 'Kontaktide üldised seaded',
	'CONTACT_MAX_ATTEMPTS'				=> 'Maksimaalne kinnituskatse',
	'CONTACT_MAX_ATTEMPTS_EXPLAIN'		=> 'Mitu korda võib kasutaja sisestada õige kinnituspildi?<br>Sisestage piiramatu katse jaoks 0.',
	'CONTACT_METHOD'					=> 'Kontaktmeetod',
	'CONTACT_METHOD_EXPLAIN'			=> 'Kuidas soovite, et kasutajad saaksid ühendust võtta.<br><span style="color:red;">Kui see on seadistatud “E-post”, siis manuseid ei kohaldata.</span>',
	'CONTACT_REASONS'					=> 'Kontaktide põhjused',
	'CONTACT_REASONS_EXPLAIN'			=> 'Sisestage kontaktide põhjused, mis on eraldatud uutega.<br>Kui te ei soovi seda funktsiooni kasutada, jätke see väli tühjaks.',
	// Bot config options
	'CONTACT_BOT_FORUM'				=> 'Võta ühendust botifoorumiga',
	'CONTACT_BOT_FORUM_EXPLAIN'		=> 'Valige kontaktfoorum, kuhu kontaktisik peaks postitama, kui kontaktmeetodiks on seatud "Foorumi postitus".',
	'CONTACT_BOT_POSTER'			=> 'Bot as Poster',
	'CONTACT_BOT_POSTER_EXPLAIN'	=> 'If set PM’s and posts will seem to come from the contact bot user chosen above based on the settings here. If “Neither” is selected then the bot is not used as the poster.  Posts and PM’s will be posted based on the information entered in the contact form.',
	'CONTACT_BOT_USER'				=> 'Võta ühendust bot kasutajaga',
	'CONTACT_BOT_USER_EXPLAIN'		=> 'Valige kasutaja, kellele sõnumid postitatakse, kui kontaktimeetodiks on seatud „Privaatsõnum” või „Foorumi postitus”.',
	'CONTACT_USERNAME_CHK'			=> 'Kontrolli kasutajanime',
	'CONTACT_USERNAME_CHK_EXPLAIN'	=> 'Kui jah, siis kontrollitakse sisestatud kasutaja nime andmebaasis olevate kasutajatega. Sarnase nime leidmisel kuvatakse kasutajale viga ja palutakse sisestada teine kasutajanimi.',
	'CONTACT_EMAIL_CHK'				=> 'Kontrolli e-posti',
	'CONTACT_EMAIL_CHK_EXPLAIN'		=> 'Kui jah, siis kontrollitakse kasutajate e-posti andmebaasis olevate e-posti aadressidega. Kui leitakse sarnane aadress, kuvatakse kasutajale viga ja palutakse sisestada teine e-posti aadress.',

	// Contact methods
	'CONTACT_METHOD_EMAIL'			=> 'E-post',
	'CONTACT_METHOD_PM'				=> 'Privaatsõnum',
	'CONTACT_METHOD_POST'			=> 'Foorumi postitus',

	// Contact posters...user bot
	'CONTACT_POST_NEITHER'			=> 'Ei',
	'CONTACT_POST_GUEST'			=> 'ainult külalised',
	'CONTACT_POST_ALL'				=> 'Igaüks',
));
