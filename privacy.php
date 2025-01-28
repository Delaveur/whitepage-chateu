<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité</title>
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
                    <li><a href="terms.php" class="text-gray-600 hover:text-blue-600">Conditions Générales</a></li>
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
</body>
</html>
