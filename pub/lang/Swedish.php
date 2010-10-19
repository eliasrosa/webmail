<?php
// Translation: Peter Strömblad, http://webbhotell.praktit.se
// Revision: 2007-10-31,2008-04-29
define('PROC_ERROR_ACCT_CREATE', 'Ett fel uppstod vid skapandet av kontot');
define('PROC_WRONG_ACCT_PWD', 'Fel lösenord');
define('PROC_CANT_LOG_NONDEF', 'Kan ej logga in på annat än default konto');
define('PROC_CANT_INS_NEW_FILTER', 'Kan ej infoga nytt filter');
define('PROC_FOLDER_EXIST', 'Mapp finns redan');
define('PROC_CANT_CREATE_FLD', 'Kan ej skapa mapp');
define('PROC_CANT_INS_NEW_GROUP', 'Kan ej skapa ny grupp');
define('PROC_CANT_INS_NEW_CONT', 'Kan ej infoga ny kontakt');
define('PROC_CANT_INS_NEW_CONTS', 'Kan ej infoga nya kontakter');
define('PROC_CANT_ADD_NEW_CONT_TO_GRP', 'Kan ej skapa nya kontakt/er i grupp');
define('PROC_ERROR_ACCT_UPDATE', 'Ett fel uppstod vid uppdatering av kontot');
define('PROC_CANT_UPDATE_CONT_SETTINGS', 'Kunde ej uppdatera kontakts inställningar');
define('PROC_CANT_GET_SETTINGS', 'Kunde ej hämta inställningar');
define('PROC_CANT_UPDATE_ACCT', 'Kunde ej uppdatera kontot');
define('PROC_ERROR_DEL_FLD', 'Ett fel uppstod vid radering av mapp');
define('PROC_CANT_UPDATE_CONT', 'Kunde ej uppdatera kontakt');
define('PROC_CANT_GET_FLDS', 'Kunde ej hämta mappstruktur');
define('PROC_CANT_GET_MSG_LIST', 'Kunde ej hämta meddelandelista');
define('PROC_MSG_HAS_DELETED', 'Detta meddelande har redan raderats från e-postservern');
define('PROC_CANT_LOAD_CONT_SETTINGS', 'Kan ej hämta kontakts inställningar');
define('PROC_CANT_LOAD_SIGNATURE', 'Kan ej hämta kontosignatur');
define('PROC_CANT_GET_CONT_FROM_DB', 'Kan ej hämta kontakt från databas');
define('PROC_CANT_GET_CONTS_FROM_DB', 'Kan ej hämta kontakter från databas');
define('PROC_CANT_DEL_ACCT_BY_ID', 'Kan ej radera konto med ID');
define('PROC_CANT_DEL_FILTER_BY_ID', 'Kan ej radera filter med id');
define('PROC_CANT_DEL_CONT_GROUPS', 'Kan ej radera kontakt/er och/eller grupper');
define('PROC_WRONG_ACCT_ACCESS', 'Ett intrångsförsök mot annans konto upptäcktes.');
define('PROC_SESSION_ERROR', 'Föregående session avbröts pga tidsgräns.');

define('MailBoxIsFull', 'Brevlådan är full');
define('WebMailException', 'WebbMail undantagsfel uppstod');
define('InvalidUid', 'Ogiltigt meddelande UID (unik identifierare)');
define('CantCreateContactGroup', 'Kan ej skapa kontaktgrupp');
define('CantCreateUser', 'Kan ej skapa användare');
define('CantCreateAccount', 'Kan ej skapa konto');
define('SessionIsEmpty', 'Sessionen är tom');
define('FileIsTooBig', 'Filen är för stor');

define('PROC_CANT_MARK_ALL_MSG_READ', 'Kan ej markera alla meddelanden som lästa');
define('PROC_CANT_MARK_ALL_MSG_UNREAD', 'Kan ej markera alla meddelanden som ej lästa');
define('PROC_CANT_PURGE_MSGS', 'Kan ej radera meddelande/n');
define('PROC_CANT_DEL_MSGS', 'Kan ej ta bort meddelande/n');
define('PROC_CANT_UNDEL_MSGS', 'Kan ej återta meddelande/n');
define('PROC_CANT_MARK_MSGS_READ', 'Kan ej markera meddelande/n som lästa');
define('PROC_CANT_MARK_MSGS_UNREAD', 'Kan ej markera meddelande/n som olästa');
define('PROC_CANT_SET_MSG_FLAGS', 'Kan ej sätta meddelandeflagga');
define('PROC_CANT_REMOVE_MSG_FLAGS', 'Kan ej ta bort meddelandeflagga');
define('PROC_CANT_CHANGE_MSG_FLD', 'Kan ej ändra meddelandemapp');
define('PROC_CANT_SEND_MSG', 'kan ej skicka meddelande.');
define('PROC_CANT_SAVE_MSG', 'Kan ej spara meddelande');
define('PROC_CANT_GET_ACCT_LIST', 'Kan ej hämta kontoförteckning');
define('PROC_CANT_GET_FILTER_LIST', 'Kan ej hämta filterförteckning');

define('PROC_CANT_LEAVE_BLANK', 'Fält med * måste fyllas i');

define('PROC_CANT_UPD_FLD', 'Kan ej uppdatera mapp');
define('PROC_CANT_UPD_FILTER', 'Kan ej uppdatera filter');

define('ACCT_CANT_ADD_DEF_ACCT', 'Detta konto kan ej läggas till eftersom det används som standardkonto av annan användare.');
define('ACCT_CANT_UPD_TO_DEF_ACCT', 'Detta kontos status kan ej ändras till standardkonto.');
define('ACCT_CANT_CREATE_IMAP_ACCT', 'Kan ej skapa nytt konto (IMAP4 förbindelsefel)');
define('ACCT_CANT_DEL_LAST_DEF_ACCT', 'Kan ej radera standardkonto');

define('LANG_LoginInfo', 'Login information');
define('LANG_Email', 'Epostadress');
define('LANG_Login', 'Login');
define('LANG_Password', 'Lösenord');
define('LANG_IncServer', 'Inkommande Epostserver');
define('LANG_PopProtocol', 'POP3');
define('LANG_ImapProtocol', 'IMAP4');
define('LANG_IncPort', 'Port');
define('LANG_OutServer', 'Utgående Epostserver (SMTP)');
define('LANG_OutPort', 'Port');
define('LANG_UseSmtpAuth', 'Använd SMTP autentisering');
define('LANG_SignMe', 'Logga in mig automatiskt');
define('LANG_Enter', 'Enter');

// interface strings

define('JS_LANG_TitleLogin', 'Login');
define('JS_LANG_TitleMessagesListView', 'Meddelandelista');
define('JS_LANG_TitleMessagesList', 'Meddelandelista');
define('JS_LANG_TitleViewMessage', 'Visa Meddelande');
define('JS_LANG_TitleNewMessage', 'Nytt Meddelande');
define('JS_LANG_TitleSettings', 'Inställningar');
define('JS_LANG_TitleContacts', 'Kontakter');

define('JS_LANG_StandardLogin', 'Standard Inloggning');
define('JS_LANG_AdvancedLogin', 'Avancerad Inloggning');

define('JS_LANG_InfoWebMailLoading', 'Vänligen vänta, laddar&hellip;');
define('JS_LANG_Loading', 'Laddar&hellip;');
define('JS_LANG_InfoMessagesLoad', 'Vänligen vänta, laddar meddelandelista');
define('JS_LANG_InfoEmptyFolder', 'Mappen är tom');
define('JS_LANG_InfoPageLoading', 'Sidan laddas&hellip;');
define('JS_LANG_InfoSendMessage', 'Meddelandet har skickats');
define('JS_LANG_InfoSaveMessage', 'Meddelandet har sparats');
define('JS_LANG_InfoHaveImported', 'Du har importerat');
define('JS_LANG_InfoNewContacts', 'nya kontakt/er i din kontaktlista.');
define('JS_LANG_InfoToDelete', 'För att radera ');
define('JS_LANG_InfoDeleteContent', 'mappen måste du tömma dess innehåll först.');
define('JS_LANG_InfoDeleteNotEmptyFolders', 'Att radera mappar med innehåll tillåts ej. För att radera omarkerade mappar, töm deras innehåll först.');
define('JS_LANG_InfoRequiredFields', '* fält som krävs');

define('JS_LANG_ConfirmAreYouSure', 'Är du säker?');
define('JS_LANG_ConfirmDirectModeAreYouSure', 'Valda meddelande/n kommer att raderas permanent! Är du säker?');
define('JS_LANG_ConfirmSaveSettings', 'Inställningarna sparades ej. Välj OK för att spara.');
define('JS_LANG_ConfirmSaveContactsSettings', 'Kontaktinställningarna sparades ej. Välj OK för att spara.');
define('JS_LANG_ConfirmSaveAcctProp', 'Kontots inställningar sparades ej. Välj OK för att spara.');
define('JS_LANG_ConfirmSaveFilter', 'Filterinställningarna sparades ej. Välj OK för att spara.');
define('JS_LANG_ConfirmSaveSignature', 'Signaturen sparades ej. Välj OK för att spara.');
define('JS_LANG_ConfirmSavefolders', 'Mappen/arna sparades ej. Välj OK för att spara.');
define('JS_LANG_ConfirmHtmlToPlain', 'Varning: Genom att ändra meddelandeformatet från HTML till text, så förloras nuvarande utformning. Välj OK för att verkställa.');
define('JS_LANG_ConfirmAddFolder', 'Före mapp kan läggas till är det nödvändigt att verkställa förändringar. Välj OK för att spara.');
define('JS_LANG_ConfirmEmptySubject', 'Titelraden är tom. Vill du fortsätta?');

