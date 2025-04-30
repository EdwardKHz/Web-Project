<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Quiz</title>
    <style>
        /* 1. Variables */
:root {
  --primary-color: #ff6b6b;
  --middle-color: #ffa254;
  --secondary-color: #ffd93d;
  --dark-color: #1a1a1a;
  --light-color: #ffffff;
  --surface-color: rgba(255, 255, 255, 0.1);
  --glass-bg: rgba(255, 255, 255, 0.95);
  --glass-border: rgba(255, 255, 255, 0.3);
  --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
  --sidebar-width: 280px;
  --header-height: 70px;
  --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05),
    0 2px 4px -1px rgba(0, 0, 0, 0.03);
  --hover-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
    0 4px 6px -2px rgba(0, 0, 0, 0.05);
  --border-radius: 12px;
}

/* 2. Reset & Base Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: "Poppins", sans-serif;
  line-height: 1.6;
  color: var(--light-color);
  background-color: var(--dark-color);
  min-height: 100vh;
}

/* 3. Typography & Links */
a {
  color: var(--primary-color);
  text-decoration: none;
}

/* 4. Layout & Structure */
.layout {
  min-height: 100vh;
  position: relative;
  display: flex;
  flex-direction: column;
  padding-left: 0;
}

.layout.with-sidebar {
  padding-left: var(--sidebar-width);
}

/* 5. Header & Navigation */
header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  padding: 1.5rem 4rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 100;
  background: rgba(0, 0, 0, 0.3);
}

.logo a {
  font-size: 2rem;
  font-weight: 700;
  color: var(--light-color);
  text-decoration: none;
}

.mobile-menu-toggle {
  display: none;
  background: none;
  border: none;
  color: var(--light-color);
  font-size: 1.5rem;
  cursor: pointer;
  padding: 0.5rem;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: relative;
  z-index: 1000;
}

nav {
  display: flex;
}

nav ul {
  display: flex;
  gap: 1.5rem;
  list-style: none;
  flex-wrap: wrap;
  padding: 0.5rem;
}

nav ul li {
  position: relative;
}

