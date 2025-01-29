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
        <h1 class="text-3xl font-bold mb-4 text-center">Informations pour les visiteurs</h1>

        <!-- Image -->
        <div class="w-full mb-6">
            <img src="/upload/info.png" alt="Informations pour les visiteurs" class="w-full max-w-md h-auto mx-auto rounded-lg shadow-md">
        </div>

        <!-- Content -->
        <section class="text-lg leading-relaxed space-y-6">
            <p>
                Le <strong>Château de Versailles</strong> et le <strong>domaine de Trianon</strong> sont ouverts tous les jours, sauf le lundi. Le Château accueille les visiteurs à partir de 9h00, tandis que le domaine de Trianon ouvre ses portes à 12h00.
            </p>
            <p>
                Les <strong>Jardins</strong> et le <strong>Parc</strong> sont accessibles quotidiennement dès 7h00. Veuillez noter que l'entrée aux Jardins est payante lors des événements des Grandes Eaux Musicales et des Jardins Musicaux.
            </p>
            <p>
                La ville de Versailles est desservie par trois gares principales : <strong>Versailles Château Rive Gauche</strong>, <strong>Versailles Rive Droite</strong> et <strong>Versailles Chantiers</strong>. Ces gares facilitent l'accès au domaine pour tous les visiteurs.
            </p>
            <p>
                Des mesures spécifiques sont en place pour assurer l'accessibilité du domaine aux personnes en situation de handicap, garantissant une visite confortable pour tous.
            </p>
            <p>
                L'accès au Parc est possible via la <strong>grille de la Reine</strong> pour les piétons, cyclistes et véhicules (droit d'entrée de 12 euros par véhicule), ainsi que par la <strong>grille des Matelots</strong> pour les piétons et cyclistes.
            </p>
            <p>
                Un parking est disponible sur la <strong>Place d'Armes</strong>. Des abonnements annuels et mensuels sont proposés pour les riverains et les professionnels. Pour plus d'informations, veuillez contacter Effia à l'adresse suivante : service.clients@effia.fr.
            </p>
            <p>
                Plusieurs espaces de stationnement pour vélos sont également à disposition des visiteurs à divers emplacements autour du domaine.
            </p>
            <p>
                Il est recommandé de réserver un audioguide du Château, disponible en 12 langues. Vous pouvez le retirer au comptoir situé dans le <strong>Vestibule du pavillon Dufour</strong> tous les jours, sauf le lundi.
            </p>
            <p>
                Pour faciliter votre visite, une carte interactive est disponible, vous permettant de localiser les différents points d'intérêt du domaine.
            </p>
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