define('JS_LANG_WarningEmailBlank', 'Avsändarfältet får ej vara tomt');
define('JS_LANG_WarningLoginBlank', 'Inloggningsfältet får ej vara tomt');
define('JS_LANG_WarningToBlank', 'Till-fältet får ej vara tomt');
define('JS_LANG_WarningServerPortBlank', 'POP3 och SMTP/Port fälten får ej vara tomma');
define('JS_LANG_WarningEmptySearchLine', 'Söksträng tom. Vänligen fyll i söksträng');
define('JS_LANG_WarningMarkListItem', 'Vänligen markera minst en i listan');
define('JS_LANG_WarningFolderMove', 'Mappen kan ej flyttas pga nivå');
define('JS_LANG_WarningContactNotComplete', 'Fyll i namn eller epostadress');
define('JS_LANG_WarningGroupNotComplete', 'Fyll i gruppens namn');

define('JS_LANG_WarningEmailFieldBlank', 'Fältet Epost kan ej vara tomt');
define('JS_LANG_WarningIncServerBlank', 'Fältet POP3(IMAP4) Server får ej vara tomt');
define('JS_LANG_WarningIncPortBlank', 'Fältet POP3(IMAP4) Server Port får ej vara tomt');
define('JS_LANG_WarningIncLoginBlank', 'Fältet POP3(IMAP4) inloggning kan ej vara tomt');
define('JS_LANG_WarningIncPortNumber', 'Fältet POP3(IMAP4) Server Port måste vara positivt heltal.');
define('JS_LANG_DefaultIncPortNumber', 'Standardport för POP3(IMAP4) är 110(143).');
define('JS_LANG_WarningIncPassBlank', 'Fältet POP3(IMAP4) lösenord får ej vara tomt.');
define('JS_LANG_WarningOutPortBlank', 'Fältet SMTP Server Port får ej vara blankt.');
define('JS_LANG_WarningOutPortNumber', 'Fältet SMTP Server Port måste vara positivt heltal.');
define('JS_LANG_WarningCorrectEmail', 'Du måste ange korrekt epostadress.');
define('JS_LANG_DefaultOutPortNumber', 'Standardport för SMTP är 25.');

define('JS_LANG_WarningCsvExtention', 'Filändelsen ska vara .csv');
define('JS_LANG_WarningImportFileType', 'Välj det program som du vill kopiera dina kontakter från.');
define('JS_LANG_WarningEmptyImportFile', 'välj en fil genom att klicka på sök-knappen');

define('JS_LANG_WarningContactsPerPage', 'Kontakter per sida ska vara ett positivt heltal');
define('JS_LANG_WarningMessagesPerPage', 'Meddelanden per sida ska vara ett positivt heltal');
define('JS_LANG_WarningMailsOnServerDays', 'Du måste ange ett positivt heltal för Meddelanden på servern per dag.');
define('JS_LANG_WarningEmptyFilter', 'Ange substräng');
define('JS_LANG_WarningEmptyFolderName', 'Ange mappens namn');

define('JS_LANG_ErrorConnectionFailed', 'Förbindelsen fallerade');
define('JS_LANG_ErrorRequestFailed', 'Dataöverföringen har inte fullförts');
define('JS_LANG_ErrorAbsentXMLHttpRequest', 'Objektet XMLHttpRequest saknas');
define('JS_LANG_ErrorWithoutDesc', 'Okänt fel');
define('JS_LANG_ErrorParsing', 'Fel vid tolkning av XML.');
define('JS_LANG_ResponseText', 'Svarsmeddelande:');
define('JS_LANG_ErrorEmptyXmlPacket', 'Tomt XML paket');
define('JS_LANG_ErrorImportContacts', 'Fel vid import av kontakter');
define('JS_LANG_ErrorNoContacts', 'Inga kontakter att importera');
define('JS_LANG_ErrorCheckMail', 'Hämtning av meddelanden avbröts pga ett fel. Förmodligen hämtades ej alla meddelanden.');

define('JS_LANG_LoggingToServer', 'Loggar in på server&hellip;');
define('JS_LANG_GettingMsgsNum', 'Hämtar antal meddelanden');
define('JS_LANG_RetrievingMessage', 'Hämtar meddelande');
define('JS_LANG_DeletingMessage', 'Raderar meddelande');
define('JS_LANG_DeletingMessages', 'Raderar meddelanden');
define('JS_LANG_Of', 'av');
define('JS_LANG_Connection', 'Förbindelse');
define('JS_LANG_Charset', 'Charset');
define('JS_LANG_AutoSelect', 'Auto-val');

define('JS_LANG_Contacts', 'Kontakter');
define('JS_LANG_ClassicVersion', 'Klassisk Version');
define('JS_LANG_Logout', 'Logga ut');
define('JS_LANG_Settings', 'Inställningar');

define('JS_LANG_LookFor', 'Sök efter: ');
define('JS_LANG_SearchIn', 'Sök i: ');
define('JS_LANG_QuickSearch', 'Sök enbart i fälten Från, Till och ämnesrad (snabbast).');
define('JS_LANG_SlowSearch', 'Sök hela meddelanden');
define('JS_LANG_AllMailFolders', 'Alla mappar');
define('JS_LANG_AllGroups', 'Alla grupper');

define('JS_LANG_NewMessage', 'Nytt Meddelande');
define('JS_LANG_CheckMail', 'Hämta Meddelanden');
define('JS_LANG_ReloadFolders', 'Synkronisera Mappar');
define('JS_LANG_EmptyTrash', 'Töm papperskorgen');
define('JS_LANG_MarkAsRead', 'Markera som läst');
define('JS_LANG_MarkAsUnread', 'Markera som ej läst');
define('JS_LANG_MarkFlag', 'Flagga');
define('JS_LANG_MarkUnflag', 'Ta bort flagga');
define('JS_LANG_MarkAllRead', 'Markera alla som lästa');
define('JS_LANG_MarkAllUnread', 'Markera alla som olästa');
define('JS_LANG_Reply', 'Svara');
define('JS_LANG_ReplyAll', 'Svara alla');
define('JS_LANG_Delete', 'Radera');
define('JS_LANG_Undelete', 'Återta');
define('JS_LANG_PurgeDeleted', 'Ta bort raderade');
define('JS_LANG_MoveToFolder', 'Flytta till mapp');
define('JS_LANG_Forward', 'Vidarebefordra');

define('JS_LANG_HideFolders', 'Göm mappar');
define('JS_LANG_ShowFolders', 'visa mappar');
define('JS_LANG_ManageFolders', 'Hantera mappar');
define('JS_LANG_SyncFolder', 'Synkroniserad mapp');
define('JS_LANG_NewMessages', 'Nya Meddelanden');
define('JS_LANG_Messages', 'Meddelande/n');

define('JS_LANG_From', 'Från');
define('JS_LANG_To', 'Till');
define('JS_LANG_Date', 'Datum');
define('JS_LANG_Size', 'Storlek');
define('JS_LANG_Subject', 'Ämne');

define('JS_LANG_FirstPage', 'Första sidan');
define('JS_LANG_PreviousPage', 'Föregående sida');
define('JS_LANG_NextPage', 'Nästa sida');
define('JS_LANG_LastPage', 'Sista sidan');

define('JS_LANG_SwitchToPlain', 'Visa som Oformaterad Text');
define('JS_LANG_SwitchToHTML', 'Visa som HTML');
define('JS_LANG_AddToAddressBook', 'Lägg till i adressboken');
define('JS_LANG_ClickToDownload', 'Klicka för att hämta');
define('JS_LANG_View', 'Visa');
define('JS_LANG_ShowFullHeaders', 'Visa fullständigt brevhuvud');
define('JS_LANG_HideFullHeaders', 'Dölj fullständigt brevhuvud');

define('JS_LANG_MessagesInFolder', 'Meddelanden i mapp');
define('JS_LANG_YouUsing', 'Du använder');
define('JS_LANG_OfYour', 'av dina');
define('JS_LANG_Mb', 'MB');
define('JS_LANG_Kb', 'KB');
define('JS_LANG_B', 'B');

define('JS_LANG_SendMessage', 'Skicka');
define('JS_LANG_SaveMessage', 'Spara');
define('JS_LANG_Print', 'Skriv ut');
define('JS_LANG_PreviousMsg', 'Föregående meddelande');
define('JS_LANG_NextMsg', 'Nästa meddelande');
define('JS_LANG_AddressBook', 'Adressbok');
define('JS_LANG_ShowBCC', 'Visa Hemlig kopia');
define('JS_LANG_HideBCC', 'Dölj Hemlig kopia');
define('JS_LANG_CC', 'Kopia');
define('JS_LANG_BCC', 'Hemlig Kopia');
define('JS_LANG_ReplyTo', 'Svara till');
define('JS_LANG_AttachFile', 'Bifoga fil');
define('JS_LANG_Attach', 'Bifoga');
define('JS_LANG_Re', 'Sv');
define('JS_LANG_OriginalMessage', 'Ursprungligt meddelande');
define('JS_LANG_Sent', 'Skickat');
define('JS_LANG_Fwd', 'Vb');
define('JS_LANG_Low', 'Låg');
define('JS_LANG_Normal', 'Normal');
define('JS_LANG_High', 'Hög');
define('JS_LANG_Importance', 'Prioritet');
define('JS_LANG_Close', 'Stäng');

define('JS_LANG_Common', 'Vanliga');
define('JS_LANG_EmailAccounts', 'Epostkonton');

define('JS_LANG_MsgsPerPage', 'Meddelanden per sida');
define('JS_LANG_DisableRTE', 'Deaktivera rich-text editor');
define('JS_LANG_Skin', 'Utseende');
define('JS_LANG_DefCharset', 'Ordinarie typsnitt');
define('JS_LANG_DefCharsetInc', 'Ordinarie inkommande typsnitt');
define('JS_LANG_DefCharsetOut', 'Ordinarie utgående typsnitt');
define('JS_LANG_DefTimeOffset', 'Ordinare tidszon');
define('JS_LANG_DefLanguage', 'Ordinarie språk');
define('JS_LANG_DefDateFormat', 'Ordinarie datumformat');
define('JS_LANG_ShowViewPane', 'Meddelanden visas med förhandsgranskning');
define('JS_LANG_Save', 'Spara');
define('JS_LANG_Cancel', 'Ångra');
define('JS_LANG_OK', 'OK');

