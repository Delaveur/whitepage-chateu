<!DOCTYPE html>
<html lang="fr">
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
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="/"><div class="text-2xl text-yellow-600 font-bold">Château de Versailles</div></a>
            <button id="menu-toggle" class="lg:hidden text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
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

    <section class="container mx-auto min-h-[860px] p-4">
        <h1 class="text-3xl font-bold mb-4">Conditions Générales</h1>
        <p>Ces conditions générales régissent l'utilisation de notre site. En accédant à ce site, vous acceptez les termes et conditions décrits ci-dessous.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Utilisation du Site</h2>
        <p>Le site est destiné à un usage personnel et non commercial. Vous acceptez de ne pas utiliser le site pour des activités illégales ou nuisibles.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Propriété Intellectuelle</h2>
        <p>Tout le contenu du site, y compris les textes, images, logos et autres éléments, est protégé par des droits d'auteur. Toute reproduction ou distribution sans autorisation préalable est interdite.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Responsabilités</h2>
        <p>Nous ne pouvons être tenus responsables des dommages directs ou indirects résultant de l'utilisation de notre site. Vous utilisez le site à vos propres risques.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Modifications</h2>
        <p>Nous nous réservons le droit de modifier ces conditions générales à tout moment. Les changements entreront en vigueur dès leur publication sur le site.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Contact</h2>
        <p>Si vous avez des questions concernant ces conditions générales, veuillez nous contacter via notre formulaire de contact.</p>
    </section>

    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>© <?php echo date("Y"); ?>. Tous droits réservés.</p>
        <div class="mt-2">
            <a href="privacy.php" class="text-blue-400 hover:underline mx-2">Politique de Confidentialité</a>
            <a href="terms.php" class="text-blue-400 hover:underline mx-2">Conditions Générales</a>
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