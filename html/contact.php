<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8" />
    <link rel="stylesheet" href="css/style.css">
    <title>BY COUTURE - contact</title>
    <link rel="icon" href="image/machine.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="image/machine.ico" type="image/x-icon" />
</head>
<header>
    <h1 class="kiona">Pour me contacter</h1>
</header>

<body>
    <ul class="onglet">
        <li><a href="home.html" title="Pour retourner à l'accueil.">L'accueil</a></li>
        <li><a href="retouches.html" title="Les informations concernant les type de retouche.">Retouche</a></li>
        <li><a href="tarifs.html" title="Pour consulter mes tarifs.">Les tarifs</a></li>
        <li><a href="contact.php" title="Toutes les infos pour me contacter sont là ! ">Contact</a></li>
    </ul>

</body>

<section id="footer">
    <div class="inner">
        <h2 class="major">Contactez-moi</h2>

        <form action ="contactform.php" method="post">

            <div class="champs">
                <div class="champ">
                    <label for="name">Nom</label>
					<input type="text" name="name" />
                </div>
                <div class="champ">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" required />
                </div>
                <div class="champ">
                    <label for="subject">Objet</label>
                    <input type="text" name="subject">
                </div>
                <div class="champ">
                    <label for="message">Message</label>
                    <textarea name="message"  rows="5"></textarea>
                </div>
            </div>
            <ul class="actions">
            	<button type="submit" name="submit">Envoyer le message</button>
			</ul>
        </form>
        <ul class="contact">
            <li class="logoAdresse">
                16 rue Narcisse Lanchy
            </li>
            <li class="logoTel">
                06 60 06 06 60
            </li>
            <li class="logoMail">
                yaminaboukhirane@orange.fr
            </li>

        </ul>
        <ul class="copyright">
            <li>&copy; Medhi Louison</li>

            <li>Design : quelques inspirations provenant de <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
        
    </div>
</section>

</div>

</html>