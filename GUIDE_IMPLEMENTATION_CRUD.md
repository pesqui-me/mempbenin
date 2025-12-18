# 📘 GUIDE COMPLET D'IMPLÉMENTATION CRUD - PROJET MEMP

## 📋 Table des matières

1. [Architecture du Projet](#architecture)
2. [Packages Recommandés](#packages)
3. [Structure de la Base de Données](#database)
4. [Implémentation par Module](#modules)
5. [Services & Helpers](#services)
6. [Sécurité & Policies](#security)
7. [Tests](#tests)
8. [Déploiement](#deployment)

---

## 🏗️ 1. Architecture du Projet {#architecture}

### Structure Recommandée

```
app/
├── Http/
│   ├── Controllers/
│   │   └── Admin/
│   │       ├── PublicationController.php
│   │       ├── TexteController.php
│   │       ├── PrestationController.php
│   │       ├── CommuniqueController.php
│   │       ├── OrganigrammeController.php
│   │       ├── MediaController.php
│   │       ├── PageController.php
│   │       ├── AudienceController.php
│   │       ├── SuggestionController.php
│   │       ├── PreoccupationController.php
│   │       └── UserController.php
│   ├── Requests/
│   │   └── Admin/
│   │       ├── PublicationRequest.php
│   │       ├── TexteRequest.php
│   │       └── ...
│   └── Resources/
│       └── PublicationResource.php
├── Models/
│   ├── Publication.php
│   ├── Texte.php
│   ├── Prestation.php
│   ├── Communique.php
│   ├── Organigramme.php
│   ├── Media.php
│   ├── Page.php
│   ├── Audience.php
│   ├── Suggestion.php
│   ├── Preoccupation.php
│   └── User.php
├── Services/
│   ├── PublicationService.php
│   ├── MediaService.php
│   ├── NotificationService.php
│   └── ExportService.php
├── Repositories/
│   └── PublicationRepository.php
├── Policies/
│   ├── PublicationPolicy.php
│   └── ...
└── Traits/
    ├── HasSlug.php
    ├── HasStatus.php
    └── HasMedia.php
```

---

## 📦 2. Packages Recommandés {#packages}

### Installation des Packages Essentiels

```bash
# Gestion des médias - Spatie Media Library
composer require spatie/laravel-medialibrary

# Gestion des permissions - Spatie Permission
composer require spatie/laravel-permission

# Génération de slugs
composer require spatie/laravel-sluggable

# Export Excel/CSV
composer require maatwebsite/excel

# Export PDF
composer require barryvdh/laravel-dompdf

# Activity Log
composer require spatie/laravel-activitylog

# Backup
composer require spatie/laravel-backup

# Query Builder (pour filtres avancés)
composer require spatie/laravel-query-builder

# Image optimization
composer require spatie/image-optimizer

# SEO Helper
composer require artesaos/seotools
```

### Configuration des Packages

**1. Spatie Media Library**
```bash
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider"
php artisan migrate
```

**2. Spatie Permission**
```bash
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan migrate
php artisan permission:cache-reset
```

**3. Laravel Excel**
```bash
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"
```

**4. DomPDF**
```bash
php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"
```

**5. Activity Log**
```bash
php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider"
php artisan migrate
```

### Documentation Officielle

- **Spatie Media Library**: https://spatie.be/docs/laravel-medialibrary/
- **Spatie Permission**: https://spatie.be/docs/laravel-permission/
- **Laravel Excel**: https://docs.laravel-excel.com/
- **DomPDF**: https://github.com/barryvdh/laravel-dompdf
- **Activity Log**: https://spatie.be/docs/laravel-activitylog/
- **Query Builder**: https://spatie.be/docs/laravel-query-builder/

---

## 🗄️ 3. Structure de la Base de Données {#database}

### Migrations Complètes

#### 📰 **Publications**

```php
// database/migrations/2024_xx_xx_create_publications_table.php
Schema::create('publications', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug')->unique();
    $table->text('excerpt')->nullable();
    $table->longText('content');
    $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
    $table->boolean('is_featured')->default(false);
    $table->timestamp('published_at')->nullable();
    $table->integer('views_count')->default(0);

    // SEO
    $table->string('meta_title')->nullable();
    $table->text('meta_description')->nullable();
    $table->string('meta_keywords')->nullable();

    $table->timestamps();
    $table->softDeletes();

    $table->index(['status', 'published_at']);
    $table->index('slug');
});

// Categories
Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique();
    $table->text('description')->nullable();
    $table->string('color')->default('#102c57');
    $table->integer('order')->default(0);
    $table->timestamps();
});

// Tags (Many-to-Many avec Publications)
Schema::create('tags', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique();
    $table->timestamps();
});

Schema::create('publication_tag', function (Blueprint $table) {
    $table->foreignId('publication_id')->constrained()->cascadeOnDelete();
    $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
    $table->primary(['publication_id', 'tag_id']);
});
```

#### ⚖️ **Textes & Législations**

```php
// database/migrations/2024_xx_xx_create_textes_table.php
Schema::create('textes', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('reference')->unique(); // N°2003-17
    $table->date('signature_date');
    $table->enum('type', ['loi', 'decret', 'arrete', 'circulaire', 'ordonnance']);
    $table->string('domain')->nullable(); // education, examens, personnel, etc.
    $table->text('summary')->nullable();
    $table->longText('content')->nullable();
    $table->string('pdf_path')->nullable();
    $table->boolean('is_featured')->default(false);
    $table->enum('status', ['draft', 'published', 'archived'])->default('published');
    $table->integer('download_count')->default(0);
    $table->integer('views_count')->default(0);
    $table->json('keywords')->nullable();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->timestamps();
    $table->softDeletes();

    $table->index(['type', 'status']);
    $table->index('reference');
    $table->index('signature_date');
});
```

#### 🤝 **Prestations**

```php
// database/migrations/2024_xx_xx_create_prestations_table.php
Schema::create('prestations', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug')->unique();
    $table->text('excerpt')->nullable();
    $table->longText('description');
    $table->longText('procedure')->nullable();
    $table->text('required_documents')->nullable();
    $table->text('conditions')->nullable();
    $table->decimal('cost', 10, 2)->default(0); // En FCFA
    $table->string('processing_time')->nullable(); // "3-5 jours"
    $table->text('contact_info')->nullable();
    $table->enum('category', ['administrative', 'pedagogique', 'technique', 'financiere', 'juridique']);
    $table->enum('target_audience', ['enseignants', 'parents', 'eleves', 'directeurs', 'partenaires', 'tous'])->default('tous');
    $table->enum('status', ['active', 'inactive', 'suspended'])->default('active');
    $table->boolean('is_featured')->default(false);
    $table->boolean('online_available')->default(true);
    $table->integer('request_count')->default(0);
    $table->json('keywords')->nullable();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->timestamps();
    $table->softDeletes();

    $table->index(['category', 'status']);
    $table->index('slug');
});
```

#### 📢 **Communiqués**

```php
// database/migrations/2024_xx_xx_create_communiques_table.php
Schema::create('communiques', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('reference')->nullable(); // COM/MEMP/2024/045
    $table->text('summary')->nullable();
    $table->longText('content');
    $table->enum('type', ['communique', 'annonce', 'avis', 'note', 'convocation']);
    $table->enum('priority', ['normal', 'high', 'urgent'])->default('normal');
    $table->enum('target_audience', ['tous', 'enseignants', 'directeurs', 'parents', 'eleves', 'partenaires'])->default('tous');
    $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
    $table->timestamp('published_date')->nullable();
    $table->timestamp('expiry_date')->nullable();
    $table->boolean('send_notification')->default(false);
    $table->boolean('pin_to_top')->default(false);
    $table->integer('views_count')->default(0);
    $table->integer('download_count')->default(0);
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->timestamps();
    $table->softDeletes();

    $table->index(['type', 'priority', 'status']);
    $table->index('published_date');
});
```

#### 🏢 **Organigramme**

```php
// database/migrations/2024_xx_xx_create_organigrammes_table.php
Schema::create('organigrammes', function (Blueprint $table) {
    $table->id();
    $table->string('position_title'); // Titre du poste
    $table->integer('hierarchy_level'); // 1-5
    $table->string('department')->nullable(); // Direction/Service
    $table->foreignId('parent_id')->nullable()->constrained('organigrammes')->nullOnDelete(); // Poste supérieur
    $table->text('description')->nullable();

    // Titulaire du poste
    $table->string('holder_name')->nullable();
    $table->string('holder_email')->nullable();
    $table->string('holder_phone')->nullable();
    $table->date('appointed_date')->nullable();
    $table->string('holder_photo_path')->nullable();

    $table->enum('status', ['occupied', 'vacant', 'interim'])->default('vacant');
    $table->boolean('is_active')->default(true);
    $table->string('icon')->default('fa-user-tie');
    $table->string('color')->default('primary');
    $table->integer('order')->default(0);
    $table->timestamps();
    $table->softDeletes();

    $table->index(['hierarchy_level', 'status']);
});
```

#### 🎯 **Pages Statiques (Structure JSON)**

```php
// database/migrations/2024_xx_xx_create_pages_table.php
Schema::create('pages', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug')->unique();
    $table->text('excerpt')->nullable();
    $table->longText('content');
    $table->json('blocks')->nullable(); // Structure flexible pour blocs de contenu
    $table->string('template')->default('default'); // ministere, partenaires, contacts, faqs
    $table->enum('status', ['draft', 'published'])->default('published');
    $table->boolean('show_in_menu')->default(true);
    $table->integer('menu_order')->default(0);

    // SEO
    $table->string('meta_title')->nullable();
    $table->text('meta_description')->nullable();
    $table->json('meta_keywords')->nullable();

    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->timestamps();
    $table->softDeletes();

    $table->index('slug');
    $table->index(['status', 'show_in_menu']);
});
```

**Structure JSON pour Pages (Exemple)**:
```json
{
  "blocks": [
    {
      "type": "hero",
      "title": "Le Ministère",
      "subtitle": "Présentation du MEMP",
      "image": "hero.jpg"
    },
    {
      "type": "content",
      "title": "Missions",
      "content": "<p>Le MEMP a pour missions...</p>",
      "icon": "fa-target"
    },
    {
      "type": "team",
      "title": "L'équipe",
      "members": [
        {
          "name": "Salimane KARIMOU",
          "role": "Ministre",
          "photo": "ministre.jpg",
          "bio": "..."
        }
      ]
    },
    {
      "type": "contact_info",
      "email": "contact@memp.bj",
      "phone": "+229 21 30 XX XX",
      "address": "Porto-Novo, Bénin",
      "map_embed": "..."
    },
    {
      "type": "faq",
      "questions": [
        {
          "question": "Comment...",
          "answer": "..."
        }
      ]
    },
    {
      "type": "partners",
      "items": [
        {
          "name": "UNESCO",
          "logo": "unesco.png",
          "url": "https://unesco.org"
        }
      ]
    }
  ]
}
```

#### 📅 **Audiences**

```php
// database/migrations/2024_xx_xx_create_audiences_table.php
Schema::create('audiences', function (Blueprint $table) {
    $table->id();

    // Demandeur
    $table->string('requester_name');
    $table->string('requester_email');
    $table->string('requester_phone');
    $table->string('requester_organization')->nullable();

    // Demande
    $table->string('subject');
    $table->text('purpose');
    $table->timestamp('requested_date');
    $table->integer('estimated_duration')->default(30); // en minutes
    $table->string('document_path')->nullable();

    // Gestion
    $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
    $table->timestamp('confirmed_date')->nullable();
    $table->text('internal_notes')->nullable();
    $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();

    $table->timestamps();
    $table->softDeletes();

    $table->index(['status', 'requested_date']);
});
```

#### 💡 **Suggestions**

```php
// database/migrations/2024_xx_xx_create_suggestions_table.php
Schema::create('suggestions', function (Blueprint $table) {
    $table->id();

    // Auteur
    $table->string('author_name');
    $table->string('author_email');
    $table->string('author_phone')->nullable();
    $table->string('author_role')->nullable(); // Enseignant, Parent, etc.

    // Suggestion
    $table->string('title');
    $table->text('description');
    $table->text('expected_benefits')->nullable();
    $table->enum('category', ['infrastructure', 'pedagogie', 'administration', 'autre']);

    // Traitement
    $table->enum('status', ['new', 'reviewing', 'accepted', 'implemented', 'rejected'])->default('new');
    $table->text('admin_response')->nullable();
    $table->timestamp('responded_at')->nullable();
    $table->foreignId('responded_by')->nullable()->constrained('users')->nullOnDelete();

    $table->timestamps();
    $table->softDeletes();

    $table->index(['status', 'category']);
});
```

#### ⚠️ **Préoccupations**

```php
// database/migrations/2024_xx_xx_create_preoccupations_table.php
Schema::create('preoccupations', function (Blueprint $table) {
    $table->id();

    // Signalant
    $table->string('reporter_name');
    $table->string('reporter_email');
    $table->string('reporter_phone')->nullable();
    $table->string('reporter_school')->nullable();

    // Préoccupation
    $table->string('title');
    $table->text('description');
    $table->text('impact')->nullable();
    $table->enum('priority', ['low', 'medium', 'high'])->default('medium');

    // Traitement
    $table->enum('status', ['pending', 'processing', 'resolved', 'closed'])->default('pending');
    $table->text('actions_taken')->nullable();
    $table->date('resolution_date')->nullable();
    $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();

    $table->timestamps();
    $table->softDeletes();

    $table->index(['status', 'priority']);
});
```

#### 👤 **Users (Extension)**

```php
// database/migrations/2024_xx_xx_add_admin_fields_to_users_table.php
Schema::table('users', function (Blueprint $table) {
    $table->string('first_name')->nullable()->after('name');
    $table->string('last_name')->nullable()->after('first_name');
    $table->string('phone')->nullable();
    $table->string('function')->nullable(); // Fonction dans le ministère
    $table->string('avatar_path')->nullable();
    $table->boolean('is_active')->default(true);
    $table->timestamp('last_login_at')->nullable();
    $table->json('preferences')->nullable(); // langue, timezone, notifications
    $table->softDeletes();
});
```

#### ⚙️ **Settings (Configuration Site)**

```php
// database/migrations/2024_xx_xx_create_settings_table.php
Schema::create('settings', function (Blueprint $table) {
    $table->id();
    $table->string('key')->unique();
    $table->text('value')->nullable();
    $table->string('group')->default('general'); // general, email, social, etc.
    $table->string('type')->default('text'); // text, textarea, boolean, json, file
    $table->timestamps();

    $table->index(['group', 'key']);
});
```

---

## 🔧 4. Implémentation par Module {#modules}

### MODULE 1: Publications

#### Model

```php
// app/Models/Publication.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Publication extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasSlug, LogsActivity;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'category_id', 'user_id',
        'status', 'is_featured', 'published_at', 'meta_title',
        'meta_description', 'meta_keywords'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
        'meta_keywords' => 'array',
    ];

    // Slug automatique
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    // Activity Log
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'status', 'is_featured'])
            ->logOnlyDirty();
    }

    // Relations
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Spatie Media Library - Collections
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->width(368)
                    ->height(232);

                $this->addMediaConversion('banner')
                    ->width(1200)
                    ->height(600);
            });

        $this->addMediaCollection('gallery');
    }

    // Scopes
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

    public function scopeRecent($query, $limit = 10)
    {
        return $query->published()
            ->latest('published_at')
            ->limit($limit);
    }

    // Accessors
    public function getFeaturedImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('featured_image')
            ?: asset('assets/images/placeholder.jpg');
    }

    public function getExcerptOrContentAttribute()
    {
        return $this->excerpt ?: \Str::limit(strip_tags($this->content), 200);
    }

    // Mutators
    public function setPublishedAtAttribute($value)
    {
        if ($this->status === 'published' && !$this->published_at) {
            $this->attributes['published_at'] = now();
        } else {
            $this->attributes['published_at'] = $value;
        }
    }

    // Helper Methods
    public function incrementViews()
    {
        $this->increment('views_count');
    }

    public function isPublished(): bool
    {
        return $this->status === 'published'
            && $this->published_at
            && $this->published_at->isPast();
    }
}
```

#### Controller

```php
// app/Http/Controllers/Admin/PublicationController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\Category;
use App\Http\Requests\Admin\PublicationRequest;
use App\Services\PublicationService;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function __construct(
        protected PublicationService $publicationService
    ) {
        $this->middleware('can:view publications')->only('index', 'show');
        $this->middleware('can:create publications')->only('create', 'store');
        $this->middleware('can:update publications')->only('edit', 'update');
        $this->middleware('can:delete publications')->only('destroy');
    }

    public function index(Request $request)
    {
        $publications = Publication::with(['category', 'user', 'media'])
            ->when($request->search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            })
            ->when($request->category, function ($query, $category) {
                $query->where('category_id', $category);
            })
            ->when($request->status, function ($query, $status) {
                $query->where('status', $status);
            })
            ->latest()
            ->paginate(20);

        $categories = Category::all();

        $stats = [
            'total' => Publication::count(),
            'published' => Publication::where('status', 'published')->count(),
            'drafts' => Publication::where('status', 'draft')->count(),
            'categories' => Category::count(),
        ];

        return view('admin.contenus.publications.index', compact(
            'publications', 'categories', 'stats'
        ));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.contenus.publications.create', compact('categories'));
    }

    public function store(PublicationRequest $request)
    {
        $publication = $this->publicationService->create(
            $request->validated(),
            $request->file('featured_image'),
            $request->file('gallery', [])
        );

        return redirect()
            ->route('admin.contenus.publications.show', $publication)
            ->with('success', 'Publication créée avec succès.');
    }

    public function show(Publication $publication)
    {
        $publication->load(['category', 'user', 'tags', 'media']);

        return view('admin.contenus.publications.show', compact('publication'));
    }

    public function edit(Publication $publication)
    {
        $categories = Category::all();

        return view('admin.contenus.publications.edit', compact(
            'publication', 'categories'
        ));
    }

    public function update(PublicationRequest $request, Publication $publication)
    {
        $this->publicationService->update(
            $publication,
            $request->validated(),
            $request->file('featured_image'),
            $request->file('gallery', [])
        );

        return redirect()
            ->route('admin.contenus.publications.show', $publication)
            ->with('success', 'Publication mise à jour avec succès.');
    }

    public function destroy(Publication $publication)
    {
        $publication->delete();

        return redirect()
            ->route('admin.contenus.publications.index')
            ->with('success', 'Publication supprimée avec succès.');
    }
}
```

#### Service

```php
// app/Services/PublicationService.php
namespace App\Services;

use App\Models\Publication;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PublicationService
{
    public function create(array $data, $featuredImage = null, array $gallery = []): Publication
    {
        return DB::transaction(function () use ($data, $featuredImage, $gallery) {
            $data['user_id'] = Auth::id();

            if ($data['status'] === 'published' && !isset($data['published_at'])) {
                $data['published_at'] = now();
            }

            $publication = Publication::create($data);

            // Handle featured image
            if ($featuredImage) {
                $publication->addMedia($featuredImage)
                    ->toMediaCollection('featured_image');
            }

            // Handle gallery
            foreach ($gallery as $image) {
                $publication->addMedia($image)
                    ->toMediaCollection('gallery');
            }

            // Sync tags if provided
            if (isset($data['tags'])) {
                $publication->tags()->sync($data['tags']);
            }

            activity()
                ->performedOn($publication)
                ->causedBy(Auth::user())
                ->log('Publication créée');

            return $publication->fresh();
        });
    }

    public function update(Publication $publication, array $data, $featuredImage = null, array $gallery = []): Publication
    {
        return DB::transaction(function () use ($publication, $data, $featuredImage, $gallery) {
            // Update published_at if status changed to published
            if ($data['status'] === 'published' && $publication->status !== 'published') {
                $data['published_at'] = $data['published_at'] ?? now();
            }

            $publication->update($data);

            // Update featured image if new one provided
            if ($featuredImage) {
                $publication->clearMediaCollection('featured_image');
                $publication->addMedia($featuredImage)
                    ->toMediaCollection('featured_image');
            }

            // Add new gallery images
            foreach ($gallery as $image) {
                $publication->addMedia($image)
                    ->toMediaCollection('gallery');
            }

            // Sync tags
            if (isset($data['tags'])) {
                $publication->tags()->sync($data['tags']);
            }

            activity()
                ->performedOn($publication)
                ->causedBy(Auth::user())
                ->log('Publication mise à jour');

            return $publication->fresh();
        });
    }

    public function delete(Publication $publication): bool
    {
        activity()
            ->performedOn($publication)
            ->causedBy(Auth::user())
            ->log('Publication supprimée');

        return $publication->delete();
    }

    public function publish(Publication $publication): bool
    {
        return $publication->update([
            'status' => 'published',
            'published_at' => $publication->published_at ?? now(),
        ]);
    }

    public function unpublish(Publication $publication): bool
    {
        return $publication->update(['status' => 'draft']);
    }
}
```

#### Form Request

```php
// app/Http/Requests/Admin/PublicationRequest.php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PublicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $publicationId = $this->route('publication')?->id;

        return [
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'status' => ['required', 'in:draft,published,archived'],
            'is_featured' => ['boolean'],
            'published_at' => ['nullable', 'date'],
            'featured_image' => ['nullable', 'image', 'max:5120'], // 5MB
            'gallery.*' => ['nullable', 'image', 'max:5120'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['exists:tags,id'],
            'meta_title' => ['nullable', 'string', 'max:60'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'meta_keywords' => ['nullable', 'array'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Le titre est obligatoire.',
            'content.required' => 'Le contenu est obligatoire.',
            'featured_image.max' => 'L\'image ne doit pas dépasser 5 MB.',
        ];
    }
}
```

#### Policy

```php
// app/Policies/PublicationPolicy.php
namespace App\Policies;

use App\Models\Publication;
use App\Models\User;

class PublicationPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view publications');
    }

    public function view(User $user, Publication $publication): bool
    {
        return $user->hasPermissionTo('view publications');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create publications');
    }

    public function update(User $user, Publication $publication): bool
    {
        if ($user->hasPermissionTo('update any publication')) {
            return true;
        }

        return $user->hasPermissionTo('update own publication')
            && $publication->user_id === $user->id;
    }

    public function delete(User $user, Publication $publication): bool
    {
        if ($user->hasPermissionTo('delete any publication')) {
            return true;
        }

        return $user->hasPermissionTo('delete own publication')
            && $publication->user_id === $user->id;
    }

    public function publish(User $user, Publication $publication): bool
    {
        return $user->hasPermissionTo('publish publications');
    }
}
```

---

### MODULE 2: Textes & Législations

_(Structure similaire à Publications avec spécificités)_

#### Model

```php
// app/Models/Texte.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Texte extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title', 'reference', 'signature_date', 'type', 'domain',
        'summary', 'content', 'is_featured', 'status', 'keywords', 'user_id'
    ];

    protected $casts = [
        'signature_date' => 'date',
        'is_featured' => 'boolean',
        'keywords' => 'array',
    ];

    // Media Collections
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('pdf_document')->singleFile();
        $this->addMediaCollection('attachments');
    }

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scopes
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    // Accessors
    public function getPdfUrlAttribute()
    {
        return $this->getFirstMediaUrl('pdf_document');
    }

    // Helper Methods
    public function incrementDownloads()
    {
        $this->increment('download_count');
    }

    public function incrementViews()
    {
        $this->increment('views_count');
    }
}
```

#### Service

```php
// app/Services/TexteService.php
namespace App\Services;

use App\Models\Texte;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TexteService
{
    public function create(array $data, $pdfFile = null): Texte
    {
        return DB::transaction(function () use ($data, $pdfFile) {
            $data['user_id'] = Auth::id();
            $texte = Texte::create($data);

            if ($pdfFile) {
                $texte->addMedia($pdfFile)
                    ->toMediaCollection('pdf_document');
            }

            activity()
                ->performedOn($texte)
                ->causedBy(Auth::user())
                ->log('Texte législatif créé');

            return $texte->fresh();
        });
    }

    public function update(Texte $texte, array $data, $pdfFile = null): Texte
    {
        return DB::transaction(function () use ($texte, $data, $pdfFile) {
            $texte->update($data);

            if ($pdfFile) {
                $texte->clearMediaCollection('pdf_document');
                $texte->addMedia($pdfFile)
                    ->toMediaCollection('pdf_document');
            }

            activity()
                ->performedOn($texte)
                ->causedBy(Auth::user())
                ->log('Texte législatif mis à jour');

            return $texte->fresh();
        });
    }
}
```

---

### MODULE 3-8: Structure Similaire

Les modules suivants suivent la même structure:
- **Prestations**: PrestationService, PrestationPolicy, PrestationRequest
- **Communiqués**: CommuniqueService, CommuniquePolicy, CommuniqueRequest
- **Organigramme**: OrganigrammeService, OrganigrammePolicy
- **Pages**: PageService (avec gestion JSON blocks)
- **Audiences**: AudienceService, AudiencePolicy
- **Suggestions**: SuggestionService (avec NotificationService pour réponses)
- **Préoccupations**: PreoccupationService (avec workflow de résolution)

---

## 🛡️ 5. Services & Helpers {#services}

### MediaService (Gestion centralisée des médias)

```php
// app/Services/MediaService.php
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MediaService
{
    public function upload($file, string $folder = 'uploads'): string
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs("public/{$folder}", $filename);

        return str_replace('public/', '', $path);
    }

    public function delete(string $path): bool
    {
        return Storage::delete("public/{$path}");
    }

    public function optimize(string $path, int $maxWidth = 1920): void
    {
        $img = Image::make(storage_path("app/public/{$path}"));

        if ($img->width() > $maxWidth) {
            $img->resize($maxWidth, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

        $img->save();
    }
}
```

### NotificationService

```php
// app/Services/NotificationService.php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuggestionResponseMail;

class NotificationService
{
    public function notifySuggestionResponse($suggestion)
    {
        Mail::to($suggestion->author_email)
            ->send(new SuggestionResponseMail($suggestion));
    }

    public function notifyAudienceConfirmation($audience)
    {
        Mail::to($audience->requester_email)
            ->send(new AudienceConfirmationMail($audience));
    }

    public function notifyAdmins(string $subject, string $message)
    {
        $admins = User::role('admin')->get();

        foreach ($admins as $admin) {
            $admin->notify(new AdminNotification($subject, $message));
        }
    }
}
```

### ExportService

```php
// app/Services/ExportService.php
namespace App\Services;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PublicationsExport;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportService
{
    public function exportPublicationsToExcel($publications)
    {
        return Excel::download(
            new PublicationsExport($publications),
            'publications.xlsx'
        );
    }

    public function exportPublicationsToPdf($publications)
    {
        $pdf = Pdf::loadView('exports.publications-pdf', [
            'publications' => $publications
        ]);

        return $pdf->download('publications.pdf');
    }
}
```

---

## 🔒 6. Sécurité & Policies {#security}

### Setup Permissions

```php
// database/seeders/RolePermissionSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // Publications
            'view publications',
            'create publications',
            'update own publication',
            'update any publication',
            'delete own publication',
            'delete any publication',
            'publish publications',

            // Textes
            'view textes',
            'create textes',
            'update textes',
            'delete textes',

            // Prestations
            'view prestations',
            'create prestations',
            'update prestations',
            'delete prestations',

            // ... (autres permissions)

            // Admin
            'view users',
            'create users',
            'update users',
            'delete users',
            'manage roles',
            'manage settings',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

        $editor = Role::create(['name' => 'editor']);
        $editor->givePermissionTo([
            'view publications', 'create publications',
            'update own publication', 'delete own publication',
            'view textes', 'view prestations',
            // ...
        ]);

        $moderator = Role::create(['name' => 'moderator']);
        $moderator->givePermissionTo([
            'view publications', 'view textes',
            // Gestion usagers
        ]);

        $viewer = Role::create(['name' => 'viewer']);
        $viewer->givePermissionTo([
            'view publications', 'view textes', 'view prestations',
        ]);
    }
}
```

### Middleware

```php
// app/Http/Kernel.php
protected $middlewareAliases = [
    'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
    'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
    'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
];
```

---

## 🧪 7. Tests {#tests}

### Feature Test Example

```php
// tests/Feature/PublicationTest.php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Publication;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PublicationTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_create_publication()
    {
        $user = User::factory()->create();
        $user->assignRole('admin');

        $response = $this->actingAs($user)
            ->post(route('admin.contenus.publications.store'), [
                'title' => 'Test Publication',
                'content' => 'Test content',
                'status' => 'published',
            ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('publications', [
            'title' => 'Test Publication',
        ]);
    }

    public function test_editor_cannot_delete_others_publication()
    {
        $author = User::factory()->create();
        $editor = User::factory()->create();
        $editor->assignRole('editor');

        $publication = Publication::factory()->create([
            'user_id' => $author->id,
        ]);

        $response = $this->actingAs($editor)
            ->delete(route('admin.contenus.publications.destroy', $publication));

        $response->assertForbidden();
    }
}
```

---

## 🚀 8. Déploiement {#deployment}

### Commandes d'installation

```bash
# 1. Installer les dépendances
composer install --optimize-autoloader --no-dev

# 2. Configuration
cp .env.example .env
php artisan key:generate

# 3. Migrations et seeders
php artisan migrate --force
php artisan db:seed --class=RolePermissionSeeder

# 4. Storage link
php artisan storage:link

# 5. Cache
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 6. Permissions
chmod -R 755 storage bootstrap/cache
```

### Optimisations Production

```php
// config/database.php
'options' => [
    PDO::ATTR_PERSISTENT => true,
],

// .env
APP_DEBUG=false
APP_ENV=production

CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
```

---

## 📚 Documentation Complète

### Resources Laravel Officielles
- **Documentation Laravel 12**: https://laravel.com/docs/12.x
- **Eloquent ORM**: https://laravel.com/docs/12.x/eloquent
- **Validation**: https://laravel.com/docs/12.x/validation
- **Authorization**: https://laravel.com/docs/12.x/authorization
- **File Storage**: https://laravel.com/docs/12.x/filesystem

### Packages Recommandés
- **Spatie Media Library**: https://spatie.be/docs/laravel-medialibrary/v11/introduction
- **Spatie Permission**: https://spatie.be/docs/laravel-permission/v6/introduction
- **Laravel Excel**: https://docs.laravel-excel.com/3.1/getting-started/
- **DomPDF**: https://github.com/barryvdh/laravel-dompdf

### Tutoriels Vidéo
- **Laracasts**: https://laracasts.com/
- **Laravel Daily**: https://www.youtube.com/c/LaravelDaily

---

## 🎯 Checklist Implémentation

- [ ] Installer tous les packages recommandés
- [ ] Créer toutes les migrations
- [ ] Créer tous les models avec relations
- [ ] Implémenter les services
- [ ] Créer les controllers
- [ ] Définir les policies
- [ ] Créer les form requests
- [ ] Configurer les permissions
- [ ] Tester chaque module
- [ ] Optimiser les requêtes
- [ ] Ajouter les logs d'activité
- [ ] Configurer le cache
- [ ] Mettre en place les backups

---

**📌 Note**: Ce guide couvre la structure complète. Implémentez module par module en testant chaque fonctionnalité avant de passer à la suivante.