define('JS_LANG_Remove', 'Ta bort');
define('JS_LANG_AddNewAccount', 'Lägg till nytt konto');
define('JS_LANG_Signature', 'Signatur');
define('JS_LANG_Filters', 'Filter');
define('JS_LANG_Properties', 'Inställningar');
define('JS_LANG_UseForLogin', 'Använd detta kontos inställningar (login och lösenord) för inloggning');
define('JS_LANG_MailFriendlyName', 'Ditt namn');
define('JS_LANG_MailEmail', 'Epost');
define('JS_LANG_MailIncHost', 'Inkommande Epost');
define('JS_LANG_Imap4', 'IMAP4');
define('JS_LANG_Pop3', 'POP3');
define('JS_LANG_MailIncPort', 'Port');
define('JS_LANG_MailIncLogin', 'Login');
define('JS_LANG_MailIncPass', 'Lösenord');
define('JS_LANG_MailOutHost', 'SMTP Server');
define('JS_LANG_MailOutPort', 'Port');
define('JS_LANG_MailOutLogin', 'SMTP Login');
define('JS_LANG_MailOutPass', 'SMTP Lösenord');
define('JS_LANG_MailOutAuth1', 'Använd SMTP autentisering');
define('JS_LANG_MailOutAuth2', '(Lämna fälten login/lösen för att använda samma som POP3/IMAP4 login/lösen)');
define('JS_LANG_UseFriendlyNm1', 'Använd ditt namn för att forma Från:');
define('JS_LANG_UseFriendlyNm2', '(Ditt namn &lt;adress@din_doman.se&gt;)');
define('JS_LANG_GetmailAtLogin', 'Hämta/Synkronisera meddelanden vid inloggning');
define('JS_LANG_MailMode0', 'Radera hämtade meddelande från servern');
define('JS_LANG_MailMode1', 'Låt meddelanden vara kvar på servern');
define('JS_LANG_MailMode2', 'Låt meddelanden vara kvar på servern i ');
define('JS_LANG_MailsOnServerDays', 'dag/ar');
define('JS_LANG_MailMode3', 'Radera meddelanden från servern när papperskorgen töms.');
define('JS_LANG_InboxSyncType', 'Inkorgens synkroniseringsmetod');

define('JS_LANG_SyncTypeNo', 'Synkronisera ej');
define('JS_LANG_SyncTypeNewHeaders', 'Nya meddelanderubriker');
define('JS_LANG_SyncTypeAllHeaders', 'Alla meddelanderubriker');
define('JS_LANG_SyncTypeNewMessages', 'Nya meddelanden');
define('JS_LANG_SyncTypeAllMessages', 'Alla meddelanden');
define('JS_LANG_SyncTypeDirectMode', 'Transparent läge');

define('JS_LANG_Pop3SyncTypeEntireHeaders', 'Fullständiga brevhuvuden');
define('JS_LANG_Pop3SyncTypeEntireMessages', 'Hela meddelanden');
define('JS_LANG_Pop3SyncTypeDirectMode', 'Transparent läge');

define('JS_LANG_DeleteFromDb', 'Radera meddelanden från databasen om de ej finns kvar på servern');

define('JS_LANG_EditFilter', 'Redigera filter');
define('JS_LANG_NewFilter', 'Skapa nytt filter');
define('JS_LANG_Field', 'Fält');
define('JS_LANG_Condition', 'Villkor');
define('JS_LANG_ContainSubstring', 'Innehåller');
define('JS_LANG_ContainExactPhrase', 'Exakt fras');
define('JS_LANG_NotContainSubstring', 'Ej innehåller');
define('JS_LANG_FilterDesc_At', 'vid');
define('JS_LANG_FilterDesc_Field', 'fält');
define('JS_LANG_Action', 'Utför');
define('JS_LANG_DoNothing', 'Gör ingenting');
define('JS_LANG_DeleteFromServer', 'Radera från servern omedelbart');
define('JS_LANG_MarkGrey', 'Gråmarkera');
define('JS_LANG_Add', 'Lägg till');
define('JS_LANG_OtherFilterSettings', 'Andra filterinställningar');
define('JS_LANG_ConsiderXSpam', 'Ta hänsyn till X-Spam flaggor');
define('JS_LANG_Apply', 'Verkställ');

define('JS_LANG_InsertLink', 'Infoga länk');
define('JS_LANG_RemoveLink', 'Ta bort länk');
define('JS_LANG_Numbering', 'Numrering');
define('JS_LANG_Bullets', 'Punkter');
define('JS_LANG_HorizontalLine', 'Horisontell linje');
define('JS_LANG_Bold', 'Fet');
define('JS_LANG_Italic', 'Kursiv');
define('JS_LANG_Underline', 'Stryk under');
define('JS_LANG_AlignLeft', 'Vänsterjustera');
define('JS_LANG_Center', 'Centrera');
define('JS_LANG_AlignRight', 'Högerjustera');
define('JS_LANG_Justify', 'Anpassa');
define('JS_LANG_FontColor', 'Fontfärg');
define('JS_LANG_Background', 'Bakgrund');
define('JS_LANG_SwitchToPlainMode', 'Byt till oformaterat text läge');
define('JS_LANG_SwitchToHTMLMode', 'Byt till HTML läge');
define('JS_LANG_AddSignatures', 'Infoga signatur till alla utgående brev');
define('JS_LANG_DontAddToReplies', 'Infoga ej signatur till svarsbrev eller vidarebefordrade brev');

define('JS_LANG_Folder', 'Mapp');
define('JS_LANG_Msgs', 'Meddelanden,');
define('JS_LANG_Synchronize', 'Synkronisera');
define('JS_LANG_ShowThisFolder', 'Visa mapp');
define('JS_LANG_Total', 'Totalt');
define('JS_LANG_DeleteSelected', 'Radera markerade');
define('JS_LANG_AddNewFolder', 'Lägg till mapp');
define('JS_LANG_NewFolder', 'Ny mapp');
define('JS_LANG_ParentFolder', 'Överordnad mapp');
define('JS_LANG_NoParent', 'Överordnad mapp saknas');
define('JS_LANG_OnMailServer', 'Skapa denna mapp i både webbmailklienten och på mailservern');
define('JS_LANG_InWebMail', 'Skapa denna mapp enbart i webbmailklienten');
define('JS_LANG_FolderName', 'Mappnamn');

define('JS_LANG_ContactsPerPage', 'Kontakter per sida');
define('JS_LANG_WhiteList', 'Adressbok som "vitlistad"');

define('JS_LANG_CharsetDefault', 'Default');
define('JS_LANG_CharsetArabicAlphabetISO', 'Arabiskt alfabet (ISO)');
define('JS_LANG_CharsetArabicAlphabet', 'Arabiskt alfabet (Windows)');
define('JS_LANG_CharsetBalticAlphabetISO', 'Baltiskt alfabet (ISO)');
define('JS_LANG_CharsetBalticAlphabet', 'Baltiskt alfabet (Windows)');
define('JS_LANG_CharsetCentralEuropeanAlphabetISO', 'Central Europeiskt alfabet (ISO)');
define('JS_LANG_CharsetCentralEuropeanAlphabet', 'Central Europeiskt alfabet (Windows)');
define('JS_LANG_CharsetChineseSimplifiedEUC', 'Chinese Simplified (EUC)');
define('JS_LANG_CharsetChineseSimplifiedGB', 'Chinese Simplified (GB2312)');
define('JS_LANG_CharsetChineseTraditional', 'Kinesiskt traditionellt (Big5)');
define('JS_LANG_CharsetCyrillicAlphabetISO', 'Cyrilliskt alfabet (ISO)');
define('JS_LANG_CharsetCyrillicAlphabetKOI8R', 'Cyrilliskt alfabet (KOI8-R)');
define('JS_LANG_CharsetCyrillicAlphabet', 'Cyrilliskt alfabet (Windows)');
define('JS_LANG_CharsetGreekAlphabetISO', 'Grekiskt alfabet (ISO)');
define('JS_LANG_CharsetGreekAlphabet', 'Grekiskt alfabet (Windows)');
define('JS_LANG_CharsetHebrewAlphabetISO', 'Hebreeiskt alfabet (ISO)');
define('JS_LANG_CharsetHebrewAlphabet', 'Hebreeiskt alfabet (Windows)');
define('JS_LANG_CharsetJapanese', 'Japanese');
define('JS_LANG_CharsetJapaneseShiftJIS', 'Japanese (Shift-JIS)');
define('JS_LANG_CharsetKoreanEUC', 'Koreanskt (EUC)');
define('JS_LANG_CharsetKoreanISO', 'Koreanskt (ISO)');
define('JS_LANG_CharsetLatin3AlphabetISO', 'Latin 3 alfabet (ISO)');
define('JS_LANG_CharsetTurkishAlphabet', 'Turkiskt alfabet');
define('JS_LANG_CharsetUniversalAlphabetUTF7', 'Universal alfabet (UTF-7)');
define('JS_LANG_CharsetUniversalAlphabetUTF8', 'Universal alfabet (UTF-8)');
define('JS_LANG_CharsetVietnameseAlphabet', 'Vietnamesiskt alfabet (Windows)');
define('JS_LANG_CharsetWesternAlphabetISO', 'Western alfabet (ISO)');
define('JS_LANG_CharsetWesternAlphabet', 'Western alfabet (Windows)');

