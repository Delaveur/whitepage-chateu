<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="text-2xl font-bold">Logo</div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="text-gray-600 hover:text-blue-600">Accueil</a></li>
                    <li><a href="privacy.php" class="text-gray-600 hover:text-blue-600">Politique de Confidentialité</a></li>
                    <li><a href="terms.php" class="text-gray-600 hover:text-blue-600">Conditions Générales</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container mx-auto p-4 flex items-center space-x-6">
        <img src="src/main.png" alt="About Us" class="w-1/3 rounded-lg shadow-md">
        <div>
            <h2 class="text-3xl font-bold mb-4">À propos de nous</h2>
            <p class="mb-4">Bienvenue sur le site officiel du Château de Versailles, l'un des monuments les plus époustouflants et historiquement significatifs au monde. Notre mission est de vous offrir une expérience immersive et enrichissante qui fait revivre la grandeur de ce palais emblématique. Que vous soyez un passionné d'histoire, un amateur d'art ou simplement quelqu'un qui apprécie la beauté de l'architecture et de la nature, nous vous invitons à explorer l'héritage riche de Versailles à travers nos visites virtuelles, ressources éducatives et informations détaillées sur l'histoire du palais, ses collections d'art et ses jardins somptueux.</p>
            <p>Au Château de Versailles, nous nous efforçons de préserver et de partager le legs de cet extraordinaire domaine, qui a été un symbole de pouvoir, de luxe et d'accomplissement culturel pendant des siècles. De ses modestes débuts en tant que pavillon de chasse jusqu'à sa transformation en centre du pouvoir royal sous Louis XIV, Versailles continue de captiver les visiteurs du monde entier. Notre équipe d'historiens, de conservateurs et de guides touristiques travaille sans relâche pour s'assurer que chaque visiteur—que ce soit en personne ou en ligne—repart avec une compréhension et une appréciation plus profondes de ce trésor inégalé.</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-4">Галерея</h2>
        <div class="grid grid-cols-3 gap-4">
            <div>
                <a href="page1.php" class="block group">
                    <img src="placeholder.jpg" alt="Item 1" class="rounded-lg shadow-md group-hover:scale-105 transition-transform">
                    <p class="text-center mt-2">Название 1</p>
                </a>
            </div>
            <div>
                <a href="page2.php" class="block group">
                    <img src="placeholder.jpg" alt="Item 2" class="rounded-lg shadow-md group-hover:scale-105 transition-transform">
                    <p class="text-center mt-2">Название 2</p>
                </a>
            </div>
            <div>
                <a href="page3.php" class="block group">
                    <img src="placeholder.jpg" alt="Item 3" class="rounded-lg shadow-md group-hover:scale-105 transition-transform">
                    <p class="text-center mt-2">Название 3</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-4">Обратная связь</h2>
        <form action="contact.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="lastName" class="block mb-2">Фамилия</label>
                <input type="text" id="lastName" name="lastName" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="firstName" class="block mb-2">Имя</label>
                <input type="text" id="firstName" name="firstName" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Емейл</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2">Сообщение</label>
                <textarea id="message" name="message" class="w-full p-2 border rounded-lg"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">Отправить</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 text-center">
        <div class="container mx-auto">
            <p>© <?php echo date("Y"); ?>. Tous droits réservés.</p>
            <div class="mt-2">
                <a href="privacy.php" class="text-blue-400 hover:underline mx-2">Politique de Confidentialité</a>
                <a href="terms.php" class="text-blue-400 hover:underline mx-2">Conditions Générales</a>
            </div>
        </div>
    </footer>
    <!-- Cookies Notice -->
    <div id="cookie-notice" class="fixed bottom-0 left-0 w-full bg-gray-800 text-white p-4 text-center" style="display: none;">
        <p>Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre <a href="privacy.php" class="text-blue-400 underline">Politique de Confidentialité</a>.</p>
        <button id="accept-cookies" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Accepter</button>
    </div>
    <script>
        const cookieNotice = document.getElementById('cookie-notice');
        const acceptCookies = document.getElementById('accept-cookies');
        if (!localStorage.getItem('cookiesAccepted')) {
            cookieNotice.style.display = 'block';
        }
        acceptCookies.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookieNotice.style.display = 'none';
        });
    </script>
</body>
</html>
