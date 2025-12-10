<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index(): View
    {
        // Stats data (temporaires - seront remplacés par de vraies données)
        $stats = [
            'posts' => [
                'total' => 45,
                'trend' => 12.5,
                'label' => 'depuis le mois dernier'
            ],
            'communiques' => [
                'total' => 23,
                'trend' => 8.3,
                'label' => 'depuis le mois dernier'
            ],
            'users' => [
                'total' => 12,
                'trend' => -3.2,
                'label' => 'depuis le mois dernier'
            ],
            'views' => [
                'total' => '15.2K',
                'trend' => 15.8,
                'label' => 'depuis le mois dernier'
            ],
        ];

        // Recent posts data (temporaire)
        $recentPosts = [
            [
                'id' => 1,
                'title' => 'Rentrée scolaire 2024-2025',
                'category' => 'Actualités',
                'author' => 'Admin User',
                'status' => 'published',
                'views' => 1234,
                'date' => '2024-12-09'
            ],
            [
                'id' => 2,
                'title' => 'Cérémonie de remise des prix',
                'category' => 'Événements',
                'author' => 'Admin User',
                'status' => 'published',
                'views' => 856,
                'date' => '2024-12-08'
            ],
            [
                'id' => 3,
                'title' => 'Formations des enseignants',
                'category' => 'Actualités',
                'author' => 'Admin User',
                'status' => 'draft',
                'views' => 0,
                'date' => '2024-12-07'
            ],
        ];

        // Chart data
        $chartData = [
            'labels' => ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
            'posts' => [12, 15, 18, 20, 22, 25, 28, 30, 32, 35, 38, 45],
            'views' => [850, 920, 1100, 1250, 1350, 1500, 1650, 1800, 1950, 2100, 2300, 2500],
        ];

        return view('admin.dashboard', compact('stats', 'recentPosts', 'chartData'));
    }
}