define('JS_LANG_TimeDefault', 'Standard');
define('JS_LANG_TimeEniwetok', 'Eniwetok, Kwajalein, Dateline Time');
define('JS_LANG_TimeMidwayIsland', 'Midway Island, Samoa');
define('JS_LANG_TimeHawaii', 'Hawaii');
define('JS_LANG_TimeAlaska', 'Alaska');
define('JS_LANG_TimePacific', 'Pacific Time (US & Canada); Tijuana');
define('JS_LANG_TimeArizona', 'Arizona');
define('JS_LANG_TimeMountain', 'Mountain Time (US & Canada)');
define('JS_LANG_TimeCentralAmerica', 'Central America');
define('JS_LANG_TimeCentral', 'Central Time (US & Canada)');
define('JS_LANG_TimeMexicoCity', 'Mexico City, Tegucigalpa');
define('JS_LANG_TimeSaskatchewan', 'Saskatchewan');
define('JS_LANG_TimeIndiana', 'Indiana (East)');
define('JS_LANG_TimeEastern', 'Eastern Time (US & Canada)');
define('JS_LANG_TimeBogota', 'Bogota, Lima, Quito');
define('JS_LANG_TimeSantiago', 'Santiago');
define('JS_LANG_TimeCaracas', 'Caracas, La Paz');
define('JS_LANG_TimeAtlanticCanada', 'Atlantic Time (Canada)');
define('JS_LANG_TimeNewfoundland', 'Newfoundland');
define('JS_LANG_TimeGreenland', 'Greenland');
define('JS_LANG_TimeBuenosAires', 'Buenos Aires, Georgetown');
define('JS_LANG_TimeBrasilia', 'Brasilia');
define('JS_LANG_TimeMidAtlantic', 'Mid-Atlantic');
define('JS_LANG_TimeCapeVerde', 'Cape Verde Is.');
define('JS_LANG_TimeAzores', 'Azores');
define('JS_LANG_TimeMonrovia', 'Casablanca, Monrovia');
define('JS_LANG_TimeGMT', 'Dublin, Edinburgh, Lisbon, London');
define('JS_LANG_TimeBerlin', 'Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna');
define('JS_LANG_TimePrague', 'Belgrade, Bratislava, Budapest, Ljubljana, Prague');
define('JS_LANG_TimeParis', 'Brussels, Copenhagen, Madrid, Paris');
define('JS_LANG_TimeSarajevo', 'Sarajevo, Skopje, Sofija, Vilnius, Warsaw, Zagreb');
define('JS_LANG_TimeWestCentralAfrica', 'West Central Africa');
define('JS_LANG_TimeAthens', 'Athens, Istanbul, Minsk');
define('JS_LANG_TimeEasternEurope', 'Bucharest');
define('JS_LANG_TimeCairo', 'Cairo');
define('JS_LANG_TimeHarare', 'Harare, Pretoria');
define('JS_LANG_TimeHelsinki', 'Helsinki, Riga, Tallinn');
define('JS_LANG_TimeIsrael', 'Israel, Jerusalem Standard Time');
define('JS_LANG_TimeBaghdad', 'Baghdad');
define('JS_LANG_TimeArab', 'Arab, Kuwait, Riyadh');
define('JS_LANG_TimeMoscow', 'Moscow, St. Petersburg, Volgograd');
define('JS_LANG_TimeEastAfrica', 'East Africa, Nairobi');
define('JS_LANG_TimeTehran', 'Tehran');
define('JS_LANG_TimeAbuDhabi', 'Abu Dhabi, Muscat');
define('JS_LANG_TimeCaucasus', 'Baku, Tbilisi, Yerevan');
define('JS_LANG_TimeKabul', 'Kabul');
define('JS_LANG_TimeEkaterinburg', 'Ekaterinburg');
define('JS_LANG_TimeIslamabad', 'Islamabad, Karachi, Sverdlovsk, Tashkent');
define('JS_LANG_TimeBombay', 'Calcutta, Chennai, Mumbai, New Delhi, India Standard Time');
define('JS_LANG_TimeNepal', 'Kathmandu, Nepal');
define('JS_LANG_TimeAlmaty', 'Almaty, Novosibirsk, North Central Asia');
define('JS_LANG_TimeDhaka', 'Astana, Dhaka');
define('JS_LANG_TimeSriLanka', 'Sri Jayawardenepura, Sri Lanka');
define('JS_LANG_TimeRangoon', 'Rangoon');
define('JS_LANG_TimeBangkok', 'Bangkok, Hanoi, Jakarta');
define('JS_LANG_TimeKrasnoyarsk', 'Krasnoyarsk');
define('JS_LANG_TimeBeijing', 'Beijing, Chongqing, Hong Kong SAR, Urumqi');
define('JS_LANG_TimeIrkutsk', 'Irkutsk, Ulaan Bataar');
define('JS_LANG_TimeSingapore', 'Kuala Lumpur, Singapore');
define('JS_LANG_TimePerth', 'Perth, Western Australia');
define('JS_LANG_TimeTaipei', 'Taipei');
define('JS_LANG_TimeTokyo', 'Osaka, Sapporo, Tokyo');
define('JS_LANG_TimeSeoul', 'Seoul, Korea Standard time');
define('JS_LANG_TimeYakutsk', 'Yakutsk');
define('JS_LANG_TimeAdelaide', 'Adelaide, Central Australia');
define('JS_LANG_TimeDarwin', 'Darwin');
define('JS_LANG_TimeBrisbane', 'Brisbane, East Australia');
define('JS_LANG_TimeSydney', 'Canberra, Melbourne, Sydney, Hobart');
define('JS_LANG_TimeGuam', 'Guam, Port Moresby');
define('JS_LANG_TimeHobart', 'Hobart, Tasmania');
define('JS_LANG_TimeVladivostock', 'Vladivostok');
define('JS_LANG_TimeMagadan', 'Magadan, Solomon Is., New Caledonia');
define('JS_LANG_TimeWellington', 'Auckland, Wellington');
define('JS_LANG_TimeFiji', 'Fiji Islands, Kamchatka, Marshall Is.');
define('JS_LANG_TimeTonga', 'Nuku\'alofa, Tonga');

define('JS_LANG_DateDefault', 'Standard');
define('JS_LANG_DateDDMMYY', 'DD/MM/YY');
define('JS_LANG_DateMMDDYY', 'MM/DD/YY');
define('JS_LANG_DateDDMonth', 'DD Month (01 Jan)');
define('JS_LANG_DateAdvanced', 'Advanced');

define('JS_LANG_NewContact', 'Ny kontakt');
define('JS_LANG_NewGroup', 'Ny grupp');
define('JS_LANG_AddContactsTo', 'Lägg till kontakter till');
define('JS_LANG_ImportContacts', 'Importera kontakter');

define('JS_LANG_Name', 'Namn');
define('JS_LANG_Email', 'Epost');
define('JS_LANG_DefaultEmail', 'Ordinarie epost');
define('JS_LANG_NotSpecifiedYet', 'Ej angiven');
define('JS_LANG_ContactName', 'Namn');
define('JS_LANG_Birthday', 'Födelsedag');
define('JS_LANG_Month', 'Månad');
define('JS_LANG_January', 'Januari');
define('JS_LANG_February', 'Februari');
define('JS_LANG_March', 'Mars');
define('JS_LANG_April', 'April');
define('JS_LANG_May', 'Maj');
define('JS_LANG_June', 'Juni');
define('JS_LANG_July', 'Juli');
define('JS_LANG_August', 'Augusti');
define('JS_LANG_September', 'September');
define('JS_LANG_October', 'Oktober');
define('JS_LANG_November', 'November');
define('JS_LANG_December', 'December');
define('JS_LANG_Day', 'Dag');
define('JS_LANG_Year', 'År');
define('JS_LANG_UseFriendlyName1', 'Använd personens nanm');
define('JS_LANG_UseFriendlyName2', '(t.ex. Peter S &lt;peter@din_doman.se&gt;)');
define('JS_LANG_Personal', 'Privat');
define('JS_LANG_PersonalEmail', 'Privat Epostadress');
define('JS_LANG_StreetAddress', 'Gata');
define('JS_LANG_City', 'Stad');
define('JS_LANG_Fax', 'Fax');
define('JS_LANG_StateProvince', 'Stat/Provins');
define('JS_LANG_Phone', 'Telefno');
define('JS_LANG_ZipCode', 'Postnr');
define('JS_LANG_Mobile', 'Mobil');
define('JS_LANG_CountryRegion', 'Land');
define('JS_LANG_WebPage', 'Hemsida');
define('JS_LANG_Go', 'Öppna');
define('JS_LANG_Home', 'Hem');
define('JS_LANG_Business', 'Arbete');
define('JS_LANG_BusinessEmail', 'Företags Epostadress');
define('JS_LANG_Company', 'Företag');
define('JS_LANG_JobTitle', 'Titel');
define('JS_LANG_Department', 'Avdelning');
define('JS_LANG_Office', 'Kontor');
define('JS_LANG_Pager', 'Sökare');
define('JS_LANG_Other', 'Annat');
define('JS_LANG_OtherEmail', 'Annan Epostadress');
define('JS_LANG_Notes', 'Anteckningar');
define('JS_LANG_Groups', 'Grupper');
define('JS_LANG_ShowAddFields', 'Visa ytterligare fält');
define('JS_LANG_HideAddFields', 'Dölj ytterligare fält');
define('JS_LANG_EditContact', 'redigera kontaktinformation');
define('JS_LANG_GroupName', 'Gruppnamn');
define('JS_LANG_AddContacts', 'Lägg till kontakter');
define('JS_LANG_CommentAddContacts', '(Om du vill ange mer än en adress, separera dem med kommatecken)');
define('JS_LANG_CreateGroup', 'Skapa grupp');
define('JS_LANG_Rename', 'Döp om');
define('JS_LANG_MailGroup', 'Epostgrupp');
define('JS_LANG_RemoveFromGroup', 'Ta bort från grupp');
define('JS_LANG_UseImportTo', 'Använd import för att läsa in dina kontakter från Microsoft Outlook, Microsoft Outlook Express till din kontaktlista.');
define('JS_LANG_Outlook1', 'Microsoft Outlook 2000/XP/2003');
define('JS_LANG_Outlook2', 'Microsoft Outlook Express 6');
define('JS_LANG_SelectImportFile', 'Välj fil (.CSV format) som du vill importera från');
define('JS_LANG_Import', 'Importera');
define('JS_LANG_ContactsMessage', 'Detta är kontaktsidan.');
define('JS_LANG_ContactsCount', 'kontakt/er');
define('JS_LANG_GroupsCount', 'grupp/er');

