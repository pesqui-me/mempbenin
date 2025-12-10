# 🏛️ MEMP BÉNIN - Documentation Complète du Projet

## 📋 TABLE DES MATIÈRES

1. [Vue d'ensemble du projet](#vue-densemble-du-projet)
2. [Architecture et stack technique](#architecture-et-stack-technique)
3. [Standards et bonnes pratiques](#standards-et-bonnes-pratiques)
4. [Design system et charte graphique](#design-system-et-charte-graphique)
5. [Structure de l'application](#structure-de-lapplication)
6. [Modules et fonctionnalités](#modules-et-fonctionnalités)
7. [Sécurité et permissions](#sécurité-et-permissions)
8. [Base de données](#base-de-données)
9. [Frontend et UX](#frontend-et-ux)
10. [Conventions de code](#conventions-de-code)

---

## 🎯 VUE D'ENSEMBLE DU PROJET

### Contexte

**Projet :** Refonte complète du site web du Ministère des Enseignements Maternel et Primaire (MEMP) de la République du Bénin

**Objectif :** Créer une plateforme web moderne, professionnelle et évolutive comprenant :
- Un espace public (frontend) pour les citoyens
- Un espace d'administration complet (backend) pour la gestion du contenu
- Un système d'authentification robuste avec gestion des rôles et permissions

### Principes directeurs

1. **Qualité avant rapidité** : Code propre, maintenable et bien documenté
2. **Uniformité totale** : Un seul pattern pour chaque fonctionnalité
3. **Évolutivité** : Architecture modulaire et scalable
4. **Professionnalisme** : Design gouvernemental, interface élégante
5. **Performance** : Code optimisé, assets minifiés, lazy loading

### Philosophie du projet

- ✅ **DRY (Don't Repeat Yourself)** : Pas de duplication de code
- ✅ **SOLID principles** : Architecture orientée objet propre
- ✅ **Convention over configuration** : Suivre les standards Laravel
- ✅ **Mobile-first** : Responsive dès la conception
- ✅ **Accessibility** : Conformité WCAG AA

---

## 🏗️ ARCHITECTURE ET STACK TECHNIQUE

### Stack principal

```yaml
Backend:
  Framework: Laravel 12.x
  PHP: 8.3+
  Base de données: MySQL 8.0+
  
Frontend:
  CSS Framework: Bootstrap 5.3
  JavaScript: Alpine.js 3.x
  Icons: Lucide Icons
  
Build Tools:
  Asset Bundler: Vite
  Package Manager: NPM
  
Packages Laravel:
  - spatie/laravel-permission (rôles et permissions)
  - spatie/laravel-medialibrary (gestion médias)
  - spatie/laravel-activitylog (audit trail)
  - spatie/laravel-sluggable (slugs automatiques)
  
Packages JavaScript:
  - lucide@latest (icônes SVG)
  - chart.js@4.x (graphiques)
  - sortablejs@latest (drag & drop)
  - choices.js@latest (selects avancés)
  - flatpickr@latest (date/time picker)
  - tinymce@latest (éditeur WYSIWYG)
  - toastify-js@latest (notifications)
```

### Architecture de l'application

```
┌─────────────────────────────────────────────┐
│           FRONTEND PUBLIC                   │
│  (Bootstrap 5 + Alpine.js)                 │
│  - Actualités                              │
│  - Communiqués                             │
│  - Pages institutionnelles                 │
│  - Vérifications (inscriptions, résultats) │
└─────────────────────────────────────────────┘
                    ↕
┌─────────────────────────────────────────────┐
│           BACKEND ADMIN                     │
│  (Bootstrap 5 + Alpine.js + Lucide)       │
│  - Dashboard avec analytics                │
│  - CRUD complet (Posts, Communiqués, etc.) │
│  - Gestion utilisateurs et permissions     │
│  - Médiathèque                             │
│  - Paramètres système                      │
│  - Audit trail                             │
└─────────────────────────────────────────────┘
                    ↕
┌─────────────────────────────────────────────┐
│              API LAYER                      │
│  (Laravel Controllers + Form Requests)     │
│  - Validation                              │
│  - Authorization (Policies)                │
│  - Business Logic (Services)               │
└─────────────────────────────────────────────┘
                    ↕
┌─────────────────────────────────────────────┐
│           DATABASE LAYER                    │
│  (Eloquent ORM + Relationships)            │
│  - Models                                  │
│  - Migrations                              │
│  - Seeders                                 │
└─────────────────────────────────────────────┘
```

---

## 📐 STANDARDS ET BONNES PRATIQUES

### 1. Convention de nommage

```php
// Classes : PascalCase
class PostController {}
class PostCategory {}

// Méthodes : camelCase
public function getPublishedPosts() {}

// Variables : camelCase
$publishedPosts = [];
$categoryName = 'Actualités';

// Constantes : SCREAMING_SNAKE_CASE
const MAX_UPLOAD_SIZE = 5242880;

// Routes : kebab-case
Route::get('posts-by-category/{slug}');

// Vues : kebab-case avec points
resources/views/admin/posts/index.blade.php

// Tables : snake_case pluriel
posts, post_categories, user_roles

// Colonnes : snake_case
created_at, is_published, views_count

// Relations Eloquent
public function author() {} // belongsTo
public function posts() {} // hasMany
public function categories() {} // belongsToMany
```

### 2. Pattern Blade à utiliser : COMPOSANTS BLADE

**❌ NE PAS utiliser :**
- `@extends` / `@section` (ancien système)
- Mélange des deux systèmes

**✅ TOUJOURS utiliser :**
- Composants Blade anonymes : `<x-layout>`
- Props et slots pour la flexibilité

**Exemple de structure :**

```blade
{{-- resources/views/components/admin-layout.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin' }} - MEMP</title>
    @vite(['resources/css/admin.css', 'resources/js/admin.js'])
</head>
<body>
    <x-admin.header />
    <x-admin.sidebar />
    
    <main class="admin-content">
        {{ $slot }}
    </main>
    
    <x-admin.footer />
</body>
</html>

{{-- resources/views/admin/posts/index.blade.php --}}
<x-admin-layout>
    <x-slot:title>Gestion des actualités</x-slot>
    
    <div class="page-header">
        <h1>Actualités</h1>
    </div>
    
    {{-- Contenu de la page --}}
</x-admin-layout>
```

### 3. Architecture MVC stricte

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/           # Controllers admin uniquement
│   │   └── Guest/           # Controllers frontend public
│   ├── Requests/            # Form validation
│   └── Middleware/
├── Models/                  # Eloquent models
├── Services/                # Business logic
├── Policies/                # Authorization logic
└── Repositories/            # Data access (si nécessaire)
```

**Exemple de flux :**

```php
// 1. Route
Route::post('admin/posts', [PostController::class, 'store']);

// 2. Controller (léger, délègue la logique)
class PostController extends Controller
{
    public function store(StorePostRequest $request, PostService $service)
    {
        $post = $service->createPost($request->validated());
        
        return redirect()
            ->route('admin.posts.show', $post)
            ->with('success', 'Post créé avec succès');
    }
}

// 3. Form Request (validation)
class StorePostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:post_categories,id',
        ];
    }
}

// 4. Service (business logic)
class PostService
{
    public function createPost(array $data): Post
    {
        DB::beginTransaction();
        try {
            $post = Post::create($data);
            $post->addMediaFromRequest('image')->toMediaCollection('featured');
            activity()->performedOn($post)->log('created');
            
            DB::commit();
            return $post;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
```

### 4. Gestion des assets avec Vite

```javascript
// vite.config.js
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/guest.css',
                'resources/css/admin.css',
                'resources/js/guest.js',
                'resources/js/admin.js',
            ],
            refresh: true,
        }),
    ],
});
```

### 5. Structure des services

```php
// app/Services/PostService.php
namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostService
{
    public function createPost(array $data): Post
    {
        // Business logic here
    }
    
    public function updatePost(Post $post, array $data): Post
    {
        // Business logic here
    }
    
    public function publishPost(Post $post): Post
    {
        // Business logic here
    }
}
```

---

## 🎨 DESIGN SYSTEM ET CHARTE GRAPHIQUE

### Charte gouvernementale Benin64

**Couleurs officielles :**

```css
:root {
    /* Couleurs Primaires */
    --primary: #1B58A2;           /* Bleu institutionnel */
    --primary-dark: #0d3a6d;      /* Bleu foncé hover */
    --primary-light: #4a7bb8;     /* Bleu clair */
    
    /* Couleurs Secondaires Benin */
    --secondary: #0065A1;         /* Bleu accent */
    --success: #008859;           /* Vert Benin */
    --warning: #FFE11B;           /* Jaune Benin */
    --danger: #D90E15;            /* Rouge Benin */
    --info: #79A7CF;              /* Bleu clair */
    
    /* Couleurs Neutres */
    --dark: #003366;              /* Bleu très foncé */
    --light: #f8f9fa;
    --white: #ffffff;
    --gray-100: #f8f9fa;
    --gray-200: #e9ecef;
    --gray-300: #dee2e6;
    --gray-400: #ced4da;
    --gray-500: #adb5bd;
    --gray-600: #6c757d;
    --gray-700: #495057;
    --gray-800: #343a40;
    --gray-900: #212529;
    
    /* Gradients */
    --gradient-primary: linear-gradient(135deg, #1B58A2 0%, #0065A1 100%);
    --gradient-success: linear-gradient(135deg, #008859 0%, #4EAE33 100%);
    --gradient-warning: linear-gradient(135deg, #FFE11B 0%, #ffd700 100%);
    --gradient-danger: linear-gradient(135deg, #D90E15 0%, #a00a10 100%);
}
```

**Typographie :**

```css
:root {
    /* Fonts */
    --font-primary: 'Segoe UI', system-ui, -apple-system, sans-serif;
    --font-mono: 'Monaco', 'Consolas', monospace;
    
    /* Tailles */
    --text-xs: 0.75rem;      /* 12px */
    --text-sm: 0.875rem;     /* 14px */
    --text-base: 1rem;       /* 16px */
    --text-lg: 1.125rem;     /* 18px */
    --text-xl: 1.25rem;      /* 20px */
    --text-2xl: 1.5rem;      /* 24px */
    --text-3xl: 1.875rem;    /* 30px */
    --text-4xl: 2.25rem;     /* 36px */
    
    /* Poids */
    --font-light: 300;
    --font-normal: 400;
    --font-medium: 500;
    --font-semibold: 600;
    --font-bold: 700;
}
```

**Espacements et layout :**

```css
:root {
    /* Spacing Scale */
    --spacing-1: 0.25rem;    /* 4px */
    --spacing-2: 0.5rem;     /* 8px */
    --spacing-3: 0.75rem;    /* 12px */
    --spacing-4: 1rem;       /* 16px */
    --spacing-5: 1.25rem;    /* 20px */
    --spacing-6: 1.5rem;     /* 24px */
    --spacing-8: 2rem;       /* 32px */
    --spacing-10: 2.5rem;    /* 40px */
    --spacing-12: 3rem;      /* 48px */
    
    /* Border Radius */
    --radius-sm: 0.25rem;    /* 4px */
    --radius-md: 0.375rem;   /* 6px */
    --radius-lg: 0.5rem;     /* 8px */
    --radius-xl: 0.75rem;    /* 12px */
    --radius-2xl: 1rem;      /* 16px */
    --radius-full: 9999px;
    
    /* Shadows */
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    
    /* Layout */
    --sidebar-width: 260px;
    --header-height: 64px;
    --content-max-width: 1400px;
}
```

### Composants UI standardisés

**Boutons (avec états Material Design) :**

```html
<!-- Primary Button -->
<button class="btn btn-primary">
    <i data-lucide="plus"></i>
    <span>Ajouter</span>
</button>

<!-- États: default, hover, active, disabled, loading -->
```

**Cards :**

```html
<div class="card card-elevated">
    <div class="card-header">
        <h3 class="card-title">Titre</h3>
        <div class="card-actions">
            <button class="btn btn-icon btn-ghost">
                <i data-lucide="more-vertical"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        Contenu
    </div>
    <div class="card-footer">
        Actions
    </div>
</div>
```

**Tables :**

```html
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" class="form-check-input">
                </th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>...</td>
            </tr>
        </tbody>
    </table>
</div>
```

### Icônes : Lucide uniquement

```javascript
// Utilisation systématique de Lucide
<i data-lucide="icon-name" width="20" height="20"></i>

// Initialisation
lucide.createIcons();
```

**Icônes principales :**
- Dashboard : `layout-dashboard`
- Posts : `file-text`
- Communiqués : `megaphone`
- Users : `users`
- Settings : `settings`
- Media : `image`
- Categories : `folder`
- Plus : `plus`, `plus-circle`
- Edit : `edit`, `pencil`
- Delete : `trash-2`
- Eye : `eye`
- Search : `search`

---

## 🏢 STRUCTURE DE L'APPLICATION

### Structure des dossiers

```
memp/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   │   ├── DashboardController.php
│   │   │   │   ├── PostController.php
│   │   │   │   ├── CommuniqueController.php
│   │   │   │   ├── CategoryController.php
│   │   │   │   ├── UserController.php
│   │   │   │   ├── RoleController.php
│   │   │   │   ├── MediaController.php
│   │   │   │   └── SettingController.php
│   │   │   └── Guest/
│   │   │       ├── HomeController.php
│   │   │       ├── PostController.php
│   │   │       └── CommuniqueController.php
│   │   ├── Requests/
│   │   │   └── Admin/
│   │   │       ├── StorePostRequest.php
│   │   │       └── UpdatePostRequest.php
│   │   └── Middleware/
│   ├── Models/
│   │   ├── Post.php
│   │   ├── Communique.php
│   │   ├── PostCategory.php
│   │   └── User.php
│   ├── Services/
│   │   ├── PostService.php
│   │   ├── CommuniqueService.php
│   │   └── MediaService.php
│   └── Policies/
│       ├── PostPolicy.php
│       └── CommuniquePolicy.php
├── database/
│   ├── migrations/
│   ├── seeders/
│   │   ├── RoleAndPermissionSeeder.php
│   │   ├── CategorySeeder.php
│   │   └── AdminUserSeeder.php
│   └── factories/
├── resources/
│   ├── views/
│   │   ├── components/
│   │   │   ├── admin-layout.blade.php
│   │   │   ├── guest-layout.blade.php
│   │   │   └── admin/
│   │   │       ├── header.blade.php
│   │   │       ├── sidebar.blade.php
│   │   │       ├── footer.blade.php
│   │   │       ├── button.blade.php
│   │   │       ├── card.blade.php
│   │   │       └── table.blade.php
│   │   ├── admin/
│   │   │   ├── dashboard.blade.php
│   │   │   ├── posts/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── create.blade.php
│   │   │   │   ├── edit.blade.php
│   │   │   │   └── show.blade.php
│   │   │   ├── communiques/
│   │   │   ├── categories/
│   │   │   ├── users/
│   │   │   ├── roles/
│   │   │   ├── media/
│   │   │   └── settings/
│   │   └── guest/
│   │       ├── home/
│   │       ├── posts/
│   │       └── communiques/
│   ├── css/
│   │   ├── admin.css
│   │   ├── guest.css
│   │   └── components.css
│   └── js/
│       ├── admin.js
│       └── guest.js
├── public/
│   └── assets/
│       ├── admin/
│       │   ├── css/
│       │   └── js/
│       ├── guest/
│       │   ├── css/
│       │   └── js/
│       └── common/
│           └── images/
│               ├── identity/ (logo, favicon)
│               └── partners/
├── routes/
│   ├── web.php
│   ├── admin.php (routes admin groupées)
│   └── guest.php (routes public groupées)
└── tests/
    ├── Feature/
    │   ├── Admin/
    │   └── Guest/
    └── Unit/
```

---

## 🎯 MODULES ET FONCTIONNALITÉS

### 1. Authentification (Laravel Breeze)

**Installation :**
```bash
composer require laravel/breeze --dev
php artisan breeze:install blade
npm install && npm run dev
```

**Fonctionnalités :**
- ✅ Login / Logout
- ✅ Register
- ✅ Forgot Password / Reset Password
- ✅ Email Verification
- ✅ Profile management
- ✅ Password confirmation

**Middleware à utiliser :**
```php
// Routes protégées
Route::middleware(['auth', 'verified'])->group(...);

// Routes guest uniquement
Route::middleware('guest')->group(...);
```

### 2. Gestion des rôles et permissions (Spatie Permission)

**Installation :**
```bash
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan migrate
```

**Rôles prédéfinis :**
1. **Super Admin** : Tous les droits
2. **Admin** : Gestion complète du contenu
3. **Éditeur** : Création et édition de contenu
4. **Modérateur** : Validation et publication
5. **Contributeur** : Création de brouillons uniquement
6. **Lecteur** : Consultation uniquement

**Permissions par module :**
```php
// Posts
'posts.view', 'posts.create', 'posts.edit', 'posts.delete', 'posts.publish'

// Communiqués
'communiques.view', 'communiques.create', 'communiques.edit', 'communiques.delete'

// Utilisateurs
'users.view', 'users.create', 'users.edit', 'users.delete'

// Catégories
'categories.view', 'categories.create', 'categories.edit', 'categories.delete'

// Médias
'media.view', 'media.upload', 'media.delete'

// Paramètres
'settings.view', 'settings.edit'
```

**Utilisation dans le code :**
```php
// Model
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
}

// Controller
public function index()
{
    $this->authorize('posts.view');
    // ou
    abort_unless(auth()->user()->can('posts.view'), 403);
}

// Blade
@can('posts.create')
    <a href="{{ route('admin.posts.create') }}">Créer</a>
@endcan

// Policy
public function update(User $user, Post $post)
{
    return $user->can('posts.edit') && $user->id === $post->author_id;
}
```

### 3. Audit trail (Spatie Activity Log)

**Installation :**
```bash
composer require spatie/laravel-activitylog
php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider"
php artisan migrate
```

**Utilisation :**
```php
// Dans les models
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Post extends Model
{
    use LogsActivity;
    
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'content', 'status'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }
}

// Log manuel
activity()
    ->performedOn($post)
    ->causedBy(auth()->user())
    ->withProperties(['old' => $oldData, 'new' => $newData])
    ->log('Post updated');

// Récupération
$activities = Activity::where('subject_type', Post::class)
    ->where('subject_id', $post->id)
    ->latest()
    ->get();
```

### 4. Gestion des médias (Spatie Media Library)

**Installation :**
```bash
composer require spatie/laravel-medialibrary
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider"
php artisan migrate
```

**Configuration :**
```php
// Dans les models
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->width(300)
                    ->height(300)
                    ->sharpen(10);
                    
                $this->addMediaConversion('large')
                    ->width(1200)
                    ->height(800)
                    ->sharpen(10);
            });
            
        $this->addMediaCollection('gallery')
            ->acceptsMimeTypes(['image/jpeg', 'image/png']);
            
        $this->addMediaCollection('documents')
            ->acceptsMimeTypes(['application/pdf']);
    }
}

// Upload
$post->addMedia($request->file('image'))
    ->toMediaCollection('featured');

// Récupération
$post->getFirstMediaUrl('featured', 'thumb');
$post->getMedia('gallery');

// Blade
<img src="{{ $post->getFirstMediaUrl('featured', 'large') }}" 
     alt="{{ $post->title }}">
```

### 5. Slugs automatiques (Spatie Sluggable)

**Installation :**
```bash
composer require spatie/laravel-sluggable
```

**Configuration :**
```php
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasSlug;
    
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
```

---

## 🔒 SÉCURITÉ ET PERMISSIONS

### Middleware à utiliser

```php
// Routes admin
Route::middleware(['auth', 'verified', 'role:admin|editor'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Routes ici
    });

// Protection individuelle
Route::get('posts', [PostController::class, 'index'])
    ->middleware('permission:posts.view');
```

### Authorization dans les controllers

```php
class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }
    
    // OU authorization manuelle
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        // ...
    }
}
```

### Policies

```php
// app/Policies/PostPolicy.php
namespace App\Policies;

class PostPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('posts.view');
    }
    
    public function create(User $user): bool
    {
        return $user->can('posts.create');
    }
    
    public function update(User $user, Post $post): bool
    {
        return $user->can('posts.edit') && 
               ($user->id === $post->author_id || $user->hasRole('admin'));
    }
    
    public function delete(User $user, Post $post): bool
    {
        return $user->can('posts.delete') && 
               ($user->id === $post->author_id || $user->hasRole('admin'));
    }
}
```

### CSRF Protection

```blade
{{-- Toujours inclure dans les formulaires --}}
<form method="POST" action="{{ route('admin.posts.store') }}">
    @csrf
    {{-- Champs du formulaire --}}
</form>

{{-- Pour DELETE/PUT --}}
<form method="POST" action="{{ route('admin.posts.destroy', $post) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
```

---

## 🗄️ BASE DE DONNÉES

### Structure des tables principales

```sql
-- Users
users (
    id, name, email, email_verified_at, password, 
    remember_token, created_at, updated_at
)

-- Posts
posts (
    id, title, slug, content, excerpt, 
    category_id, author_id, featured_image,
    status, is_featured, is_pinned, allow_comments,
    views_count, reading_time, published_at,
    created_at, updated_at, deleted_at
)

-- Post Categories
post_categories (
    id, name, slug, description, 
    color, order, is_active,
    created_at, updated_at
)

