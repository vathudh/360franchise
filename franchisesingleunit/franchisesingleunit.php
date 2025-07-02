<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Single Unit Franchise Agreement</title>
  <link rel="stylesheet" href="../franchisesingleunit/styles.css" />
  <link rel="stylesheet" href="../franchisesingleunit/services.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../franchisesingleunit/style_form.css" />
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
            <a href="../franchisesingleunit/index.php"><img src="../franchisesingleunit/images/logo360.png" alt="360 Logo" id="logo-img"></a>
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
                <li><a href="../franchisesingleunit/index.php" class="">Home</a></li>
                <li><a href="../franchisesingleunit/about.php" class="">About</a></li>
                <li><a href="../franchisesingleunit/service.php" class="">Services</a></li>
                <li><a href="../franchisesingleunit/testimonial.php" class="">Client Story</a></li>
                <li><a href="../franchisesingleunit/contact.php" class="">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>



 
  <section>
    <div class="container">
      <h1 class="form-title">Single Unit Franchise Information Collection Form</h1>
      <form action="#" method="POST" enctype="multipart/form-data" id="ndaForm">
        <!-- Hidden Inputs (if needed for tracking, keep, else remove) -->
        <input type="hidden" id="hiddenRequestId" name="requestId">
        <input type="hidden" id="hiddenUserName" name="userName">
        <input type="hidden" id="hiddenMailID" name="mailID">

        <div class="form-grid">
          <div class="form-group">
            <label for="company_name">Franchisor Name <span style="color:red;">*</span></label>
            <input type="text" id="company_name" name="company_name" maxlength="200" placeholder="Enter the Franchisor's company name" required>
          </div>
          <div class="form-group">
            <label for="nda_type">Franchisee Name <span style="color:red;">*</span></label>
            <input type="text" id="nda_type" name="nda_type" maxlength="100" placeholder="Enter the Franchisee's full name or company name" required>
          </div>
          <div class="form-group">
            <label for="agreement_duration">Business Address <span style="color:red;">*</span></label>
            <input type="text" id="agreement_duration" name="agreement_duration" maxlength="100" placeholder="Enter the full address of the franchise location" required>
          </div>
          <div class="form-group">
            <label for="party_names">Term of Agreement <span style="color:red;">*</span></label>
            <input type="text" id="party_names" name="party_names" maxlength="250" placeholder="e.g., 5 years" required>
          </div>
          <div class="form-group">
            <label for="email">Franchise Fees & Royalties <span style="color:red;">*</span></label>
            <input type="email" id="email" name="email" maxlength="100" placeholder="e.g., ₹3 Lakhs upfront + 10% monthly royalty" required>
          </div>
          <div class="form-group">
            <label for="purpose">Territory/Location <span style="color:red;">*</span></label>
            <textarea id="purpose" name="purpose" maxlength="500" placeholder="e.g., Tamil Nadu, India" required></textarea>
          </div>
          <div class="form-group">
            <label for="signatory_details">Key Obligations of Each Party <span style="color:red;">*</span></label>
            <textarea id="signatory_details" name="signatory_details" maxlength="300" placeholder="Describe responsibilities of franchisor and franchisee" required></textarea>
          </div>
          <div class="form-group">
            <label for="governing_law">Email for sending final Agreement <span style="color:red;">*</span></label>
            <input type="text" id="governing_law" name="governing_law" maxlength="100" placeholder="Enter official email to receive agreement" required>
          </div>
          <div class="form-group">
            <label for="confidential_definition">Definition of Confidential Information <span style="color:red;">*</span></label>
            <textarea id="confidential_definition" name="confidential_definition" maxlength="400" placeholder="How is confidential info defined?" required></textarea>
          </div>
          <div class="form-group">
            <label for="obligations">Obligations of Each Party <span style="color:red;">*</span></label>
            <textarea id="obligations" name="obligations" maxlength="400" placeholder="Summarize each party's obligations" required></textarea>
          </div>
          <div class="form-group">
            <label for="return_policy">Return/Destruction Policy <span style="color:red;">*</span></label>
            <textarea id="return_policy" name="return_policy" maxlength="300" placeholder="Describe return or destruction of info" required></textarea>
          </div>
          <div class="form-group">
            <label for="signature_fields">Signature Fields <span style="color:red;">*</span></label>
            <textarea id="signature_fields" name="signature_fields" maxlength="200" placeholder="Names/titles for signature blocks" required></textarea>
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
                        <img src="../franchisesingleunit/images/360logowhite.png" alt="360 Logo">
                      
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
  <script src="../franchisesingleunit/script.js"></script>
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
