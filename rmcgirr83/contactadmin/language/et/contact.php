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
	'CONTACT_BOT_ERROR'			=> 'You can’t use the contact form at the moment because there is an error in the configuration.  An email has been sent to the founder.',
	'CONTACT_BOT_NONE'			=> 'The user %1$s tried to use the Contact Admin Extension at %2$s to send a %3$s, but there are no Administrators that allow %3$ss by users. Please enter the Contact Bot Configuration in the Admin Panel for the forum %4$s and choose the “Board Founder” option',
	'CONTACT_BOT_SUBJECT'		=> 'Kontaktilehe laienduse viga',
	'CONTACT_BOT_USER_MESSAGE'	=> 'The user %1$s tried to use the Contact Admin extension at %2$s, but the user selected in the configuration is incorrect. Please visit the forum %3$s and choose a different user in the ACP for the Contact Administration.',
	'CONTACT_BOT_FORUM_MESSAGE'	=> 'The user %1$s tried to use the Contact Admin extension at %2$s, but the forum selected in the configuration is incorrect. Please visit the forum %3$s and choose a different forum in the ACP for the Contact Administration.',
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
