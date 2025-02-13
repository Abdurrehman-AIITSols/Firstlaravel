<div>


<header class="bg-primary text-white text-center py-5">
        <h1 class="display-4">Our Services</h1>
        <p class="lead">We offer a range of services designed to help you grow your business</p>
    </header>

    <!-- Service Section -->
    <section class="service-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card service-card shadow-lg">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-gear"></i> <!-- Icon from Bootstrap Icons -->
                            </div>
                            <h4 class="service-heading">Web Development</h4>
                            <p class="service-description">Build modern, responsive websites tailored to your business needs. We focus on user experience and high-performance sites.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card service-card shadow-lg">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-brush"></i> <!-- Icon from Bootstrap Icons -->
                            </div>
                            <h4 class="service-heading">UI/UX Design</h4>
                            <p class="service-description">Create intuitive, engaging, and user-friendly designs that enhance the experience of your website or app users.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card service-card shadow-lg">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-bar-chart-line"></i> <!-- Icon from Bootstrap Icons -->
                            </div>
                            <h4 class="service-heading">SEO Optimization</h4>
                            <p class="service-description">Improve your website's ranking on search engines and attract more organic traffic through targeted SEO strategies.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more services here as needed -->
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card service-card shadow-lg">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-telephone"></i> <!-- Icon from Bootstrap Icons -->
                            </div>
                            <h4 class="service-heading">Customer Support</h4>
                            <p class="service-description">We provide 24/7 customer support to ensure that your business operations run smoothly without interruptions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card service-card shadow-lg">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-shield-lock"></i> <!-- Icon from Bootstrap Icons -->
                            </div>
                            <h4 class="service-heading">Cybersecurity</h4>
                            <p class="service-description">Protect your business from cyber threats with comprehensive security solutions and proactive risk management.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card service-card shadow-lg">
                        <div class="card-body">
                            <div class="service-icon mb-3">
                                <i class="bi bi-people"></i> <!-- Icon from Bootstrap Icons -->
                            </div>
                            <h4 class="service-heading">Team Training</h4>
                            <p class="service-description">Equip your team with the skills they need to succeed in the modern digital workplace through tailored training sessions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Your Company. All rights reserved.</p>
    </footer>
    <style>
             body {
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .service-section{
            width:100%;
            padding:20px;
        }
  .service-header {
            background: linear-gradient(135deg, #4CAF50, #81C784);
            color: #fff;
            padding: 80px 0;
            text-align: center;
        }

        .service-header h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .service-header p {
            font-size: 1.25rem;
            margin-top: 10px;
        }

      

        .service-container {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap; /* Ensure the cards stack on small screens */
        }

        /* Card Style */
        .service-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
          
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
        }

        .service-card-body {
            padding: 30px;
            text-align: center;
        }

        .service-icon {
            font-size: 60px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .service-heading {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }

        .service-description {
            font-size: 1.1rem;
            color: #555;
            margin-top: 10px;
        }

        /* Full-width Service Card (Bottom Section) */
        .full-service-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%; /* Full-width card */
            margin-top: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .full-service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
        }

        .full-service-card-body {
            padding: 50px;
            text-align: center;
        }

        /* Footer Section */
        .service-footer {
            background-color: #333;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }

        .service-footer p {
            margin: 0;
            font-size: 1rem;
        }

        /* Responsive Adjustment */
        @media (max-width: 768px) {
            .service-card {
                width: calc(100% - 30px); /* Full-width cards on small screens */
            }

            .service-container {
                flex-direction: column;
            }
        }
    </style>
    <!-- Bootstrap JS and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

</div>
