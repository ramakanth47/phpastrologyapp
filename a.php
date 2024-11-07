<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Design</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .footer {
            background-color: #4B0082; /* Purple background */
            color: #fff;
            padding: 40px 0 20px;
        }
        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 18px;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .form-control {
            background-color: #4B0082;
            border: 1px solid #ddd;
            color: #fff;
            margin-bottom: 15px;
        }
        .footer .form-control::placeholder {
            color: #ddd;
        }
        .footer .btn {
            background-color: #fff;
            color: #4B0082;
            font-weight: bold;
            border: none;
            padding: 8px 15px;
            width: 100%;
        }
        .social-icons {
            text-align: right;
        }
        .social-icons a {
            color: #fff;
            margin-left: 15px;
            font-size: 20px;
        }
        .footer-bottom {
            text-align: center;
            font-size: 14px;
            color: #ddd;
            margin-top: 20px;
        }
        .footer .contact-info p, .footer .quick-links ul {
            line-height: 1.8;
            font-size: 14px;
        }
        .quick-links ul {
            list-style: none;
            padding: 0;
        }
        .quick-links ul li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-4">
                <h5>Contact</h5>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> Sion churubatti Road, Sion-Mumbai 400022</p>
                    <p><i class="fas fa-map-marker-alt"></i> Shyamlal Compound, Begampet Hyderabad 500016</p>
                    <p><i class="fas fa-phone"></i> 9071013371</p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:divineguide@gmail.com">divineguide@gmail.com</a></p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 quick-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Appointments</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="terms.html" target="_blank">Terms & Conditions</a></li>
                    <li><a href="privacy.html" target="_blank">Privacy Policy</a></li>
                    <li><a href="refund.html" target="_blank">Refund and Cancellation Policy</a></li>
                </ul>
            </div>

            <!-- Quick Enquiry Form -->
            <div class="col-md-4">
                <h5>Quick Enquiry</h5>
                <form>
                    <input type="text" class="form-control" placeholder="Name">
                    <input type="email" class="form-control" placeholder="Email">
                    <input type="text" class="form-control" placeholder="Phone Number">
                    <textarea class="form-control" rows="3" placeholder="Write Your Message"></textarea>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>

        <!-- Social Media Icons and Footer Bottom Text -->
        <div class="row mt-4">
            <div class="col-md-6">
                <p class="footer-bottom">&copy; 2024-2025 All Rights Reserved by divineguide.co</p>
            </div>
            <div class="col-md-6 social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap and jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