-- Communiqués
communiques (
    id, title, slug, reference, content, 
    author_id, status, is_featured, priority,
    views_count, published_at,
    created_at, updated_at, deleted_at
)

-- Media (Spatie)
media (
    id, model_type, model_id, uuid, collection_name,
    name, file_name, mime_type, disk, size,
    manipulations, custom_properties, responsive_images,
    order_column, created_at, updated_at
)

-- Roles & Permissions (Spatie)
roles (id, name, guard_name, created_at, updated_at)
permissions (id, name, guard_name, created_at, updated_at)
model_has_roles (role_id, model_type, model_id)
model_has_permissions (permission_id, model_type, model_id)
role_has_permissions (permission_id, role_id)

-- Activity Log (Spatie)
activity_log (
    id, log_name, description, subject_type, subject_id,
    causer_type, causer_id, properties, batch_uuid,
    event, created_at, updated_at
)
```

### Relations Eloquent

```php
// User
public function posts() { return $this->hasMany(Post::class, 'author_id'); }
public function communiques() { return $this->hasMany(Communique::class, 'author_id'); }

// Post
public function author() { return $this->belongsTo(User::class, 'author_id'); }
public function category() { return $this->belongsTo(PostCategory::class, 'category_id'); }

// PostCategory
public function posts() { return $this->hasMany(Post::class, 'category_id'); }

