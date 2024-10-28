<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #e56414;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ffe600 !important;
        }

        /* Banner */
        .banner {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('food.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
            margin-top: 70px;
        }

        .banner h1 {
            font-size: 4rem;
            font-weight: 700;
        }

        .banner p {
            font-size: 1.5rem;
            font-weight: 500;
        }

        /* Section Styling */
        section {
            padding: 60px 0;
        }

        h2 {
            font-size: 2.5rem;
            color: #333;
            font-weight: 700;
            margin-bottom: 40px;
        }

        /* Event Cards */
        .event-types {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .event-card {
            width: 300px;
            margin: 20px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .event-card img {
            width: 100%;
        }

        .event-card h5 {
            background-color:#e56414;
            color: white;
            padding: 15px;
            text-align: center;
        }

        /* Menu Styles */
        .menu-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .menu-item {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: box-shadow 0.3s ease;
        }

        .menu-item:hover {
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .menu-item img {
            width: 120px;
            border-radius: 8px;
            margin-right: 20px;
        }

        .menu-item h4 {
            color:#e56414;
        }

        /* Form Styling */
        .form-section {
            background-color: #ffeff1;
            padding: 60px 0;
        }

        .form-section h2 {
            color: #e56414;
        }

        .form-control {
            border-radius: 10px;
            padding: 15px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #e56414;
            box-shadow: 0 0 8px rgba(255, 78, 80, 0.3);
        }

        /* Buttons */
        .btn-primary {
            background-color:#e56414;
            border-color: #e56414;
            font-weight: 500;
            padding: 12px 30px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e56414;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer a {
            color: #ffeff1;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #ffe600;
        }

        /* Chatbot */
        #chatbox {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            height: 400px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            justify-content: space-between;
        }

        #chatbox-header {
            background-color:#e56414;
            color: white;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-size: 1.2rem;
            text-align: center;
        }

        #chatbox-messages {
            padding: 15px;
            flex-grow: 1;
            overflow-y: scroll;
            border-top: 1px solid #f3f3f3;
        }

        #chatbox-input {
            display: flex;
            padding: 10px;
        }

        #chatbox-input input {
            flex-grow: 1;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-right: 10px;
        }

        #chatbox-input button {
            padding: 10px 15px;
            background-color: #e56414;
            border: none;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <!-- Navbar (Static) -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Foodo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#events">Event Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Food Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#register">Register Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#order-event">Book Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#location">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="banner">
        <h1>Welcome to Foodo</h1>
        <p>Delicious food for every occasion</p>
    </section>
    <!-- About Us Section -->
<section id="about" class="about-section container">
    <h2>About Us</h2>
    <div class="row">
        <div class="col-md-6">
            <p>We are a passionate team dedicated to providing exceptional catering services for all types of events. With years of experience in the culinary field, our mission is to bring you the best in taste, quality, and service. From weddings to corporate events, we tailor our menus and services to meet your unique needs and make every occasion unforgettable.</p>
            <p>Our chefs use only the freshest ingredients to create delightful dishes that leave a lasting impression on your guests. Our commitment to excellence is reflected in every event we cater, and we take pride in helping you create memorable experiences with delicious food.</p>
            <p>Our journey began with a mission to elevate event catering by blending innovation with tradition. We believe that food should not only taste great but also add a unique touch to each celebration. That's why our team of talented chefs, event planners, and service staff works tirelessly to craft custom menus and themes that reflect our clients’ unique visions and preferences.</p>
        
            <p>Whether you are planning a wedding, corporate event, private party, or intimate gathering, we offer a wide variety of menu options and styles to suit every occasion. From elegantly plated dinners to interactive food stations and buffets, we strive to create culinary experiences that leave lasting impressions.</p>
    
        </div>
        <div class="col-md-6">
            <img src="logo.jpg" alt="Catering Team" class="img-fluid rounded shadow">
        </div>
    </div>
</section>

