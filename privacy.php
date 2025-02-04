<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité</title>
    <meta name="description" content="Découvrez l'histoire, l'architecture et la splendeur du Château de Versailles, un symbole emblématique de la France et de son patrimoine culturel.">
    <meta name="keywords" content="Château de Versailles, histoire, culture, patrimoine, France, architecture, tourisme, Louis XIV, jardins, palais">
    <meta name="author" content="Château de Versailles">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Politique de Confidentialité">
    <meta property="og:description" content="Plongez dans la grandeur du Château de Versailles, un chef-d'œuvre d'architecture et un site emblématique de l'histoire française.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Politique de Confidentialité">
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
        <h1 class="text-3xl font-bold mb-4">Politique de Confidentialité</h1>
        <p>Nous prenons la confidentialité de vos informations personnelles très au sérieux. Cette politique explique quelles informations nous collectons, comment elles sont utilisées et vos droits en tant qu'utilisateur.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Informations Collectées</h2>
        <p>Nous collectons des données lorsque vous interagissez avec notre site, comme :</p>
        <ul class="list-disc list-inside mt-4">
            <li>Vos informations de contact (nom, email, téléphone).</li>
            <li>Des informations sur votre appareil (adresse IP, navigateur, système d'exploitation).</li>
            <li>Vos préférences et interactions avec le site.</li>
        </ul>
        <h2 class="text-2xl font-bold mt-6 mb-2">Utilisation des Données</h2>
        <p>Nous utilisons vos informations pour :</p>
        <ul class="list-disc list-inside mt-4">
            <li>Fournir les services demandés.</li>
            <li>Améliorer nos produits et services.</li>
            <li>Envoyer des communications pertinentes et répondre à vos questions.</li>
        </ul>
        <h2 class="text-2xl font-bold mt-6 mb-2">Partage des Données</h2>
        <p>Vos données sont partagées uniquement :</p>
        <ul class="list-disc list-inside mt-4">
            <li>Avec des fournisseurs de services tiers, dans le cadre du fonctionnement de notre site.</li>
            <li>Si la loi nous y oblige.</li>
        </ul>
        <h2 class="text-2xl font-bold mt-6 mb-2">Vos Droits</h2>
        <p>Vous avez le droit d'accéder à vos données personnelles, de les corriger ou de demander leur suppression. Pour toute demande, contactez-nous via notre formulaire de contact.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Sécurité</h2>
        <p>Nous employons des mesures de sécurité avancées pour protéger vos informations contre tout accès non autorisé.</p>
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