// Communique
public function author() { return $this->belongsTo(User::class, 'author_id'); }
```

### Scopes utiles

```php
// Post Model
public function scopePublished($query)
{
    return $query->where('status', 'published')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now());
}

public function scopeFeatured($query)
{
    return $query->where('is_featured', true);
}

public function scopePinned($query)
{
    return $query->where('is_pinned', true);
}

// Usage
Post::published()->featured()->latest('published_at')->get();
```

---

## 🎨 FRONTEND ET UX

### Responsive breakpoints

```css
/* Mobile First */
/* Base: < 576px (mobile) */

@media (min-width: 576px) {
    /* Small devices (landscape phones) */
}

@media (min-width: 768px) {
    /* Medium devices (tablets) */
}

@media (min-width: 992px) {
    /* Large devices (desktops) */
}

@media (min-width: 1200px) {
    /* Extra large devices (large desktops) */
}

@media (min-width: 1400px) {
    /* XXL devices (larger desktops) */
}
```

### Bibliothèques JavaScript à utiliser

**1. Alpine.js (réactivité légère)**
```javascript
// Exemple dropdown
<div x-data="{ open: false }">
    <button @click="open = !open">Menu</button>
    <div x-show="open" @click.away="open = false">
        Contenu du menu
    </div>
</div>

