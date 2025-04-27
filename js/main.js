// Common functionality for all pages
document.addEventListener('DOMContentLoaded', function() {
    // Common elements
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const nav = document.querySelector('nav');
    const scheduleSwitcher = document.querySelector('.schedule-switcher');
    const scheduleDropdown = document.querySelector('.schedule-dropdown');
    const cvSwitcher = document.querySelector('.cv-switcher');
    const cvDropdown = document.querySelector('.cv-dropdown');

    // Function to check if we're on mobile
    function isMobileScreen() {
        return window.innerWidth <= 768;
    }

    // Function to handle mobile menu toggle
    function handleMobileMenu() {
        if (isMobileScreen()) {
            nav.classList.toggle('active');
            const navUl = nav.querySelector('ul');
            if (navUl) {
                navUl.style.display = navUl.style.display === 'flex' ? 'none' : 'flex';
            }
        }
    }

    // Sidebar toggle
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('expanded');
        });
    }

    // Add click handler for mobile menu toggle
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent event from bubbling up
            handleMobileMenu();
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (nav.classList.contains('active') && !nav.contains(e.target) && e.target !== mobileMenuToggle) {
            nav.classList.remove('active');
            const navUl = nav.querySelector('ul');
            if (navUl) {
                navUl.style.display = 'none';
            }
        }
    });

    // Handle window resize
    window.addEventListener('resize', () => {
        if (!isMobileScreen()) {
            nav.classList.remove('active');
            const navUl = nav.querySelector('ul');
            if (navUl) {
                navUl.style.display = 'flex';
            }
        }
    });

    // Schedule switcher functionality
    if (scheduleSwitcher) {
        scheduleSwitcher.addEventListener('click', (e) => {
            // Only prevent default if clicking the switcher itself, not the links
            if (e.target === scheduleSwitcher || e.target === scheduleSwitcher.querySelector('a')) {
                e.preventDefault();
                scheduleSwitcher.classList.toggle('active');
            }
        });

        // Close schedule switcher when clicking outside
        document.addEventListener('click', (e) => {
            if (!scheduleSwitcher.contains(e.target)) {
                scheduleSwitcher.classList.remove('active');
            }
        });
    }

    // CV switcher functionality
    if (cvSwitcher) {
        cvSwitcher.addEventListener('click', (e) => {
            // Only prevent default if clicking the switcher itself, not the links
            if (e.target === cvSwitcher || e.target === cvSwitcher.querySelector('a')) {
                e.preventDefault();
                cvSwitcher.classList.toggle('active');
            }
        });

        // Close CV switcher when clicking outside
        document.addEventListener('click', (e) => {
            if (!cvSwitcher.contains(e.target)) {
                cvSwitcher.classList.remove('active');
            }
        });
    }

    // Quiz functionality
    function calculate() {
        let result = 0;
        const answers = [2,1,4,2,3,3,3,3,2,2,1,2,2,3,3,3,1,2,3,4];
        
        for(let i = 1; i <= 20; i++) {
            const question = document.getElementById(`qu${i}An${answers[i-1]}`);
            const allRadios = document.getElementsByName(`qu${i}`);
            
            if(question && question.checked) {
                result++;
                const questionContainer = document.getElementById(`question${i}`);
                if(questionContainer) {
                    questionContainer.style.border = "3px solid green";
                }
            } else {
                const questionContainer = document.getElementById(`question${i}`);
                if(questionContainer) {
                    questionContainer.style.border = "3px solid red";
                }
                
                for(let j = 0; j < allRadios.length; j++) {
                    if(allRadios[j].checked) {
                        const label = document.querySelector(`label[for='${allRadios[j].id}']`);
                        if(label) {
                            label.style.color = "red";
                        }
                    }
                }
            }
            
            const correctLabel = document.querySelector(`label[for='qu${i}An${answers[i-1]}']`);
            if(correctLabel) {
                correctLabel.style.color = "green";
            }
            
            for(let j = 0; j < allRadios.length; j++) {
                allRadios[j].disabled = true;
            }
        }
        
        const submitBtn = document.getElementById('submit');
        const resultDiv = document.getElementById('result');
        const resultValue = document.getElementById('resultvalue');
        
        if(submitBtn) submitBtn.style.display = "none";
        if(resultDiv) resultDiv.style.display = "flex";
        if(resultValue) resultValue.innerHTML = result;
        
        window.scrollTo(0, 0);
    }

    function retake() {
        const submitBtn = document.getElementById('submit');
        const resultDiv = document.getElementById('result');
        
        if(submitBtn) submitBtn.style.display = "block";
        if(resultDiv) resultDiv.style.display = "none";
        
        for(let i = 1; i <= 20; i++) {
            const allRadios = document.getElementsByName(`qu${i}`);
            for(let j = 0; j < allRadios.length; j++) {
                allRadios[j].disabled = false;
                allRadios[j].checked = false;
                const label = document.querySelector(`label[for='${allRadios[j].id}']`);
                if(label) {
                    label.style.color = "";
                }
            }
            const questionContainer = document.getElementById(`question${i}`);
            if(questionContainer) {
                questionContainer.style.border = "";
            }
        }
        
        window.scrollTo(0, 0);
    }

    // Add event listeners for quiz buttons
    const submitBtn = document.getElementById('submit-btn');
    const retakeBtn = document.getElementById('retake-btn');

    if(submitBtn) {
        submitBtn.addEventListener('click', calculate);
    }
    if(retakeBtn) {
        retakeBtn.addEventListener('click', retake);
    }

    // Contact form validation
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            if (!name || !email || !message) {
                alert('Please fill in all fields');
                return;
            }
            
            if (!email.includes('@')) {
                alert('Please enter a valid email address');
                return;
            }
            
            // Here you would typically send the form data to a server
            alert('Thank you for your message! We will get back to you soon.');
            contactForm.reset();
        });
    }

    // Media page functionality
    const mediaItems = document.querySelectorAll('.media-item');
    if (mediaItems.length > 0) {
        mediaItems.forEach(item => {
            item.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });
    }

    // Research page functionality
    const researchItems = document.querySelectorAll('.research-item');
    if (researchItems.length > 0) {
        researchItems.forEach(item => {
            item.addEventListener('click', function() {
                this.classList.toggle('expanded');
            });
        });
    }

    // Arabic page functionality
    const arabicText = document.querySelectorAll('.arabic-text');
    if (arabicText.length > 0) {
        arabicText.forEach(text => {
            text.addEventListener('click', function() {
                this.classList.toggle('translated');
            });
        });
    }
}); 