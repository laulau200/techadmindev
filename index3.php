<?php
	/* echo "<pre>";
	print_r ($_POST);
	echo "</pre>"; */
	
	if(isset($_POST['email']) && $_POST['email'] != ''){
	
		if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
		
		// submit the form
	//$userName = $_POST['name'];
	$userEmail = $_POST['email'];
	//$messageSubject = $_POST['subject'];
	$message = $_POST['message'];
	
	$to = "laurent.demazy@gmail.com";
	$body = "";
	
	//$body .= "From: ".$userName. "\r\n";
	$body .= "Email: ".$userEmail. "\r\n";
	$body .= "Message: ".$message. "\r\n";
	
	//mail($to,$messageSubject,$body);
		
		}
	
	
	}
	
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--link rel="stylesheet" href="css/all.min.css"-->
    <link rel="stylesheet" href="css/test_styles.css">
	<script src="js/main.js"></script>
    <style>
        /* Custom CSS for animations and effects */
        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .slide-in-left {
            animation: slideInLeft 1s ease-out;
        }
        
        @keyframes slideInLeft {
            from { transform: translateX(-100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .slide-in-right {
            animation: slideInRight 1s ease-out;
        }
        
        @keyframes slideInRight {
            from { transform: translateX(100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .active-section {
            color: #ff6b6b;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 gradient-bg text-white shadow-lg">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold">
                <span class="text-yellow-300">ldemazy</span>com
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="nav-link active-section">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#portfolio" class="nav-link">Portfolio</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
            <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden hidden gradient-bg w-full px-6 pb-4" id="mobile-menu">
            <div class="flex flex-col space-y-3">
                <a href="#home" class="nav-link active-section py-2">Home</a>
                <a href="#about" class="nav-link py-2">About</a>
                <a href="#services" class="nav-link py-2">Services</a>
                <a href="#portfolio" class="nav-link py-2">Portfolio</a>
                <a href="#contact" class="nav-link py-2">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center gradient-bg text-white pt-20">
        <div class="container mx-auto px-6 py-20 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 fade-in">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                    Webdéveloppeur <span class="text-yellow-300">Embauchez</span> moi ! 
                </h1>
                <p class="text-xl mb-8 opacity-90">
                    Passionné depuis toujours par l'informatique, <br>je me suis lancé ce nouveau défi... 
                </p>
                <div class="flex space-x-4">
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded-full transition duration-300 transform hover:scale-105">
                        Get Started
                    </button>
                    <button class="border-2 border-white hover:bg-white hover:text-gray-900 text-white font-bold py-3 px-6 rounded-full transition duration-300 transform hover:scale-105">
                        Learn More
                    </button>
                </div>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0 fade-in">
                <img src="./img/programming.png" alt="code" class="rounded-lg shadow-2xl w-full h-auto max-w-md mx-auto"/> 

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 slide-in-left">A propos...</h2>
                <div class="w-20 h-1 bg-purple-600 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto slide-in-right">
                    technicien informatique depuis 26 ans, je me reconverti comme <em>webdéveloppeur</em>
                </p>
            </div>
            
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 slide-in-left">
                    <img src="./img/outils.jpg" alt="Our team" 
                         class="rounded-lg shadow-xl w-full h-auto/>  
                         alt="Our team" 
                         class="rounded-lg shadow-xl w-full h-auto">
                </div>
                <div class="md:w-1/2 md:pl-12 slide-in-right">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Carrière Professionnelle</h3>
                    <p class="text-gray-600 mb-6">
                        j'ai travaillé au sein de plusieurs sociétés de la région stéphanoise  
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-full mr-4">
                                <i class="fas fa-lightbulb text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Webdéveloppeur</h4>
                                <p class="text-gray-600">Je débute cette aventure en apportant toute mon expérience de <em>technicien</em>.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-full mr-4">
                                <i class="fas fa-users text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Administrateur réseaux</h4>
                                <p class="text-gray-600">Suite à la formation TAI(niveau IV), j'ai exercé cet emploi au sein de plusieurs structures.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-full mr-4">
                                <i class="fas fa-chart-line text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Technicien informatique</h4>
                                <p class="text-gray-600">Passionné par l'informatique depuis enfant, j'ai commencé à travailler en <em>1999</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Compétences</h2>
                <div class="w-20 h-1 bg-purple-600 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    J'exerce dans le domaine informatique depuis 26 ans
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md transition duration-300 card-hover">
                    <div class="bg-purple-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-laptop-code text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Web Développement</h3>
                    <p class="text-gray-600 mb-4">
                        pour me reconvertir, j'ai suivi la formation à distance avec <a href="https://www.proformea.fr/formations/diplomes-digital/developpeur-web-et-web-mobile/">Proformea</a> grace à mon CPF. 
                    </p>
                    <a href="#" class="text-purple-600 font-semibold flex items-center">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>


                

                
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md transition duration-300 card-hover">
                    <div class="bg-purple-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Administrateur Réseaux</h3>
                    <p class="text-gray-600 mb-4">
                        J'ai exercé ce poste au sein de <a href="https://www.value-info.fr/">VALUE IT</a> et du Lycée FAURIEL. 
                    </p>
                    <a href="#" class="text-purple-600 font-semibold flex items-center">
                        Learn more <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md transition duration-300 card-hover">
                    <div class="bg-purple-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-paint-brush text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Technicien Informatique</h3>
                    <p class="text-gray-600 mb-4">
                        C'est mon métier depuis <em>26 ans</em>. Je l'ai exercé pour : 
                        <ul>
                            <li><a href="https://www.tessi.eu/fr/">TESSI INFORMATIQUE</a></li>
                            <li>GROUPE CASINO</li>
                            <li><a href="https://www.thalesgroup.com/fr">THALES</a></li>
                        </ul>
                    </p>
                    
                </div> 
                
                
                
                
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">un peu de sport...</h2>
                <div class="w-20 h-1 bg-purple-600 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pendant mon temps libre, je pratique la course à pied. 
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="relative group overflow-hidden rounded-lg shadow-lg">
                    <img src="./img/running-1.jpg" alt="Project 1" 
                         class="w-full h-64 object-cover transition duration-500 group-hover:scale-110" /> 

                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold mb-2">24 heures</h3>
                            <p class="text-gray-300">Plusieurs participations à cette épreuve pour me dépasser</p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="relative group overflow-hidden rounded-lg shadow-lg">
                    <img src="./img/running-2.jpg" alt="Project 2" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">  
                         
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold mb-2">Marathons</h3>
                            <p class="text-gray-300">Participations à divers marathons : Record personnel : 2'57'59 à Annecy en 2013</p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="relative group overflow-hidden rounded-lg shadow-lg">
                    <img src=./img/running-3.jpg alt="Project 3" 
                         class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">  
                         
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold mb-2">Trails</h3>
                            <p class="text-gray-300">Malgré mon handicap, j'essaie de participer à quelques manifestations(Trail de Saint-etienne, Courir pour des Pommes, SaintéLyon...).</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>

    

    

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Contactez-moi ! </h2>
                <div class="w-20 h-1 bg-purple-600 mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    je suis disponible, contactez-moi : 
                </p>
            </div>
            
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Addresse</h4>
                                <p class="text-gray-600">15 rue JB CLEMENT, 42000 ST ETIENNE</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Téléphone</h4>
                                <p class="text-gray-600">06 65 91 82 59</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Email</h4>
                                <p class="text-gray-600">laurent.demazy@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">pour me suivre</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/laurent.demazy/" class="bg-gray-200 hover:bg-purple-600 hover:text-white p-3 rounded-full transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            
                            
                            <a href="http://www.linkedin.com/in/ldemazy" class="bg-gray-200 hover:bg-purple-600 hover:text-white p-3 rounded-full transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2 md:pl-12">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!--div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                                <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div-->
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div>
                        </div>
                        <!--div>
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                        </div-->
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                        </div>
                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 w-full md:w-auto">
                            Envoyer le Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-6">Laurent DEMAZY</h3>
                    <p class="text-gray-400">
                        Technicien informatique depuis 26 ans, je suis reconnu <br>travailleur handicappé
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition">About</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition">Services</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition">Portfolio</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <!--div>
                    <h4 class="font-bold text-lg mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Mobile Apps</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">UI/UX Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Digital Marketing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cloud Solutions</a></li>
                    </ul>
                </div-->
                <!--div>
                    <h4 class="font-bold text-lg mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-4">
                        Subscribe to our newsletter for the latest updates.
                    </p>
                    <form class="flex">
                        <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-900 w-full">
                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div-->
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">
                    &copy; 2025 Ldemazy.com. tous droits reservés.
                </p>
                <div class="flex space-x-6">
                    <a href="https://www.facebook.com/laurent.demazy/" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    
                    
                    <a href="http://www.linkedin.com/in/ldemazy" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-purple-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
                
                // Update active navigation link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active-section');
                });
                this.classList.add('active-section');
                
                // Close mobile menu if open
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });
        
        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.slide-in-left, .slide-in-right, .fade-in');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateX(0) translateY(0)';
                }
            });
        };
        
        // Set initial state for animated elements
        document.querySelectorAll('.slide-in-left, .slide-in-right, .fade-in').forEach(element => {
            element.style.opacity = '0';
            
            if (element.classList.contains('slide-in-left')) {
                element.style.transform = 'translateX(-100px)';
            } else if (element.classList.contains('slide-in-right')) {
                element.style.transform = 'translateX(100px)';
            } else if (element.classList.contains('fade-in')) {
                element.style.transform = 'translateY(20px)';
            }
            
            element.style.transition = 'opacity 1s ease, transform 1s ease';
        });
        
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
        
        // Update active section on scroll
        const sections = document.querySelectorAll('section');
        
        window.addEventListener('scroll', () => {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= sectionTop - 100) {
                    current = section.getAttribute('id');
                }
            });
            
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active-section');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active-section');
                }
            });
        });
    </script>
</body>
</html>