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
	'ACP_CAT_CONTACTADMIN'		=> 'Kontakteeru administratsiooniga',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Kui soovite lisada faili, sisestage allpool olevad andmed.',
	'CONTACT_BOT_ERROR'			=> 'Kontaktivormi ei saa hetkel kasutada, sest konfiguratsioonis on viga.  Foorumi asutajale on saadetud e-kiri.',
	'CONTACT_BOT_NONE'			=> 'Kasutaja %1$s üritas kasutada kontaktivormi aadressil %2$s saatmiseks %3$s, kuid ei ole administraatoreid kes lubaksid kasutajatel %3$ss. Palun sisesta Kontakt Bot seadistus administraatori juhtpaneelist %4$s ja vali “Foorumi asutaja” valik',
	'CONTACT_BOT_SUBJECT'		=> 'Kontaktilehe laienduse viga',
	'CONTACT_BOT_USER_MESSAGE'	=> 'Kasutaja %1$s üritas kasutada kontaktivormi kontakteerumiseks administraatoriga %2$s, kuid konfiguratsioonis valitud kasutaja on vale. Palun külastage foorumit %3$s ja vali kontaktisiku haldamiseks AJP-s teine kasutaja.',
	'CONTACT_BOT_FORUM_MESSAGE'	=> 'Kasutaja %1$s üritas kasutada kontaktivormi kontakteerumiseks administraatoriga %2$s, kuid konfiguratsioonis valitud foorum on vale. Palun külastage foorumit %3$s ja vali teine foorum AJP-st.',
	'CONTACT_CONFIRM'			=> 'Kinnita',
	'CONTACT_DISABLED'			=> 'Kontaktivormi ei saa hetkel kasutada, vabandame.',
	'CONTACT_MAIL_DISABLED'		=> 'Kontaktihalduse konfiguratsioonis on viga. Laiendus on määratud e-posti saatmiseks, kuid foorumi konfiguratsioon ei saa e-kirjade saatmiseks seadistada.  Palun teavitage sellest %sFoorumi administraatorit%s',
	'CONTACT_MSG_SENT'			=> 'Teie sõnum on edukalt saadetud',
	'CONTACT_NO_MSG'			=> 'Te ei sisestanud sõnumit.',
	'CONTACT_NO_SUBJ'			=> 'Te ei sisestanud pealkirja.',
	'CONTACT_REASON'			=> 'Põhjus',
	'CONTACT_TEMPLATE'			=> '[b]Nimi:[/b] %1$s' . "\n" . '[b]E-posti aadress:[/b] %2$s' . "\n" . '[b]IP:[/b] %3$s' . "\n" . '[b]Pealkiri:[/b] %4$s' . "\n" . '[b]Has entered the following message into the contact form:[/b] %5$s',
	'CONTACT_TITLE'				=> 'Kontakteeru administratsiooniga',
	'CONTACT_TOO_MANY'			=> 'Olete ületanud selle seansi kontaktide kinnitamise katsete maksimaalse arvu. Palun proovige hiljem uuesti.',

	'CONTACT_YOUR_NAME'			=> 'Teie nimi',
	'CONTACT_YOUR_NAME_EXPLAIN'	=> 'Sisestage oma nimi, et sõnumil oleks identiteet.',
	'CONTACT_YOUR_EMAIL'		=> 'Teie e-posti aadress',
	'CONTACT_YOUR_EMAIL_EXPLAIN'	=> 'Palun sisestage oma kehtiv e-posti aadress, et saaksime teiega hiljem ühendust võtta.',

	'TOO_MANY_CONTACT_TRIES'	=> 'Olete ületanud selle seansi maksimaalse arvu katseid. Palun proovige hiljem uuesti.',
	'CONTACT_NO_NAME'			=> 'Te ei sisestanud nime.',

	'RETURN_CONTACT'			=> '%sTagasi kontaktide lehele%s',
));
