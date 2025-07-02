<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Multi-Unit Franchise Agreement</title>
  <link rel="stylesheet" href="../masterfranchise/styles.css" />
  <link rel="stylesheet" href="../masterfranchise/services.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../masterfranchise/style_form.css" />
  <style>
    textarea {
      resize: none;
    }
  </style>
</head>
<body>
  <!-- Header -->
  
<header>
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="../masterfranchise/index.php"><img src="../masterfranchise/images/logo360.png" alt="360 Logo" id="logo-img"></a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="mobile-menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Navigation Menu -->
        <nav id="main-nav">
            <ul class="menu">
                <li><a href="../masterfranchise/index.php" class="">Home</a></li>
                <li><a href="../masterfranchise/about.php" class="">About</a></li>
                <li><a href="../masterfranchise/service.php" class="">Services</a></li>
                <li><a href="../masterfranchise/testimonial.php" class="">Client Story</a></li>
                <li><a href="../masterfranchise/contact.php" class="">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>



 
  <section>
    <div class="container">
      <h1 class="form-title">Master Franchise Information Collection Form</h1>
      <form action="#" method="POST" enctype="multipart/form-data" id="ndaForm">
        <!-- Hidden Inputs (if needed for tracking, keep, else remove) -->
        <input type="hidden" id="hiddenRequestId" name="requestId">
        <input type="hidden" id="hiddenUserName" name="userName">
        <input type="hidden" id="hiddenMailID" name="mailID">

        <div class="form-grid">
          <div class="form-group">
            <label for="franchisor_name">Franchisor Name <span style="color:red;">*</span></label>
            <input type="text" id="franchisor_name" name="franchisor_name" maxlength="200" placeholder="Enter franchisor name" required>
          </div>
          <div class="form-group">
            <label for="master_franchisee_name">Master Franchisee Name <span style="color:red;">*</span></label>
            <input type="text" id="master_franchisee_name" name="master_franchisee_name" maxlength="200" placeholder="Enter master franchisee name" required>
          </div>
          <div class="form-group">
            <label for="business_address">Business Address <span style="color:red;">*</span></label>
            <input type="text" id="business_address" name="business_address" maxlength="250" placeholder="Enter business address" required>
          </div>
          <div class="form-group">
            <label for="territory_region">Territory/Region <span style="color:red;">*</span></label>
            <input type="text" id="territory_region" name="territory_region" maxlength="150" placeholder="Enter territory or region" required>
          </div>
          <div class="form-group">
            <label for="franchise_fees">Franchise Fees & Royalties <span style="color:red;">*</span></label>
            <input type="text" id="franchise_fees" name="franchise_fees" maxlength="150" placeholder="e.g., ₹5 Lakhs upfront + 8% monthly royalty" required>
          </div>
          <div class="form-group">
            <label for="key_obligations">Key Obligations of Each Party <span style="color:red;">*</span></label>
            <textarea id="key_obligations" name="key_obligations" maxlength="500" placeholder="Summarize responsibilities of franchisor & franchisee" required></textarea>
          </div>
          <div class="form-group">
            <label for="agreement_email">Email for sending final Agreement <span style="color:red;">*</span></label>
            <input type="email" id="agreement_email" name="agreement_email" maxlength="100" placeholder="Enter email for agreement delivery" required>
          </div>
        </div>
        <div class="submit-container">
          <button type="submit" class="submit-button">Submit</button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
      <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <div class="logo">
                        <img src="../masterfranchise/images/360logowhite.png" alt="360 Logo">
                      
                    </div>
                    <p>Your trusted partner for business growth and compliance since 2015. We're dedicated to helping businesses of all sizes succeed.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#testimonial">Testimonial</a></li>
                        <li><a href="#blog">Blogs</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <h3>Stay in the loop</h3>
                    <p>Subscribe to our newsletter for the latest updates and insights.</p>
                    <form>
                        <input type="email" placeholder="Enter your email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>

            </div>
            <div class="footer-bottom">
                <p>&copy; <span class="current-year">2025</span> 360degreementor. All rights reserved.</p>
                <div class="payment-methods">
<p>&copy; <span class="current-year">2025</span> Designed &amp; Developed By <a href="https://www.pentagoninnovations.com/">Pentagon Innovations</a> </p>
               </div>
            </div>
        </div>
    </footer>
  <script src="../masterfranchise/script.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        function getParam(name) {
            const url = new URL(window.location.href);
            return url.searchParams.get(name) || '';
        }
        // Set values if present
        if (document.getElementById('company_name')) {
            document.getElementById('company_name').value = getParam('name');
        }
        if (document.getElementById('email')) {
            document.getElementById('email').value = getParam('email');
        }
        // If you have a phone/number field, set it here as well
        // Example: document.getElementById('phone_number').value = getParam('number');
    });
  </script>
</body>
</html>
