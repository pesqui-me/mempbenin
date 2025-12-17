/**
 * MEMP Admin Dashboard JavaScript
 * Handles sidebar, mobile menu, and interactive features
 */

(function($) {
    'use strict';

    // Initialize on document ready
    $(document).ready(function() {
        initSidebar();
        initMobileMenu();
        initDropdowns();
        initSearch();
        highlightActiveMenu();
    });

    /**
     * Sidebar functionality
     */
    function initSidebar() {
        // Toggle sidebar collapse on desktop
        $('.sidebar-toggle').on('click', function(e) {
            e.preventDefault();
            $('.wrapper').toggleClass('sidebar-collapsed');

            // Save state to localStorage
            const isCollapsed = $('.wrapper').hasClass('sidebar-collapsed');
            localStorage.setItem('sidebarCollapsed', isCollapsed);
        });

        // Restore sidebar state from localStorage
        const sidebarCollapsed = localStorage.getItem('sidebarCollapsed');
        if (sidebarCollapsed === 'true') {
            $('.wrapper').addClass('sidebar-collapsed');
        }

        // Handle submenu collapse
        $('.sidebar-submenu-toggle').on('click', function(e) {
            e.preventDefault();
            const $menuItem = $(this).closest('.sidebar-menu-item');
            const $submenu = $menuItem.find('.sidebar-submenu');

            // Close other submenus
            $('.sidebar-menu-item').not($menuItem).removeClass('open');
            $('.sidebar-submenu').not($submenu).slideUp(300);

            // Toggle current submenu
            $menuItem.toggleClass('open');
            $submenu.slideToggle(300);
        });

        // Keep parent menu open if child is active
        $('.sidebar-submenu-item.active').closest('.sidebar-menu-item').addClass('open');
        $('.sidebar-submenu-item.active').closest('.sidebar-submenu').show();
    }

    /**
     * Mobile menu functionality
     */
    function initMobileMenu() {
        // Toggle mobile menu
        $('#menuToggle').on('click', function(e) {
            e.preventDefault();
            $('.sidebar').addClass('sidebar-open');
            $('.sidebar-overlay').addClass('active');
            $('body').addClass('sidebar-mobile-open');
        });

        // Close mobile menu
        $(document).on('click', '.sidebar-overlay, .sidebar-close', function(e) {
            e.preventDefault();
            closeMobileMenu();
        });

        // Close on menu item click (mobile)
        $('.sidebar-menu-link:not(.sidebar-submenu-toggle)').on('click', function() {
            if ($(window).width() < 992) {
                closeMobileMenu();
            }
        });

        // Handle window resize
        $(window).on('resize', function() {
            if ($(window).width() >= 992) {
                closeMobileMenu();
            }
        });
    }

    /**
     * Close mobile menu
     */
    function closeMobileMenu() {
        $('.sidebar').removeClass('sidebar-open');
        $('.sidebar-overlay').removeClass('active');
        $('body').removeClass('sidebar-mobile-open');
    }

    /**
     * Dropdown functionality
     */
    function initDropdowns() {
        // Mark notifications as read on dropdown open
        $('.notifications-dropdown').on('show.bs.dropdown', function() {
            // AJAX call to mark notifications as read would go here
            console.log('Notifications dropdown opened');
        });

        // Mark messages as read on dropdown open
        $('.messages-dropdown').on('show.bs.dropdown', function() {
            // AJAX call to mark messages as read would go here
            console.log('Messages dropdown opened');
        });

        // Close dropdown on item click
        $('.dropdown-menu a').on('click', function(e) {
            if (!$(this).hasClass('dropdown-footer-link')) {
                $(this).closest('.dropdown-menu').dropdown('hide');
            }
        });
    }

    /**
     * Search functionality
     */
    function initSearch() {
        const $searchInput = $('.search-input');
        let searchTimeout;

        $searchInput.on('input', function() {
            clearTimeout(searchTimeout);
            const query = $(this).val();

            if (query.length >= 2) {
                searchTimeout = setTimeout(function() {
                    performSearch(query);
                }, 300);
            }
        });

        $searchInput.on('keypress', function(e) {
            if (e.which === 13) { // Enter key
                e.preventDefault();
                const query = $(this).val();
                if (query.length >= 2) {
                    performSearch(query);
                }
            }
        });
    }

    /**
     * Perform search (to be implemented with backend)
     */
    function performSearch(query) {
        console.log('Searching for:', query);
        // AJAX call to search endpoint would go here
        // Example:
        // $.ajax({
        //     url: '/admin/search',
        //     method: 'GET',
        //     data: { q: query },
        //     success: function(results) {
        //         displaySearchResults(results);
        //     }
        // });
    }

    /**
     * Highlight active menu item based on current URL
     */
    function highlightActiveMenu() {
        const currentPath = window.location.pathname;

        $('.sidebar-menu-link, .sidebar-submenu-link').each(function() {
            const $link = $(this);
            const href = $link.attr('href');

            if (href && href !== '#' && currentPath.includes(href)) {
                if ($link.hasClass('sidebar-submenu-link')) {
                    $link.closest('.sidebar-submenu-item').addClass('active');
                    $link.closest('.sidebar-menu-item').addClass('open');
                    $link.closest('.sidebar-submenu').show();
                } else if (!$link.hasClass('sidebar-submenu-toggle')) {
                    $link.closest('.sidebar-menu-item').addClass('active');
                }
            }
        });
    }

    /**
     * Chart.js initialization (if charts exist on page)
     */
    if (typeof Chart !== 'undefined') {
        // Set global Chart.js defaults
        Chart.defaults.font.family = "'Inter', sans-serif";
        Chart.defaults.color = '#6c757d';
        Chart.defaults.plugins.legend.display = true;
        Chart.defaults.plugins.tooltip.backgroundColor = 'rgba(16, 44, 87, 0.9)';
        Chart.defaults.plugins.tooltip.padding = 12;
        Chart.defaults.plugins.tooltip.cornerRadius = 8;
    }

    /**
     * Initialize charts on dashboard
     */
    function initDashboardCharts() {
        // Enrollment Chart
        const enrollmentCtx = document.getElementById('enrollmentChart');
        if (enrollmentCtx) {
            new Chart(enrollmentCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [{
                        label: 'Inscriptions 2024',
                        data: [5200, 5800, 6200, 6800, 7500, 8200, 8500, 8800, 9200, 9500, 9800, 10200],
                        borderColor: '#102c57',
                        backgroundColor: 'rgba(16, 44, 87, 0.1)',
                        tension: 0.4,
                        fill: true
                    }, {
                        label: 'Inscriptions 2023',
                        data: [4800, 5200, 5600, 6200, 6800, 7500, 7800, 8100, 8500, 8800, 9100, 9500],
                        borderColor: '#ffbe00',
                        backgroundColor: 'rgba(255, 190, 0, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });
        }

        // Department Distribution Chart
        const departmentCtx = document.getElementById('departmentChart');
        if (departmentCtx) {
            new Chart(departmentCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Atlantique', 'Borgou', 'Ouémé', 'Zou', 'Mono', 'Autres'],
                    datasets: [{
                        data: [85000, 72000, 68000, 65000, 58000, 102000],
                        backgroundColor: [
                            '#102c57',
                            '#ffbe00',
                            '#28a745',
                            '#17a2b8',
                            '#dc3545',
                            '#6c757d'
                        ],
                        borderWidth: 2,
                        borderColor: '#fff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += context.parsed.toLocaleString() + ' élèves';
                                    return label;
                                }
                            }
                        }
                    }
                }
            });
        }
    }

    // Initialize charts when dashboard loads
    if ($('#enrollmentChart').length || $('#departmentChart').length) {
        initDashboardCharts();
    }

    /**
     * Progress circle animation
     */
    function animateProgressCircle() {
        $('.progress-circle').each(function() {
            const $circle = $(this);
            const $valueDisplay = $circle.find('.progress-value');
            const targetValue = parseFloat($valueDisplay.text());
            const radius = 54;
            const circumference = 2 * Math.PI * radius;
            const offset = circumference - (targetValue / 100) * circumference;

            $circle.find('.progress-bar').css({
                'strokeDasharray': circumference,
                'strokeDashoffset': circumference
            });

            setTimeout(function() {
                $circle.find('.progress-bar').css({
                    'strokeDashoffset': offset,
                    'transition': 'stroke-dashoffset 1s ease-in-out'
                });
            }, 100);

            // Animate number
            let current = 0;
            const increment = targetValue / 50;
            const timer = setInterval(function() {
                current += increment;
                if (current >= targetValue) {
                    current = targetValue;
                    clearInterval(timer);
                }
                $valueDisplay.text(current.toFixed(1) + '%');
            }, 20);
        });
    }

    // Run progress animation if circles exist
    if ($('.progress-circle').length) {
        animateProgressCircle();
    }

    /**
     * Table row actions
     */
    $('.activity-item').on('click', function() {
        const activityId = $(this).data('id');
        console.log('Activity clicked:', activityId);
        // Navigate to detail or open modal
    });

    /**
     * Export functionality
     */
    $('#exportBtn').on('click', function(e) {
        e.preventDefault();
        console.log('Export data');
        // Implement export functionality (PDF, Excel, etc.)
    });

    /**
     * Quick action cards
     */
    $('.quick-action-card').on('click', function(e) {
        e.preventDefault();
        const action = $(this).data('action');
        console.log('Quick action:', action);
        // Handle quick actions
    });

    /**
     * Auto-refresh notifications
     */
    function refreshNotifications() {
        // AJAX call to get new notifications
        console.log('Checking for new notifications...');
        // $.ajax({
        //     url: '/admin/notifications/check',
        //     method: 'GET',
        //     success: function(data) {
        //         updateNotificationBadge(data.count);
        //     }
        // });
    }

    /**
     * Update notification badge
     */
    function updateNotificationBadge(count) {
        if (count > 0) {
            $('.badge-notification').text(count).show();
        } else {
            $('.badge-notification').hide();
        }
    }

    // Refresh notifications every 30 seconds
    // setInterval(refreshNotifications, 30000);

    /**
     * Smooth scroll for anchor links
     */
    $('a[href^="#"]:not([href="#"])').on('click', function(e) {
        const target = $(this.getAttribute('href'));
        if (target.length) {
            e.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 500);
        }
    });

    /**
     * Form validation enhancement
     */
    $('form').on('submit', function(e) {
        const $form = $(this);
        const $submitBtn = $form.find('button[type="submit"]');

        if (!$form[0].checkValidity()) {
            e.preventDefault();
            e.stopPropagation();
        } else {
            // Show loading state
            $submitBtn.prop('disabled', true);
            $submitBtn.html('<i class="fas fa-spinner fa-spin me-2"></i>Traitement...');
        }

        $form.addClass('was-validated');
    });

    /**
     * Auto-hide alerts after 5 seconds
     */
    setTimeout(function() {
        $('.alert:not(.alert-permanent)').fadeOut(500, function() {
            $(this).remove();
        });
    }, 5000);

    /**
     * Tooltips initialization
     */
    if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }

    /**
     * Popovers initialization
     */
    if (typeof bootstrap !== 'undefined' && bootstrap.Popover) {
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    }

})(jQuery);
