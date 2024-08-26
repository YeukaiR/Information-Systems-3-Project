<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResQue</title>
    <link rel="icon" type="image/x-icon" href="pictures/resque-logo.png">
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="landing_Page.css">
</head>
<body>
    <!-- Header Section: Contains the navigation menu and auth buttons -->
    <header id="header-pic" class="header">
        <div id="logo-nav">
            <div class="logo">
                <h1>ResQue</h1> <!-- Logo text -->
            </div>
            <nav class="nav">
                <ul>
                    <!-- Navigation links -->
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Resources &nbsp;<img id="down-chevron" src="pictures/drop-down.png" width="18px" height="14px" alt="down-chevron"></a></li>
                </ul>
            </nav>
        </div>
        <!-- Authentication buttons (Login and Sign Up) -->
        <div class="auth-buttons">
            <a href="../login_page/login_page.html" class="login-btn">Login</a>
            <a href="#" class="signup-btn">Sign up</a>
        </div>
    </header>
    <div id="background-gradient">
        <!-- Hero Section: Main content area with a headline, description, and logo image -->
        <section class="hero">
            <div class="hero-content">
                <!-- Main headline text -->
                <h2>Saving Your Day, One Fix at a Time</h2>
                <!-- Subtext describing the service -->
                <p>Easily report your maintenance issues and have them resolved without any hassle.</p>
                <!-- "Learn More" button -->
                <a href="#" id="learn-more-btn">Learn More</a>
            </div>
            <div class="hero-image">
                <!-- logo image -->
                <img src="pictures/resque-logo.png" alt="ResQue Logo"> <!--width="808px" height="678px">-->
            </div>
        </section>
        
        <div class="fixed-at-bottom">
            <!-- Features Section: Displays the three main features of the service -->
            <section class="features">
                <div class="feature">
                    <!-- Feature: Average Response Time -->
                    <h3>Avg Response Time</h3>
                    <p>Quick response to minimize downtime for residents.</p>
                </div>
                <div class="feature">
                    <!-- Feature: Credibility -->
                    <h3>Credibility</h3>
                    <p>Trusted, reliable service by skilled professionals ensuring quality repairs.</p>
                </div>
                <div class="feature">
                    <!-- Feature: Availability -->
                    <h3>Availability</h3>
                    <p>Maintenance services available anytime for any issue.</p>
                </div>
            </section>
            
            <div class="hr"><hr id="hr"></div>
            <!-- Footer Section: Contains links to legal and policy information -->
            <footer class="footer">
                <!-- Footer links for legal and compliance information -->
                <div class="footer-links">
                    <a href="../footer_links/links.html#integrity-and-constraints">Integrity & Compliance</a>
                    <a href="../footer_links/links.html#legal">Legal</a>
                    <a href="../footer_links/links.html#manage-cookies">Manage Cookies</a>
                    <a href="../footer_links/links.html#privacy-policy">Privacy Policy</a>
                </div>
                <!-- Copyright information -->
                <p>&copy; ResQue <time datetime="">2024</time></p>
            </footer>
        </div>
    </div>
</body>
</html>