// Exemple modal
<div x-data="{ show: false }">
    <button @click="show = true">Ouvrir</button>
    <div x-show="show" x-transition>
        <div class="modal">...</div>
    </div>
</div>
```

**2. Chart.js (graphiques)**
```javascript
const ctx = document.getElementById('myChart');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Fév', 'Mar'],
        datasets: [{
            label: 'Vues',
            data: [12, 19, 15],
            borderColor: '#1B58A2'
        }]
    }
});
```

**3. SortableJS (drag & drop)**
```javascript
const el = document.getElementById('sortable-list');
Sortable.create(el, {
    animation: 150,
    handle: '.drag-handle',
    onEnd: function (evt) {
        // Sauvegarder le nouvel ordre
        updateOrder(evt.oldIndex, evt.newIndex);
    }
});
```

**4. Choices.js (selects avancés)**
```javascript
const element = document.querySelector('.js-choice');
const choices = new Choices(element, {
    searchEnabled: true,
    removeItemButton: true,
    placeholder: true,
    placeholderValue: 'Sélectionnez...'
});
```

**5. Flatpickr (date/time picker)**
```javascript
flatpickr('.datepicker', {
    dateFormat: 'd/m/Y',
    locale: 'fr'
});

flatpickr('.datetimepicker', {
    enableTime: true,
    dateFormat: 'd/m/Y H:i',
    time_24hr: true
});
```

**6. TinyMCE (éditeur WYSIWYG)**
```javascript
tinymce.init({
    selector: '.wysiwyg-editor',
    height: 500,
    menubar: false,
    plugins: [
        'advlist', 'autolink', 'lists', 'link', 'image', 
        'charmap', 'preview', 'searchreplace', 'code',
        'insertdatetime', 'media', 'table', 'help'
    ],
    toolbar: 'undo redo | formatselect | bold italic | \
              alignleft aligncenter alignright alignjustify | \
              bullist numlist outdent indent | link image media | removeformat help',
    content_style: 'body { font-family:Segoe UI,Arial,sans-serif; font-size:14px }',
    language: 'fr_FR'
});
```

**7. Toastify (notifications)**
```javascript
Toastify({
    text: "Enregistrement réussi !",
    duration: 3000,
    gravity: "top",
    position: "right",
    backgroundColor: "#008859",
}).showToast();

