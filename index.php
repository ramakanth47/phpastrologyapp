<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divine Guide</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Language Selector Styling */
        .language-selector {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .flags-icon {
            width: 120px;
            margin-bottom: 5px;
        }
        .language-dropdown select {
            padding: 4px;
        }

        /* About Us Section Styling */
        .about-section {
            display: none; /* Hide initially */
            margin: 50px auto;
            max-width: 800px;
            color: #4a148c;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }
        .about-section h2 {
            font-size: 24px;
            font-weight: 700;
            text-transform: uppercase;
            color: #4a148c;
            margin-bottom: 20px;
        }
        .about-section p {
            font-size: 16px;
            line-height: 1.6;
            color: #4a148c;
            margin-bottom: 20px;
        }

        /* Reviews Section Styling */
        .reviews-section {
            display: none; 
            margin: 50px auto;
            max-width: 800px;
            color: #4a148c;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }

      
        .normal-ui {
            display: block;
        }
    </style>
</head>
<body>

<!-- Header and Navigation -->
<header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand mx-auto text-center" href="#">
                <img src="images/logo.png" alt="Divine Guide Logo" height="50">
                <span class="brand-title"></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" id="services-link"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item" id="aboutus-link"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item" id="appointments-link"><a class="nav-link" href="#">Appointments</a></li>
                    <li class="nav-item" id="reviews-link"><a class="nav-link" href="#">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
                <!-- Language Selector with flags above the dropdown -->
                <div class="language-selector ml-4">
                    <img src="images/flags.png" alt="Flags" class="flags-icon">
                    <div class="language-dropdown">
                        <select>
                            <option>Select Language</option>
                            <option value="en">English</option>
                            <option value="ru">Russian</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                            <option value="es">Spanish</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <hr class="navbar-divider">
</header>

<!-- Main Content -->
<div class="container text-center my-5 normal-ui" id="main-content">
    <h1 class="mb-4">Our Services</h1>
    <div class="row text-center">
        <div class="col-md-3">
            <img src="images/1.png" alt="Lucky Mobile Number" class="icon">
            <p>Lucky Mobile Number</p>
        </div>
        <div class="col-md-3">
            <img src="images/2.png" alt="Numerology Name" class="icon">
            <p>Numerology Name</p>
        </div>
        <div class="col-md-3">
            <img src="images/3.png" alt="Vastu Consultation" class="icon">
            <p>Vastu Consultation</p>
        </div>
        <div class="col-md-3">
            <img src="images/4.png" alt="Astrology Consultation" class="icon">
            <p>Astrology Consultation</p>
        </div>
    </div>
    <div class="row mt-4 text-center">
        <div class="col-md-3">
            <img src="images/5.png" alt="Lucky Business Name" class="icon">
            <p>Lucky Business Name</p>
        </div>
        <div class="col-md-3">
            <img src="images/6.png" alt="Lucky Bank Account Number" class="icon">
            <p>Lucky Bank Account Number</p>
        </div>
        <div class="col-md-3">
            <img src="images/7.png" alt="Lucky Vehicle Number" class="icon">
            <p>Lucky Vehicle Number</p>
        </div>
        <div class="col-md-3">
            <img src="images/8.png" alt="Kundali Compatibility" class="icon">
            <p>Kundali Compatibility</p>
        </div>
    </div>
    <button class="btn btn-primary mt-4">Analyse Your Mobile Number, Name, Business Name, Vehicle number and Bank Account</button>
</div>

<!-- About Us Section -->
<div class="container about-section" id="aboutus-section">
    <h2>About Us</h2>
    <p>At Divine guide, we believe that every individual’s path to success is unique and encoded in the energies around them. Based in Mumbai and Hyderabad, we bring over six years of dedicated expertise in mobile number numerology, astrology, Vastu consultation, and Name numerology, serving over 6,000 clients with insightful, personalized guidance around the world.</p>
    
    <p>At Divine guide, we use a compassionate and intuitive approach to help clients unlock potential, resolve challenges and find balance. Whether you're looking to improve your professional life, strengthen personal relationships, or create harmony in your living space, we provide holistic solutions designed specifically for your journey.</p>
    
    <p>Join us, and let’s work together to reveal the energies that will guide you toward a brighter, more fulfilled life.</p>
</div>

<!-- Reviews Section -->
<div class="container reviews-section" id="reviews-section">
    <h2>Client Reviews</h2>
    <p>Here are some of the positive feedbacks we’ve received from our valued clients.</p>
    <ul>
        <li>"Divine Guide transformed my life with their insights. Highly recommend!"</li>
        <li>"The numerology consultation was spot on. Thank you for the guidance."</li>
        <li>"Vastu consultation helped me improve the energy in my home. Truly amazing!"</li>
         <li>"The astrology reading was incredibly accurate. I now feel more aligned with my destiny."</li>
        <li>"I saw improvements in my business after applying the lucky business name recommendation. Very grateful!"</li>
        <li>"Kundali compatibility analysis gave me clarity about my relationship. Thank you, Divine Guide!"</li>
        <li>"Their advice on my lucky mobile number changed my luck! Highly recommend their services."</li>
        <li>"I was skeptical at first, but the services have truly worked wonders in my life. 
            Thanks to Divine Guide, my professional life has taken a positive turn!"</li>
        <li>"The Vastu consultation was very insightful and practical. 
            I noticed a difference in the flow of energy in my house after the recommendations." </li>
        <li>"I’ve been using the services for years and each time they’ve provided great insights.
             into my life and business. Truly thankful to Divine Guide for the constant support!"</li>
    </ul>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Divine Guide. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function(){
       
        $('#main-content').show();
        $('#aboutus-section').hide();
        $('#reviews-section').hide();

     
        $('#aboutus-link').click(function(e){
            e.preventDefault(); 
            $('#main-content').hide();  
            $('#aboutus-section').show(); 
            $('#reviews-section').hide(); 
        });

       
        $('#reviews-link').click(function(e){
            e.preventDefault(); 
            $('#main-content').hide();  
            $('#reviews-section').show(); 
            $('#aboutus-section').hide(); 
        });
    });
</script>

</body>
</html>
