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
            <nav id="menu" class="hidden lg:flex lg:space-x-4">
                <ul class="flex flex-col lg:flex-row lg:items-center space-y-4 lg:space-y-0 lg:space-x-4">
                    <li><a href="/decouvrir/histoire/" class="text-gray-600 hover:text-blue-600">L'histoire</a></li>
                    <li><a href="/preparer-ma-visite/" class="text-gray-600 hover:text-blue-600">Visite</a></li>
                    <li><a href="/preparer-ma-visite/informations-pratiques/" class="text-gray-600 hover:text-blue-600">Informations</a></li>
                    <li><a href="/preparer-ma-visite/billets-tarifs/" class="text-gray-600 hover:text-blue-600">Billets</a></li>
                    <li><a href="/actualites/agenda-chateau-versailles/" class="text-gray-600 hover:text-blue-600">Actualités</a></li>
                    <li><a href="/contact/" class="text-gray-600 hover:text-blue-600">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto min-h-[860px] p-4">
        <h1 class="text-3xl font-bold mb-4 text-center">Les actualités du château de Versailles</h1>

        <!-- Content -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <article class="bg-white p-4 shadow-lg rounded-lg">
                <img src="/upload/actual-1.png" alt="Actualité 1" class="w-full h-64 object-cover rounded-md">
                <h2 class="text-xl font-semibold mt-4">Une nouvelle exposition immersive</h2>
                <p class="text-gray-600 mt-2">Découvrez une toute nouvelle expérience immersive mettant en lumière l’histoire fascinante du château à travers des installations numériques uniques.</p>
            </article>
            
            <article class="bg-white p-4 shadow-lg rounded-lg">
                <img src="/upload/actual-2.png" alt="Actualité 2" class="w-full h-64 object-cover rounded-md">
                <h2 class="text-xl font-semibold mt-4">Les jardins revivent au printemps</h2>
                <p class="text-gray-600 mt-2">Avec le retour du printemps, les célèbres jardins du château retrouvent leur splendeur, offrant aux visiteurs une promenade exceptionnelle à travers l’histoire.</p>
            </article>
            
            <article class="bg-white p-4 shadow-lg rounded-lg">
                <img src="/upload/actual-3.png" alt="Actualité 3" class="w-full h-64 object-cover rounded-md">
                <h2 class="text-xl font-semibold mt-4">Concerts baroques dans la Galerie des Glaces</h2>
                <p class="text-gray-600 mt-2">Venez assister à une série de concerts exceptionnels au cœur de la majestueuse Galerie des Glaces, un voyage musical au temps de Louis XIV.</p>
            </article>

            <article class="bg-white p-4 shadow-lg rounded-lg">
                <img src="/upload/actual-4.png" alt="Actualité 4" class="w-full h-64 object-cover rounded-md">
                <h2 class="text-xl font-semibold mt-4">Restauration des appartements royaux</h2>
                <p class="text-gray-600 mt-2">Un ambitieux programme de restauration redonne vie aux somptueux appartements royaux, révélant toute leur splendeur d’antan.</p>
            </article>
            
            <article class="bg-white p-4 shadow-lg rounded-lg">
                <img src="/upload/actual-5.png" alt="Actualité 5" class="w-full h-64 object-cover rounded-md">
                <h2 class="text-xl font-semibold mt-4">Un nouveau parcours pour les visiteurs</h2>
                <p class="text-gray-600 mt-2">Le château propose un nouveau parcours interactif permettant de mieux comprendre la vie à la cour et les grands événements qui s’y sont déroulés.</p>
            </article>
            
            <article class="bg-white p-4 shadow-lg rounded-lg">
                <img src="/upload/actual-6.png" alt="Actualité 6" class="w-full h-64 object-cover rounded-md">
                <h2 class="text-xl font-semibold mt-4">Le Grand Bal de Versailles</h2>
                <p class="text-gray-600 mt-2">Un événement prestigieux se tiendra cet été : le Grand Bal de Versailles, où les visiteurs pourront revêtir des costumes d’époque et revivre les fastes de la cour.</p>
            </article>
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
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');

        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
    </script>
</body>
</html>