// Erreur
Toastify({
    text: "Une erreur s'est produite",
    backgroundColor: "#D90E15",
}).showToast();
```

### Animations et transitions

```css
/* Transitions fluides */
.transition-all {
    transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
}

/* Hover effects */
.card:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

/* Loading spinner */
@keyframes spin {
    to { transform: rotate(360deg); }
}

.spinner {
    animation: spin 0.6s linear infinite;
}
```

---

## 📝 CONVENTIONS DE CODE

### PHP (PSR-12)

```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function __construct(
        private PostService $postService
    ) {
        $this->authorizeResource(Post::class, 'post');
    }
    
    public function index(): View
    {
        $posts = Post::with(['author', 'category'])
            ->latest()
            ->paginate(15);
            
        return view('admin.posts.index', compact('posts'));
    }
    
    public function store(StorePostRequest $request): RedirectResponse
    {
        $post = $this->postService->createPost($request->validated());
        
        return redirect()
            ->route('admin.posts.show', $post)
            ->with('success', 'Post créé avec succès');
    }
}
```

### Blade (composants)

```blade
{{-- Composant réutilisable --}}
{{-- resources/views/components/admin/card.blade.php --}}
@props([
    'title' => null,
    'elevated' => false,
])

<div {{ $attributes->merge(['class' => 'card' . ($elevated ? ' card-elevated' : '')]) }}>
    @if($title)
        <div class="card-header">
            <h3 class="card-title">{{ $title }}</h3>
        </div>
    @endif
    
    <div class="card-body">
        {{ $slot }}
    </div>
</div>

{{-- Utilisation --}}
<x-admin.card title="Statistiques" elevated>
    <p>Contenu de la carte</p>
</x-admin.card>
```

### JavaScript (ES6+)

```javascript
// Utiliser const/let, pas var
const API_URL = '/api/posts';
let posts = [];

// Arrow functions
const fetchPosts = async () => {
    try {
        const response = await fetch(API_URL);
        posts = await response.json();
        renderPosts();
    } catch (error) {
        console.error('Error:', error);
        showError('Impossible de charger les posts');
    }
};

// Destructuring
const { title, content, author } = post;

// Template literals
const message = `Post "${title}" créé par ${author.name}`;

// Spread operator
const newPost = { ...post, views: post.views + 1 };
```

### CSS (BEM-like)

```css
/* Block */
.card {
    background: white;
    border-radius: var(--radius-xl);
}