nav ul li a {
  color: var(--light-color);
  text-decoration: none;
  font-size: 0.95rem;
  font-weight: 500;
  padding: 0.5rem 0.75rem;
  border-radius: var(--border-radius);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

nav ul li a:hover,
nav ul li a.active {
  color: var(--primary-color);
}

/* 6. Sidebar */
.sidebar-toggle {
  position: fixed;
  top: 1.8rem;
  left: 1rem;
  z-index: 1000;
  background: var(--primary-color);
  color: white;
  border: none;
  padding: 0.75rem;
  border-radius: 50%;
  cursor: pointer;
  display: none;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.sidebar-toggle:hover {
  background: var(--primary-dark);
  transform: scale(1.05);
}

.sidebar-toggle i {
  font-size: 1.25rem;
}

.sidebar {
  width: var(--sidebar-width);
  background: var(--glass-bg);
  border-right: 1px solid var(--glass-border);
  position: fixed;
  top: 105px;
  left: 0;
  bottom: 0;
  padding: 2rem;
  overflow-y: auto;
  box-shadow: var(--glass-shadow);
  transform: translateX(-100%);
}

.sidebar.active {
  transform: translateX(0);
}

.main-content {
  flex: 1;
  margin: 100px auto 0;
  padding: 2rem;
  width: 100%;
  max-width: 1200px;
  position: relative;
  z-index: 1;
}

.main-content.with-sidebar {
  max-width: calc(1200px - var(--sidebar-width));
  width: calc(100% - var(--sidebar-width));
}

.sidebar-content {
  background: var(--surface-color);
  padding: 1.5rem;
  border-radius: var(--border-radius);
  border: 1px solid var(--glass-border);
}

.sidebar h3 {
  color: var(--primary-color);
  margin-bottom: 1rem;
  font-size: 1.1rem;
  font-weight: 600;
}

.sidebar ul {
  list-style: none;
}

.sidebar ul li a {
  color: var(--dark-color);
  text-decoration: none;
  padding: 0.75rem;
  border-radius: var(--border-radius);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

/* 7. Main Content */
.main-content {
  flex: 1;
  margin: 100px auto 0;
  padding: 2rem;
  width: 100%;
  max-width: 1200px;
}

section {
  background: var(--surface-color);
  padding: 2rem;
  border-radius: var(--border-radius);
  box-shadow: var(--card-shadow);
  margin-bottom: 2rem;
}

section h2 {
  color: var(--primary-color);
  margin-bottom: 1.5rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

/* 8. Hero Section */
.hero {
  min-height: calc(100vh - var(--header-height));
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 4rem 2rem;
  position: relative;
  overflow: hidden;
  background-image: url("background.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  position: relative;
}

.hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  opacity: 0.1;
  z-index: -1;
}

.hero-content {
  max-width: 800px;
  text-align: center;
  position: relative;
  z-index: 1;
}

.hero h1 {
  font-size: 4rem;
  font-weight: 700;
  margin-bottom: 1rem;
  line-height: 1.2;
}

.hero .greeting {
  display: block;
  font-size: 1.5rem;
  color: var(--primary-color);
  margin-bottom: 0.5rem;
}

.hero .intro {
  display: block;
  color: var(--primary-color);
}

.hero .tagline {
  font-size: 1.5rem;
  color: var(--light-color);
  margin-bottom: 2rem;
  opacity: 0.9;
}

.cta-group {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
}

.cta-button {
  display: inline-block;
  padding: 1rem 2rem;
  background: var(--primary-color);
  color: var(--light-color);
  text-decoration: none;
  border-radius: var(--border-radius);
  font-weight: 600;
}

.cta-button:hover {
  box-shadow: var(--hover-shadow);
}

.email-link {
  color: var(--light-color);
  text-decoration: none;
  opacity: 0.8;
}

.email-link:hover {
  opacity: 1;
}

/* 9. About Section */
.about-section {
  padding: 4rem 2rem;
  background: var(--surface-color);
}

.about-content {
  max-width: 1200px;
  margin: 0 auto;
}

.about-content h2 {
  text-align: center;
  margin-bottom: 2rem;
  font-size: 2.5rem;
}

.about-content p {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 2rem;
  font-size: 1.1rem;
  line-height: 1.8;
}

/* 10. CV & Timeline */
.cv-container {
  max-width: 1200px;
  margin: 2rem auto;
  padding: 2rem;
  background: var(--surface-color);
  border-radius: 1rem;
  box-shadow: var(--card-shadow);
}

.info-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin-bottom: 3rem;
}

.info-item {
  padding: 1.5rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 0.75rem;
  backdrop-filter: blur(5px);
}

.timeline {
  position: relative;
  padding: 2rem 0;
}

.timeline::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 2px;
  background: var(--primary-color);
  transform: translateX(-50%);
}

.timeline-item {
  position: relative;
  margin-bottom: 2rem;
  width: 50%;
  padding: 1.5rem;
  background: rgba(255, 255, 255, 0.1);
  border-radius: var(--border-radius);
  border: 1px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.timeline-item:nth-child(odd) {
  margin-left: 50%;
}

.timeline-item:nth-child(even) {
  margin-right: 50%;
}

/* 11. Skills & Features */
.skills-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-bottom: 3rem;
}

.skill-category {
  padding: 1.5rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 0.75rem;
  backdrop-filter: blur(5px);
}

.website-features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin-bottom: 3rem;
}

.website-features ul {
  list-style: none;
}

.website-features li {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: var(--border-radius);
  margin-bottom: 1rem;
}

.website-features li:hover {
  background-color: rgba(255, 255, 255, 0.1);
}

.website-features i {
  color: var(--primary-color);
  font-size: 1.2rem;
}

.tech-stack {
  text-align: center;
  margin-top: 3rem;
}

.tech-stack h3 {
  margin-bottom: 1.5rem;
  font-size: 1.5rem;
  color: var(--primary-color);
}

.tech-stack ul {
  display: flex;
  justify-content: center;
  gap: 2rem;
  list-style: none;
  flex-wrap: wrap;
}

.tech-stack li {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.75rem 1.5rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: var(--border-radius);
}

.tech-stack li:hover {
  background-color: rgba(255, 255, 255, 0.1);
}

.tech-stack i {
  font-size: 1.5rem;
  color: var(--primary-color);
}

/* 12. Tables & Schedule */
table {
  border: 2px solid var(--middle-color);
  border-spacing: 0;
  border-radius: var(--border-radius);
  overflow: hidden;
}

table th,
table td {
  border: 1px solid var(--middle-color);
  padding: 8px;
  text-align: left;
}

.arabic table th,
.arabic table td {
  text-align: right;
}

table th {
  background-color: var(--surface-color);
  color: var(--light-color);
}

.schedule-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  margin: 1.5rem 0;
  border-radius: var(--border-radius);
  overflow: hidden;
  box-shadow: var(--card-shadow);
}

.schedule-table th {
  background: var(--primary-color);
  color: white;
  padding: 1rem;
  text-align: left;
  font-weight: 600;
}

.schedule-table td {
  padding: 1rem;
  border-bottom: 1px solid var(--glass-border);
  background: var(--surface-color);
}

