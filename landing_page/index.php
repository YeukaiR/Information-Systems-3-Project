<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResQue</title>
    <link rel="icon" type="image/x-icon" href="pictures/resque-logo.png">
    <link rel="icon" type="image/x-icon" href="images/resque-logo.png">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
    <!-- header for with nav links -->
    <header>
        <img src="../" alt="">
    
        <nav class="nav">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Resources</a></li>
            </ul>
            <div class="user-actions">

            <a href="#" class="login-btn" id="login-btn">Login</a>
            <a href="#" class="signup-btn" id="signup-btn">Sign up</a>
        </div>
        </nav>
        
        <!-- for burger menu for mobile -->
        <input type="checkbox" id="burger-toggle" />
        <label for="burger-toggle" class="burger">
            <div></div>
            <div></div>
            <div></div>
        </label>

        <div class="mobile-menu">
                <a href="index.html">FAQ</a>
                <a href="about.html">About Us</a>
                <a href="review.html">Help</a>
                <a href="help.html">Resources</a>
        </div>
    </header>


    <!-- <div id="background-gradient">
    
    <div id="background-gradient">
        <section class="hero">
            <div class="hero-content">
                <h2>Saving Your Day, One Fix at a Time</h2>
                <p>Easily report your maintenance issues and have them resolved without any hassle.</p>
                <a href="#" id="learn-more-btn">Learn More</a>
            </div>
            <div class="hero-image">
                <img src="pictures/resque-logo.png" alt="ResQue Logo">
            </div>
        </section>
        
        <div class="fixed-at-bottom">
            <section class="features">
                <div class="feature">
                    <h3>Avg Response Time</h3>
                    <p>Quick response to minimize downtime for residents.</p>
                </div>
                <div class="feature">
                    <h3>Credibility</h3>
                    <p>Trusted, reliable service by skilled professionals ensuring quality repairs.</p>
                </div>
                <div class="feature">
                    <h3>Availability</h3>
                    <p>Maintenance services available anytime for any issue.</p>
                </div>
            </section>
            
            <div class="hr"><hr id="hr"></div>
            <footer class="footer">
                <div class="footer-links">
                    <a href="../footer_links/links.html#integrity-and-constraints">Integrity & Compliance</a>
                    <a href="../footer_links/links.html#legal">Legal</a>
                    <a href="../footer_links/links.html#manage-cookies">Manage Cookies</a>
                    <a href="../footer_links/links.html#privacy-policy">Privacy Policy</a>
                </div>
                <p>&copy; ResQue <time datetime="">2024</time></p>
            </footer>
        </div>
    </div> -->

    <!-- Login Modal Structure -->
    <!-- <div class="login-body">
        <div id="login-modal" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <div class="container">
                    <div class="login-image">
                        <img src="images/login_image.svg" alt="Resque Logo and Character">
                    </div>

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
    </div> -->

    <!-- Sign-Up Modal Structure -->
    <!-- <div class="signup-body">
        <div id="signup-modal" class="modal">
            <div class="modal-content">
                <span class="close-btn1">&times;</span>
                <div class="container">
                    <div class="signup-image">
                        <img src="images/login_image.svg" alt="Resque Logo and Character">
                    </div>
                    
                    <div class="signup-form">
                        <h1>Welcome 👋</h1>
                        <p>Please enter your credentials. 
                            Please ensure that the credentials are typed correctly.</p>
                        <form action="signup.php" method="post">

                            <label for="fname">First Name</label>
                            <input type="text" id="fname" placeholder="John" name = "fname" required>

                            <label for="lname">Surname</label>
                            <input type="text" id="lname" placeholder="Smith" name = "lname" required>

                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="g12s3456@campus.ru.ac.za" name = "email" required>

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
                            <input type="text" id="roomNumber" placeholder="123" name = "roomNumber" pattern="\d{1,3}" required>

                            <label for="username">Username</label>
                            <input type="text" id="username" placeholder="g12s3456" name= "username" required maxlength="8">
                            
                            <label for="password">Password</label> 
                            <input type="password" id="password" placeholder="*******" name = "password" required>

                            <button type="submit">Sign in</button>
                            <input type="submit" id="submit-btn" name="submit" value="Sign up">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </div>
    <script src="landing_Page.js"></script>
</body>
</html>