<style>
    /* About Us Section Styling */
    .about-section {
        padding: 60px 0;
    }

    .about-section h2 {
        font-size: 2.5rem;
        color: #333;
        font-weight: 700;
        margin-bottom: 40px;
        text-align: center;
    }

    .about-section p {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.7;
    }

    .about-section img {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .about-section img:hover {
        transform: scale(1.05);
    }
</style>

    <!-- Event Types Section -->
    <section id="events" class="container">
        <h2>Our Event Types</h2>
        <div class="event-types">
            <div class="event-card">
                <img src="wed.jpg" alt="Weddings">
                <h5>Weddings</h5>
                <p>We specialize in creating exquisite wedding menus that cater to every taste, ensuring a delightful dining experience on your special day.</p>
                <p>From elegantly presented hors d'oeuvres to decadent desserts, our culinary team will craft the perfect menu to complement your celebration.</p>
            </div>
            <div class="event-card">
                <img src="office.jpg" alt="Corporate Events">
                <h5>Corporate Events</h5>
                <p>Our corporate catering services are designed to impress your clients and energize your employees with fresh, flavorful meals tailored for professional settings.</p>
                <p>Whether hosting a formal meeting or an informal gathering, we provide exceptional food and service to enhance your corporate image.</p>
            </div>
            <div class="event-card">
                <img src="party.jpg" alt="Private Parties">
                <h5>Private Parties</h5>
                <p>Elevate your personal celebrations with customized catering options that reflect your style and preferences, creating memorable dining experiences.</p>
                <p>From intimate gatherings to large celebrations, our diverse menu selections and attentive service ensure your guests enjoy every moment.</p>
            </div>
        </div>
    </section>

    <!-- Food Menu Section -->
    <section id="menu" class="container">
        <h2>Food Menu - Annapurna Catering</h2>
        <div class="menu-list">
            <div class="menu-item d-flex">
                <img src="appe.jpg" alt="Appetizer">
                <div>
                    <h4>Appetizer Platter</h4>
                    <p>A variety of bite-sized snacks to start your meal, including bruschetta, cheese, and seasonal vegetables.</p>
                </div>
            </div>
            <div class="menu-item d-flex">
                <img src="gk.jpg" alt="Greek Salad">
                <div>
                    <h4>Greek Salad</h4>
                    <p>Fresh and healthy Greek salad with feta, olives, and a tangy dressing.</p>
                </div>
            </div>
            <div class="menu-item d-flex">
                <img src="veg b.jpg" alt="Vegetable Biryani">
                <div>
                    <h4>Vegetable Biryani</h4>
                    <p>Flavorful basmati rice cooked with assorted vegetables and aromatic spices, served with raita.</p>
                </div>
            </div>
            <div class="menu-item d-flex">
                <img src="cake.jpg" alt="Chocolate Lava Cake">
                <div>
                    <h4>Chocolate Lava Cake</h4>
                    <p>Rich chocolate cake with a molten center, served with vanilla ice cream.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registered Catering Companies -->
    <section id="registered-companies" class="container">
        <h2>Registered Catering Companies</h2>
        <div class="company-details">
            <h4>Annapurna Catering</h4>
            <p><strong>Description:</strong> Annapurna Catering specializes in providing authentic and delicious Indian cuisine for various events. We pride ourselves on our fresh ingredients and excellent service.</p>
            <p><strong>Location:</strong> 123 Flavor Street, Foodtown, NY 12345</p>
            <p><strong>Contact:</strong> (123) 456-7890 | info@annapurnacatering.com</p>
        </div>
    </section>
     <!-- Food Menu Section -->
     <section id="menu" class="container">
        <h2>Food Menu - A2B Catering</h2>
        <div class="menu-list">
            <div class="menu-item d-flex">
                <img src="appe.jpg" alt="Appetizer">
                <div>
                    <h4>Starters</h4>
                    <p>A variety of bite-sized snacks to start your meal, including bruschetta, cheese, and seasonal vegetables.</p>
                </div>
            </div>
            <div class="menu-item d-flex">
                <img src="gk.jpg" alt="Greek Salad">
                <div>
                    <h4>Full meals</h4>
                    <p>Fresh and healthy Greek salad with feta, olives, and a tangy dressing.</p>
                </div>
            </div>
            <div class="menu-item d-flex">
                <img src="veg b.jpg" alt="Vegetable Biryani">
                <div>
                    <h4>Desserts</h4>
                    <p>Flavorful basmati rice cooked with assorted vegetables and aromatic spices, served with raita.</p>
                </div>
            </div>
            <div class="menu-item d-flex">
                <img src="cake.jpg" alt="Chocolate Lava Cake">
                <div>
                    <h4>Chinnese foods</h4>
                    <p>Rich chocolate cake with a molten center, served with vanilla ice cream.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registered Catering Companies -->
    <section id="registered-companies" class="container">
        <h2>Registered Catering Companies</h2>
        <div class="company-details">
            <h4>Annapurna Catering</h4>
            <p><strong>Description:</strong> Annapurna Catering specializes in providing authentic and delicious Indian cuisine for various events. We pride ourselves on our fresh ingredients and excellent service.</p>
            <p><strong>Location:</strong> 123 Flavor Street, Foodtown, NY 12345</p>
            <p><strong>Contact:</strong> (123) 456-7890 | info@annapurnacatering.com</p>
        </div>
    </section>


    <!-- Registration Section -->
    <section id="register" class="form-section">
        <div class="container">
            <h2>Register Your Catering Company</h2>
            <form action="function.php" method="post" name="reg_1" id="reg_1">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Enter company name" required>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="4" placeholder="Describe your services" required></textarea>
                </div>
                <button type="submit" name="sub_1" id="sub_1" class="btn btn-primary">Register</button>
            </form>
        </div>
    </section>

    <!-- Order Event Section -->
    <section id="order-event" class="form-section">
        <div class="container">
            <h2>Book Catering for Your Event</h2>
            <form action="function.php" method="post" name="reg_2" id="reg_2"> 
                <div class="form-group">
                    <label for="companySelect">Select Catering Company</label>
                    <select class="form-control" name="companySelect" id="companySelect" required>
                        <option value="">Select a company</option>
                        <option>Delicious Foods Ltd</option>
                        <option>Annapurna Catering</option>
                        <option>Fresh Feast Services</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="eventDate">Event Date</label>
                    <input type="date" class="form-control" name="eventDate" id="eventDate" required>
                </div>
                <div class="form-group">
                    <label for="eventDetails">Event Details</label>
                    <textarea class="form-control" name="eventDetails" id="eventDetails" rows="4" placeholder="Describe your event" required></textarea>
                </div>
                <button type="submit" name="sub_2" id="sub_2" class="btn btn-primary">Book Event</button>
            </form>
        </div>
    </section>

    <!-- Google Map Location -->
    <section id="location" class="container">
        <h2>Our Location</h2>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=catering%20services&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 400px;
                    width: 100%;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 400px;
                    width: 100%;
                }
            </style>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="contact form-section">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="function.php" method="post" name="reg_3" id="reg_3">
                <div class="form-row">
                    <div class="form-group col-md-6"> 
                        <label for="contactName">Name</label>
                        <input type="text" class="form-control" name="contactName" id="contactName" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contactEmail">Email</label>
                        <input type="email" class="form-control" name="contactEmail" id="contactEmail" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" name="sub_3" id="sub_3" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Foodo | All rights reserved</p>
            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
        </div>
    </footer>

    <!-- Chatbox -->
    <div id="chatbox">
        <div id="chatbox-header">Chat with AI Assistant</div>
        <div id="chatbox-messages"></div>
        <div id="chatbox-input">
            <input type="text" placeholder="Type a message..." id="chatbox-input-text">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    <button style="position: fixed; bottom: 20px; right: 20px; background-color: #ff4e50; color: white; border: none; padding: 10px; border-radius: 5px;" onclick="toggleChatbox()">Chat</button>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Chatbot Script -->
    <script>
        function toggleChatbox() {
            const chatbox = document.getElementById('chatbox');
            chatbox.style.display = chatbox.style.display === 'none' ? 'flex' : 'none';
        }

        function sendMessage() {
            const input = document.getElementById('chatbox-input-text');
            const message = input.value;
            if (message) {
                const messagesDiv = document.getElementById('chatbox-messages');
                messagesDiv.innerHTML += <div><strong>You:</strong> ${message}</div>;
                input.value = '';
                // Simulate AI response
                setTimeout(() => {
                    messagesDiv.innerHTML += <div><strong>AI:</strong> Thank you for your message! How can I assist you further?</div>;
                    messagesDiv.scrollTop = messagesDiv.scrollHeight;
                }, 1000);
                messagesDiv.scrollTop = messagesDiv.scrollHeight;
            }
        }
    </script>
</body>

</html>