/* Element */
.card__header {
    padding: var(--spacing-4);
    border-bottom: 1px solid var(--gray-200);
}

.card__title {
    font-size: var(--text-lg);
    font-weight: var(--font-semibold);
}

/* Modifier */
.card--elevated {
    box-shadow: var(--shadow-md);
}

.card--primary {
    border: 2px solid var(--primary);
}
```

---

## 🧪 TESTS ET QUALITÉ

### Tests Feature (prioritaires)

```php
// tests/Feature/Admin/PostControllerTest.php
namespace Tests\Feature\Admin;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_admin_can_view_posts_index()
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');
        
        $response = $this->actingAs($admin)
            ->get(route('admin.posts.index'));
            
        $response->assertStatus(200);
        $response->assertViewIs('admin.posts.index');
    }
    
    public function test_guest_cannot_access_admin_posts()
    {
        $response = $this->get(route('admin.posts.index'));
        
        $response->assertRedirect(route('login'));
    }
}
```

### Validation

```php
// app/Http/Requests/StorePostRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('posts.create');
    }
    
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:post_categories,id',
            'image' => 'nullable|image|max:5120', // 5MB
            'status' => 'required|in:draft,published',
            'is_featured' => 'boolean',
        ];
    }
    
    public function messages(): array
    {
        return [
            'title.required' => 'Le titre est obligatoire',
            'content.required' => 'Le contenu est obligatoire',
            'category_id.exists' => 'La catégorie sélectionnée n\'existe pas',
        ];
    }
}
```

---

## 🚀 WORKFLOW DE DÉVELOPPEMENT

### 1. Créer une nouvelle feature

```bash
# Créer une branche
git checkout -b feature/posts-crud

# Créer migration
php artisan make:migration create_posts_table

# Créer model avec factory et seeder
php artisan make:model Post -mfs

# Créer controller
php artisan make:controller Admin/PostController --resource

# Créer request
php artisan make:request StorePostRequest

# Créer policy
php artisan make:policy PostPolicy --model=Post

# Créer service
mkdir -p app/Services
touch app/Services/PostService.php
```

### 2. Développer la feature

1. **Migration** : Définir la structure de la table
2. **Model** : Relations, scopes, traits
3. **Factory/Seeder** : Données de test
4. **Request** : Validation
5. **Service** : Business logic
6. **Controller** : CRUD operations
7. **Policy** : Authorization
8. **Routes** : Définir les routes
9. **Views** : Créer les vues Blade
10. **Tests** : Tests feature

### 3. Tester localement

```bash
# Lancer les migrations
php artisan migrate

# Lancer les seeders
php artisan db:seed

# Lancer les tests
php artisan test

# Serveur de développement
php artisan serve
npm run dev
```

### 4. Commit et push

```bash
git add .
git commit -m "feat: add posts CRUD with media upload"
git push origin feature/posts-crud

