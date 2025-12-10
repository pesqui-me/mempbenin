/**
 * MEMP BÉNIN - Admin JavaScript
 * Bootstrap 5 + Alpine.js + Lucide Icons + Chart.js
 */

// Import Bootstrap
import 'bootstrap';

// Import Alpine.js
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Import Lucide Icons
import { createIcons, Menu, X, Search, Bell, User, ChevronDown, Home, FileText,
    Megaphone, Users, Settings, FolderOpen, Image, LogOut, LayoutDashboard,
    Plus, Edit, Trash2, Eye, ArrowUp, ArrowDown, TrendingUp, TrendingDown,
    MoreVertical } from 'lucide';

// Initialize Lucide Icons
createIcons({
    icons: {
        Menu, X, Search, Bell, User, ChevronDown, Home, FileText,
        Megaphone, Users, Settings, FolderOpen, Image, LogOut, LayoutDashboard,
        Plus, Edit, Trash2, Eye, ArrowUp, ArrowDown, TrendingUp, TrendingDown,
        MoreVertical
    }
});

// Import Chart.js
import {
    Chart,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    BarElement,
    Title,
    Tooltip,
    Legend,
    Filler
} from 'chart.js';

Chart.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    BarElement,
    Title,
    Tooltip,
    Legend,
    Filler
);

window.Chart = Chart;

/**
 * Sidebar Toggle for Mobile
 */
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.querySelector('.header-toggle-btn');
    const sidebar = document.querySelector('.admin-sidebar');
    const overlay = document.querySelector('.sidebar-overlay');

    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            if (overlay) {
                overlay.classList.toggle('show');
            }
        });

        if (overlay) {
            overlay.addEventListener('click', function() {
                sidebar.classList.remove('show');
                overlay.classList.remove('show');
            });
        }
    }

    // Reinitialize Lucide icons after any dynamic content change
    const observer = new MutationObserver(function(mutations) {
        createIcons();
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
});

/**
 * Auto-hide alerts after 5 seconds
 */
document.addEventListener('DOMContentLoaded', function() {
    const alerts = document.querySelectorAll('.alert:not(.alert-permanent)');
    alerts.forEach(function(alert) {
        setTimeout(function() {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });
});

/**
 * Confirm before delete
 */
document.addEventListener('DOMContentLoaded', function() {
    const deleteForms = document.querySelectorAll('form[data-confirm]');
    deleteForms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            const message = form.getAttribute('data-confirm') || 'Êtes-vous sûr de vouloir supprimer cet élément ?';
            if (!confirm(message)) {
                e.preventDefault();
                return false;
            }
        });
    });
});
