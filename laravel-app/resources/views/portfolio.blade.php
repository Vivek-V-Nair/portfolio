<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivek Venugopal Nair - Portfolio</title>
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
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-blue-400">Skills</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-700">
                    <h3 class="text-xl font-semibold mb-4 text-gray-200">Programming</h3>
                    <ul class="space-y-2">
                        <li><i class="fas fa-code text-blue-400 mr-2"></i><span class="text-gray-300">Python & Python Scripting</span></li>
                        <li><i class="fas fa-code text-blue-400 mr-2"></i><span class="text-gray-300">C++</span></li>
                        <li><i class="fas fa-code text-blue-400 mr-2"></i><span class="text-gray-300">Object Oriented Programming</span></li>
                        <li><i class="fas fa-database text-blue-400 mr-2"></i><span class="text-gray-300">Basic SQL</span></li>
                        <li><i class="fas fa-code text-blue-400 mr-2"></i><span class="text-gray-300">HTML & CSS</span></li>
                    </ul>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-700">
                    <h3 class="text-xl font-semibold mb-4 text-gray-200">Tools & Technologies</h3>
                    <ul class="space-y-2">
                        <li><i class="fas fa-table text-green-400 mr-2"></i><span class="text-gray-300">MS Excel</span></li>
                        <li><i class="fas fa-presentation text-green-400 mr-2"></i><span class="text-gray-300">PowerPoint</span></li>
                        <li><i class="fas fa-laptop-code text-green-400 mr-2"></i><span class="text-gray-300">PyCharm IDE</span></li>
                    </ul>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-700">
                    <h3 class="text-xl font-semibold mb-4 text-gray-200">Soft Skills</h3>
                    <ul class="space-y-2">
                        <li><i class="fas fa-lightbulb text-yellow-400 mr-2"></i><span class="text-gray-300">Problem-solving mindset</span></li>
                        <li><i class="fas fa-users text-yellow-400 mr-2"></i><span class="text-gray-300">Team collaboration</span></li>
                        <li><i class="fas fa-rocket text-yellow-400 mr-2"></i><span class="text-gray-300">Quick learner</span></li>
                    </ul>
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
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 border-t border-gray-700">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-300">&copy; 2025 Vivek Venugopal Nair. All rights reserved.</p>
            <p class="mt-2 text-gray-400">Application for Software Engineering Dual Study Programme</p>
        </div>
    </footer>
</body>
</html>
