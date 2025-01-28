<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Château de Versailles</title>
    <meta name="description" content="Découvrez l'histoire, l'architecture et la splendeur du Château de Versailles, un symbole emblématique de la France et de son patrimoine culturel.">
    <meta name="keywords" content="Château de Versailles, histoire, culture, patrimoine, France, architecture, tourisme, Louis XIV, jardins, palais">
    <meta name="author" content="Château de Versailles">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Château de Versailles">
    <meta property="og:description" content="Plongez dans la grandeur du Château de Versailles, un chef-d'œuvre d'architecture et un site emblématique de l'histoire française.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Château de Versailles">
    <meta name="twitter:description" content="Explorez le Château de Versailles et découvrez son histoire fascinante, son architecture somptueuse et ses jardins magnifiques.">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="/"><div class="text-2xl text-yellow-600 font-bold">Château de Versailles</div></a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/index.php" class="text-gray-600 hover:text-blue-600">Accueil</a></li>
                    <li><a href="/privacy.php" class="text-gray-600 hover:text-blue-600">Politique de Confidentialité</a></li>
                    <li><a href="/terms.php" class="text-gray-600 hover:text-blue-600">Conditions Générales</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto min-h-[860px] p-4">
        <h1 class="text-3xl font-bold mb-4 text-center">Contact</h1>

        <section id="contact" class="container mx-auto p-4 flex items-center space-x-6">
            <img src="/upload/contact.png" alt="Contact" class="w-1/3 rounded-lg shadow-md">
            <div class="w-2/3">
                <h2 class="text-3xl font-bold mb-4">Rétroaction</h2>
                <form action="contact.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                    <div class="mb-4">
                        <label for="lastName" class="block mb-2">Nom de famille</label>
                        <input type="text" id="lastName" name="lastName" class="w-full p-2 border rounded-lg">
                    </div>
                    <div class="mb-4">
                        <label for="firstName" class="block mb-2">Nom</label>
                        <input type="text" id="firstName" name="firstName" class="w-full p-2 border rounded-lg">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block mb-2">Message</label>
                        <textarea id="message" name="message" class="w-full p-2 border rounded-lg"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">Envoyer</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 text-center">
        <div class="container mx-auto">
            <p>© <?php echo date("Y"); ?>. Tous droits réservés.</p>
            <div class="mt-2">
                <a href="/privacy.php" class="text-blue-400 hover:underline mx-2">Politique de Confidentialité</a>
                <a href="/terms.php" class="text-blue-400 hover:underline mx-2">Conditions Générales</a>
            </div>
        </div>
    </footer>
</body>
</html>