/* 13. Forms & Contact */
.contact-form {
  max-width: 800px;
  margin: 0 auto;
  padding: 2rem;
  background: var(--glass-bg);
  border-radius: var(--border-radius);
  box-shadow: var(--glass-shadow);
  border: 1px solid var(--glass-border);
}

.form-group {
  margin-bottom: 1.5rem;
  position: relative;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: var(--dark-color);
  font-weight: 500;
  font-size: 0.95rem;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 0.75rem 1rem;
  border: 2px solid var(--glass-border);
  border-radius: var(--border-radius);
  background: rgba(255, 255, 255, 0.9);
  font-size: 1rem;
  color: var(--dark-color);
}

.form-group input:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--primary-color);
  box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.1);
}

.form-group textarea {
  resize: vertical;
  min-height: 120px;
}

.error-message {
  color: #ef4444;
  font-size: 0.875rem;
  margin-top: 0.25rem;
  display: none;
}

.error-message.show {
  display: block;
}

.submit-btn {
  /* Replace gradient with primary color */
  background: var(--primary-color);
  color: var(--light-color);
  border: none;
  padding: 0.75rem 1.5rem;
  border-radius: var(--border-radius);
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin: 0 auto;
}

.submit-btn:hover {
  box-shadow: var(--hover-shadow);
}

.submit-btn i {
  font-size: 1.1rem;
}

/* 14. Components */
.cv-switcher,
.schedule-switcher {
  position: relative;
}

.cv-dropdown {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background: var(--glass-bg);
  border-radius: var(--border-radius);
  box-shadow: var(--card-shadow);
  min-width: 250px;
  padding: 0.5rem;
  margin-top: 0.5rem;
  z-index: 1000;
  border: 1px solid var(--glass-border);
  opacity: 0;
}

.schedule-dropdown {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background: var(--glass-bg);
  border-radius: var(--border-radius);
  box-shadow: var(--card-shadow);
  min-width: 250px;
  padding: 0.5rem;
  margin-top: 0.5rem;
  z-index: 1000;
  border: 1px solid var(--glass-border);
  opacity: 0;
}

.cv-switcher.active .cv-dropdown,
.schedule-switcher.active .schedule-dropdown {
  display: block;
  opacity: 1;
}

.cv-dropdown a,
.schedule-dropdown a {
  display: flex;
  flex-direction: column;
  padding: 0.75rem 1rem;
  color: var(--dark-color);
  text-decoration: none;
  border-radius: calc(var(--border-radius) - 4px);
}

.cv-dropdown a:hover,
.schedule-dropdown a:hover {
  background-color: rgba(0, 0, 0, 0.05);
}

.cv-dropdown a.active,
.schedule-dropdown a.active {
  background-color: rgba(0, 0, 0, 0.1);
}

.cv-dropdown .name,
.schedule-dropdown .name {
  font-weight: 600;
  font-size: 0.95rem;
}

.cv-dropdown .role,
.schedule-dropdown .role {
  font-size: 0.85rem;
  color: #666;
  margin-top: 0.25rem;
}

.cv-navigation,
.schedule-navigation {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 2rem;
  margin: 2rem 0;
  background: var(--dark-color);
}

.prev-cv,
.next-cv,
.prev-schedule,
.next-schedule {
  padding: 0.75rem 1.5rem;
  background: var(--primary-color);
  color: white;
  text-decoration: none;
  border-radius: var(--border-radius);
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.prev-cv,
.prev-schedule {
  margin-right: auto;
}

.next-cv,
.next-schedule {
  margin-left: auto;
}

/* 15. Quiz */
.quiz {
  padding-bottom: 2em;
}



#wrapper .question,
#wrapper #result {
  background: var(--surface-color);
  padding: 2rem;
  border-radius: var(--border-radius);
  box-shadow: var(--card-shadow);
  margin-bottom: 2rem;
}

.question h3 {
  margin-bottom: 1rem;
  color: var(--primary-color);
}

.quiz #submit-btn,
.quiz #retake-btn {
  /* Replace gradient with primary color */
  background: var(--primary-color);
  color: white;
  border: none;
  padding: 0.75rem 1.5rem;
  border-radius: var(--border-radius);
  font-weight: 500;
}

.quiz #result {
  display: flex;
  justify-content: space-evenly;
}

/* 16. Footer */
footer {
  background: var(--surface-color);
  padding: 2rem;
  text-align: center;
  margin-top: auto;
  box-shadow: var(--card-shadow);
}

/* 17. Research Content */
#wrapper {
  width: 80%;
  margin: 0 auto;
  margin-top: 150px;
}

