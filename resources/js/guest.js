/**
 * MEMP BÉNIN - Guest JavaScript
 * Bootstrap 5 + Alpine.js + Lucide Icons
 */

// Import Bootstrap
import 'bootstrap';

// Import Alpine.js
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Import Lucide Icons
import { createIcons } from 'lucide';

// Initialize Lucide Icons
document.addEventListener('DOMContentLoaded', function() {
    createIcons();
});
