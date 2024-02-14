<?php return [
  'plugin' => [
    'tab' => 'Benutzer',
    'access_users' => 'Benutzer verwalten',
    'access_groups' => 'Benutzergruppen verwalten',
    'access_settings' => 'Benutzereinstellungen verwalten',
    'impersonate_user' => 'Als Benutzer einloggen',
  ],
  'location' => [
    'label' => 'Standort',
    'new' => 'Neuer Standort',
    'create_title' => 'Standort anlegen',
    'update_title' => 'Standort bearbeiten',
    'preview_title' => 'Standort ansehen',
  ],
  'locations' => [
    'menu_label' => 'Standorte',
    'menu_description' => 'Verfügbare Benutzer-Standorte und Provinzen verwalten.',
    'hide_disabled' => 'Deaktivierte verbergen',
    'enabled_label' => 'Aktiviert',
    'enabled_help' => 'Deaktivierte Standorte sind im Frontend nicht sichtbar.',
    'enable_or_disable_title' => 'Standorte aktivieren oder deaktivieren',
    'enable_or_disable' => 'Aktivieren oder deaktivieren',
    'selected_amount' => 'Standorte ausgewählt: :amount',
    'enable_success' => 'Standorte erfolgreich aktiviert.',
    'disable_success' => 'Standorte erfolgreich deaktiviert.',
    'disable_confirm' => 'Sind Sie sicher?',
    'list_title' => 'Standorte verwalten',
    'delete_confirm' => 'Möchten Sie diesen Standort wirklich löschen?',
    'return_to_list' => 'Zurück zur Standortliste',
  ],
  'users' => [
    'all_users' => 'Alle Benutzer',
    'new_user' => 'Neuer Benutzer',
    'trashed_hint_title' => 'Benutzer hat sein Konto deaktiviert.',
    'trashed_hint_desc' => 'Dieser Benutzer hat sein Konto deaktiviert und möchte nicht mehr auf der Seite erscheinen. Er kann sein Konto jederzeit durch eine Anmeldung reaktivieren.',
    'banned_hint_title' => 'Benutzer wurde gesperrt.',
    'banned_hint_desc' => 'Dieser Benutzer wurde von einem Adminstrator gesperrt und kann sich somit nicht mehr anmelden.',
    'guest_hint_title' => 'Dieser Benutzer ist ein Gast',
    'guest_hint_desc' => 'Dieser Benutzer ist nur zu Referenzzwecken gespeichert und muss sich vor dem nächsten Login nochmals registrieren.',
    'activate_warning_title' => 'Benutzer nicht aktiviert!',
    'activate_warning_desc' => 'Dieser Benutzer wurde noch nicht aktiviert und kann sich nicht einloggen.',
    'activate_confirm' => 'Möchten Sie diesen Benutzer wirklich aktivieren?',
    'activated_success' => 'Benutzer erfolgreich aktiviert!',
    'activate_manually' => 'Benutzer manuell aktivieren',
    'convert_guest_confirm' => 'Soll dieser Benutzer zu einem Gast umgewandelt werden?',
    'convert_guest_manually' => 'Benutzer zu einem Gast umwandeln',
    'convert_guest_success' => 'Der Benutzer wurde zu einem Gast umgewandelt',
    'impersonate_user' => 'Als Benutzer einloggen',
    'impersonate_confirm' => 'Soll die Anmeldung mit diesem Benutzerkonto erfolgen? Nach der Abmeldung wird die bestehende Sitzung wiederhergestellt.',
    'impersonate_success' => 'Sie sind nun als diesen Benutzer angemeldet',
    'delete_confirm' => 'Möchten Sie diesen Benutzer wirklich löschen?',
    'unban_user' => 'Diesen Benutzer entsperren',
    'unban_confirm' => 'Möchten Sie diesen Benutzer wirklich entsperren?',
    'unbanned_success' => 'Der Benutzer wurde entsperrt',
    'return_to_list' => 'Zurück zur Benutzerliste',
    'update_details' => 'Update details',
    'delete_selected' => 'Ausgewählte löschen',
    'delete_selected_confirm' => 'Ausgewählte Benutzer löschen?',
    'delete_selected_empty' => 'Keine Benutzer zum Löschen ausgewählt.',
    'delete_selected_success' => 'Ausgewählte Benutzer erfolgreich gelöscht.',
    'activate_selected' => 'Ausgewählte aktivieren',
    'activate_selected_confirm' => 'Sollten die ausgewählten Benutzer aktiviert werden?',
    'activate_selected_empty' => 'Es sind keine Benutzer zur Aktivierung ausgewählt.',
    'activate_selected_success' => 'Die ausgewählten Benutzer wurden erfolgreich aktiviert.',
    'deactivate_selected' => 'Ausgewählte deaktivieren',
    'deactivate_selected_confirm' => 'Ausgewählte Benutzer deaktivieren?',
    'deactivate_selected_empty' => 'Es wurden keine Benutzer zum Deaktivieren ausgewählt.',
    'deactivate_selected_success' => 'Ausgewählte Benutzer erfolgreich deaktiviert.',
    'restore_selected' => 'Ausgewählte wiederherstellen',
    'restore_selected_confirm' => 'Ausgewählte Benutzer wiederherstellen?',
    'restore_selected_empty' => 'Es wurden keine Benutzer zum Wiederherstellen ausgewählt.',
    'restore_selected_success' => 'Ausgewählte Benutzer erfolgreich wiederhergestellt.',
    'ban_selected' => 'Ausgewählte sperren',
    'ban_selected_confirm' => 'Ausgewählte Benutzer sperren?',
    'ban_selected_empty' => 'Es wurden keine Benutzer zum Sperren ausgewählt.',
    'ban_selected_success' => 'Ausgewählte Benutzer erfolgreich gesperrt.',
    'unban_selected' => 'Ausgewählte entsperren',
    'unban_selected_confirm' => 'Ausgewählte Benutzer entsperren?',
    'unban_selected_empty' => 'Es wurden keine Benutzer zum Entsperren ausgewählt.',
    'unban_selected_success' => 'Ausgewählte Benutzer erfolgreich entsperrt.',
    'activating' => 'Aktiviere...',
  ],
  'settings' => [
    'users' => 'Benutzer',
    'activation_tab' => 'Aktivierung',
    'signin_tab' => 'Einloggen',
    'registration_tab' => 'Registrierungen',
    'notifications_tab' => 'Benachrichtigungen',
    'allow_registration' => 'Benutzerregistrierung erlauben',
    'allow_registration_comment' => 'Falls dies deaktivert ist, können Benutzer nur von Administratoren erstellt werden.',
    'activate_mode' => 'Aktivierungsmodus',
    'activate_mode_comment' => 'Wählen Sie aus, wie ein Benutzer aktiviert werden soll.',
    'activate_mode_auto' => 'Automatisch',
    'activate_mode_auto_comment' => 'Automatische Aktivierung bei Registrierung.',
    'activate_mode_user' => 'Benutzer',
    'activate_mode_user_comment' => 'Der Benutzer aktiviert seinen eigenes Konto per E-Mail.',
    'activate_mode_admin' => 'Administrator',
    'activate_mode_admin_comment' => 'Nur ein Administrator kann einen Benutzer aktivieren.',
    'require_activation' => 'Anmeldung benötigt Aktivierung',
    'require_activation_comment' => 'Benutzer müssen zum Einloggen ein aktiviertes Konto besitzen.',
    'use_throttle' => 'Anmeldeversuche begrenzen',
    'use_throttle_comment' => 'Bei wiederholten Anmelde-Fehlversuchen wird der Benutzer temporär gesperrt.',
    'block_persistence' => 'Gleichzeitige Anmeldung unterbinden',
    'block_persistence_comment' => 'Wird diese Option aktiviert kann sich ein Benutzer nicht an mehreren Geräten gleichzeitig anmelden.',
    'login_attribute' => 'Anmelde-Attribut-Zuordnung',
    'login_attribute_comment' => 'Wählen Sie, welches Benutzerattribut zum Anmelden verwendet werden soll.',
    'location_tab' => 'Standort',
    'default_country' => 'Standort-Voreinstellung',
    'default_country_comment' => 'Wenn ein Benutzer keinen Standort angibt, wird dieser Standort als Standard gewählt.',
    'default_state' => 'Provinz-Voreinstellung',
    'default_state_comment' => 'Wenn ein Benutzer keinen Standort angibt, wird diese Provinz als Standard gewählt.',
  ],
  'state' => [
    'label' => 'Provinz',
    'name' => 'Name',
    'name_comment' => 'Anzeigenamen für diese Provinz eingeben.',
    'code' => 'Code',
    'code_comment' => 'Eindeutigen Code für diese Provinz eingeben.',
  ],
  'country' => [
    'label' => 'Land',
    'name' => 'Name',
    'code' => 'Code',
    'code_comment' => 'Eindeutigen Code für dieses Land eingeben.',
    'enabled' => 'Aktiv',
  ],
  'user' => [
    'details' => 'Details',
  ],
  'login' => [
    'attribute_email' => 'E-Mail',
    'attribute_username' => 'Benutzername',
  ],
  'account' => [
    'account' => 'Benutzerkonto',
    'account_desc' => 'Benutzerkontoverwaltung.',
    'redirect_to' => 'Weiterleiten nach',
    'redirect_to_desc' => 'Seitenname zum Weiterleiten nach Update, Anmeldung oder Registrierung.',
    'code_param' => 'Aktivierungscode Parameter',
    'code_param_desc' => 'Dieser URL-Parameter wird als Registrierungs-Aktivierungscode verwendet',
    'force_secure' => 'Forciere sichere URLs',
    'force_secure_desc' => 'Verwende für Weiterleitungen immer das HTTPS-Protokoll.',
    'invalid_user' => 'Es wurde kein Benutzer mit diesen Zugangsdaten gefunden.',
    'invalid_activation_code' => 'Ungültiger Aktivierungscode übermittelt',
    'invalid_deactivation_pass' => 'Das eingegebene Passwort war ungültig.',
    'success_activation' => 'Benutzerkonto erfolgreich aktiviert.',
    'success_deactivation' => 'Konto erfolgreich deaktiviert. Schade, dass du gehst!',
    'success_saved' => 'Einstellungen erfolgreich gespeichert!',
    'login_first' => 'Sie müssen sich erst einloggen!',
    'already_active' => 'Ihr Benutzerkonto ist bereits aktiviert!',
    'activation_email_sent' => 'Eine Aktivierungs-E-Mail wurde an Ihre E-Mail-Adresse versendet.',
    'registration_disabled' => 'Registrierungen sind momentan deaktiviert.',
    'sign_in' => 'Anmelden',
    'register' => 'Registrieren',
    'full_name' => 'Name',
    'email' => 'E-Mail',
    'password' => 'Passwort',
    'login' => 'Anmelden',
    'new_password' => 'Neues Passwort',
    'new_password_confirm' => 'Neues Passwort bestätigen',
  ],
  'reset_password' => [
    'reset_password_desc' => 'Formular zum Zurücksetzen des Passworts.',
    'code_param' => 'Reset-Code-Parameter',
    'code_param_desc' => 'URL-Parameter, der für den Reset-Code verwendet wird',
  ],
  'session' => [
    'session' => 'Session',
    'session_desc' => 'Fügt Benutzer-Session zu Seite hinzu und kann Zugriff einschränken.',
    'security_title' => 'Erlauben',
    'security_desc' => 'Wer hat Zugriff auf die Seite?',
    'all' => 'Jeder',
    'users' => 'Benutzer',
    'guests' => 'Gäste',
    'redirect_title' => 'Weiterleiten nach',
    'redirect_desc' => 'Seitenname zum Weiterleiten bei verweigertem Zugriff.',
    'logout' => 'Sie haben sich erfolgreich ausgeloggt!',
  ],
  'group' => [],
  'groups' => [
    'delete_selected_confirm' => 'Willst du die ausgewählten Gruppen wirklich löschen?',
    'delete_confirm' => 'Willst du diese Gruppe wirklich löschen?',
    'delete_selected_success' => 'Ausgewählte Gruppen erfolgreich gelöscht.',
    'delete_selected_empty' => 'Es wurden keine Gruppen zum Löschen ausgewählt.',
    'return_to_list' => 'Zurück zur Gruppenliste',
    'return_to_users' => 'Zurück zur Benutzerliste',
    'preview_title' => 'Vorschau der Benutzergruppe',
  ],
];
