<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Bottom Footer - Full Content</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #page-content {
            padding-bottom: 60px; /* Height of the footer */
        }

        #fixed-footer {
            background-color: #343a40;
            color: #ffffff;
        }

        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }
    </style>
</head>
<body>

    <!-- Main Content -->
    <div id="page-content" class="container mt-4">
        <!-- Introduction Section -->
        <section class="mb-5">
            <div class="text-center">
                <h1>Welcome to Our Website</h1>
                <p class="lead">We provide amazing solutions for your digital needs. Check out our services and features below.</p>
            </div>
        </section>

        <!-- Features Section -->
        <section class="mb-5">
            <h2>Our Features</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-code"></i>
                    </div>
                    <h4>High Quality Code</h4>
                    <p>We write clean and maintainable code to ensure scalability and performance for your projects.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4>Responsive Design</h4>
                    <p>Our websites look great on any device, whether it's a phone, tablet, or desktop.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h4>Secure Solutions</h4>
                    <p>We prioritize security in every project, ensuring your data is safe and secure.</p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="mb-5">
            <h2>Our Services</h2>
            <p>We provide a wide range of services to help you grow your business:</p>
            <ul class="list-group">
                <li class="list-group-item">Web Development</li>
                <li class="list-group-item">Mobile App Development</li>
                <li class="list-group-item">E-commerce Solutions</li>
                <li class="list-group-item">Digital Marketing & SEO</li>
                <li class="list-group-item">Consulting and Support</li>
            </ul>
        </section>

        <!-- Contact Us Section -->
        <section class="mb-5">
            <h2>Contact Us</h2>
            <p>Get in touch with us for more information or to start a project:</p>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>

        <!-- Button to Toggle Footer -->
        <button id="footerToggle" class="btn btn-warning mt-4">Toggle Footer Visibility</button>
    </div>

    <!-- Footer Section -->
    <footer id="fixed-footer" class="fixed-bottom text-center py-3">
        <div class="container">
            <small>Copyright &copy; Your Website</small><br>
			<small>mail &copy; sethusmith673@gmail.com</small><br>
			<small>Clock Tech Solutions</small>
        </div>
    </footer>
	<div id="page-content" class="container my-4">
        <section class="mb-5">
            <h2>Who We Are</h2>
            <p>We are a team of experienced developers and marketers who are passionate about delivering high-quality software solutions. Our goal is to help businesses grow by providing them with the tools and services they need to succeed in the digital world.</p>
        </section>

        <section class="mb-5">
            <h2>Our Vision</h2>
            <p>We envision a world where technology empowers everyone, making businesses more efficient and improving the quality of life. Our mission is to build user-friendly, scalable, and secure software that helps our clients achieve their goals.</p>
        </section>

        <section>
            <h2>Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">Lead Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Sam Johnson</h5>
                            <p class="card-text">Marketing Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        // JavaScript to toggle footer visibility
        document.getElementById('footerToggle').addEventListener('click', function() {
            const footer = document.getElementById('fixed-footer');
            footer.style.display = (footer.style.display === 'none') ? 'block' : 'none';
        });
    </script>
</body>
</html>

