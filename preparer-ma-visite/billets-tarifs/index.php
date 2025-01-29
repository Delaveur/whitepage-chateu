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
        <h1 class="text-3xl font-bold mb-4 text-center">Billets & tarifs</h1>

        <!-- Image -->
        <div class="w-full mb-6">
            <img src="/upload/billets.png" alt="Billets-tarifs" class="w-full max-w-md h-auto mx-auto rounded-lg shadow-md">
        </div>

        <!-- Content -->
        <section class="text-lg leading-relaxed space-y-4">
        <h2 class="text-2xl font-bold mb-4">Planifier votre visite</h2>
            <p>Que vous prévoyez un voyage à Versailles ou que vous souhaitez simplement explorer le palais depuis chez vous, notre site est votre ressource de choix pour tout ce qui concerne le Château de Versailles. Nous fournissons des informations pratiques sur la manière d'acheter des billets, de planifier votre itinéraire et de tirer le meilleur parti de votre visite. Vous pouvez également trouver des détails sur les expositions à venir, les événements spéciaux et les visites guidées qui vous aideront à vivre Versailles dans toute sa splendeur.</p>

            <p>Pour ceux qui préfèrent explorer virtuellement, nous proposons des visites à 360 degrés, des cartes interactives et des contenus multimédias qui donnent vie au palais. Notre objectif est de rendre la magie de Versailles accessible à tous, peu importe où ils se trouvent dans le monde.</p>
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