// webmail 4.1 constants
define('PicturesBlocked', 'Bilder har i detta meddelande blockerats för din säkerhet');
define('ShowPictures', 'Visa bilder');
define('ShowPicturesFromSender', 'Visa alltid bilder i meddelanden från denna avsändare');
define('AlwaysShowPictures', 'Visa alltid bilder i meddelanden');

define('TreatAsOrganization', 'Behandla som en organisation');

define('WarningGroupAlreadyExist', 'Grupp med detta namn finns redan. Uppge ett annat namn.');
define('WarningCorrectFolderName', 'Du måste ange ett korrekt namn för mappen.');
define('WarningLoginFieldBlank', 'You cannot leave Login field blank.');
define('WarningCorrectLogin', 'Du måste ange en korrekt inloggning');
define('WarningPassBlank', 'Du kan inte låta lösenordsfältet vara tomt.');
define('WarningCorrectIncServer', 'Du måste ange en giltig POP3(IMAP) serveradress.');
define('WarningCorrectSMTPServer', 'Du måste ange en korrekt SMTP serveradress.');
define('WarningFromBlank', 'Du kan inte lämna fältet Från tomt.');
define('WarningAdvancedDateFormat', 'Uppge ett tids och datumformat.');

define('AdvancedDateHelpTitle', 'Avancerade datuminställningar');
define('AdvancedDateHelpIntro', 'När &quot;avancerade datuminställningar&quot; är valda, kan du ange ett eget datumformat, vilket anges som med \':\' och \'/\' som avskiljare:');
define('AdvancedDateHelpConclusion', 'Till exempel, om du anger &quot;yyyy/mm/dd&quot; visas datum som år/månad/dag (ex.vis 2007/10/30).');
define('AdvancedDateHelpDayOfMonth', 'Dag i månaden (1 till 31)');
define('AdvancedDateHelpNumericMonth', 'Månad (1 till 12)');
define('AdvancedDateHelpTextualMonth', 'Månad (Jan till Dec)');
define('AdvancedDateHelpYear2', 'År, 2 siffror');
define('AdvancedDateHelpYear4', 'År, 4 siffror');
define('AdvancedDateHelpDayOfYear', 'Dag på året (1 till 366)');
define('AdvancedDateHelpQuarter', 'Kvartal');
define('AdvancedDateHelpDayOfWeek', 'Veckodag (1 till 7)');
define('AdvancedDateHelpWeekOfYear', 'Kalendervecka (1 till 53)');

define('InfoNoMessagesFound', 'Inga meddelanden funna');
define('ErrorSMTPConnect', 'Kan ej ansluta till SMTP-server. Kontrollera SMTP-inställningarna.');
define('ErrorSMTPAuth', 'Fel användarnanm och/eller lösenord. Autentisering misslyckades.');
define('ReportMessageSent', 'Ditt meddelande har skickats.');
define('ReportMessageSaved', 'Ditt meddelande har sparats.');
define('ErrorPOP3Connect', 'Kan ej ansluta till POP3-servern. Kontrollera POP3-inställningarna.');
define('ErrorIMAP4Connect', 'Kan ej ansluta till IMAP4-servern. Kontrollera IMAP4-inställningarna.');
define('ErrorPOP3IMAP4Auth', 'Fel epost/login och/eller lösenord. Autentisering misslyckades.');
define('ErrorGetMailLimit', 'Förlåt, din brevlåda är full.');

define('ReportSettingsUpdatedSuccessfuly', 'Inställningarna har uppdaterats.');
define('ReportAccountCreatedSuccessfuly', 'Kontot har skapats.');
define('ReportAccountUpdatedSuccessfuly', 'Kontot har uppdaterats.');
define('ConfirmDeleteAccount', 'Är du säker på att du vill ta bort kontot?');
define('ReportFiltersUpdatedSuccessfuly', 'Filterinställningar har uppdaterats.');
define('ReportSignatureUpdatedSuccessfuly', 'Signaturen har uppdaterats.');
define('ReportFoldersUpdatedSuccessfuly', 'Mappar har uppdaterats.');
define('ReportContactsSettingsUpdatedSuccessfuly', 'Kontaktens inställningar har uppdaterats.');

define('ErrorInvalidCSV', '.CSV filen du angav har felaktigt format.');
//The group "guies" was successfully added.
define('ReportGroupSuccessfulyAdded1', 'Gruppen');
define('ReportGroupSuccessfulyAdded2', 'lades till.');
define('ReportGroupUpdatedSuccessfuly', 'Gruppen lades till.');
define('ReportContactSuccessfulyAdded', 'Kontakt lades till.');
define('ReportContactUpdatedSuccessfuly', 'Kontakten har uppdaterats.');
//Contact(s) was added to group "friends".
define('ReportContactAddedToGroup', 'Kontakt/er lades till gruppen');
define('AlertNoContactsGroupsSelected', 'Inga kontakter eller grupper valda.');

define('InfoListNotContainAddress', 'Om listan inte innehåller adressen du letar efter, försök med de inledande bokstäverna.');

define('DirectAccess', 'T');
define('DirectAccessTitle', 'Transparent läge. Webbmail hanterar meddelanden direkt på e-postservern.');

define('FolderInbox', 'Inkorgen');
define('FolderSentItems', 'Skickat');
define('FolderDrafts', 'Utkast');
define('FolderTrash', 'Papperskorgen');

define('FileLargerAttachment', 'Filen är större än tillåten storlek för bilagor.');
define('FilePartiallyUploaded', 'Filen bifogades inte i sin helhet pga ett okänt fel.');
define('NoFileUploaded', 'Ingen fil bifogades.');
define('MissingTempFolder', 'Temporär katalog saknas.');
define('MissingTempFile', 'Temporär fil saknas.');
define('UnknownUploadError', 'Ett okänt fel inträffade vid hämtning av bifogad fil.');
define('FileLargerThan', 'Fel vid bifoga fil. Troligen pga att filen är större än');
define('PROC_CANT_LOAD_DB', 'Kan ej ansluta till databasen.');
define('PROC_CANT_LOAD_LANG', 'Kan ej hitta begärd språkfil.');
define('PROC_CANT_LOAD_ACCT', 'Kontot finns inte, troligen har det raderats.');

define('DomainDosntExist', 'Domänen finns ej på servern.');
define('ServerIsDisable', 'E-postservern är tillfälligt stängd av administratören.');

define('PROC_ACCOUNT_EXISTS', 'Kontot kan ej skapas eftersom det redan existerar.');
define('PROC_CANT_GET_MESSAGES_COUNT', 'Fel i hämtning av antalet meddelanden.');
define('PROC_CANT_MAIL_SIZE', 'Fel i hämtning av utrymmesbegränsning.');

define('Organization', 'Organisation');
define('WarningOutServerBlank', 'Fältet SMTP Server får ej vara tomt');

//
define('JS_LANG_Refresh', 'Friska upp');
define('JS_LANG_MessagesInInbox', 'Meddelanden');
define('JS_LANG_InfoEmptyInbox', 'Nej meddelandena');

// webmail 4.2 constants
define('BackToList', 'Tillbaka till listan.');
define('InfoNoContactsGroups', 'Inga kontakter eller grupper.');
define('InfoNewContactsGroups', 'Du kan skapa nya kontakter/grupper eller importera kontakter från en .CSV-fil i Outlook format.');
define('DefTimeFormat', 'Standard tidsformat');
define('SpellNoSuggestions', 'Inga förslag');
define('SpellWait', 'Vänligen väntat&hellip;');

define('InfoNoMessageSelected', 'Inga meddelanden valda.');
define('InfoSingleDoubleClick', 'Enkelklicka för att förhandsgranska eller dubbelklicka för att se meddelandet i full storlek.');
        
// calendar
define('TitleDay', 'Dagsvy');
define('TitleWeek', 'Veckovy');
define('TitleMonth', 'Månadsvy');

define('ErrorNotSupportBrowser', 'AfterLogics kalender stödjer inte din läsare. Använd lägst FireFox 2.0/Opera 9.0/Internet Explorer 6.0/Safari 3.0.2 eller senare version.');
define('ErrorTurnedOffActiveX', 'Stöd för ActiveX är avstängt. <br/>För att använda denna tillämpning måste ActiveX tillåtas.');

define('Calendar', 'Kalender');
        
define('TabDay', 'Dag');
define('TabWeek', 'Vecka');
define('TabMonth', 'Månad');
        
define('ToolNewEvent', 'Ny&nbsp;avtalad&nbsp;tid');
define('ToolBack', 'Tillbaka');
define('ToolToday', 'Idag');
define('AltNewEvent', 'Ny avtalad tid');
define('AltBack', 'Tillbaka');
define('AltToday', 'Idag');
define('CalendarHeader', 'Kalender');
define('CalendarsManager', 'Kalenderansvarig');
        
define('CalendarActionNew', 'Ny kalender');
define('EventHeaderNew', 'Ny avtalad tid');
define('CalendarHeaderNew', 'Ny kalender');
        
define('EventSubject', 'Ämne');
define('EventCalendar', 'Kalender');
define('EventFrom', 'Från');
define('EventTill', 'till');
define('CalendarDescription', 'Beskrivning');
define('CalendarColor', 'Färg');
define('CalendarName', 'Kalendernamn');
define('CalendarDefaultName', 'Min kalender');
        
define('ButtonSave', 'Spara');
define('ButtonCancel', 'Ångra');
define('ButtonDelete', 'Radera');

define('AltPrevMonth', 'Föregående månad');
define('AltNextMonth', 'Nästa månad');

