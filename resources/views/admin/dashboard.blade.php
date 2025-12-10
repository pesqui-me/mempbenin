<x-admin-layout>
    <x-slot:title>Tableau de bord</x-slot>

    <!-- Breadcrumb -->
    <x-admin.breadcrumb :items="[
        ['label' => 'Tableau de bord', 'url' => route('admin.dashboard')]
    ]" />

    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">Tableau de bord</h1>
        <div class="page-actions">
            <x-admin.button variant="primary" icon="plus" href="{{ route('admin.posts.index') }}">
                Nouvelle actualité
            </x-admin.button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <x-admin.stat-card
                title="Actualités"
                :value="$stats['posts']['total']"
                icon="file-text"
                variant="primary"
                :trend="$stats['posts']['trend']"
                :trendLabel="$stats['posts']['label']"
            />
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <x-admin.stat-card
                title="Communiqués"
                :value="$stats['communiques']['total']"
                icon="megaphone"
                variant="success"
                :trend="$stats['communiques']['trend']"
                :trendLabel="$stats['communiques']['label']"
            />
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <x-admin.stat-card
                title="Utilisateurs"
                :value="$stats['users']['total']"
                icon="users"
                variant="warning"
                :trend="$stats['users']['trend']"
                :trendLabel="$stats['users']['label']"
            />
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <x-admin.stat-card
                title="Vues totales"
                :value="$stats['views']['total']"
                icon="eye"
                variant="danger"
                :trend="$stats['views']['trend']"
                :trendLabel="$stats['views']['label']"
            />
        </div>
    </div>

    <!-- Chart & Recent Posts -->
    <div class="row g-4">
        <!-- Chart -->
        <div class="col-12 col-lg-8">
            <x-admin.card title="Statistiques des publications" elevated>
                <div class="chart-container">
                    <canvas id="statsChart"></canvas>
                </div>
            </x-admin.card>
        </div>

        <!-- Quick Stats -->
        <div class="col-12 col-lg-4">
            <x-admin.card title="Résumé rapide" elevated>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                        <div>
                            <div class="text-muted" style="font-size: var(--text-sm);">Publications publiées</div>
                            <div class="fw-bold" style="font-size: var(--text-2xl); color: var(--primary);">{{ $stats['posts']['total'] }}</div>
                        </div>
                        <i data-lucide="file-text" width="32" height="32" style="color: var(--primary);"></i>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                        <div>
                            <div class="text-muted" style="font-size: var(--text-sm);">Brouillons</div>
                            <div class="fw-bold" style="font-size: var(--text-2xl); color: var(--warning);">8</div>
                        </div>
                        <i data-lucide="edit" width="32" height="32" style="color: var(--warning);"></i>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                        <div>
                            <div class="text-muted" style="font-size: var(--text-sm);">En attente</div>
                            <div class="fw-bold" style="font-size: var(--text-2xl); color: var(--info);">5</div>
                        </div>
                        <i data-lucide="clock" width="32" height="32" style="color: var(--info);"></i>
                    </div>
                </div>
            </x-admin.card>
        </div>
    </div>

    <!-- Recent Posts Table -->
    <div class="row mt-4">
        <div class="col-12">
            <x-admin.card title="Publications récentes" elevated>
                <x-slot:actions>
                    <x-admin.button variant="ghost" icon="more-vertical" iconOnly />
                </x-slot>

                <div class="table-wrapper">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Catégorie</th>
                                <th>Auteur</th>
                                <th>Statut</th>
                                <th>Vues</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentPosts as $post)
                                <tr>
                                    <td>
                                        <div class="fw-semibold">{{ $post['title'] }}</div>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary">{{ $post['category'] }}</span>
                                    </td>
                                    <td>{{ $post['author'] }}</td>
                                    <td>
                                        @if($post['status'] === 'published')
                                            <span class="badge badge-success">
                                                <i data-lucide="check-circle" width="12" height="12" style="display: inline-block; vertical-align: middle;"></i>
                                                Publié
                                            </span>
                                        @else
                                            <span class="badge badge-warning">
                                                <i data-lucide="clock" width="12" height="12" style="display: inline-block; vertical-align: middle;"></i>
                                                Brouillon
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1">
                                            <i data-lucide="eye" width="14" height="14" style="color: var(--gray-500);"></i>
                                            {{ number_format($post['views']) }}
                                        </div>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($post['date'])->format('d/m/Y') }}</td>
                                    <td>
                                        <div class="table-actions">
                                            <x-admin.button variant="ghost" icon="eye" iconOnly />
                                            <x-admin.button variant="ghost" icon="edit" iconOnly />
                                            <x-admin.button variant="ghost" icon="trash-2" iconOnly />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <x-slot:footer>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted" style="font-size: var(--text-sm);">Affichage de 3 sur {{ $stats['posts']['total'] }} publications</span>
                        <x-admin.button variant="outline" href="{{ route('admin.posts.index') }}">
                            Voir toutes les publications
                        </x-admin.button>
                    </div>
                </x-slot>
            </x-admin.card>
        </div>
    </div>

    <!-- Chart.js Script -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('statsChart');

            if (ctx) {
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: @json($chartData['labels']),
                        datasets: [
                            {
                                label: 'Publications',
                                data: @json($chartData['posts']),
                                borderColor: '#1B58A2',
                                backgroundColor: 'rgba(27, 88, 162, 0.1)',
                                tension: 0.4,
                                fill: true,
                                pointBackgroundColor: '#1B58A2',
                                pointBorderColor: '#fff',
                                pointBorderWidth: 2,
                                pointRadius: 4,
                                pointHoverRadius: 6
                            },
                            {
                                label: 'Vues (x10)',
                                data: @json(array_map(fn($v) => $v / 10, $chartData['views'])),
                                borderColor: '#008859',
                                backgroundColor: 'rgba(0, 136, 89, 0.1)',
                                tension: 0.4,
                                fill: true,
                                pointBackgroundColor: '#008859',
                                pointBorderColor: '#fff',
                                pointBorderWidth: 2,
                                pointRadius: 4,
                                pointHoverRadius: 6
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                                labels: {
                                    usePointStyle: true,
                                    padding: 20,
                                    font: {
                                        family: 'Segoe UI, system-ui, -apple-system, sans-serif',
                                        size: 12
                                    }
                                }
                            },
                            tooltip: {
                                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                                padding: 12,
                                borderRadius: 8,
                                titleFont: {
                                    size: 14,
                                    weight: 'bold'
                                },
                                bodyFont: {
                                    size: 13
                                },
                                displayColors: true,
                                usePointStyle: true
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(0, 0, 0, 0.05)',
                                    drawBorder: false
                                },
                                ticks: {
                                    font: {
                                        size: 11
                                    },
                                    color: '#6c757d'
                                }
                            },
                            x: {
                                grid: {
                                    display: false,
                                    drawBorder: false
                                },
                                ticks: {
                                    font: {
                                        size: 11
                                    },
                                    color: '#6c757d'
                                }
                            }
                        },
                        interaction: {
                            intersect: false,
                            mode: 'index'
                        }
                    }
                });
            }
        });
    </script>
    @endpush
</x-admin-layout>
