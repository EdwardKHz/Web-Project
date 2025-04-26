// Mobile menu toggle functionality
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const nav = document.querySelector('nav');
const sidebar = document.getElementById('sidebar');
const mainContent = document.getElementById('mainContent');
const sidebarToggle = document.getElementById('sidebarToggle');

// Mobile menu toggle
if(mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', () => {
        nav.classList.toggle('active');
        const navUl = nav.querySelector('ul');
        if (navUl) {
            navUl.style.display = navUl.style.display === 'flex' ? 'none' : 'flex';
        }
    });
}

// Sidebar toggle 
if(sidebarToggle && sidebar && mainContent) {
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('active');
        mainContent.classList.toggle('expanded');
    });
}

// CV/Schedule Switcher functionality
const cvSwitcher = document.querySelector('.cv-switcher');
const scheduleSwitcher = document.querySelector('.schedule-switcher');

if(cvSwitcher) {
    cvSwitcher.addEventListener('click', (e) => {
        e.preventDefault();
        cvSwitcher.classList.toggle('active');
    });
}

if(scheduleSwitcher) {
    scheduleSwitcher.addEventListener('click', (e) => {
        e.preventDefault();
        scheduleSwitcher.classList.toggle('active');
    });
}

// Update outside click handler to include switchers
document.addEventListener('click', (e) => {
    if (!nav.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
        nav.classList.remove('active');
        const navUl = nav.querySelector('ul');
        if (navUl) {
            navUl.style.display = 'none';
        }
        // Close dropdowns
        if(cvSwitcher && !cvSwitcher.contains(e.target)) {
            cvSwitcher.classList.remove('active');
        }
        if(scheduleSwitcher && !scheduleSwitcher.contains(e.target)) {
            scheduleSwitcher.classList.remove('active');
        }
    }
});