define('CalendarHeaderEdit', 'Redigera kalender');
define('CalendarActionEdit', 'Redigera kalender');
define('ConfirmDeleteCalendar', 'Är du säker på att du vill radera kalendern');
define('InfoDeleting', 'Raderar&hellip;');
define('WarningCalendarNameBlank', 'Kalendernamnet får ej vara tomt.');
define('ErrorCalendarNotCreated', 'Kalender skapades ej.');
define('WarningSubjectBlank', 'Ämnet kan ej vara blankt.');
define('WarningIncorrectTime', 'Specificerad tid består av ogiltiga tidstecken.');
define('WarningIncorrectFromTime', 'Från-tiden är felaktig.');
define('WarningIncorrectTillTime', 'Till-tiden är felaktig.');
define('WarningStartEndDate', 'Slutdatum måste vara efter eller lika med startdatum.');
define('WarningStartEndTime', 'Sluttid måste vara senare än starttid.');
define('WarningIncorrectDate', 'Datum är felaktig.');
define('InfoLoading', 'Laddar&hellip;');
define('EventCreate', 'Skapa avtalad tid');
define('CalendarHideOther', 'Göm andra kalendrar');
define('CalendarShowOther', 'Visa andra kalendrar');
define('CalendarRemove', 'Ta bort kalender');
define('EventHeaderEdit', 'Redigera avtalad tid');

define('InfoSaving', 'Sparar&hellip;');
define('SettingsDisplayName', 'Visningsnamn');
define('SettingsTimeFormat', 'Tidsformat');
define('SettingsDateFormat', 'Datumformat');
define('SettingsShowWeekends', 'Visa helger');
define('SettingsWorkdayStarts', 'Arbetsdag startar');
define('SettingsWorkdayEnds', 'slutar');
define('SettingsShowWorkday', 'Visa arbetsdagar');
define('SettingsWeekStartsOn', 'Vecka startar på');
define('SettingsDefaultTab', 'Standardflik');
define('SettingsCountry', 'Land');
define('SettingsTimeZone', 'Tidszon');
define('SettingsAllTimeZones', 'Alla tidszoner');

define('WarningWorkdayStartsEnds', 'Tid för \'Arbetsdag slutar\' måste vara större än tiden då arbetsdag börjar');
define('ReportSettingsUpdated', 'Inställningarna har sparats.');

define('SettingsTabCalendar', 'Kalender');

define('FullMonthJanuary', 'Januari');
define('FullMonthFebruary', 'Februari');
define('FullMonthMarch', 'Mars');
define('FullMonthApril', 'April');
define('FullMonthMay', 'Maj');
define('FullMonthJune', 'Juni');
define('FullMonthJuly', 'Juli');
define('FullMonthAugust', 'Augusti');
define('FullMonthSeptember', 'September');
define('FullMonthOctober', 'Oktober');
define('FullMonthNovember', 'November');
define('FullMonthDecember', 'December');
        
define('ShortMonthJanuary', 'Jan');
define('ShortMonthFebruary', 'Feb');
define('ShortMonthMarch', 'Mar');
define('ShortMonthApril', 'Apr');
define('ShortMonthMay', 'Maj');
define('ShortMonthJune', 'Jun');
define('ShortMonthJuly', 'Jul');
define('ShortMonthAugust', 'Aug');
define('ShortMonthSeptember', 'Sep');
define('ShortMonthOctober', 'Okt');
define('ShortMonthNovember', 'Nov');
define('ShortMonthDecember', 'Dec');

define('FullDayMonday', 'Måndag');
define('FullDayTuesday', 'Tisdag');
define('FullDayWednesday', 'Onsdag');
define('FullDayThursday', 'Torsdag');
define('FullDayFriday', 'Fredag');
define('FullDaySaturday', 'Lördag');
define('FullDaySunday', 'SÖndag');

define('DayToolMonday', 'Mån');
define('DayToolTuesday', 'Tis');
define('DayToolWednesday', 'Ons');
define('DayToolThursday', 'Tor');
define('DayToolFriday', 'Fre');
define('DayToolSaturday', 'Lör');
define('DayToolSunday', 'Sön');

define('CalendarTableDayMonday', 'M');
define('CalendarTableDayTuesday', 'T');
define('CalendarTableDayWednesday', 'O');
define('CalendarTableDayThursday', 'T');
define('CalendarTableDayFriday', 'F');
define('CalendarTableDaySaturday', 'L');
define('CalendarTableDaySunday', 'S');

define('ErrorParseJSON', 'JSON-svar från servern kan ej tolkas.');

define('ErrorLoadCalendar', 'Kan ej hämta kalender');
define('ErrorLoadEvents', 'Kan ej hämta möte');
define('ErrorUpdateEvent', 'Kan ej spara möte');
define('ErrorDeleteEvent', 'Kan ej radera möte');
define('ErrorUpdateCalendar', 'Kan ej spara kalender');
define('ErrorDeleteCalendar', 'Kan ej radera kalender');
define('ErrorGeneral', 'Ett fel inträffade på servern. Vsv försök senare.');

// webmail 4.3 constants
define('SharedTitleEmail', 'Epost');
define('ShareHeaderEdit', 'Dela ut och publicera kalender');
define('ShareActionEdit', 'Dela ut och publicera kalender');
define('CalendarPublicate', 'Tillåt publik åtkomst till denna kalender');
define('CalendarPublicationLink', 'Länk');
define('ShareCalendar', 'Dela ut denna kalender');
define('SharePermission1', 'Kan ändra händelser och hantera utdelning');
define('SharePermission2', 'Kan ändra händelser');
define('SharePermission3', 'Kan se alla händelser');
define('SharePermission4', 'Kan enbart se fri/upptaget (dölj detaljer)');
define('ButtonClose', 'Stäng');
define('WarningEmailFieldFilling', 'Du måste fylla i epostfältet först');
define('EventHeaderView', 'Visa händelse');
define('ErrorUpdateSharing', 'Kan ej spara utdelade publiceringsdata');
define('ErrorUpdateSharing1', 'Kan ej dela ut till användare %s som inte existerar');
define('ErrorUpdateSharing2', 'Kan ej dela ut denna kalender till användare %s');
define('ErrorUpdateSharing3', 'Denna kalender delas redan med användare %s');
define('Title_MyCalendars', 'Mina kalendrar');
define('Title_SharedCalendars', 'Delade kalendrar');
define('ErrorGetPublicationHash', 'Kan ej skapa publiceringslänk');
define('ErrorGetSharing', 'Kan ej lägga till utdelning');
define('CalendarPublishedTitle', 'Denna kalender är publicerad');
define('RefreshSharedCalendars', 'Uppdatera Delade Kalendrar');
define('Title_CheckSharedCalendars', 'Uppdatera Delade Kalendrar');

define('GroupMembers', 'Medlemmar');

define('ReportMessagePartDisplayed', 'Notera att meddelandet enbart visas delvis.');
define('ReportViewEntireMessage', 'Visa hela meddelandet,');
define('ReportClickHere', 'Klicka här');
define('ErrorContactExists', 'En kontakt med det namnet och epostadress finns redan.');

define('Attachments', 'Bilagor');

define('InfoGroupsOfContact', 'Grupptillhörighet visas med bockmarkering.');
define('AlertNoContactsSelected', 'Inga kontakter valda.');
define('MailSelected', 'Eposta valda adresser');
define('CaptionSubscribed', 'Prenumererar');

define('OperationSpam', 'Skräppost');
define('OperationNotSpam', 'Ej skräppost');
define('FolderSpam', 'Skräppost');

// webmail 4.4 contacts
define('ContactMail', 'Epostkontakt');
define('ContactViewAllMails', 'Visa alla brev för denna kontakt');
define('ContactsMailThem', 'Skicka till dessa');
define('DateToday', 'Idag');
define('DateYesterday', 'Igår');
define('MessageShowDetails', 'Visa detaljer');
define('MessageHideDetails', 'Göm detaljer');
define('MessageNoSubject', 'Ämne saknas');
// john@gmail.com till nadine@gmail.com
define('MessageForAddr', 'till');
define('SearchClear', 'Rensa sök');
// Search results for "search string" in Inbox folder:
// Search results for "search string" in all mail folders:
define('SearchResultsInFolder', 'Sökresultat för "#s" i #f mapp:');
define('SearchResultsInAllFolders', 'Sökresultat för "#s" i alla mappar:');
define('AutoresponderTitle', 'Autosvar');
define('AutoresponderEnable', 'Aktivera autosvar');
define('AutoresponderSubject', 'Ämne');
define('AutoresponderMessage', 'Meddelande');
define('ReportAutoresponderUpdatedSuccessfuly', 'Autosvar har uppdaterats');
define('FolderQuarantine', 'Karantän');

//calendar
define('EventRepeats', 'Upprepepa');
define('NoRepeats', 'Upprepa Ej');
define('DailyRepeats', 'Dagligen');
define('WorkdayRepeats', 'Varje veckodag (må-fre)');
define('OddDayRepeats', 'Varje må, ons & fre');
define('EvenDayRepeats', 'Varje tisdag & torsdag');
define('WeeklyRepeats', 'Veckovis');
define('MonthlyRepeats', 'Månadsvis');
define('YearlyRepeats', 'Årsvis');
define('RepeatsEvery', 'Upprepa varje');
define('ThisInstance', 'Endast denna instans');
define('AllEvents', 'Alla händelser i serien');
define('AllFollowing', 'Alla följande');
define('ConfirmEditRepeatEvent', 'Vill du ändra denna händelse, alla, eller denna och framtida händelser i serien?');
define('RepeatEventHeaderEdit', 'Ändra återkommande händelse');
define('First', 'Första');
define('Second', 'Andra');
define('Third', 'Tredje');
define('Fourth', 'Fjärde');
define('Last', 'Sista');
define('Every', 'Varje');
define('SetRepeatEventEnd', 'Sätt slutdatum');
define('NoEndRepeatEvent', 'Inget slutdatum');
define('EndRepeatEventAfter', 'Upphör efter');
define('Occurrences', 'Händelser');
define('EndRepeatEventBy', 'Upphör vid');
define('EventCommonDataTab', 'Egenskaper');
define('EventRepeatDataTab', 'Upprepning');
define('RepeatEventNotPartOfASeries', 'Denna händelse har ändrats och ingår inte längre i serien.');
define('UndoRepeatExclusion', 'Ångra ändringar som ingår i serien.');