#wrapper .subject {
  background: var(--surface-color);
  padding: 2rem;
  border-radius: var(--border-radius);
  box-shadow: var(--card-shadow);
  margin-bottom: 2rem;
}

#wrapper .subject h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
  margin-top: 1rem;
  color: var(--primary-color);
}

#wrapper .subject p {
  margin-top: 1em;
}

#wrapper .subject ul {
  padding: 1em;
}

#wrapper .subject p a:visited {
  color: var(--middle-color);
}

#wrapper .subject p a:hover {
  color: var(--middle-color);
  text-decoration: underline;
}

/* 18. Arabic Support */
.arabic {
  direction: rtl;
  text-align: right;
}

/* 19. Media Queries */
@media (max-width: 1024px) {
  .sidebar-toggle {
    display: flex;
  }

  .sidebar {
    transform: translateX(-100%);
    z-index: 1000;
    position: fixed;
    top: 80px;
    left: 0;
    bottom: 0;
    width: 280px;
    background: var(--glass-bg);

    border-right: 1px solid var(--glass-border);
    box-shadow: var(--glass-shadow);
  }

  .sidebar.active {
    transform: translateX(0);
  }
  .main-content.with-sidebar {
    margin-left: 0;
    width: 100%;
    max-width: 1200px;
  }
}

@media (min-width: 1025px) {
  .sidebar {
    transform: translateX(0);
    position: fixed;
    top: 105px;
    left: 0;
    bottom: 0;
  }

  .main-content.with-sidebar {
    margin-left: var(--sidebar-width);
    max-width: calc(1200px - var(--sidebar-width));
    width: calc(100% - var(--sidebar-width));
  }
}

@media (max-width: 768px) {
  header {
    padding: 1rem 3.5rem;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
  }

  .sidebar-toggle {
    top: 1rem;
    left: 1rem;
  }

  .logo {
    margin-left: 2.5rem;
  }

  .mobile-menu-toggle {
    display: block;
    position: absolute;
    right: 1rem;
    top: 1rem;
    z-index: 1001;
  }
  nav {
    display: none;
    position: fixed;
    top: var(--header-height);
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.9);
    padding: 1rem;
    z-index: 1000;
    height: auto;
  }
  nav.active {
    display: block;
  }
  nav ul {
    flex-direction: column;
    gap: 0.5rem;
    width: 100%;
    padding: 0;
    margin: 0;
  }
  nav ul li {
    width: 100%;
    text-align: center;
  }
  nav ul li a {
    display: block;
    padding: 1rem;
    text-align: center;
    color: var(--light-color);
    font-size: 1.1rem;
    border-radius: var(--border-radius);
  }
  nav ul li a:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: var(--light-color);
  }

  /* Dropdowns */
  .cv-dropdown,
  .schedule-dropdown {
    position: static;
    width: 100%;
    background: rgba(0, 0, 0, 0.8);
    padding: 0;
    margin: 0;
    border: none;
    box-shadow: none;
  }
  .cv-dropdown a,
  .schedule-dropdown a {
    padding: 1rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    color: var(--light-color);
  }
  .cv-dropdown .role,
  .schedule-dropdown .role {
    color: rgba(255, 255, 255, 0.7);
  }

  /* Timeline */
  .timeline::before {
    left: 0;
  }
  .timeline-item {
    width: 100%;
    margin-left: 0 !important;
  }

  /* Tables */
  .schedule-table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
  }
  .schedule-table table {
    min-width: 600px;
  }
  .schedule-table th,
  .schedule-table td {
    min-width: 120px;
  }

  /* Hero & Features */
  .hero h1 {
    font-size: 3rem;
  }
  .hero .tagline {
    font-size: 1.25rem;
  }
  .website-features {
    grid-template-columns: 1fr;
  }
  .tech-stack ul {
    gap: 1rem;
  }

  /* Contact */
  .contact-form {
    padding: 1.5rem;
  }
  .contact-info-grid {
    grid-template-columns: 1fr;
  }
  .social-links {
    flex-wrap: wrap;
  }

  /* CV Navigation */
  .cv-navigation,
  .schedule-navigation {
    flex-direction: column;
    gap: 1rem;
  }

  .prev-cv,
  .next-cv,
  .prev-schedule,
  .next-schedule {
    width: 100%;
    justify-content: center;
    margin: 0;
  }

  .main-content {
    margin-top: 80px;
    padding: 1rem;
  }

  .sidebar {
    top: 80px;
  }
}

@media (max-width: 550px) {
  #wrapper {
    width: 90%;
  }
  table th,
  table td {
    text-align: center;
  }
}

