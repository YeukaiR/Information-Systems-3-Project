<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ResQue</title>
    <link rel="shortcut icon" href="pictures/fake logo(1).png" type="image/x-icon">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="pictures/fake logo(1).png" alt="Syntax On Air Logo" class="logo">
            
            <nav>
                <ul class="nav-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Resources</a></li>
                </ul>
                <div class="user-actions">
                    <a href="#" class="login-btn" id="login-btn">Login</a>
                    <a href="#" class="signup-btn" id="sign-up-btn">Sign up</a>
                </div>
            </nav>

            <!-- for when switching to a smaller screen -->
            <!-- for burger menu for mobile -->
            <input type="checkbox" id="burger-toggle" />
            <label for="burger-toggle" class="burger">
                <div></div>
                <div></div>
                <div></div>
            </label>

            <div class="mobile-menu">
                <a href="index.html">Home</a>
                <a href="about.html">About Us</a>
                <a href="review.html">Reviews</a>
                <a href="help.html">Help</a>
            </div>
        </header>
        <section class="hero">
            <div class="hero-content">
                <h2>Saving Your Day, One Fix at a Time</h2>
                <p>Easily report your maintenance issues and have them resolved without any hassle.</p>
                <a href="#" id="learn-more-btn">Learn More</a>
            </div>
            <!-- <div class="hero-image">
                <img src="pictures/fake logo(1).png" alt="ResQue Logo">
            </div> -->
        </section>

    <section>
        <!-- Login Modal Structure -->
        <div class="login-body">
            <div id="login-modal" class="modal">
                <div class="modal-content">
                    <span class="close-btn">&times;</span>
                        <div class="login-form">
                            <h1>Welcome Back 👋</h1>
                            <p>Enter your login credentials. Please ensure that login credentials are typed correctly.</p>
                            <form action="login.php" method="post">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" placeholder="Username" required maxlength="8">
                                
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                                
                                <a href="#" class="forgot-password">Forgot Password?</a>
                                
                                <input type="submit" id="login-submit-btn" name="submit" value="Sign in">
                            </form>
                            <p>Don't have an account? <a href="../landing_page/landing_Page.html">Sign up</a></p>
                        </div>
                </div>
            </div>
        </div>


        <!-- Sign-up section -->
        <div id="signup-section" class="signup-section">
            <span class="close-btn1">&times;</span>
            <div class="container">
                <h1>Welcome 👋</h1>
                <div><p>Please enter your credentials. Ensure that the credentials are typed correctly.</p></div>

                <form action="signup.php" method="post">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" placeholder="John" name="fname" required>

                    <label for="lname">Surname</label>
                    <input type="text" id="lname" placeholder="Smith" name="lname" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="g12s3456@campus.ru.ac.za" name="email" required>

                    <label for="resName">Resident Name</label>
                    <input type="text" id="resName" placeholder="res name" name="resName" required>

                    <label for="hall">Hall Name</label>
                    <select name="hall" id="hall" required>
                        <option value="">Please enter fault category</option>
                        <option value="Miriam Makeba Hall">Miriam Makeba Hall</option>
                        <option value="Mandela Hall">Mandela Hall</option>
                        <option value="Solomon Kalushi Mahlangu">Solomon Kalushi Mahlangu</option>
                        <option value="Lillian Ngoyi Hall">Lillian Ngoyi Hall</option>
                        <option value="Courtenay-Latimer Hall">Courtenay-Latimer Hall</option>
                        <option value="Kimberly Hall">Kimberly Hall</option>
                        <option value="Allan Webb Hall">Allan Webb Hall</option>
                        <option value="St Mary Hall">St Mary Hall</option>
                        <option value="Hobson Hall">Hobson Hall</option>
                        <option value="Desmond Tutu">Desmond Tutu</option>
                        <option value="Drostdy Hall">Drostdy Hall</option>
                        <option value="Founders Hall">Founders Hall</option>
                        <option value="Hugh Masekela Hall">Hugh Masekela Hall</option>
                    </select>

                    <label for="roomNumber">Room Number</label>
                    <input type="text" id="roomNumber" placeholder="123" name="roomNumber" pattern="\d{1,3}" required>

                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="g12s3456" name="username" required maxlength="8">
                    
                    <label for="password">Password</label> 
                    <input type="password" id="password" placeholder="*******" name="password" required>

                    <input type="submit" id="signup-submit-btn" name="submit" value="Sign up">
                </form>
                <p>Already have an account? <a href="login_page.html">Login in</a></p>
            </div>
        </div>
    </section>

    <!-- <div class="page-on-home">
        <article>
            <div class="left-column">
                <h1 class="heading">What Does ResQue Do?</h1>
                <p class="description">
                    We create amazing experiences by leveraging innovative technologies to solve real-world problems.
                    Our team focuses on delivering scalable, user-friendly, and robust solutions for our residents at Rhodes University.
                </p>
            </div>
            <div class="right-column">
                <div class="notification-list">
                    <div class="notification" style="--color:#00C9A7;">💸 Residence confirmed · 15m ago<br><small>Chris Upfold</small></div>
                    <div class="notification" style="--color:#FFB800;">👤 User signed up · 10m ago<br><small>Ingrid Sieborger</small></div>
                    <div class="notification" style="--color:#FF3D71;">💬 House Warden approved · 5m ago<br><small>Jill Japp</small></div>
                    <div class="notification" style="--color:#1E86FF;">🗞️ Fault resolved · 2m ago<br><small>Greg Foster</small></div>
                </div>
            </div>
        </article>
        <article class="features">
            <div class="feature">
                <table>
                    <tr>
                        <th class="avg"> Avg Response Time</th>
                        <th class="cred">Credibility</th>
                        <th class="avail">Availability</th>
                    </tr>
                    <tr>
                        <td class="avg">
                            Quick response to minimize downtime for residents.
                        </td>
                        <td class="cred">
                            Trusted, reliable service by skilled professionals ensuring quality repairs.
                        </td>
                        <td class="avail">
                            Maintenance services available anytime for any issue.
                        </td>
                    </tr>
                </table>
            </div>
        </article>
    </div> -->

    </div>
    <footer class="footer">
        <div class="footer-links">
            <a href="../footer_links/links.html#integrity-and-constraints">Integrity & Compliance</a>
            <a href="../footer_links/links.html#legal">Legal</a>
            <a href="../footer_links/links.html#manage-cookies">Manage Cookies</a>
            <a href="../footer_links/links.html#privacy-policy">Privacy Policy</a>
        </div>
        <p>&copy; <time datetime="">2024</time> ResQue </p>
    </footer>
    <script src="home.js"></script>
</body>
</html>