define('MonthMoreLink', '%d mer...');
define('NoNewSharedCalendars', 'Inga nya kalendrar');
define('NNewSharedCalendars', '%d nya kalendrar funna');
define('OneNewSharedCalendars', '1 ny kalender funnen');
define('ConfirmUndoOneRepeat', 'önskar du återställa denna händelse i serien?');

define('RepeatEveryDayInfin', 'Varje dag');
define('RepeatEveryDayTimes', 'Varje dag, %TIMES% gånger');
define('RepeatEveryDayUntil', 'Varje dag, till %UNTIL%');
define('RepeatDaysInfin', 'Varje %PERIOD% dagar');
define('RepeatDaysTimes', 'Varje %PERIOD% dagar, %TIMES% gånger');
define('RepeatDaysUntil', 'Varje %PERIOD% dagar, till %UNTIL%');

define('RepeatEveryWeekWeekdaysInfin', 'Varje vecka och veckodag');
define('RepeatEveryWeekWeekdaysTimes', 'Varje vecka och veckodag, %TIMES% gånger');
define('RepeatEveryWeekWeekdaysUntil', 'Varje vecka och veckodag till %UNTIL%');
define('RepeatWeeksWeekdaysInfin', 'Varje veckodag, Var %PERIOD%e vecka');
define('RepeatWeeksWeekdaysTimes', 'Var %PERIOD% vecka på veckodag, %TIMES% gånger');
define('RepeatWeeksWeekdaysUntil', 'Var %PERIOD% vecka på veckodag, till %UNTIL%');

define('RepeatEveryWeekInfin', 'Varje veckoa på %DAYS%');
define('RepeatEveryWeekTimes', 'Varje vecka på %DAYS%, %TIMES% gånger');
define('RepeatEveryWeekUntil', 'Varje vecka på %DAYS%, till %UNTIL%');
define('RepeatWeeksInfin', 'Varje %PERIOD% veckor på %DAYS%');
define('RepeatWeeksTimes', 'Varje %PERIOD% veckor på %DAYS%, %TIMES% gånger');
define('RepeatWeeksUntil', 'Varje %PERIOD% veckor på %DAYS%, till %UNTIL%');

define('RepeatEveryMonthDateInfin', 'Varje månad på %DATE%');
define('RepeatEveryMonthDateTimes', 'Varje månad på %DATE%, %TIMES% gånger');
define('RepeatEveryMonthDateUntil', 'Varje månad på %DATE%, until %UNTIL%');
define('RepeatMonthsDateInfin', 'Varje %PERIOD% månad på %DATE%');
define('RepeatMonthsDateTimes', 'Varje %PERIOD% månad på %DATE%, %TIMES% gånger');
define('RepeatMonthsDateUntil', 'Varje %PERIOD% månad på %DATE%, till %UNTIL%');

define('RepeatEveryMonthWDInfin', 'Varje månad på %NUMBER% %DAY%');
define('RepeatEveryMonthWDTimes', 'Varje månad på %NUMBER% %DAY%, %TIMES% gånger');
define('RepeatEveryMonthWDUntil', 'Varje månad på %NUMBER% %DAY%, till %UNTIL%');
define('RepeatMonthsWDInfin', 'Varje %PERIOD% månad på %NUMBER% %DAY%');
define('RepeatMonthsWDTimes', 'Varje %PERIOD% månad på %NUMBER% %DAY%, %TIMES% gånger');
define('RepeatMonthsWDUntil', 'Varje %PERIOD% månad på %NUMBER% %DAY%, till %UNTIL%');

define('RepeatEveryYearDateInfin', 'Varje år på %DATE%');
define('RepeatEveryYearDateTimes', 'Varje år på %DATE%, %TIMES% gånger');
define('RepeatEveryYearDateUntil', 'Varje år på %DATE%, till %UNTIL%');
define('RepeatYearsDateInfin', 'Varje %PERIOD% år på %DATE%');
define('RepeatYearsDateTimes', 'Varje %PERIOD% år på %DATE%, %TIMES% gånger');
define('RepeatYearsDateUntil', 'Varje %PERIOD% år på %DATE%, till %UNTIL%');

define('RepeatEveryYearWDInfin', 'Varje år på %NUMBER% %DAY%');
define('RepeatEveryYearWDTimes', 'Varje år på %NUMBER% %DAY%, %TIMES% gånger');
define('RepeatEveryYearWDUntil', 'Varje år på %NUMBER% %DAY%, till %UNTIL%');
define('RepeatYearsWDInfin', 'Varje %PERIOD% år på %NUMBER% %DAY%');
define('RepeatYearsWDTimes', 'Varje %PERIOD% år på %NUMBER% %DAY%, %TIMES% gånger');
define('RepeatYearsWDUntil', 'Varje %PERIOD% år på %NUMBER% %DAY%, till %UNTIL%');

define('RepeatDescDay', 'dag');
define('RepeatDescWeek', 'vecka');
define('RepeatDescMonth', 'månad');
define('RepeatDescYear', 'år');

// webmail 4.5 contacts
define('WarningUntilDateBlank', 'Vänligen ange slutdatum för upprepning');
define('WarningWrongUntilDate', 'Slutdatum för upprepning måste vara senare än startdatum för upprepning');

define('OnDays', 'dagar');
define('CancelRecurrence', 'Avbryt upprepning');
define('RepeatEvent', 'Upprepa denna händelse');

define('Spellcheck', 'Stavningskontroll');
define('LoginLanguage', 'Språk');
define('LanguageDefault', 'Standard');

// webmail 4.5.x new
define('EmptySpam', 'Töm skräppost');
define('Saving', 'Sparar&hellip;');
define('Sending', 'Skickar&hellip;');
define('LoggingOffFromServer', 'Loggar ut från server&hellip;');

//webmail 4.6
define('PROC_CANT_SET_MSG_AS_SPAM', 'Kan inte markera meddelande(n) som skräppost');
    define('PROC_CANT_SET_MSG_AS_NOTSPAM', 'Kan inte markera meddelande(n) som INTE-skräppost');
define('ExportToICalendar', 'Exportera till iCalendar format');
define('ErrorMaximumUsersLicenseIsExceeded', 'Ditt konto är deaktiverat för att max antal användare enligt licensvillkoren har uppnåtts. Kontakata systemansvarig.');
define('RepliedMessageTitle', 'Besvarat meddelande');
define('ForwardedMessageTitle', 'Vidarebefordrat meddelande');
define('RepliedForwardedMessageTitle', 'Besvarat och vidarebefordrat meddelande');
define('ErrorDomainExist', 'Användaren kan inte skapas eftersom tillhörande domän saknas. Du måste skapa domänen först.');

// webmail 4.7
define('RequestReadConfirmation', 'Begär läs bekräftelse');
define('FolderTypeDefault', 'Standard');
define('ShowFoldersMapping', 'Låt mig välja annan folder som systemfolder (ex.vis MinFolder som Skickat)');
define('ShowFoldersMappingNote', 'Till exempel, för att ändra Skickat till MinFolder, ange "Skickat" som "använd" för "MinFolder".');
define('FolderTypeMapTo', 'använd');

define('ReminderEmailExplanation','Detta meddelande har levererats till din adress %EMAIL% för att du har ställt in påminnelse i din kalender %CALENDAR_NAME%');
define('ReminderOpenCalendar', 'Öppna kalender');

define('AddReminder', 'Påminn mig om denna händelse');
define('AddReminderBefore', 'Påminn mig % före denna händelse');
define('AddReminderAnd', 'och % före');
define('AddReminderAlso', 'och även % före');
define('AddMoreReminder', 'Fler påminnelser');
define('RemoveAllReminders', 'Ta bort alla påminnelser');
define('ReminderNone', 'Inga');
define('ReminderMinutes', 'minuter');
define('ReminderHour', 'timme');
define('ReminderHours', 'timmar');
define('ReminderDay', 'dag');
define('ReminderDays', 'dagar');
define('ReminderWeek', 'vecka');
define('ReminderWeeks', 'veckor');
define('Allday', 'Hela dagen');

define('Folders', 'Mapp');
define('NoSubject', 'Inget ämne');
define('SearchResultsFor', 'Sökresultat för');

define('Back', 'Tillbaka');
define('Next', 'Nästa');
define('Prev', 'Föregående');

define('MsgList', 'Messages');
define('Use24HTimeFormat', 'Use 24 hour time format');
define('UseCalendars', 'Use calendars');
define('Event', 'Event');
define('CalendarSettingsNullLine', 'No calendars');
define('CalendarEventNullLine', 'No events');
define('ChangeAccount', 'Change account');

define('TitleCalendar', 'Calendar');
define('TitleEvent', 'Event');
define('TitleFolders', 'Folders');
define('TitleConfirmation', 'Confirmation');

define('Yes', 'Yes');
define('No', 'No');

define('EditMessage', 'Edit Message');

define('AccountNewPassword', 'New password');
define('AccountConfirmNewPassword', 'Confirm new password');
define('AccountPasswordsDoNotMatch', 'Passwords do not match.');

define('ContactTitle', 'Title');
define('ContactFirstName', 'First name');
define('ContactSurName', 'Surname');
define('ContactNickName', 'Nickname');

define('CaptchaTitle', 'Captcha');
define('CaptchaReloadLink', 'reload');
define('CaptchaError', 'Captcha text is incorrect.');

define('WarningInputCorrectEmails', 'Please specify correct emails.');
define('WrongEmails', 'Incorrect emails:');

define('ConfirmBodySize1', 'Sorry, but text messages are max.');
define('ConfirmBodySize2', 'characters long. Everything beyond the limit will be truncated. Click "Cancel" if you want to edit the message.');
define('BodySizeCounter', 'Counter');
define('InsertImage', 'Insert Image');
define('ImagePath', 'Image Path');
define('ImageUpload', 'Insert');
define('WarningImageUpload', 'The file being attached is not an image. Please choose an image file.');

