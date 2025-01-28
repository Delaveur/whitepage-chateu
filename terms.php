<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions Générales</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="text-2xl font-bold">Logo</div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="text-gray-600 hover:text-blue-600">Accueil</a></li>
                    <li><a href="privacy.php" class="text-gray-600 hover:text-blue-600">Politique de Confidentialité</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Conditions Générales</a></li>
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
</body>
</html>