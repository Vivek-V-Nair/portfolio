<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivek  Nair - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-100">
    <!-- Header -->
    <header class="bg-gray-800 text-white py-8 border-b border-gray-700">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
                    <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden border-4 border-blue-400 shadow-lg">
                        <img src="{{ asset('images/profile.jpg') }}" alt="Vivek Venugopal Nair" class="w-full h-full object-cover">
                    </div>
                    <div class="text-center md:text-left">
                        <h1 class="text-4xl font-bold text-blue-400">VIVEK VENUGOPAL NAIR</h1>
                        <p class="text-xl mt-2 text-gray-300">Software Engineering Student</p>
                    </div>
                </div>
                <div class="mt-4 md:mt-0 text-center md:text-right">
                    <div class="flex flex-col space-y-2">
                        <div><i class="fas fa-phone mr-2 text-blue-400"></i>+49 17624302844</div>
                        <div><i class="fas fa-map-marker-alt mr-2 text-blue-400"></i>Berlin, Germany</div>
                        <div><i class="fas fa-envelope mr-2 text-blue-400"></i>vivekrokzz01@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <!-- Profile Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-blue-400">Profile</h2>
            <p class="text-lg leading-relaxed text-gray-300">
                Motivated Software Engineering student with solid Python and C++ foundations. Hands-on experience in 
                database systems and system design. Eager to apply technical skills in real-world settings. Strong team player, 
                quick learner, and passionate about tech and innovation.
            </p>
        </section>

        <!-- About Me Section -->
        <section class="mb-12 bg-gray-800 p-8 rounded-lg shadow-lg border border-gray-700">
            <h2 class="text-3xl font-bold mb-6 text-blue-400">About Me</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-200">Me in three words</h3>
                    <p class="mb-6 text-gray-300">Motivated • Innovative • Dedicated</p>
                    
                    <h3 class="text-xl font-semibold mb-4 text-gray-200">What motivates you for the dual study programme in Software Engineering?</h3>
                    <p class="mb-6 text-gray-300">The perfect combination of theoretical knowledge and practical application excites me. I believe learning while working provides invaluable real-world experience that enhances academic understanding.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-200">Why should a company choose you?</h3>
                    <p class="mb-6 text-gray-300">I bring a strong foundation in programming, a problem-solving mindset, and genuine passion for technology. My diverse background and quick learning ability make me adaptable to various challenges.</p>
                    
                    <h3 class="text-xl font-semibold mb-4 text-gray-200">Life Motto</h3>
                    <p class="font-italic text-blue-300">"Innovation through continuous learning and practical application"</p>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-blue-400 text-center">Skills & Expertise</h2>
            
            <!-- Programming Skills with Progress Bars -->
            <div class="mb-8">
                <h3 class="text-2xl font-semibold mb-6 text-gray-200">Programming Languages</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-700 hover-card">
                        <div class="skill-item mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-300 flex items-center">
                                    <i class="fab fa-python text-blue-400 mr-2"></i>Python
                                </span>
                                <span class="text-blue-400 font-semibold">90%</span>
                            </div>
                            <div class="bg-gray-700 rounded-full h-3">
                                <div class="skill-progress bg-gradient-to-r from-blue-500 to-purple-600 h-3 rounded-full" data-percentage="90"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-300 flex items-center">
                                    <i class="fab fa-cuttlefish text-green-400 mr-2"></i>C++
                                </span>
                                <span class="text-green-400 font-semibold">75%</span>
                            </div>
                            <div class="bg-gray-700 rounded-full h-3">
                                <div class="skill-progress bg-gradient-to-r from-green-500 to-teal-600 h-3 rounded-full" data-percentage="75"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-300 flex items-center">
                                    <i class="fas fa-database text-orange-400 mr-2"></i>SQL
                                </span>
                                <span class="text-orange-400 font-semibold">70%</span>
                            </div>
                            <div class="bg-gray-700 rounded-full h-3">
                                <div class="skill-progress bg-gradient-to-r from-orange-500 to-red-600 h-3 rounded-full" data-percentage="70"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-700 hover-card">
                        <div class="skill-item mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-300 flex items-center">
                                    <i class="fab fa-html5 text-red-400 mr-2"></i>HTML/CSS
                                </span>
                                <span class="text-red-400 font-semibold">85%</span>
                            </div>
                            <div class="bg-gray-700 rounded-full h-3">
                                <div class="skill-progress bg-gradient-to-r from-red-500 to-pink-600 h-3 rounded-full" data-percentage="85"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-300 flex items-center">
                                    <i class="fas fa-cogs text-purple-400 mr-2"></i>OOP Concepts
                                </span>
                                <span class="text-purple-400 font-semibold">80%</span>
                            </div>
                            <div class="bg-gray-700 rounded-full h-3">
                                <div class="skill-progress bg-gradient-to-r from-purple-500 to-indigo-600 h-3 rounded-full" data-percentage="80"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-300 flex items-center">
                                    <i class="fab fa-js text-yellow-400 mr-2"></i>JavaScript
                                </span>
                                <span class="text-yellow-400 font-semibold">65%</span>
                            </div>
                            <div class="bg-gray-700 rounded-full h-3">
                                <div class="skill-progress bg-gradient-to-r from-yellow-500 to-yellow-600 h-3 rounded-full" data-percentage="65"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tools & Soft Skills Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-700 hover-card">
                    <h3 class="text-xl font-semibold mb-4 text-gray-200 flex items-center">
                        <i class="fas fa-tools text-green-400 mr-2"></i>Tools & Technologies
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <i class="fas fa-table text-green-400 text-2xl mb-2"></i>
                            <p class="text-gray-300 text-sm">MS Excel</p>
                        </div>
                        <div class="text-center p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <i class="fas fa-presentation text-green-400 text-2xl mb-2"></i>
                            <p class="text-gray-300 text-sm">VS code</p>
                        </div>
                        <div class="text-center p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <i class="fas fa-laptop-code text-green-400 text-2xl mb-2"></i>
                            <p class="text-gray-300 text-sm">PyCharm IDE</p>
                        </div>
                        <div class="text-center p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <i class="fab fa-git-alt text-green-400 text-2xl mb-2"></i>
                            <p class="text-gray-300 text-sm">Git(Version Control)</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-700 hover-card">
                    <h3 class="text-xl font-semibold mb-4 text-gray-200 flex items-center">
                        <i class="fas fa-heart text-yellow-400 mr-2"></i>Soft Skills
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <span class="flex items-center text-gray-300">
                                <i class="fas fa-lightbulb text-yellow-400 mr-3"></i>Problem Solving
                            </span>
                            <div class="flex">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <span class="flex items-center text-gray-300">
                                <i class="fas fa-users text-yellow-400 mr-3"></i>Team Collaboration
                            </span>
                            <div class="flex">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-gray-600"></i>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <span class="flex items-center text-gray-300">
                                <i class="fas fa-rocket text-yellow-400 mr-3"></i>Quick Learning
                            </span>
                            <div class="flex">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section class="mb-12 bg-gray-800 p-8 rounded-lg shadow-lg border border-gray-700">
            <h2 class="text-3xl font-bold mb-6 text-blue-400">Education</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-blue-400 pl-6">
                    <h3 class="text-xl font-semibold text-gray-200">University of Europe for Applied Sciences</h3>
                    <p class="text-gray-300">Software Engineering (Dual) - Bachelor of Science (B.Sc.)</p>
                    <p class="text-sm text-gray-400">Sept 2025 - Present</p>
                </div>
                <div class="border-l-4 border-blue-400 pl-6">
                    <h3 class="text-xl font-semibold text-gray-200">MCI Halle, Germany</h3>
                    <p class="text-gray-300">Studienkolleg</p>
                    <p class="text-sm text-gray-400">Jun 2019 – Mar 2022</p>
                </div>
                <div class="border-l-4 border-blue-400 pl-6">
                    <h3 class="text-xl font-semibold text-gray-200">Bhavan's Newsprint Vidyalaya</h3>
                    <p class="text-gray-300">High School (10 & 12) - CBSE</p>
                    <p class="text-sm text-gray-400">Completed 2020 & 2022</p>
                </div>
            </div>
        </section>

        <!-- Work Experience Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-blue-400">Work Experience</h2>
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg border border-gray-700">
                <h3 class="text-2xl font-semibold mb-4 text-gray-200">Student Project – Bike Store Management System</h3>
                <p class="text-gray-400 mb-4">Python & SQL | 2021 – 2022</p>
                <ul class="space-y-3">
                    <li><i class="fas fa-check-circle text-green-400 mr-2"></i><span class="text-gray-300">Built a comprehensive management system using Python (PyCharm IDE)</span></li>
                    <li><i class="fas fa-check-circle text-green-400 mr-2"></i><span class="text-gray-300">Designed customer and manager access modules with role-based permissions</span></li>
                    <li><i class="fas fa-check-circle text-green-400 mr-2"></i><span class="text-gray-300">Created database tables to manage bookings, accessories, and stock inventory</span></li>
                    <li><i class="fas fa-check-circle text-green-400 mr-2"></i><span class="text-gray-300">Developed functions for purchase tracking and dynamic price updates</span></li>
                    <li><i class="fas fa-check-circle text-green-400 mr-2"></i><span class="text-gray-300">Learned core programming logic, database handling, and user-based access design</span></li>
                    <li><i class="fas fa-check-circle text-green-400 mr-2"></i><span class="text-gray-300">Architected modular system structure for scalability and clean code separation</span></li>
                </ul>
            </div>
        </section>

        <!-- Languages Section -->
        <section class="mb-12 bg-gray-800 p-8 rounded-lg shadow-lg border border-gray-700">
            <h2 class="text-3xl font-bold mb-6 text-blue-400">Languages</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-200">German</h3>
                    <p class="text-gray-400">B2 Level</p>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-200">English</h3>
                    <p class="text-gray-400">B2 Level</p>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-200">Malayalam</h3>
                    <p class="text-gray-400">Native</p>
                </div>
            </div>
        </section>

        <!-- Interests Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-blue-400">Interests</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center border border-gray-700">
                    <i class="fas fa-rocket text-4xl text-blue-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-200">Innovation in Science & Tech</h3>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center border border-gray-700">
                    <i class="fas fa-dumbbell text-4xl text-green-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-200">Fitness & Outdoor Activities</h3>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center border border-gray-700">
                    <i class="fas fa-cogs text-4xl text-yellow-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-200">Mechanical Systems & DIY</h3>
                </div>
            </div>
        <!-- Contact Section -->
        <section id="contact" class="mb-12">
            <h2 class="text-3xl font-bold mb-8 text-blue-400 text-center">Get In Touch</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div class="bg-gray-800 p-8 rounded-lg shadow-lg border border-gray-700 hover-card">
                    <h3 class="text-2xl font-semibold mb-6 text-gray-200 flex items-center">
                        <i class="fas fa-envelope text-blue-400 mr-3"></i>Contact Information
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition-all cursor-pointer contact-item">
                            <i class="fas fa-envelope text-blue-400 text-xl mr-4"></i>
                            <div>
                                <p class="text-gray-300 font-medium">Email</p>
                                <p class="text-blue-300">vivekrokzz01@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition-all cursor-pointer contact-item">
                            <i class="fas fa-phone text-green-400 text-xl mr-4"></i>
                            <div>
                                <p class="text-gray-300 font-medium">Phone</p>
                                <p class="text-green-300">+49 17624302844</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition-all cursor-pointer contact-item">
                            <i class="fas fa-map-marker-alt text-red-400 text-xl mr-4"></i>
                            <div>
                                <p class="text-gray-300 font-medium">Location</p>
                                <p class="text-red-300">Halle (Saale), Germany</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition-all cursor-pointer contact-item">
                            <i class="fab fa-linkedin text-blue-500 text-xl mr-4"></i>
                            <div>
                                <p class="text-gray-300 font-medium">LinkedIn</p>
                                <p class="text-blue-400">linkedin.com/in/vivek-nair</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Interactive Contact Form -->
                <div class="bg-gray-800 p-8 rounded-lg shadow-lg border border-gray-700 hover-card">
                    <h3 class="text-2xl font-semibold mb-6 text-gray-200 flex items-center">
                        <i class="fas fa-paper-plane text-purple-400 mr-3"></i>Send a Message
                    </h3>
                    <form id="contact-form" class="space-y-4">
                        <div class="relative">
                            <input type="text" id="name" placeholder="Your Name" class="w-full p-4 bg-gray-700 text-gray-300 rounded-lg border border-gray-600 focus:border-blue-400 focus:outline-none transition-colors" required>
                            <i class="fas fa-user absolute right-4 top-4 text-gray-400"></i>
                        </div>
                        <div class="relative">
                            <input type="email" id="email" placeholder="Your Email" class="w-full p-4 bg-gray-700 text-gray-300 rounded-lg border border-gray-600 focus:border-blue-400 focus:outline-none transition-colors" required>
                            <i class="fas fa-envelope absolute right-4 top-4 text-gray-400"></i>
                        </div>
                        <div class="relative">
                            <select id="subject" class="w-full p-4 bg-gray-700 text-gray-300 rounded-lg border border-gray-600 focus:border-blue-400 focus:outline-none transition-colors" required>
                                <option value="">Select Subject</option>
                                <option value="internship">Internship Opportunity</option>
                                <option value="job">Job Opportunity</option>
                                <option value="collaboration">Collaboration</option>
                                <option value="general">General Inquiry</option>
                            </select>
                            <i class="fas fa-tag absolute right-4 top-4 text-gray-400"></i>
                        </div>
                        <div class="relative">
                            <textarea id="message" placeholder="Your Message" rows="4" class="w-full p-4 bg-gray-700 text-gray-300 rounded-lg border border-gray-600 focus:border-blue-400 focus:outline-none transition-colors resize-none" required></textarea>
                            <i class="fas fa-comment absolute right-4 top-4 text-gray-400"></i>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 px-6 rounded-lg transition-all transform hover:scale-105 hover:shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Social Links -->
            <div class="mt-8 text-center">
                <h3 class="text-xl font-semibold mb-4 text-gray-200">Connect With Me</h3>
                <div class="flex justify-center space-x-6">
                    <a href="#" class="social-link bg-blue-600 hover:bg-blue-700 text-white p-4 rounded-full transition-all transform hover:scale-110 hover:shadow-lg">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="social-link bg-gray-700 hover:bg-gray-600 text-white p-4 rounded-full transition-all transform hover:scale-110 hover:shadow-lg">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="social-link bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-full transition-all transform hover:scale-110 hover:shadow-lg">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="social-link bg-red-600 hover:bg-red-700 text-white p-4 rounded-full transition-all transform hover:scale-110 hover:shadow-lg">
                        <i class="fas fa-envelope text-xl"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Scroll Progress Bar -->
    <div id="progress-bar" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-blue-500 to-purple-600 z-50 transition-all duration-300"></div>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transform translate-y-16 transition-all duration-300 z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Floating Particles -->
    <div id="particles" class="fixed inset-0 pointer-events-none z-0"></div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 border-t border-gray-700 relative z-10">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-300">&copy; 2025 Vivek Venugopal Nair. All rights reserved.</p>
            <p class="mt-2 text-gray-400">Application for Software Engineering Dual Study Programme</p>
        </div>
    </footer>

    <!-- JavaScript for Awesome Features -->
    <script>
        // Scroll Progress Bar
        window.addEventListener('scroll', () => {
            const scrollProgress = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            document.getElementById('progress-bar').style.width = scrollProgress + '%';
        });

        // Back to Top Button
        const backToTopBtn = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.style.transform = 'translateY(0)';
            } else {
                backToTopBtn.style.transform = 'translateY(64px)';
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Typewriter Effect for Name
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }

        // Animated Counter for Skills
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            function updateCounter() {
                if (start < target) {
                    start += increment;
                    element.textContent = Math.floor(start);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            }
            updateCounter();
        }

        // Smooth Scroll for Navigation Links
        function smoothScroll(target) {
            const element = document.querySelector(target);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Intersection Observer for Fade-in Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Floating Particles Animation
        function createParticle() {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.cssText = `
                position: absolute;
                width: 4px;
                height: 4px;
                background: rgba(59, 130, 246, 0.5);
                border-radius: 50%;
                pointer-events: none;
                animation: float 6s linear infinite;
                left: ${Math.random() * 100}%;
                top: 100%;
                animation-delay: ${Math.random() * 6}s;
            `;
            document.getElementById('particles').appendChild(particle);

            setTimeout(() => {
                if (particle.parentNode) {
                    particle.parentNode.removeChild(particle);
                }
            }, 6000);
        }

        // Parallax Effect for Header
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const header = document.querySelector('header');
            if (header) {
                header.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Skills Progress Animation
        function animateSkillBars() {
            const skillBars = document.querySelectorAll('.skill-progress');
            skillBars.forEach(bar => {
                const percentage = bar.dataset.percentage || 85;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.transition = 'width 2s ease-in-out';
                    bar.style.width = percentage + '%';
                }, 500);
            });
        }

        // Interactive Hover Effects
        function addHoverEffects() {
            const cards = document.querySelectorAll('.hover-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                    this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.3)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                    this.style.boxShadow = '0 4px 6px rgba(0,0,0,0.1)';
                });
            });
        }

        // Mouse Trail Effect
        let mouseTrail = [];
        document.addEventListener('mousemove', (e) => {
            mouseTrail.push({ x: e.clientX, y: e.clientY, time: Date.now() });
            
            if (mouseTrail.length > 20) {
                mouseTrail.shift();
            }
            
            // Create trail dot
            const dot = document.createElement('div');
            dot.className = 'mouse-trail';
            dot.style.cssText = `
                position: fixed;
                width: 6px;
                height: 6px;
                background: radial-gradient(circle, rgba(59,130,246,0.8) 0%, transparent 70%);
                border-radius: 50%;
                pointer-events: none;
                z-index: 9999;
                left: ${e.clientX - 3}px;
                top: ${e.clientY - 3}px;
                animation: trail-fade 0.8s ease-out forwards;
            `;
            document.body.appendChild(dot);
            
            setTimeout(() => {
                if (dot.parentNode) {
                    dot.parentNode.removeChild(dot);
                }
            }, 800);
        });

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Add fade-in animation styles
            const style = document.createElement('style');
            style.textContent = `
                .animate-element {
                    opacity: 0;
                    transform: translateY(30px);
                    transition: all 0.8s ease-out;
                }
                
                .animate-fade-in {
                    opacity: 1 !important;
                    transform: translateY(0) !important;
                }
                
                .hover-card {
                    transition: all 0.3s ease;
                }
                
                @keyframes float {
                    0% { transform: translateY(0) rotate(0deg); opacity: 1; }
                    100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
                }
                
                @keyframes trail-fade {
                    0% { opacity: 1; transform: scale(1); }
                    100% { opacity: 0; transform: scale(0.3); }
                }
                
                @keyframes pulse-glow {
                    0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
                    50% { box-shadow: 0 0 30px rgba(59, 130, 246, 0.6); }
                }
                
                .glow-effect {
                    animation: pulse-glow 2s infinite;
                }
                
                .social-link {
                    position: relative;
                    overflow: hidden;
                }
                
                .social-link::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                    transition: left 0.5s;
                }
                
                .social-link:hover::before {
                    left: 100%;
                }
                
                .contact-item {
                    position: relative;
                    overflow: hidden;
                }
                
                .contact-item::after {
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    width: 0;
                    height: 2px;
                    background: linear-gradient(90deg, #3B82F6, #8B5CF6);
                    transition: width 0.3s ease;
                }
                
                .contact-item:hover::after {
                    width: 100%;
                }
                
                @keyframes typing {
                    from { width: 0; }
                    to { width: 100%; }
                }
                
                @keyframes blink {
                    50% { border-color: transparent; }
                }
                
                .typing-effect {
                    border-right: 2px solid #3B82F6;
                    animation: blink 1s infinite;
                }
            `;
            document.head.appendChild(style);

            // Apply animations to elements
            const animateElements = document.querySelectorAll('section, .bg-gray-800');
            animateElements.forEach(el => {
                el.classList.add('animate-element');
                observer.observe(el);
            });

            // Add hover effects to cards
            const cards = document.querySelectorAll('.bg-gray-800, .bg-gray-700');
            cards.forEach(card => card.classList.add('hover-card'));
            addHoverEffects();

            // Start typewriter effect for name
            const nameElement = document.querySelector('h1');
            if (nameElement) {
                const originalText = nameElement.textContent;
                setTimeout(() => typeWriter(nameElement, originalText, 150), 1000);
            }

            // Contact Form Handling
            const contactForm = document.getElementById('contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form data
                    const formData = {
                        name: document.getElementById('name').value,
                        email: document.getElementById('email').value,
                        subject: document.getElementById('subject').value,
                        message: document.getElementById('message').value
                    };
                    
                    // Simulate form submission
                    const submitBtn = contactForm.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
                    submitBtn.disabled = true;
                    
                    setTimeout(() => {
                        submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i>Message Sent!';
                        submitBtn.classList.remove('from-blue-600', 'to-purple-600');
                        submitBtn.classList.add('from-green-600', 'to-green-700');
                        
                        // Reset form
                        contactForm.reset();
                        
                        setTimeout(() => {
                            submitBtn.innerHTML = originalText;
                            submitBtn.disabled = false;
                            submitBtn.classList.remove('from-green-600', 'to-green-700');
                            submitBtn.classList.add('from-blue-600', 'to-purple-600');
                        }, 3000);
                        
                        // Show success message
                        showNotification('Message sent successfully! Thank you for reaching out.', 'success');
                    }, 2000);
                });
            }

            // Contact item click effects
            const contactItems = document.querySelectorAll('.contact-item');
            contactItems.forEach(item => {
                item.addEventListener('click', function() {
                    const textContent = this.querySelector('p:last-child').textContent;
                    if (textContent.includes('@')) {
                        window.location.href = `mailto:${textContent}`;
                    } else if (textContent.includes('+')) {
                        window.location.href = `tel:${textContent}`;
                    } else if (textContent.includes('linkedin')) {
                        window.open('https://linkedin.com/in/vivek-nair', '_blank');
                    }
                });
            });

            // Start particle animation
            setInterval(createParticle, 2000);

            // Animate skill bars when they come into view
            const skillsSection = document.querySelector('#skills');
            if (skillsSection) {
                const skillsObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateSkillBars();
                            skillsObserver.unobserve(entry.target);
                        }
                    });
                });
                skillsObserver.observe(skillsSection);
            }

            // Add glow effect to profile image
            const profileImage = document.querySelector('img[alt*="Vivek"]');
            if (profileImage) {
                profileImage.classList.add('glow-effect');
            }

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });

            console.log('🚀 Portfolio enhanced with awesome JavaScript features!');
        });

        // Notification system
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300`;
            
            if (type === 'success') {
                notification.classList.add('bg-green-600', 'text-white');
                notification.innerHTML = `<i class="fas fa-check-circle mr-2"></i>${message}`;
            } else {
                notification.classList.add('bg-blue-600', 'text-white');
                notification.innerHTML = `<i class="fas fa-info-circle mr-2"></i>${message}`;
            }
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 300);
            }, 3000);
        }

        // Easter egg - Konami code
        let konamiCode = [];
        const konami = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
        document.addEventListener('keydown', (e) => {
            konamiCode.push(e.keyCode);
            if (konamiCode.length > 10) konamiCode.shift();
            
            if (JSON.stringify(konamiCode) === JSON.stringify(konami)) {
                document.body.style.animation = 'rainbow 2s infinite';
                setTimeout(() => {
                    document.body.style.animation = '';
                    alert('🎉 You found the secret! Developer mode activated!');
                }, 2000);
            }
        });

        // Add rainbow animation for easter egg
        const rainbowStyle = document.createElement('style');
        rainbowStyle.textContent = `
            @keyframes rainbow {
                0% { filter: hue-rotate(0deg); }
                100% { filter: hue-rotate(360deg); }
            }
        `;
        document.head.appendChild(rainbowStyle);
    </script>
</body>
</html>