@media (max-width: 480px) {
  header {
    padding: 0.75rem;
  }
  .mobile-menu-toggle {
    width: 36px;
    height: 36px;
    font-size: 1.25rem;
  }
  .logo a {
    font-size: 1.5rem;
  }
  .schedule-table {
    font-size: 0.9rem;
  }
  .schedule-table th,
  .schedule-table td {
    padding: 0.75rem;
    min-width: 100px;
  }
  .hero h1 {
    font-size: 2.5rem;
  }
  .hero .greeting {
    font-size: 1.25rem;
  }
  .about-content h2 {
    font-size: 2rem;
  }
}

.videos {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 50vh;
  margin: 0;
  margin-bottom: 20px;
  padding: 0;
  box-sizing: border-box;
}

.card-list .card-item {
  list-style: none;
  display: flex;
  justify-content: center;
}

.card-list .card-item .card-link {
  user-select: none;
  width: 400px;
  display: block;
  background: #fff;
  padding: 18px;
  border-radius: 12px;
  text-decoration: none;
  border: 2px solid transparent;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.05);
  transition: 0.2s ease;
}

.card-list .card-item .card-link:hover {
  border-color: #5372f0;
}

.card-list .card-link .card-video {
  width: 100%;
  aspect-ratio: 16/9;
  object-fit: cover;
  border-radius: 10px;
}

.card-list .card-link .badge {
  color: #5372f0;
  padding: 8px 16px;
  font-weight: 500;
  font-size: 0.95rem;
  margin: 16px 0 18px;
  background: #dde4ff;
  width: fit-content;
  border-radius: 50px;
}

.card-list .card-link .card-title {
  font-size: 1.19rem;
  font-weight: 600;
  color: #1a1a1a;
}

.card-list .card-link .card-button {
  height: 35px;
  width: 35px;
  color: #5372f0;
  background: none;
  border-radius: 50%;
  margin: 30px 0 5px;
  cursor: pointer;
  border: 2px solid #5372f0;
  transform: rotate(-45deg);
  transition: 0.4s ease;
}

.card-list .card-link:hover .card-button {
  color: #fff;
  background: #5372f0;
}

video::-webkit-media-controls-fullscreen-button {
  display: none !important;
}

video::-moz-fullscreen-button {
  display: none !important;
}

