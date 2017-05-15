<?php
/* +***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 2.0 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 * *********************************************************************************************************************************** */
$languageStrings = [
	'OSSMail' => 'Moja poczta',
	'OSSMail_manual' => 'Moduł pocztowy',
	'Roundcube config' => 'Konfiguracja Roundcube',
	'Uninstall' => 'Odinstaluj',
	'Cancel' => 'Anuluj',
	'Removed relationship' => 'Usunięto powiązanie',
	'Add relationship' => 'Dodano powiązanie',
	'Unread messages' => 'Nieprzeczytanych wiadomości',
	'LBL_CHECK_CONFIG' => 'Sprawdź konfigurację',
	'LBL_RC_product_name' => 'Nazwa',
	'LBL_RC_language' => 'Język (kod RFC 1766): en_US, pl_PL',
	'LBL_RC_username_domain' => 'Domena (automatycznie dodawana do loginu)',
	'LBL_RC_support_url' => 'Adres wsparcia technicznego',
	'LBL_RC_smtp_user' => 'Login do serwera SMTP ("%u" - login będzie pobierany z użytkownika zalogowanego)',
	'LBL_RC_smtp_pass' => 'Hasło do serwera SMTP ("%p" - hasło będzie pobierane z użytkownika zalogowanego)',
	'LBL_RC_smtp_port' => 'Port SMTP (domyślnie 25; 465 dla SSL; 587)',
	'LBL_RC_smtp_server' => 'Nazwa serwera SMTP',
	'LBL_RC_default_port' => 'Port używany do połączenia IMAP',
	'LBL_RC_default_host' => 'Nazwa serwera IMAP',
	'LBL_RC_debug_level' => 'Poziom debugowania (1 = log; 4 = show, 8 = trace)',
	'LBL_RC_skin_logo' => 'Logo',
	'LBL_RC_ip_check' => 'Sprawdź adres IP klienta podczas autoryzacji',
	'LBL_RC_enable_spellcheck' => 'Moduł sprawdzania pisowni',
	'LBL_RC_identities_level' => 'Poziom dostępu do tożsamości',
	'LBL_RC_auto_create_user' => 'Automatyczne tworzenie nowego użytkownika podczas logowania',
	'LBL_RC_smtp_log' => 'Zapisuj logii dla wysyłanych wiadomości',
	'LBL_RC_mail_pagesize' => 'Ilość wiadomości w widoku listy',
	'LBL_RC_addressbook_pagesize' => 'Ilość kontaktów w widoku listy',
	'LBL_RC_prefer_html' => 'Czy wyświetlać wiadomości w formacie HTML',
	'LBL_RC_preview_pane' => 'Jeśli okno podglądu jest włączone',
	'LBL_RC_htmleditor' => 'Wiadomości w formacie HTML',
	'LBL_RC_draft_autosave' => 'Automatyczy zapis tworzonej wiadomość co: (sekundy)',
	'LBL_RC_mdn_requests' => 'Zachowanie jeśli wiadomość żąda powiadomienia o dostarczeniu',
	'LBL_RC_session_lifetime' => 'Żywotność sesji w minutach',
	'LBL_RC_sendmail_delay' => 'Opóźnienie podczas wysyłania wiadomości',
	'LBL_RC_date_long' => 'Format daty',
	'LBL_RC_validate_cert' => 'Czy walidować certyfikat',
	'LBL_RC_imap_open_add_connection_type' => 'Dodaj typ i protokół do adresu',
	'identities_level_0' => 'wiele tożsamości z możliwością edycji wszystkich parametrów',
	'identities_level_1' => 'wiele tożsamości z możliwością edycji wszystkich parametrów ale nie adresu e-mail',
	'identities_level_2' => 'jedna tożsamość z możliwością edycji wszystkich parametrów',
	'identities_level_3' => 'jedna tożsamość z możliwością edycji wszystkich parametrów ale nie adresu e-mail',
	'identities_level_4' => 'jedna tożsamość z możliwością edycji tylko podpisu',
	'htmleditor_0' => 'nigdy',
	'htmleditor_1' => 'zawsze',
	'htmleditor_2' => 'w odpowiedzi wiadomości HTML',
	'htmleditor_3' => 'w przekazywaniu lub odpowiedzi wiadomości HTML',
	'mdn_requests_0' => 'pytaj użytkownika',
	'mdn_requests_1' => 'wysłać automatycznie',
	'mdn_requests_2' => 'ignorować',
	'mdn_requests_3' => 'wysłać automatycznie, jeżeli nadawca jest w książce adresowej, w przeciwnym wypadku pytać użytkownika',
	'mdn_requests_4' => 'wysłać automatycznie, jeżeli nadawca jest w książce adresowej, w przeciwnym razie ignorować',
	'LBL_SAVE' => 'Zapisz konfigurację',
	'Mails List' => 'Najnowsze maile',
	'LBL_NOMAILSLIST' => 'Brak wiadomości mailowych',
	'To' => 'Do',
	'LBL_MAIL_NOT_FOUND_IN_DB' => 'Nie znaleziono maila w bazie.',
	'LBL_IMPORT_MAIL_MANUALLY' => 'Zaimportuj maila ręcznie',
	'LBL_RELATIONS' => 'Firmy/Kontakty',
	'LBL_PROCESS' => 'Procesy',
	'LBL_SUB_PROCESS' => 'Podprocesy',
	'LBL_REMOVE_RELATION' => 'Usuń powiązanie z',
	'LBL_ADD_RECORD' => 'Utwórz rekord',
	'LBL_SELECT_RECORD' => 'Powiąż z istniejącym rekordem',
	'LBL_ADD_CALENDAR' => 'Dodaj wydarzenie',
	'LBL_ADD_MODCOMMENTS' => 'Dodaj komentarz',
	'LBL_ADD_HELPDESK' => 'Dodaj zgłoszenie',
	'LBL_ADD_PRODUCTS' => 'Dodaj produkt',
	'LBL_ADD_SERVICES' => 'Dodaj usługę',
	'LBL_SEND_MASS_EMAIL' => 'Masowe wysyłanie wiadomości email',
	'LBL_NUMBER_OF_FOUND_MAIL_ADDRESSES' => 'Ilość znalezionych adresów e-mail',
	'LBL_NUMBER_OF_SELECTED_RECORDS' => 'Ilość zaznaczonych rekordów',
	'LBL_MINIMIZE_BAR' => 'Zwijanie i rozwijanie paska',
	//BTN
	'LBL_CREATEMAIL' => 'Wyślij maila',
];
$jsLanguageStrings = [
	'NoFindEmailInRecord' => 'Rekord nie posiada adresu email',
	'AddFindEmailInRecord' => 'Pobrano email',
	'StartedDownloadingEmail' => 'Rozpoczęto pobieranie maila',
];
