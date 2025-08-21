# Student Blog - Laravel + Filament

Un système de blog moderne développé avec Laravel et Filament pour l'administration.

## 🚀 Technologies Utilisées

- **Laravel 12** - Framework PHP moderne
- **Filament 4** - Interface d'administration élégante
- **MySQL** - Base de données relationnelle
- **Vite** - Bundler moderne pour les assets
- **Tailwind CSS** - Framework CSS utilitaire

## 📋 Prérequis

- PHP 8.2 ou supérieur
- Composer
- MySQL
- Node.js (pour Vite)

## 🛠️ Installation

1. **Cloner le projet**
   ```bash
   git clone [URL_DU_REPO]
   cd student-blog
   ```

2. **Installer les dépendances PHP**
   ```bash
   composer install
   ```

3. **Configurer l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configuration de la base de données**
   
   Modifier le fichier `.env` :
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=xxxx
   DB_USERNAME=xxxx
   DB_PASSWORD=xxxx
   ```

5. **Créer la base de données**
   ```sql
   CREATE DATABASE blog;
   ```

6. **Exécuter les migrations**
   ```bash
   php artisan migrate
   ```

7. **Créer un utilisateur administrateur**
   ```bash
   php artisan make:filament-user
   ```

8. **Démarrer le serveur de développement**
   ```bash
   php artisan serve
   ```

## 🌐 Accès

- **Application principale** : http://127.0.0.1:8000
- **Interface d'administration** : http://127.0.0.1:8000/admin



## 📖 Développement

### Créer un nouvel article de blog

1. Créer le modèle : `php artisan make:model Post -m`
2. Créer la ressource Filament : `php artisan make:filament-resource Post`
3. Configurer les champs dans la ressource
4. Exécuter la migration : `php artisan migrate`

### Personnaliser l'interface Filament

Les ressources Filament se trouvent dans `app/Filament/Admin/Resources/`.

## 🤝 Contribution

Les contributions sont les bienvenues ! N'hésitez pas à ouvrir une issue ou soumettre une pull request.

## 📝 Licence

Ce projet est sous licence MIT.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