# Créer une Pull Request
```

---

## 📚 RESSOURCES ET DOCUMENTATION

### Documentation officielle

- **Laravel 12** : https://laravel.com/docs/12.x
- **Bootstrap 5** : https://getbootstrap.com/docs/5.3
- **Alpine.js** : https://alpinejs.dev
- **Lucide Icons** : https://lucide.dev

### Packages Spatie

- **Permission** : https://spatie.be/docs/laravel-permission
- **Media Library** : https://spatie.be/docs/laravel-medialibrary
- **Activity Log** : https://spatie.be/docs/laravel-activitylog
- **Sluggable** : https://github.com/spatie/laravel-sluggable

### Bibliothèques JavaScript

- **Chart.js** : https://www.chartjs.org
- **SortableJS** : https://sortablejs.github.io/Sortable/
- **Choices.js** : https://choices-js.github.io/Choices/
- **Flatpickr** : https://flatpickr.js.org
- **TinyMCE** : https://www.tiny.cloud/docs/
- **Toastify** : https://apvarun.github.io/toastify-js/

---

## ✅ CHECKLIST AVANT DE CODER

### Pour chaque nouvelle feature

- [ ] Migration créée et testée
- [ ] Model avec relations définies
- [ ] Factory et Seeder pour les tests
- [ ] Form Request pour la validation
- [ ] Service pour la business logic
- [ ] Controller léger (délègue au Service)
- [ ] Policy pour l'authorization
- [ ] Routes nommées et groupées
- [ ] Vues Blade avec composants
- [ ] Tests Feature écrits
- [ ] Documentation mise à jour
- [ ] Commit avec message descriptif

### Pour l'interface utilisateur

- [ ] Design responsive (mobile, tablet, desktop)
- [ ] Composants réutilisables créés
- [ ] Icônes Lucide utilisées
- [ ] Couleurs Benin64 respectées
- [ ] États interactifs (hover, active, disabled)
- [ ] Animations fluides
- [ ] Accessibilité (ARIA, contraste)
- [ ] Messages d'erreur clairs
- [ ] Feedback utilisateur (loading, success, error)

---

## 🎯 PRIORITÉS DE DÉVELOPPEMENT

### Phase 1 : Fondations (Semaine 1)
1. ✅ Installation Laravel 12 propre
2. ✅ Configuration base de données
3. ✅ Installation Breeze (auth)
4. ✅ Installation Spatie Permission
5. ✅ Seeders : Rôles, Permissions, Admin User
6. ✅ Layout admin de base
7. ✅ Dashboard simple

### Phase 2 : CRUD Posts (Semaine 2)
1. ✅ Migration posts
2. ✅ Model Post avec relations
3. ✅ Spatie Media Library pour images
4. ✅ CRUD complet : index, create, edit, show, delete
5. ✅ Upload d'images avec preview
6. ✅ TinyMCE pour le contenu
7. ✅ Validation et sécurité
8. ✅ Activity log

### Phase 3 : Catégories et Communiqués (Semaine 3)
1. ✅ CRUD Catégories avec drag & drop (SortableJS)
2. ✅ CRUD Communiqués
3. ✅ Upload documents PDF
4. ✅ Gestion des priorités

### Phase 4 : Utilisateurs et Permissions (Semaine 4)
1. ✅ CRUD Utilisateurs
2. ✅ Interface rôles et permissions
3. ✅ Avatar upload
4. ✅ Profil utilisateur
5. ✅ Historique d'activité

### Phase 5 : Médiathèque et Paramètres (Semaine 5)
1. ✅ Galerie médias
2. ✅ Upload drag & drop (Dropzone ou similaire)
3. ✅ Gestion paramètres système
4. ✅ Configuration email

### Phase 6 : Frontend Public (Semaine 6-7)
1. ✅ Layout guest
2. ✅ Page d'accueil
3. ✅ Liste et détail des posts
4. ✅ Liste et détail des communiqués
5. ✅ Système de recherche
6. ✅ Vérifications (inscriptions, résultats)

---

## 🔑 POINTS CLÉS À RETENIR

1. **Un seul pattern Blade** : Composants Blade (`<x-layout>`) partout, jamais `@extends`
2. **Architecture MVC stricte** : Controllers légers, Services pour la logique métier
3. **Charte Benin64** : Couleurs officielles #1B58A2, #008859, #FFE11B, #D90E15
4. **Lucide Icons** : Seule bibliothèque d'icônes autorisée
5. **Bootstrap 5** : Framework CSS, pas de Tailwind
6. **Alpine.js** : Réactivité légère, pas de Vue/React dans l'admin
7. **Spatie packages** : Permission, Media Library, Activity Log, Sluggable
8. **Sécurité** : CSRF, Authorization (Policies), Validation (Form Requests)
9. **Responsive** : Mobile-first, breakpoints Bootstrap
10. **Tests** : Feature tests pour chaque fonctionnalité critique

---

## 🚨 ERREURS À ÉVITER

### ❌ NE JAMAIS FAIRE

1. **Mélanger les patterns Blade** : Utiliser `@extends` et `<x-layout>` dans le même projet
2. **Logique métier dans les controllers** : Utiliser des Services
3. **Requêtes directes dans les vues** : Passer les données depuis le controller
4. **Ignorer l'authorization** : Toujours utiliser les Policies
5. **Oublier la validation** : Toujours utiliser Form Requests
6. **Images sans optimisation** : Utiliser Spatie Media Library avec conversions
7. **Code dupliqué** : Créer des composants réutilisables
8. **Couleurs hardcodées** : Utiliser les variables CSS Benin64
9. **Icônes mixtes** : Utiliser uniquement Lucide
10. **Skip les tests** : Écrire des tests pour les features critiques

### ✅ TOUJOURS FAIRE

1. **Suivre PSR-12** : Standards PHP
2. **Nommer clairement** : Variables, méthodes, classes descriptives
3. **Documenter** : PHPDoc pour les méthodes complexes
4. **Valider les entrées** : Form Requests
5. **Autoriser les actions** : Policies
6. **Logger les actions importantes** : Activity Log
7. **Gérer les erreurs** : try/catch, messages clairs
8. **Responsive design** : Tester sur mobile/tablet/desktop
9. **Commit régulièrement** : Messages descriptifs
10. **Tester avant de push** : php artisan test

---

## 📞 SUPPORT ET QUESTIONS

Pour toute question sur :
- **Architecture** : Référer à ce document
- **Charte graphique** : Section "Design System"
- **Conventions** : Section "Conventions de code"
- **Packages** : Documentation officielle des packages
- **Bugs** : Créer une issue GitHub avec reproduction steps

---

**Ce document est la référence unique pour le développement du projet MEMP.**
**Tout le code doit être conforme à ces standards et conventions.**

*Dernière mise à jour : Décembre 2024*
*Version : 1.0*
