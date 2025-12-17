<x-admin-layout>
    {{-- Page Header --}}
    <div class="page-header">
        <div class="page-header-content">
            <h1 class="page-title">Tableau de bord</h1>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Administration</li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="page-header-actions">
            <button class="btn btn-primary">
                <i class="fas fa-download me-2"></i>
                Exporter
            </button>
        </div>
    </div>

    {{-- Stats Cards --}}
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="stats-card stats-card-primary">
                <div class="stats-card-body">
                    <div class="stats-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stats-content">
                        <h3 class="stats-value">15,430</h3>
                        <p class="stats-label">Total Enseignants</p>
                        <div class="stats-trend positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>12% ce mois</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="stats-card stats-card-success">
                <div class="stats-card-body">
                    <div class="stats-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="stats-content">
                        <h3 class="stats-value">450,000</h3>
                        <p class="stats-label">Élèves Inscrits</p>
                        <div class="stats-trend positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>8% ce mois</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="stats-card stats-card-warning">
                <div class="stats-card-body">
                    <div class="stats-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="stats-content">
                        <h3 class="stats-value">1,250</h3>
                        <p class="stats-label">Écoles Primaires</p>
                        <div class="stats-trend positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>5% ce mois</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="stats-card stats-card-danger">
                <div class="stats-card-body">
                    <div class="stats-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="stats-content">
                        <h3 class="stats-value">247</h3>
                        <p class="stats-label">Suggestions Reçues</p>
                        <div class="stats-trend negative">
                            <i class="fas fa-arrow-down"></i>
                            <span>3% ce mois</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts Row --}}
    <div class="row g-4 mb-4">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Statistiques d'inscription</h5>
                    <div class="card-actions">
                        <select class="form-select form-select-sm">
                            <option>Cette année</option>
                            <option>6 derniers mois</option>
                            <option>30 derniers jours</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="enrollmentChart" height="80"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Répartition par département</h5>
                </div>
                <div class="card-body">
                    <canvas id="departmentChart" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Activities & Quick Actions --}}
    <div class="row g-4">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Activités récentes</h5>
                    <a href="#" class="card-link">Voir tout</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Utilisateur</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="activity-icon bg-primary">
                                            <i class="fas fa-newspaper"></i>
                                        </span>
                                    </td>
                                    <td>Nouvelle publication ajoutée</td>
                                    <td>Jean Dupont</td>
                                    <td>Il y a 5 min</td>
                                    <td><span class="badge bg-success">Publié</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="activity-icon bg-warning">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </td>
                                    <td>Nouvel utilisateur créé</td>
                                    <td>Marie Martin</td>
                                    <td>Il y a 15 min</td>
                                    <td><span class="badge bg-info">En attente</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="activity-icon bg-success">
                                            <i class="fas fa-lightbulb"></i>
                                        </span>
                                    </td>
                                    <td>Suggestion soumise</td>
                                    <td>Pierre Kouassi</td>
                                    <td>Il y a 1h</td>
                                    <td><span class="badge bg-warning">À traiter</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="activity-icon bg-danger">
                                            <i class="fas fa-exclamation"></i>
                                        </span>
                                    </td>
                                    <td>Préoccupation signalée</td>
                                    <td>Sophie Adjovi</td>
                                    <td>Il y a 2h</td>
                                    <td><span class="badge bg-danger">Urgent</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="activity-icon bg-info">
                                            <i class="fas fa-image"></i>
                                        </span>
                                    </td>
                                    <td>Média ajouté à la galerie</td>
                                    <td>Admin</td>
                                    <td>Il y a 3h</td>
                                    <td><span class="badge bg-success">Publié</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Actions rapides</h5>
                </div>
                <div class="card-body">
                    <div class="quick-actions">
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-primary">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="quick-action-text">
                                <h6>Nouvelle publication</h6>
                                <p>Créer un article</p>
                            </div>
                        </a>
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-success">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="quick-action-text">
                                <h6>Ajouter un texte</h6>
                                <p>Loi ou décret</p>
                            </div>
                        </a>
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-warning">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="quick-action-text">
                                <h6>Communiqué</h6>
                                <p>Publier un communiqué</p>
                            </div>
                        </a>
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-info">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="quick-action-text">
                                <h6>Utilisateur</h6>
                                <p>Ajouter un utilisateur</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="card-title">Taux de réussite CEP</h5>
                </div>
                <div class="card-body text-center">
                    <div class="progress-circle mb-3">
                        <svg viewBox="0 0 36 36" class="circular-chart">
                            <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                            <path class="circle" stroke-dasharray="95, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                            <text x="18" y="20.35" class="percentage">95%</text>
                        </svg>
                    </div>
                    <h4 class="text-success mb-1">95.2%</h4>
                    <p class="text-muted mb-0">Session 2024-2025</p>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    {{-- Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
        // Enrollment Chart
        const enrollmentCtx = document.getElementById('enrollmentChart').getContext('2d');
        new Chart(enrollmentCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                datasets: [{
                    label: 'Inscriptions 2024',
                    data: [3200, 3500, 3800, 4200, 4500, 4800, 5200, 5500, 6000, 6200, 6500, 7000],
                    borderColor: '#102c57',
                    backgroundColor: 'rgba(16, 44, 87, 0.1)',
                    tension: 0.4,
                    fill: true
                }, {
                    label: 'Inscriptions 2023',
                    data: [2800, 3000, 3200, 3600, 3900, 4100, 4400, 4700, 5200, 5400, 5700, 6200],
                    borderColor: '#ffbe00',
                    backgroundColor: 'rgba(255, 190, 0, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    }
                }
            }
        });

        // Department Chart
        const departmentCtx = document.getElementById('departmentChart').getContext('2d');
        new Chart(departmentCtx, {
            type: 'doughnut',
            data: {
                labels: ['Atlantique', 'Borgou', 'Mono', 'Ouémé', 'Zou', 'Autres'],
                datasets: [{
                    data: [30, 20, 15, 18, 12, 5],
                    backgroundColor: [
                        '#102c57',
                        '#ffbe00',
                        '#28a745',
                        '#17a2b8',
                        '#ffc107',
                        '#6c757d'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    </script>
    @endpush
</x-admin-layout>
