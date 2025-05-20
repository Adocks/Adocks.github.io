<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CréaTyve</title>
    <link rel="stylesheet" href="style.css"> <!-- Lien vers la feuille de style -->
</head>
<body>
    <header class="video-header"> <!-- En-tête avec fond vidéo -->
        <video autoplay loop muted playsinline class="backVideo"> <!-- Vidéo de fond -->
            <source src="fond.mp4" type="video/mp4">
        </video>
        <div class="header-bar"> <!-- Barre supérieure contenant le logo, la navigation et les actions -->
            <img src="LogoCreaTyve.png" alt="Logo CréaTyve" class="logo"> <!-- Logo principal -->
            <nav class="navigation-panel"> <!-- Menu de navigation principal -->
                <ul>
                    <li class="active"> <!-- Élément actif (page courante) -->
                        <a href="#">
                            <img src="codage.png" alt="Assistant IA" class="icon" />
                            <span class="text">Assistant IA</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="loupe.png" alt="Exemples" class="icon" />
                            <span class="text">Exemples</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="donner.png" alt="Dons" class="icon" />
                            <span class="text">Dons</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="les-partenaires.png" alt="Partenaires" class="icon" />
                            <span class="text">Partenaires</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="entreprise.png" alt="Entreprise" class="icon" />
                            <span class="text">Entreprise</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="header-actions"> <!-- Boutons Connexion/Inscription et icône profil -->
                <button class="btn btn-login">Connexion</button>
                <button class="btn btn-signup">Inscription</button>
                <a href="profil.php" class="profile-link">
                    <img src="utilisateur.png" alt="Profil" class="profile-icon">
                </a>
            </div>
        </div>
        <div class="header-content"> <!-- Contenu principal centré sur la page -->
            <h2>Une idée, Un site , Un clic</h2>
            <h1>Envie de créer votre site ?</h1>
            <p>
                Vous avez une entreprise à promouvoir ? Oubliez les années d’études ! 
                En quelques clics et 10 secondes top chrono, devenez votre propre développeur web. 
                Créez, lancez, rayonnez — c’est aussi simple que ça.
            </p>
            <button class="main-btn">Générer avec l'IA &gt;</button>
        </div>
    </header>
    <footer class="footer">
        <div class="footer-content">
            <span class="footer-logo">CréaTyve</span>
            <span class="footer-separator">|</span>
            <span class="footer-copyright">© 2025 CréaTyve. Tous droits réservés.</span>
            <span class="footer-separator">|</span>
            <span class="footer-team">Adrien Crudeli, Tess Marques, Romain Duboux</span>
            <span class="footer-separator">|</span>
            <span class="footer-contact">Contact : contact@creatyve.fr</span>
        </div>
    </footer>
</body>
</html>