<?php

return [

    /*
   |--------------------------------------------------------------------------
   | All Titles and static string in blade files
   |--------------------------------------------------------------------------
   |
   */

    //menu blade keys

    'dashboard' => 'Dashboard',
    'departments' => 'Departments',
    'clients' => 'Partenaire',
    'projects' => 'Projet',
    'tasks' => 'Tâcles',
    'time_entries' => 'Entrées de temps',
    'reports' => 'Rapport',
    'users' => 'Les membres',
    'roles' => 'Roles',
    'setting' => 'Paramêtre',
    'tags' => 'Mots-Clés',
    'activity_types' => 'Types d\'activités',
    'taxes' => 'Taxes',
    'invoices' => 'Factures',
    'expenses' => 'Dépenses',
    'settings' => 'Reglages',
    'calendar' => 'Calendrier',
    'kanban' => 'basculer',
    'events' => 'Planning',
    'view' => 'Voir',
    'archived_users' =>'Membres archivés',

    'common' => [
        'yes' => 'Oui',
        'no' => 'Non',
        'cancel' => 'Annuler',
        'action' => 'Action',
        'save' => 'Enregistrer',
        'created_at' => 'Crée le',
        'created_by' => 'Crée par',
        'back' => 'Retour',
        'updated_at' => 'Mise à jour par',
        'details' => 'Détails',
        'edit' => 'Editer',
        'delete' => 'Supprimer',
        'view' => 'Aperçu',
        'created_on' => 'Crée le',
        'last_updated' => 'Dernière mise à jour',
        'color' => 'Couleur',
        'description' => 'Description',
        'preview' => 'Précedent',
        'no_matching_records_found' => 'Aucun enregistrements correspondants trouvés.',
        'are_you_sure_delete' => 'Êtes-vous sûr de vouloir supprimer ce',
        'delete_confirm' => 'Veuillez saisir',
        'to_delete_this' => 'pour supprimer ce',
        'sort_by' => 'Trier par',
        'page_size' => 'Taille de la page',
        'today_time_entry_activity' => 'Today Time entry Activity',
        'n/a' => 'non defini',
        'all_rights_reserved_copyright' => 'Tous droits réservés',
        'note' => 'Note',
        'all' => 'Tous',
        'mark_paid' => 'Payé',
        'mark_draft' => 'Brouillon',
        'mark_sent' => 'Envoyé',
        'more' => 'Plus',
        'information' => 'Information',
        'upload' => 'Télécharger',
        'not' => 'Pas',
        'sales' => 'Ventes',
        'list_view' => 'Voir liste',
        'filter' => 'Filtrer',
        'search' => 'Recherche',
        'menu' => 'Menu',
        'showing' => 'Affichage',
        'of' => 'de',
        'entries' => 'entrées',
        'apply' => 'Appliquer',
        'custom' => 'Custom',
    ],

    //client key
    'client' => [
        'department' => 'Département',
        'new_client' => 'Nouveau Partenaire',
        'name' => 'Nom',
        'email' => 'Email',
        'website' => 'Site web',
        'edit_client' => 'Editer Partenaire',
        'no_client_found' => 'Aucun partenaire trouvé',
        'client_details' => 'Détails partenaire',
        'no_client_available' => 'Aucun partenaire disponible',
        'by_deleting_this_client' => 'En supprimant ce client, tous ses projets, tâches, factures et entrées de temps seront supprimés.',
        'delete_client_confirm' => 'Êtes-vous sûr de vouloir supprimer ce partenaire ?',
        'image' => 'image',
        'show_client' => 'Voir Partenaire',
        'want_to_client_panel' => 'Want to create client panel ?',
    ],

    //notification key
    'notification' => [
        'notification_setting' => 'Réglage notification',
        'select_first_notification_time' => 'Sélectionnez l\'heure de la 1ère notification',
        'select_second_notification_time' => 'Sélectionnez l\'heure de la 2ième notification',
        'select_third_notification_time' => 'Sélectionnez l\'heure de la 3ième notification',
        'notifications' => 'Notifications',
        'mark_all_as_read' => 'Tout marquer comme lu',
        'empty_notifications' => 'Aucune notification trouvée',
        'notification_text' => 'Si vous définissez une heure à 01h05, votre notification arrivera dans 1 heure et 5 minutes..',
    ],

    //Department key
    'department' => [
        'new_department' => 'Nouveau département',
        'edit_department' => 'Modifier le département',
        'name' => 'Nom',
        'no_department_found' => 'Aucun département trouvé',
        'no_department_available' => 'Aucun département disponible',
        'department_details' => 'Détails du département',
        'show_department' => 'Afficher le département',
    ],

    //project key
    'project' => [
        'new_project' => 'Nouveau projet',
        'edit_project' => 'Modifier le projet',
        'name' => 'Nom',
        'prefix' => 'Prefix',
        'users' => 'users',
        'client' => 'Partenaire',
        'description' => 'Description',
        'no_project_found' => 'Aucun projet trouvé',
        'project_details' => 'Détails du projet',
        'no_project_available' => 'Aucun projet disponible',
        'delete_project_confirm' => 'Êtes-vous sûr de vouloir supprimer ce projet?',
        'by_deleting_this_project' => 'En supprimant ce projet, toutes ses entrées de tâches, de factures et de temps seront supprimées.',
        'rent' => 'Louer',
        'budget' => 'Budget',
        'budget_type' => ' Type de Budget',
        'show_all' => 'Voir tous',
        'on_going' => 'En cours',
        'finished' => 'Terminé',
        'on_hold' => 'En attente',
        'archived' => 'Archivé',
        'your_projects' => 'Vos Projets',
        'my_projects' => 'Mon projet',
        'project_progress' => 'Avancement du projet',
        'no_task_found_of_project' => 'Aucune tâche en attente disponible pour ce projet',
        'project_overview' => 'Aperçu du projet',
        'members' => 'Membres',
        'summary' => 'Résumé',
        'activity' => 'Activité',
        'no_activity_found_of_project' => 'Aucune activité disponible pour ce projet',
        'edit_assignee' => 'Modifier assignation',
    ],

    //task key
    'task' => [
        'new_task' => 'Nouvelle tâche',
        'edit_task' => 'Modifier la tâche',
        'status' => 'Status',
        'title' => 'Titre',
        'project' => 'Projet',
        'priority' => 'Priorité',
        'assign_to' => 'Assigné à',
        'due_date' => 'Date d\'échéance',
        'tags' => 'Mots-Clés',
        'reporter' => 'Etabli par',
        'no_task_found' => 'Aucune tâche trouvée',
        'task_details' => 'Détails de la tâche',
        'edit_detail' => 'Modifier les détails',
        'assignee' => 'assignation',
        'time_tracking' => 'Suivi du temps',
        'description' => 'Description',
        'attachments' => 'Pièces jointes',
        'comments' => 'Commentaires',
        'no_comments_added_yet' => 'Aucun commentaire ajouté',
        'task_time_entries' => 'Entrées de temps de tâche',
        'user' => 'Membre',
        'start_time' => 'Heure de début',
        'end_time' => 'Heure de fin',
        'duration' => 'Durée',
        'no_time_entries_found_for' => 'Aucune entrée de temps trouvée pour cette tâche',
        'note' => 'Note',
        'activity' => 'Activité',
        'tracked_by' => 'Suivi par',
        'time' => 'Temps',
        'no_task_available' => 'Aucune tâche disponible',
        'recent_tasks' => 'Tâches récentes',
        'older_tasks' => 'Anciennes Tâches',
        'add_time_entry' => 'Nouvelle entrée de temps',
        'start' => 'Commencer',
        'stop' => 'Stop',
        'add_comment' => 'Ajouter commentaire',
        'total_permission' => 'Autorisation totale',
        'open_task' => 'Tâche(s) ouverte(s)',
        'users' => 'User(s)',
        'project_name' => 'Nom du projet',
        'completed' => 'Achevé',
        'pending' => 'En attente',
        'kanban_list' => 'KANBAN List',
        'today' => 'Aujourd\'hui',
        'tomorrow' => 'Demain',
        'estimate_time' => 'Temps estimé',
        'in_hours' => 'Heure',
        'in_days' => 'Jours',
        'days' => 'Jours',
        'reset' => 'Réinitialiser',
        'switch_to_kanban' => 'Basculer',
        'add_task' => 'Ajouter tâche',
        'minutes' => 'Minutes',
    ],

    //Time Entry key
    'time_entry' => [
        'new_time_entry' => 'New Time Entry',
        'edit_time_entry' => 'Edit Time Entry',
        'date' => 'Date',
        'actions' => 'Actions',
        'copy_today_activity' => 'Copier l\'activité d\'aujourd\'hui',
        'user' => 'Membre',
        'project' => 'Projet',
        'task' => 'Tâche',
        'start_time' => 'Heure de début',
        'activity_type' => 'Type d\'activité',
        'end_time' => 'Heure de fin',
        'duration_minutes' => 'Durée (minutes)',
        'duration' => 'Durée',
        'note' => 'Note',
        'type' => 'Type',
        'no_time_entry_found' => 'Aucune entrée de temps trouvée',
        'revers_to_time_entries' => 'Passer aux entrées de temps',
        'time_logged' => 'Temps enregistré',
    ],

    //Report key
    'report' => [
        'new_report' => 'Nouveau rapport',
        'edit_report' => 'Modifier le rapport',
        'name' => 'Nom',
        'start_date' => 'Date de début',
        'end_date' => 'Date de fin',
        'department' => 'Département',
        'client' => 'Partenaire',
        'project' => 'Projet',
        'users' => 'Users',
        'tags' => 'Mots-clés',
        'no_report_found' => 'Aucun rapport trouvé',
        'report_details' => 'Détails du rapport',
        'no_record_available' => 'Aucun enregistrement disponible.',
        'dynamic' => 'Dynamique',
        'static' => 'Statique',
        'no_report_available' => 'Aucun rapport disponible',
        'report_type' => 'Type de rapport',
        'cost_is_calculated_base_on_salary' => 'Le coût est calculé en fonction du salaire.',
        'auto_populate_time_changes' => 'il remplira automatiquement les changements d\'heure dans le rapport.',
        'not_reflect_time_changes' => 'il ne reflétera pas les changements d\'heure une fois généré.',
    ],

    //User key
    'user' => [
        'new_user' => 'Nouveau membre',
        'edit_user' => 'Editer membre',
        'no_user_found' => 'Aucun membre trouvé',
        'name' => 'Nom',
        'phone' => 'Telephone',
        'email' => 'Email',
        'salary' => 'Salaire',
        'new_password' => 'Nouveau mot de passe',
        'confirm_password' => 'Confirmer mot de passe',
        'project' => 'Projet',
        'role' => 'rôle',
        'active' => 'Active',
        'website' => 'site web',
        'is_email_verified' => 'L\'e-mail est-il vérifié ?',
        'change_password' => 'Modifier le mot de passe',
        'change_language' => 'Change Language',
        'language' => 'Language',
        'profile' => 'Profile',
        'logout' => 'Déconnexion',
        'current_password' => 'Mot de passe actuel',
        'edit_profile' => 'Modifier le profil',
        'profile_image' => 'Profil',
        'choose_your_file' => 'Choisissez votre fichier',
        'deactive' => 'Désactivé',
        'email_is_verified' => 'L\'email vérifié',
        'email_is_not_verified' => 'Email non vérifié',
        'user_details' => 'Détails du membre',
        'tasks_active' => 'Tâches actives',
        'by_deleting_this_user' => 'En supprimant cet utilisateur, tous ses projets, tâches, factures et entrées de temps seront supprimés.',
    ],

    //Role key
    'role' => [
        'new_role' => 'Nouveau rôle',
        'edit_role' => 'Modifier le rôle',
        'no_role_found' => 'Aucun rôle trouvé',
        'name' => 'Nom',
        'description' => 'Description',
        'permissions' => 'Permissions',
        'role_details' => 'Détails du rôle',
        'no_role_available' => 'Aucun rôle disponible',
    ],

    //Activity ype key
    'activity_type' => [
        'new_activity_type' => 'Nouveau type d\'activité',
        'edit_activity_type' => 'Modifier le type d\'activité',
        'activity_type' => 'Type d\'activité',
        'no_activity_type_found' => 'Aucun type d\'activité trouvé',
        'no_activity_type_available' => 'Aucun type d\'activité disponible',
    ],

    //Tags ype key
    'tag' => [
        'new_tag' => 'Nouveau mot-clé',
        'edit_tag' => 'Editer mot-clé',
        'bulk_tags' => 'Bulk mot-clé',
        'name' => 'Nom',
        'no_tag_found' => 'Aucun mot-clé trouvé',
        'no_tag_available' => 'Aucun mot-clé disponible',
        'add_bulk_tag' => 'Ajouter Bulk mot-clé',
    ],

    //Taxes key
    'tax' => [
        'new_tax' => 'Nouvelle taxe',
        'edit_tax' => 'Editer taxe',
        'name' => 'Nom',
        'tax' => 'Taxe',
        'no_tax_found' => 'Aucune taxe n\'a été trouvée',
        'no_tax_available' => 'Pas de taxes disponibles',
    ],

    //Status key
    'status' => [
        'new_status' => 'Nouveau statut',
        'edit_status' => 'Modifier le statut',
        'name' => 'Nom',
        'order' => 'Ordre',
        'status' => 'Statut',
        'no_status_found' => 'Pas de statut trouvé',
        'no_status_available' => 'Aucun statut disponible',
    ],

    //Invoice key
    'invoice' => [
        'invoice' => 'facture',
        'new_invoice' => 'Nouvelle facture',
        'invoice_number' => 'Numéro de la facture',
        'invoice_prefix' => 'FACT-',
        'issue_date' => 'Date d\'émission',
        'due_date' => 'Date d\'échéance',
        'project' => 'Projet',
        'notes' => 'Notes',
        'task' => 'Tâche',
        'task_amount' => 'Montant de la tâche',
        'qty' => 'Quantité',
        'client' => 'Partenaire',
        'item' => 'Objet',
        'description' => 'Description',
        'sub_total' => 'Sous-total',
        'total_tax' => 'Total Taxe',
        'total' => 'Total',
        'amount' => 'Montant',
        'tax' => 'Taxe',
        'save_and_send' => 'Sauvegarder et envoyer',
        'paid' => 'Payé',
        'discount' => 'Remise',
        'invoice_details' => 'Détails de la facture',
        'status' => 'Statut',
        'select_task' => 'Sélectionner une tâche',
        'save_as_draft' => 'Enregistrer comme brouillon',
        'invoice_pdf' => 'Facture PDF',
        'invoice_id' => 'Id Facture',
        'company_address' => 'Adresse Entreprise',
        'client_name' => 'Nom Partenaire',
        'client_email' => 'Email Partenaire',
        'invoice_date' => 'Date facture',
        'item_name' => 'Nom de l\'objet',
        'app_name' => 'Nom Application',
        'no_invoice_available' => 'Pas de factures disponibles',
        'edit_invoice' => 'Modifier la facture',
        'no_invoice_found' => 'Pas de facture trouvée',
        'invoice_status_draft' => 'Statut de la facture Brouillon',
        'invoice_status_sent' => 'Statut de la facture envoyée',
        'print_invoice' => 'Imprimer la facture',
        'hours' => 'Heures',
        'create_invoice' => 'Créer une facture',
        'update_invoice' => 'Mise à jour de la facture',
        'invoice_from' => 'Facture de',
        'to' => 'de',
        'discount_apply' => 'Type de remise',
        'invoice_save' => 'Valider',
        'fix_rate' => 'Taux fixe',
        'sent_invoices' => 'Factures envoyées',
    ],

    //expense key
    'expense' => [
        'expense' => 'Frais',
        'new_expense' => 'Nouveau frais',
        'edit_expense' => 'Modifier frais',
        'category' => 'Catégorie',
        'billable' => 'Facturable',
        'finance' => 'Finance',
        'download' => 'Télécharger',
    ],

    //dashboard key
    'dashboard_menu' => [
        'dashboard' => 'Tableau de bord',
        'user_report' => 'Rapport membre',
        'daily_work_report' => 'Rapport de travail quotidien',
        'open_tasks' => 'Tâches ouvertes',
        'project_status' => 'L\'état du projet',
        'invoice_status' => 'Statut de la facture',
        'no_record_found' => 'Aucun enregistrement trouvé',
    ],

    'setting_menu' => [
        'app_name' => 'Nom de l\'Application',
        'company_name' => 'Nom Entreprise',
        'company_email' => 'Email Entreprise',
        'company_phone' => 'Contact Entreprise',
        'address' => 'Adresse',
        'currency' => 'Devise',
        'app_logo' => 'Logo de l\'application',
        'choose' => 'Charger',
        'favicon' => 'Favicon',
        'working_days_of_month' => 'Jours ouvrables du mois',
        'working_hours_of_day' => 'Heures de travail de la journée',
        'general' => 'Général',
        'invoice_template' => 'Modèle de facture',
        'color' => 'Couleur',
        'current_version' => 'Version actuelle',
        'google_recaptcha' => 'Google Recaptcha',
        'show_recaptcha' => 'Afficher Recaptcha',
        'google_recaptcha_site_key' => 'Clé du site',
        'google_recaptcha_secret_key' => 'Code secret',
        'task_status' => 'Statut de la tâche',

    ],

    'activity_log' => [
        'activity_logs' => 'Journaux d\'activité',
        'we_could_find_any_data' => 'Nous n\'avons trouvé aucune donnée',
        'sorry_we_not_find_any_data' => 'Désolé, nous ne trouvons aucune donnée, faites au moins 1 entrée',
        'loading_more_date' => 'Chargement de plus de données',
        'no_more_logs' => 'Plus de journaux',
    ],

    'event' => [
        'new_event' => 'Nouvel évènement',
        'edit_event' => 'Modifier l\'événement',
    ],

    'months' => [
        'jan' => 'Jan',
        'feb' => 'Fev',
        'mar' => 'Mar',
        'apr' => 'Avr',
        'may' => 'Mai',
        'jun' => 'Juin',
        'jul' => 'Juil',
        'aug' => 'Aou',
        'sep' => 'Sep',
        'oct' => 'Oct',
        'nov' => 'Nov',
        'dec' => 'Dec',
    ],

    'weekdays' => [
        'sun' => 'DIM',
        'mon' => 'LUN',
        'tue' => 'MAR',
        'wed' => 'MER',
        'thu' => 'JEU',
        'fri' => 'VEN',
        'sat' => 'SAM',
    ],

    'days' => [
        'today' => 'Aujourd\'hui',
        'this_week' => 'Cette semaine',
        'last_week' => 'La semaine dernière',
        'this_month' => 'Ce mois',
        'last_month' => 'le mois passé',
    ],
];
