# Calendar - Colle WAC

Ce dépôt contient le travail réalisé durant une après-midi pour la colle **WAC - Calendar**. Le projet consiste à développer des fonctions de gestion de calendrier en PHP.

## Description du Projet

Le but de ce projet est de créer diverses fonctions de gestion d'événements et d'affichage de calendrier en PHP. Le projet se compose de plusieurs étapes, chacune ajoutant de nouvelles fonctionnalités à l'application.

## Étapes

### Étape 1

**Objectif**: Créer une fonction `display_event` pour afficher les détails d'un événement.
- **Prototype**: `void display_event(array $event);`

### Étape 2

**Objectif**: Créer une fonction `display_events_by_month` pour afficher les événements par mois.
- **Prototype**: `void display_events_by_month(array $events);`

### Étape 3

**Objectif**: Créer une fonction `display_events_between_months` pour afficher les événements entre deux mois donnés.
- **Prototype**: `void display_events_between_months(array $events, string $dateBegin, string $dateEnd);`

### Étape 4

**Objectif**: Créer une fonction `display_calendar` pour afficher un calendrier avec le nombre d'événements par jour.
- **Prototype**: `void display_calendar(array $events, string $dateBegin, string $dateEnd);`
