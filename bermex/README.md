## BERMEX — Bureau d'études & recherches multi-expertises

Projet PHP 7 + MySQL (PDO) — site dynamique et responsive avec 3 espaces:

- Grand public: pages institutionnelles, actualités, médias, contact
- E-commerce: vente de services/réalisations (ebooks, données, etc.)
- Espace client: suivi des projets et téléchargements
- Espace administration: gestion complète du contenu et des commandes

### Prérequis

- PHP 7.4+
- MySQL 5.7+/MariaDB 10+
- Extensions: pdo_mysql, mbstring, json, openssl

### Installation rapide

1. Créer la base et l'utilisateur:
   - Importer `database/schema.sql` dans votre MySQL
2. Copier la config et renseigner vos accès:
   - `cp app/config/config.sample.php app/config/config.php`
   - Éditer `app/config/config.php`
3. Lancer en local (serveur PHP):
   - `php -S 0.0.0.0:8080 -t public public/.router.php`
   - Ou via Apache/Nginx en pointant le vhost sur `public/`

Identifiants de démo (après import du jeu de données):
- Admin: admin@bermex.local / admin123
- Client: client@bermex.local / client123

### Structure

```
app/
  config/            # Config appli et DB (PDO)
  core/              # Noyau: Router, Database, Auth, Helpers
  controllers/       # Contrôleurs MVC simples
  models/            # Modèles (requêtes PDO)
  views/             # Vues PHP avec fragments
public/              # DocumentRoot (+ .htaccess, index.php)
assets/              # CSS/JS/images (statiques)
database/            # Schéma SQL et seeds
```

### Sécurité & bonnes pratiques

- Connexions PDO avec requêtes préparées
- Hash des mots de passe: `password_hash()`/`password_verify()`
- Jeton CSRF minimal sur les formulaires sensibles
- Validation côté serveur et échappement de sortie (`h()`)

### Licence
Code d'exemple destiné à servir de base de démarrage pour BERMEX.

