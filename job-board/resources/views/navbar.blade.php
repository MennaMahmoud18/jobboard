<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modern Layout</title>
    <style>
        :root {
            --primary-color: #2D7085;
            --accent-color: #3A9DB4;
            --dark-color: #1A4754;
            --light-color: #F5F9FA;
        }

        /* General styles */
        body {
            margin: 0;
            font-family: 'Segoe UI', system-ui, sans-serif;
            background-color: var(--light-color);
        }

        /* Modern Navbar */
        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
            padding: 0.8rem 1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: white !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Dropdown Menu */
        .dropdown-menu {
            border: none;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            margin-top: 12px;
            background: white;
        }

        .dropdown-item {
            color: var(--dark-color) !important;
            padding: 0.75rem 1.5rem;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background: var(--light-color);
            transform: translateX(5px);
        }

        /* Search Form */
        .form-control {
            border-radius: 25px;
            padding: 0.5rem 1.25rem;
            border: 1px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .btn-outline-success {
            border-radius: 25px;
            padding: 0.5rem 1.5rem;
            border: 2px solid white;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-outline-success:hover {
            background: white;
            color: var(--primary-color);
        }

        /* Modern Footer */
        .footer {
            background: linear-gradient(135deg, var(--dark-color), var(--primary-color));
            color: white;
            padding: 3rem 0 1.5rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .footer-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h4 {
            color: white;
            margin-bottom: 1.2rem;
            font-weight: 600;
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
        }

        .footer-links-list li {
            margin-bottom: 0.75rem;
        }

        .footer-links-list a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-links-list a:hover {
            color: white;
            transform: translateX(5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* Social Icons */
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            color: white;
            font-size: 1.4rem;
            transition: transform 0.3s ease;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar-nav {
                margin-top: 1rem;
            }

            .nav-item {
                margin: 0.5rem 0;
            }

            .footer-links {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <!-- Add Font Awesome for Social Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CareerConnect</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career Advice</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Jobs
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Your Applications</a></li>
                                <li><a class="dropdown-item" href="#">Job Search</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Career Resources</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Salary Tools</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Job title or keyword">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <div class="footer-section">
                    <h4>CareerConnect</h4>
                    <p>Empowering your career journey with modern tools and resources.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul class="footer-links-list">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Careers</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Blog</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul class="footer-links-list">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Terms of Service</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <ul class="footer-links-list">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Career St, Talent City</li>
                        <li><i class="fas fa-phone"></i> (555) 123-4567</li>
                        <li><i class="fas fa-envelope"></i> info@careerconnect.com</li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 CareerConnect. All rights reserved | Designed with <i class="fas fa-heart"></i> for better careers</p>
            </div>
        </div>
    </footer>
</body>
</html>