video::-ms-fullscreen-button {
  display: none !important;
}

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="quiz.html">Quiz.</a>
        </div>
        <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="cv-switcher">
                    <a href="cv-anthony.html">CV</a>
                    <div class="cv-dropdown">
                        <a href="cv-anthony.html">
                            <span class="name">Anthony Abdo</span>
                            <span class="role">Web Developer</span>
                        </a>
                        <a href="cv-joseph.html">
                            <span class="name">Joseph Azzi</span>
                            <span class="role">Private Security Contractor</span>
                        </a>
                        <a href="cv-edward.html">
                            <span class="name">Edward Johnson</span>
                            <span class="role">Cybersecurity Expert</span>
                        </a>
                    </div>
                </li>
                <li><a href="research.html">Research</a></li>
                <li class="schedule-switcher">
                    <a href="schedule-anthony.html">Schedule</a>
                    <div class="schedule-dropdown">
                        <a href="schedule-anthony.html">
                            <span class="name">Anthony's Schedule</span>
                            <span class="role">Web Development</span>
                        </a>
                        <a href="schedule-edward.html">
                            <span class="name">Edward's Schedule</span>
                            <span class="role">Cybersecurity</span>
                        </a>
                        <a href="schedule-joseph.html">
                            <span class="name">Joseph's Schedule</span>
                            <span class="role">Security Operations</span>
                        </a>
                    </div>
                </li>
                <li><a href="media.html">Media</a></li>
                <li><a href="quiz.html" class="active">Quiz</a></li>
                <li><a href="arabic.html">Arabic</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="wrapper" class="quiz">
    <form method="POST" action="">
    <?php
    if(isset($_POST["submit"])) {
        $result = 0;
        $answers = [2,1,4,2,3,3,3,3,2,2,1,2,2,3,3,3,1,2,3,4];
        for($i = 1; $i <= 20; $i++) {
           if($_POST["qu$i"] == $answers[$i-1])
                $result++;
        }
    echo"
    <div id=\"result\"><div>Your Score is : $result/20</div>
        <div><input type=\"submit\" value=\"Retake Quiz\" id=\"retake-btn\" name=\"retake\"></div>    
    </div>";
    }
    ?>
    <div class="question" id="question1">
        <h3>1. What is included in the physical systems of Internet infrastructure?
        </h3>
            <input type="radio" id="qu1An1" name="qu1" value="1">
            <label for="qu1An1">A&#41; Smartphones</label><br>
            <input type="radio" id="qu1An2" name="qu1" value="2">
            <label for="qu1An2">B&#41; Networking cables, cellular towers, and data centers</label><br>
            <input type="radio" id="qu1An3" name="qu1" value="3">
            <label for="qu1An3">C&#41; Websites and blogs</label><br>
            <input type="radio" id="qu1An4" name="qu1" value="4">
            <label for="qu1An4">D&#41; Social media platforms</label><br>
    </div>
    <div class="question" id="question2">
        <h3>2. What is the primary function of internet exchange points (IXPs)?</h3>
            <input type="radio" id="qu2An1" name="qu2" value="1">
            <label for="qu2An1">A&#41; They store and forward data between different networks</label><br>
            <input type="radio" id="qu2An2" name="qu2" value="2">
            <label for="qu2An2">B&#41; They provide wireless communication for mobile devices</label><br>
            <input type="radio" id="qu2An3" name="qu2" value="3">
            <label for="qu2An3">C&#41; They encrypt sensitive information</label><br>
            <input type="radio" id="qu2An4" name="qu2" value="4">
            <label for="qu2An4">D&#41; They monitor internet traffic for security</label><br>
    </div>
    <div class="question" id="question3">
        <h3>3. Which system is responsible for packet routing and forwarding in the Internet infrastructure?</h3>
            <input type="radio" id="qu3An1" name="qu3" value="1">
            <label for="qu3An1">A&#41; Data centers</label><br>
            <input type="radio" id="qu3An2" name="qu3" value="2">
            <label for="qu3An2">B&#41; Naming and numbering systems</label><br>
            <input type="radio" id="qu3An3" name="qu3" value="3">
            <label for="qu3An3">C&#41; Security and identity protection</label><br>
            <input type="radio" id="qu3An4" name="qu3" value="4">
            <label for="qu3An4">D&#41; Packet-switched networks</label><br>
    </div>
    <div class="question" id="question4">
        <h3>4. In which year did Tim Berners-Lee and his team create the World Wide Web (WWW)?</h3>
            <input type="radio" id="qu4An1" name="qu4" value="1">
            <label for="qu4An1">A&#41; 1985</label><br>
            <input type="radio" id="qu4An2" name="qu4" value="2">
            <label for="qu4An2">B&#41; 1989</label><br>
            <input type="radio" id="qu4An3" name="qu4" value="3">
            <label for="qu4An3">C&#41; 1992</label><br>
            <input type="radio" id="qu4An4" name="qu4" value="4">
            <label for="qu4An4">D&#41; 1995</label><br>
    </div>
    <div class="question" id="question5">
        <h3>5. Which protocol is used by the World Wide Web to transfer data?</h3>
            <input type="radio" id="qu5An1" name="qu5" value="1">
            <label for="qu5An1">A&#41; FTP</label><br>
            <input type="radio" id="qu5An2" name="qu5" value="2">
            <label for="qu5An2">B&#41; SMTP</label><br>
            <input type="radio" id="qu5An3" name="qu5" value="3">
            <label for="qu5An3">C&#41; HTTP</label><br>
            <input type="radio" id="qu5An4" name="qu5" value="4">
            <label for="qu5An4">D&#41; SNMP</label><br>
    </div>
    <div class="question" id="question6">
        <h3>6. What was the first web browser developed for public use?</h3>
            <input type="radio" id="qu6An1" name="qu6" value="1">
            <label for="qu6An1">A&#41; Netscape Navigator</label><br>
            <input type="radio" id="qu6An2" name="qu6" value="2">
            <label for="qu6An2">B&#41; Internet Explorer</label><br>
            <input type="radio" id="qu6An3" name="qu6" value="3">
            <label for="qu6An3">C&#41; Mosaic</label><br>
            <input type="radio" id="qu6An4" name="qu6" value="4">
            <label for="qu6An4">D&#41; Safari</label><br>
    </div>
    <div class="question" id="question7">
        <h3>7. What year was the browser Netscape Navigator first released?</h3>
            <input type="radio" id="qu7An1" name="qu7" value="1">
            <label for="qu7An1">A&#41; 1992</label><br>
            <input type="radio" id="qu7An2" name="qu7" value="2">
            <label for="qu7An2">B&#41; 1993</label><br>
            <input type="radio" id="qu7An3" name="qu7" value="3">
            <label for="qu7An3">C&#41; 1994</label><br>
            <input type="radio" id="qu7An4" name="qu7" value="4">
            <label for="qu7An4">D&#41; 1995</label><br>
    </div>
    <div class="question" id="question8">
        <h3>8. Which of the following browsers was developed by Marc Andreessen's team?</h3>
            <input type="radio" id="qu8An1" name="qu8" value="1">
            <label for="qu8An1">A&#41; Safari</label><br>
            <input type="radio" id="qu8An2" name="qu8" value="2">
            <label for="qu8An2">B&#41; Internet Explorer</label><br>
            <input type="radio" id="qu8An3" name="qu8" value="3">
            <label for="qu8An3">C&#41; Mosaic</label><br>
            <input type="radio" id="qu8An4" name="qu8" value="4">
            <label for="qu8An4">D&#41; Opera</label><br>
    </div>
    <div class="question" id="question9">
        <h3>9. What was the main reason behind the success of the first web browsers like Mosaic and Netscape?</h3>
            <input type="radio" id="qu9An1" name="qu9" value="1">
            <label for="qu9An1">A&#41; They were text-based</label><br>
            <input type="radio" id="qu9An2" name="qu9" value="2">
            <label for="qu9An2">B&#41; They allowed easy navigation with clickable links</label><br>
            <input type="radio" id="qu9An3" name="qu9" value="3">
            <label for="qu9An3">C&#41; They required high-speed internet connections</label><br>
            <input type="radio" id="qu9An4" name="qu9" value="4">
            <label for="qu9An4">D&#41; They were only available on UNIX systems</label><br>
    </div>
    <div class="question" id="question10">
        <h3>10. What significant feature was introduced by Apple's Safari 2.0 in 2005?</h3>
            <input type="radio" id="qu10An1" name="qu10" value="1">
            <label for="qu10An1">A&#41; Pop-up blocker</label><br>
            <input type="radio" id="qu10An2" name="qu10" value="2">
            <label for="qu10An2">B&#41; Private Browsing</label><br>
            <input type="radio" id="qu10An3" name="qu10" value="3">
            <label for="qu10An3">C&#41; Video streaming support</label><br>
            <input type="radio" id="qu10An4" name="qu10" value="4">
            <label for="qu10An4">D&#41; Tabbed browsing</label><br>
    </div>
    <div class="question" id="question11">
        <h3>11. Which network was developed in the 1960s and is considered a precursor to the modern Internet?</h3>
            <input type="radio" id="qu11An1" name="qu11" value="1">
            <label for="qu11An1">A&#41; ARPANET</label><br>
            <input type="radio" id="qu11An2" name="qu11" value="2">
            <label for="qu11An2">B&#41; TCP/IP</label><br>
            <input type="radio" id="qu11An3" name="qu11" value="3">
            <label for="qu11An3">C&#41; Ethernet</label><br>
            <input type="radio" id="qu11An4" name="qu11" value="4">
            <label for="qu11An4">D&#41; Wi-Fi</label><br>
    </div>
    <div class="question" id="question12">
        <h3>12. What event in the 1990s significantly fueled the growth of the World Wide Web?</h3>
            <input type="radio" id="qu12An1" name="qu12" value="1">
            <label for="qu12An1">A&#41; The introduction of mobile technology</label><br>
            <input type="radio" id="qu12An2" name="qu12" value="2">
            <label for="qu12An2">B&#41; The dot-com boom</label><br>
            <input type="radio" id="qu12An3" name="qu12" value="3">
            <label for="qu12An3">C&#41; The creation of the first email client</label><br>
            <input type="radio" id="qu12An4" name="qu12" value="4">
            <label for="qu12An4">D&#41; The development of the first search engine</label><br>
    </div>
    <div class="question" id="question13">
        <h3>13. Which e-commerce companies emerged during the dot-com boom?</h3>
            <input type="radio" id="qu13An1" name="qu13" value="1">
            <label for="qu13An1">A&#41; Facebook and Twitter</label><br>
            <input type="radio" id="qu13An2" name="qu13" value="2">
            <label for="qu13An2">B&#41; Amazon and eBay</label><br>
            <input type="radio" id="qu13An3" name="qu13" value="3">
            <label for="qu13An3">C&#41; Microsoft and Google</label><br>
            <input type="radio" id="qu13An4" name="qu13" value="4">
            <label for="qu13An4">D&#41; Apple and IBM</label><br>
    </div>
    <div class="question" id="question14">
        <h3>14. In which year did Microsoft release Internet Explorer as part of Windows 95?</h3>
            <input type="radio" id="qu14An1" name="qu14" value="1">
            <label for="qu14An1">A&#41; 1993</label><br>
            <input type="radio" id="qu14An2" name="qu14" value="2">
            <label for="qu14An2">B&#41; 1994</label><br>
            <input type="radio" id="qu14An3" name="qu14" value="3">
            <label for="qu14An3">C&#41; 1995</label><br>
            <input type="radio" id="qu14An4" name="qu14" value="4">
            <label for="qu14An4">D&#41; 1996</label><br>
    </div>
    <div class="question" id="question15">
        <h3>15. What was the first browser that introduced tabbed browsing?</h3>
            <input type="radio" id="qu15An1" name="qu15" value="1">
            <label for="qu15An1">A&#41; Netscape Navigator</label><br>
            <input type="radio" id="qu15An2" name="qu15" value="2">
            <label for="qu15An2">B&#41; Internet Explorer</label><br>
            <input type="radio" id="qu15An3" name="qu15" value="3">
            <label for="qu15An3">C&#41; Opera</label><br>
            <input type="radio" id="qu15An4" name="qu15" value="4">
            <label for="qu15An4">D&#41; Firefox</label><br>
                    </div>
    <div class="question" id="question16">
        <h3>16. Which of the following best describes Hypertext in the context of the World Wide Web?</h3>
            <input type="radio" id="qu16An1" name="qu16" value="1">
            <label for="qu16An1">A&#41; Text-based documents linked by URLs</label><br>
            <input type="radio" id="qu16An2" name="qu16" value="2">
            <label for="qu16An2">B&#41; Images, sounds, and animations linked together</label><br>
            <input type="radio" id="qu16An3" name="qu16" value="3">
            <label for="qu16An3">C&#41; Clickable words or phrases to navigate to other information</label><br>
            <input type="radio" id="qu16An4" name="qu16" value="4">
            <label for="qu16An4">D&#41; Data transmission using secure protocols</label><br>
    </div>
    <div class="question" id="question17">
        <h3>17. What does HTTP stand for?</h3>
            <input type="radio" id="qu17An1" name="qu17" value="1">
            <label for="qu17An1">A&#41; HyperText Transfer Protocol</label><br>
            <input type="radio" id="qu17An2" name="qu17" value="2">
            <label for="qu17An2">B&#41; HyperText Transport Protocol</label><br>
            <input type="radio" id="qu17An3" name="qu17" value="3">
            <label for="qu17An3">C&#41; Hyperlink Transmission Protocol</label><br>
            <input type="radio" id="qu17An4" name="qu17" value="4">
            <label for="qu17An4">D&#41; HyperTerminal Transfer Protocol</label><br>
    </div>
    <div class="question" id="question18">
        <h3>18. Which of the following is a key aspect of critical Internet infrastructure?</h3>
            <input type="radio" id="qu18An1" name="qu18" value="1">
            <label for="qu18An1">A&#41; Social media platforms</label><br>
            <input type="radio" id="qu18An2" name="qu18" value="2">
            <label for="qu18An2">B&#41; Naming and numbering systems</label><br>
            <input type="radio" id="qu18An3" name="qu18" value="3">
            <label for="qu18An3">C&#41; Video streaming services</label><br>
            <input type="radio" id="qu18An4" name="qu18" value="4">
            <label for="qu18An4">D&#41; Email clients</label><br>
    </div>
    <div class="question" id="question19">
        <h3>19. Which year did Apple launch Safari as the default browser for Macintosh computers?</h3>
            <input type="radio" id="qu19An1" name="qu19" value="1">
            <label for="qu19An1">A&#41; 1998</label><br>
            <input type="radio" id="qu19An2" name="qu19" value="2">
            <label for="qu19An2">B&#41; 2000</label><br>
            <input type="radio" id="qu19An3" name="qu19" value="3">
            <label for="qu19An3">C&#41; 2003</label><br>
            <input type="radio" id="qu19An4" name="qu19">
            <label for="qu19An4">D&#41; 2005</label><br>
    </div>
    <div class="question" id="question20">
        <h3>20. As of 2024, what percentage of Lebanon's population used the internet?</h3>
            <input type="radio" id="qu20An1" name="qu20" value="1">
            <label for="qu20An1">A&#41; 70.2%</label><br>
            <input type="radio" id="qu20An2" name="qu20" value="2">
            <label for="qu20An2">B&#41; 80.5%</label><br>
            <input type="radio" id="qu20An3" name="qu20" value="3">
            <label for="qu20An3">C&#41; 85.6%</label><br>
            <input type="radio" id="qu20An4" name="qu20" value="4">
            <label for="qu20An4">D&#41; 90.1%</label><br>
    </div>
    <div id="submit">
        <input type="submit" value="Submit Quiz" id="submit-btn" name="submit">
    </div>
    </form>
    </div>
    <footer>
        <div class="footer-content">
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <p class="footer-tech">© 2024 My Website</p>
    </footer>
    
</body>
    
</html>