define('ConfirmExitFromNewMessage', 'Changes will be lost if you leave the page. Would you like to save draft before leaving the page?');

define('SensivityConfidential', 'Please treat this message as Confidential');
define('SensivityPrivate', 'Please treat this message as Private');
define('SensivityPersonal', 'Please treat this message as Personal');

define('ReturnReceiptTopText', 'The sender of this message has asked to be notified when you receive this message.');
define('ReturnReceiptTopLink', 'Click here to notify the sender.');
define('ReturnReceiptSubject', 'Return Receipt (displayed)');
define('ReturnReceiptMailText1', 'This is a Return Receipt for the mail that you sent to');
define('ReturnReceiptMailText2', 'Note: This Return Receipt only acknowledges that the message was displayed on the recipient\'s computer. There is no guarantee that the recipient has read or understood the message contents.');
define('ReturnReceiptMailText3', 'with subject');

define('SensivityMenu', 'Sensitivity');
define('SensivityNothingMenu', 'Nothing');
define('SensivityConfidentialMenu', 'Confidential');
define('SensivityPrivateMenu', 'Private');
define('SensivityPersonalMenu', 'Personal');

define('ErrorLDAPonnect', 'Can\'t connect to ldap server.');

define('MessageSizeExceedsAccountQuota', 'This message size exceeds your account quota.');
define('MessageCannotSent', 'The message cannot be sent.');
define('MessageCannotSaved', 'The message cannot be saved.');

define('ContactFieldTitle', 'Field');
define('ContactDropDownTO', 'TO');
define('ContactDropDownCC', 'CC');
define('ContactDropDownBCC', 'BCC');

// 4.9 
define('NoMoveDelete', 'Message(s) can\'t be moved to Trash. Most likely your message box is full. Should this unmoved message(s) be deleted?');

define('WarningFieldBlank', 'This field cannot be empty.');
define('WarningPassNotMatch', 'Passwords do not match, please check.');
define('PasswordResetTitle', 'Password recovery - step %d');
define('NullUserNameonReset', 'user');
define('IndexResetLink', 'Forgot password?');
define('IndexRegLink', 'Account Registration');

define('RegDomainNotExist', 'Domain does not exist.');
define('RegAnswersIncorrect', 'Answers are incorrect.');
define('RegUnknownAdress', 'Unknown email address.');
define('RegUnrecoverableAccount', 'Password recovery cannot be applied for this email address.');
define('RegAccountExist', 'This address is already used.');
define('RegRegistrationTitle', 'Registration');
define('RegName', 'Name');
define('RegEmail', 'e-mail address');
define('RegEmailDesc', 'For example, myname@domain.com. This information will be used to enter the system.');
define('RegSignMe', 'Remember me');
define('RegSignMeDesc', 'Do not ask for login and password on next login to the system on this PC.');
define('RegPass1', 'Password');
define('RegPass2', 'Repeat password ');
define('RegQuestionDesc', 'Please, provide two secret questions and answers which know only you. In case of password lost you can use these questions in order to recover the password.');
define('RegQuestion1', 'Secret question 1');
define('RegAnswer1', 'Answer 1');
define('RegQuestion2', 'Secret question 2');
define('RegAnswer2', 'Answer 2');
define('RegTimeZone', 'Time zone');
define('RegLang', 'Interface language');
define('RegCaptcha', 'Captcha');
define('RegSubmitButtonValue', 'Register');

define('ResetEmail', 'Please provide your email');
define('ResetEmailDesc', 'Provide emails address used for registration.');
define('ResetCaptcha', 'CAPTCHA');
define('ResetSubmitStep1', 'Send');
define('ResetQuestion1', 'Secret question 1');
define('ResetAnswer1', 'Answer');
define('ResetQuestion2', 'Secret question 2');
define('ResetAnswer2', 'Answer');
define('ResetSubmitStep2', 'Send');

define('ResetTopDesc1Step2', 'Providede email address');
define('ResetTopDesc2Step2', 'Please confirm correctness.');

define('ResetTopDescStep3', 'please specify below new password for your email.');

define('ResetPass1', 'New password');
define('ResetPass2', 'Repeat password');
define('ResetSubmitStep3', 'Send');
define('ResetDescStep4', 'Your password has been changed.');
define('ResetSubmitStep4', 'Return');

define('RegReturnLink', 'Return to login screen');
define('ResetReturnLink', 'Return to login screen');

// Appointments 
define('AppointmentAddGuests', 'Add guests');
define('AppointmentRemoveGuests', 'Cancel Meeting');
define('AppointmentListEmails', 'Enter email addresses separated by commas and press Save');
define('AppointmentParticipants', 'Participants');
define('AppointmentRefuse', 'Refuse');
define('AppointmentAwaitingResponse', 'Awaiting response');
define('AppointmentInvalidGuestEmail', 'The following guest email addresses are invalid:');
define('AppointmentOwner', 'Owner');

define('AppointmentMsgTitleInvite', 'Invite to event.');
define('AppointmentMsgTitleUpdate', 'Event was modified.');
define('AppointmentMsgTitleCancel', 'Event was cancelled.');
define('AppointmentMsgTitleRefuse', 'Guest %guest% is refuse invitation');
define('AppointmentMoreInfo', 'More info');
define('AppointmentOrganizer', 'Organizer');
define('AppointmentEventInformation', 'Event information');
define('AppointmentEventWhen', 'When');
define('AppointmentEventParticipants', 'Participants');
define('AppointmentEventDescription', 'Description');
define('AppointmentEventWillYou', 'Will you participate');
define('AppointmentAdditionalParameters', 'Additional parameters');
define('AppointmentHaventRespond', 'Not responded yet');
define('AppointmentRespondYes', 'I will participate');
define('AppointmentRespondMaybe', 'Not sure yet');
define('AppointmentRespondNo', 'Will not participate');
define('AppointmentGuestsChangeEvent', 'Guests can change event');

define('AppointmentSubjectAddStart', 'You\'ve received invitation to event ');
define('AppointmentSubjectAddFrom', ' from ');
define('AppointmentSubjectUpdateStart', 'Modification of event ');
define('AppointmentSubjectDeleteStart', 'Cancellation of event ');
define('ErrorAppointmentChangeRespond', 'Unable to change appointment respond');
define('SettingsAutoAddInvitation', 'Add invitations into calendar automatically');
define('ReportEventSaved', 'Your event has been saved');
define('ReportAppointmentSaved', ' and notifications were send');
define('ErrorAppointmentSend', 'Can\'t send invitations.');
define('AppointmentEventName', 'Name:');

// End appointments

define('ErrorCantUpdateFilters', 'Can\'t update filters');

define('FilterPhrase', 'If there\'s %field header %condition %string then %action');
define('FiltersAdd', 'Add Filter');
define('FiltersCondEqualTo', 'equal to');
define('FiltersCondContainSubstr', 'containing substring');
define('FiltersCondNotContainSubstr', 'not containing substring');
define('FiltersActionDelete', 'delete message');
define('FiltersActionMove', 'move');
define('FiltersActionToFolder', 'to %folder folder');
define('FiltersNo', 'No filters specified yet');

define('ReminderEmailFriendly', 'reminder');
define('ReminderEventBegin', 'starts at: ');

define('FiltersLoading', 'Loading Filters...');
define('ConfirmMessagesPermanentlyDeleted', 'All messages in this folder will be permanently deleted.');

define('InfoNoNewMessages', 'There are no new messages.');
define('TitleImportContacts', 'Import Contacts');
define('TitleSelectedContacts', 'Selected Contacts');
define('TitleNewContact', 'New Contact');
define('TitleViewContact', 'View Contact');
define('TitleEditContact', 'Edit Contact');
define('TitleNewGroup', 'New Group');
define('TitleViewGroup', 'View Group');

define('AttachmentPending', 'Pending...');
define('AttachmentUploading', 'Uploading...');
define('AttachmentComplete', 'Complete.');
define('AttachmentCancelled', 'Cancelled.');
define('AttachmentStopped', 'Stopped.');
define('AttachmentsUpload', 'Attach Files');
define('AttachmentsUploadPadding', '34');

define('TestButton', 'TEST');
define('AutoCheckMailIntervalLabel', 'Autocheck interval');
define('AutoCheckMailIntervalDisableName', 'Disable');
define('ReportCalendarSaved', 'Calendar has been saved.');

define('ContactSyncError', 'Sync failed');
define('ReportContactSyncDone', 'Sync complete');

define('MobileSyncUrlTitle', 'Mobile sync URL');
define('MobileSyncLoginTitle', 'Mobile sync login');

define('QuickReply', 'Quick Reply');
define('SwitchToFullForm', 'Switch To Full Form');
define('SortFieldDate', 'Date');
define('SortFieldFrom', 'From');
define('SortFieldSize', 'Size');
define('SortFieldSubject', 'Subject');
define('SortFieldFlag', 'Flag');
define('SortFieldAttachments', 'Attachments');
define('SortOrderAscending', 'Ascending');
define('SortOrderDescending', 'Descending');
define('ArrangedBy', 'Arranged by');

define('MessagePaneToRight', 'The message pane is to the right of the message list, rather than below');

define('SettingsTabMobileSync', 'Mobile Sync');

define('MobileSyncContactDataBaseTitle', 'Mobile sync contact database');
define('MobileSyncCalendarDataBaseTitle', 'Mobile sync calendar database');
define('MobileSyncTitleText', 'If you\'d like to synchronize your SyncML-enabled handheld device with WebMail, you can use these parameters.<br />"Mobile Sync URL" specifies path to SyncML Data Synchronization server, "Mobile Sync Login" is your login on SyncML Data Synchronization Server and use your own password upon request. Also, some devices need to specify database name for contact and calendar data.<br />Use "Mobile sync contact database" and "Mobile sync calendar database" respectively.');
define('MobileSyncEnableLabel', 'Enable mobile sync');

define('SearchInputText', 'search');

define('AppointmentEmailExplanation','This message has come to your account %EMAIL% because you was invited to the event by %ORGANAZER%');
