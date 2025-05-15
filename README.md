👨‍💼 Employee Task Management System:

     Employee Task Management System est une application web simple et efficace conçue pour gérer les tâches des employés au sein d'une entreprise. Elle permet à un administrateur de créer des utilisateurs, d'assigner des tâches, et de suivre leur progression, tout en offrant aux employés une interface intuitive pour gérer leurs tâches et recevoir des notifications.

🛠️ Fonctionnalités Principales:

  🔐 Authentification:

      Connexion sécurisée pour administrateurs et employés.
  
  👥 Gestion des Utilisateurs:

      Création, modification et suppression des utilisateurs (par l’administrateur).
  
  ✅ Gestion des Tâches:

      Création et assignation de tâches avec : titre, description, et userID.
      Mise à jour de l’état des tâches par les employés :
      Pending → InProgress → Complet
      Suppression de tâches par l’administrateur.
      Filtrage des tâches par statut (à venir).
  
  🔔 Notifications:

  Lorsqu'une tâche est assignée à un employé :

  ➤ Nouvelle tâche assignée

     Lorsqu'une tâche est complétée par un employé :

  ➤ L'utilisateur [userID], [nomUtilisateur] a terminé la tâche [taskID], [titre]
  
  📊 Suivi des États:

      Diagramme d'état pour les tâches :
      Non Créée → Pending → InProgress → Complet

📦 Technologies Utilisées:

    Frontend : HTML, CSS, JavaScript
    Backend : PHP 7.4+
    Base de Données : MySQL 5.7+
    Serveur Web : Apache (via XAMPP recommandé)
    Conception UML : Diagrammes générés avec PlantUML

📂 Structure du Projet:

    employee_task_management_sys/
    ├── index.php            # Page principale (connexion)
    ├── add_user.php         # Script d'ajout d'utilisateurs
    ├── add_task.php         # Script d'ajout de tâches
    ├── edit_task.php        # Script de modification des états
    ├── delete_task.php      # Script de suppression des tâches
    ├── notifications.php    # Gestion des notifications
    ├── config.php           # Connexion à la base de données
    └── style.css            # Feuille de style

🚀 Comment Exécuter le Projet:

  1. Cloner le dépôt:

     git clone https://github.com/Pablo-100/employee_task_management_sys.git
     
  3. Configurer la base de données MySQL:

     Créer une base de données.
     Ajouter les tables utilisateurs, tâches et notifications.
     (Le fichier schema.sql sera ajouté prochainement.)
  
  4. Modifier config.php:

     Mettre à jour avec vos identifiants MySQL (host, user, password, DB name).
  
  5. Lancer l'application:

     Ouvrir avec XAMPP, Laragon, ou un autre serveur Apache+MySQL.
     Naviguer vers http://localhost/employee_task_management_sys/index.php

📌 Objectif Pédagogique:

    Ce projet vise à renforcer les compétences en :
    Programmation côté serveur avec PHP
    Manipulation de données (CRUD) avec MySQL
    Création d’interfaces web dynamiques avec HTML/CSS/JS
    




