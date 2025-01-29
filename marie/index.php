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

    <main class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 text-center">Marie-Antoinette, reine de France, et ses enfants</h1>

        <!-- Image -->
        <div class="w-full mb-6">
            <img src="/upload/gallery-1.png" alt="Marie-Antoinette et ses enfants" class="w-full max-w-md h-auto mx-auto rounded-lg shadow-md">
        </div>

        <!-- Content -->
        <section class="text-lg leading-relaxed space-y-4">
            <p>
                Marie-Antoinette, née archiduchesse d'Autriche en 1755, est l'une des figures les plus célèbres de l'histoire de France. Épouse de Louis XVI, elle devint reine de France à l'âge de 19 ans. Son mariage avait pour but de sceller une alliance entre la France et l'Autriche.
            </p>
            <p>
                En tant que reine, Marie-Antoinette a souvent été critiquée pour son style de vie extravagant et ses dépenses somptuaires à la cour de Versailles. Cependant, derrière cette image se cachait une mère aimante et attentionnée pour ses enfants.
            </p>
            <p>
                Marie-Antoinette et Louis XVI eurent quatre enfants : Marie-Thérèse, Louis-Joseph, Louis-Charles et Sophie-Béatrice. Chacun d'eux joua un rôle particulier dans la vie de la reine, bien que leur vie fût tragiquement marquée par les bouleversements de la Révolution française.
            </p>
            <p>
                Leur premier enfant, Marie-Thérèse Charlotte, née en 1778, était surnommée « Madame Royale ». Elle survécut à la Révolution et fut l'unique membre de la famille royale à échapper à la guillotine. Son destin fut celui d'une vie en exil, portant le poids de l'héritage royal.
            </p>
            <p>
                Louis-Joseph, le dauphin de France, naquit en 1781. Il était destiné à succéder à son père en tant que roi, mais sa santé fragile le mena à une mort prématurée en 1789, à l'âge de seulement 7 ans, laissant un vide immense dans le cœur de ses parents.
            </p>
            <p>
                Louis-Charles, connu sous le nom de « Louis XVII », devint dauphin après la mort de son frère aîné. Malheureusement, sa vie fut tragique : emprisonné avec sa famille pendant la Révolution, il mourut en captivité à l'âge de 10 ans dans des conditions déplorables.
            </p>
            <p>
                La dernière enfant de la reine, Sophie-Béatrice, naquit en 1786, mais sa vie fut encore plus courte. Elle mourut en bas âge, en 1787, privant Marie-Antoinette d'une autre de ses précieuses joies.
            </p>
            <p>
                Malgré les épreuves, Marie-Antoinette resta une mère profondément dévouée. Ses lettres à ses enfants montrent une femme attentionnée, bien loin de l'image froide et distante souvent véhiculée. La Révolution française transforma sa vie et celle de sa famille en un drame historique qui fascine encore aujourd'hui.
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
