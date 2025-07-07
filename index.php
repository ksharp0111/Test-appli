<?php 
// Basic PHP template for modern calendar & scheduling application base
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Élégance | Site Vitrine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white shadow-md z-50 transition-slow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">ÉLÉGANCE</a>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-600 hover:text-gray-900">Accueil</a>
                <a href="#services" class="text-gray-600 hover:text-gray-900">Services</a>
                <a href="#portfolio" class="text-gray-600 hover:text-gray-900">Portfolio</a>
                <a href="#about" class="text-gray-600 hover:text-gray-900">À Propos</a>
                <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
            </div>
            <button class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero min-h-screen flex items-center justify-center text-white relative">
        <div class="absolute inset-0">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0c1bc23d-023d-4491-b2c3-bbde3aa44743.png" alt="Luxueux salon moderne avec meubles design, grande baie vitrée donnant sur une ville animée" class="w-full h-full object-cover opacity-30"/>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">Élégance Redéfinie</h1>
            <p class="text-xl md:text-2xl mb-12 max-w-2xl mx-auto">Nous créons des expériences digitales exceptionnelles pour votre marque de luxe.</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#services" class="bg-white text-gray-800 px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-slow">Nos Services</a>
                <a href="#contact" class="border-2 border-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-gray-800 transition-slow">Nous Contacter</a>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#services">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Nos Services Exclusifs</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Des solutions sur mesure pour répondre aux besoins des marques haut de gamme.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Service 1 -->
                <div class="service-card bg-gray-50 p-8 rounded-lg transition-slow hover:cursor-pointer">
                    <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mb-6">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/de705205-b205-4bea-830c-dd58f2173918.png" alt="Icône de conception web minimaliste en noir et blanc" class="w-10 h-10"/>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Design Élégant</h3>
                    <p class="text-gray-600">Conception d'interfaces utilisateur sophistiquées qui reflètent l'identité de votre marque.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card bg-gray-50 p-8 rounded-lg transition-slow hover:cursor-pointer">
                    <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mb-6">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/547de792-db0c-4957-9a66-0e5c34819cbd.png" alt="Icône de développement web moderne" class="w-10 h-10"/>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Développement Sur Mesure</h3>
                    <p class="text-gray-600">Solutions techniques robustes et évolutives pour une performance optimale.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card bg-gray-50 p-8 rounded-lg transition-slow hover:cursor-pointer">
                    <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mb-6">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1221cf95-8592-4264-aadd-1b844295498c.png" alt="Icône de stratégie marketing digitale" class="w-10 h-10"/>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Stratégie Digitale</h3>
                    <p class="text-gray-600">Accompagnement pour une présence en ligne cohérente et impactante.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Nos Réalisations</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Découvrez nos projets récents pour des marques prestigieuses.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project 1 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/af515505-cefb-48f6-9831-c137367892a6.png" alt="Site web de luxe pour une marque de joaillerie avec fond noir et éléments dorés" class="w-full h-64 object-cover transition-slow group-hover:scale-110"/>
                    <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-slow p-6">
                        <div class="text-white text-center">
                            <h3 class="text-2xl font-bold mb-2">Bijouterie Luxe</h3>
                            <p class="mb-4">Site e-commerce pour une marque de joaillerie haut de gamme.</p>
                            <button class="border border-white px-4 py-2 rounded hover:bg-white hover:text-black transition-slow">Voir Plus</button>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/33babc4f-42ed-4b88-b1a5-5def897536de.png" alt="Interface minimaliste pour une application mobile de voyage de luxe" class="w-full h-64 object-cover transition-slow group-hover:scale-110"/>
                    <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-slow p-6">
                        <div class="text-white text-center">
                            <h3 class="text-2xl font-bold mb-2">Voyage Privé</h3>
                            <p class="mb-4">Application mobile pour un service de voyage personnalisé.</p>
                            <button class="border border-white px-4 py-2 rounded hover:bg-white hover:text-black transition-slow">Voir Plus</button>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c6b68332-16fc-4987-b956-0f35bfa5ca39.png" alt="Site vitrine pour un hôtel cinq étoiles avec ambiance sophistiquée" class="w-full h-64 object-cover transition-slow group-hover:scale-110"/>
                    <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-slow p-6">
                        <div class="text-white text-center">
                            <h3 class="text-2xl font-bold mb-2">Hôtel Prestige</h3>
                            <p class="mb-4">Site vitrine pour un hôtel cinq étoiles en centre-ville.</p>
                            <button class="border border-white px-4 py-2 rounded hover:bg-white hover:text-black transition-slow">Voir Plus</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="border-2 border-gray-800 px-8 py-3 rounded-full font-bold hover:bg-gray-800 hover:text-white transition-slow">Voir Plus de Projets</button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/37927d98-d30c-49ad-b847-64b287e0efcb.png" alt="Équipe professionnelle dans un bureau moderne discutant autour d'une table en verre" class="rounded-lg shadow-xl"/>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-4xl font-bold mb-6">Notre Philosophie</h2>
                    <p class="text-lg text-gray-600 mb-6">Depuis 2015, nous accompagnons les marques d'exception dans leur transformation digitale. Notre approche allie recherche esthétique et performance technique pour créer des expériences digitales mémorables.</p>
                    
                    <div class="mb-8">
                        <div class="flex items-center mb-4">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <svg class="w-4 h-4 text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-lg">Approche sur mesure pour chaque client</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <svg class="w-4 h-4 text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-lg">Équipe d'experts passionnés</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <svg class="w-4 h-4 text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-lg">Engagement qualité sans compromis</span>
                        </div>
                    </div>
                    
                    <button class="bg-gray-800 text-white px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-slow">En Savoir Plus</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Ce Qu'ils Disent de Nous</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Témoignages de nos clients satisfaits.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-white p-8 rounded-lg shadow-md transform hover:-translate-y-2 transition-slow">
                    <div class="flex items-center mb-6">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b858c905-f6cb-4880-865e-9501e0be8288.png" alt="Portrait d'une femme d'affaires souriante en costume élégant" class="w-16 h-16 rounded-full object-cover mr-4"/>
                        <div>
                            <h4 class="font-bold">Sophie Laurent</h4>
                            <p class="text-gray-600">PDG, Maison de Luxe</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Le site créé par Élégance a transformé notre présence digitale. L'interface reflète parfaitement notre identité haut de gamme."</p>
                    <div class="flex mt-4">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-white p-8 rounded-lg shadow-md transform hover:-translate-y-2 transition-slow">
                    <div class="flex items-center mb-6">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4e5be2f4-62f8-4f45-a887-6271e98825a8.png" alt="Portrait d'un homme d'affaires souriant en costume sombre" class="w-16 h-16 rounded-full object-cover mr-4"/>
                        <div>
                            <h4 class="font-bold">Thomas Dubois</h4>
                            <p class="text-gray-600">Directeur Marketing, Automobile Luxe</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"L'application mobile développée par leur équipe a surpassé toutes nos attentes en termes de design et de fonctionnalité."</p>
                    <div class="flex mt-4">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-white p-8 rounded-lg shadow-md transform hover:-translate-y-2 transition-slow">
                    <div class="flex items-center mb-6">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d23814ce-34ae-4ed0-94c8-8f1c4bc15ed4.png" alt="Portrait d'une entrepreneuse mince et souriante en tenue élégante" class="w-16 h-16 rounded-full object-cover mr-4"/>
                        <div>
                            <h4 class="font-bold">Émilie Roux</h4>
                            <p class="text-gray-600">Fondatrice, Spa de Luxe</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Leur capacité à comprendre notre univers et à le traduire digitalement est tout simplement remarquable."</p>
                    <div class="flex mt-4">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Restons en Contact</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Prêt à débuter votre projet? Contactez-nous pour une consultation gratuite.</p>
            </div>
            
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
                    <div class="bg-gray-100 p-8 rounded-lg shadow-md">
                        <h3 class="text-2xl font-bold mb-6">Nos Coordonnées</h3>
                        
                        <div class="flex items-start mb-6">
                            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold">Adresse</h4>
                                <p class="text-gray-600">15 Avenue Montaigne, 75008 Paris</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start mb-6">
                            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold">Téléphone</h4>
                                <p class="text-gray-600">+33 1 23 45 67 89</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.003 5.884L10 9.881l7.997-3.997A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <p class="text-gray-600">contact@elegance.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/88ef720e-3bf7-4f7b-9bbf-be369364c7ca.png" alt="Plan de localisation montrant l'emplacement du bureau dans le 8ème arrondissement de Paris" class="rounded-lg shadow-md"/>
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <form class="bg-gray-100 p-8 rounded-lg shadow-md">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Nom Complet</label>
                            <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500"/>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500"/>
                        </div>
                        
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-bold mb-2">Sujet</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500"/>
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                            <textarea id="message" rows="6" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-gray-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-opacity-90 transition-slow">Envoyer le Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div>
                    <h3 class="text-2xl font-bold mb-6">ÉLÉGANCE</h3>
                    <p class="text-gray-400 mb-4">Agence digitale spécialisée dans le luxe et le haut de gamme.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-slow">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-slow">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.858.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.354-.3.883-.344 1.858-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.858.182.466.399.8.748 1.15.35.35.683.566 1.15.748.354.137.883.3 1.858.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.354.3-.883.344-1.858.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.858-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-slow">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-slow">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.858.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.354-.3.883-.344 1.858-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.858.182.466.399.8.748 1.15.35.35.683.566 1.15.748.354.137.883.3 1.858.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.354.3-.883.344-1.858.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.858-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">Design Élégant</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">Développement Web</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">Stratégie Digitale</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">Branding Luxe</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">E-commerce Premium</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Liens Utiles</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">Mentions Légales</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">Politique de Confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">Conditions Générales</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-slow">Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Abonnez-vous pour recevoir nos dernières actualités.</p>
                    <div class="flex">
                        <input type="email" placeholder="Votre email" class="px-4 py-2 rounded-l-lg w-full focus:outline-none focus:ring-2 focus:ring-gray-500 text-gray-800"/>
                        <button class="bg-gray-800 text-white px-4 py-2 rounded-r-lg hover:bg-opacity-90 transition-slow">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2023 Élégance. Tous droits réservés.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-slow text-sm">Politique de Confidentialité</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-slow text-sm">Conditions Générales</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-gray-800 text-white w-12 h-12 rounded-full flex items-center justify-center opacity-0 invisible transition-slow">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Back to top button
        const backToTopBtn = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove('opacity-0', 'invisible');
                backToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                backToTopBtn.classList.remove('opacity-100', 'visible');
                backToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Mobile menu toggle (this would need to be implemented fully in a real project)
        document.querySelector('nav button').addEventListener('click', function() {
            alert('Menu mobile serait implémenté ici');
        });

        // Form submission (to be connected to a backend)
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Le formulaire serait envoyé au serveur ici');
        });
    </script>
</body>
</html>

