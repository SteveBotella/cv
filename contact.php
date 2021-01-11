<?php
require 'header.php';
?>
    <main>
        <div class="Email"><a href="mailto:steve.botella@le-campus-numerique.fr">Me contacter par email &#128077;</a>
        </div>
        <div class="Ou"><p>Ou remplir le formulaire de contact ci-dessous</p></div>
        <!--Le Formulaire super compliqué de la mort qui tue tout-->
        <form action="https://httpbin.org/post" method="post">
            <div class="Name">
                <label class="NameSpace" for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div class="Mail">
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div class="Contact">
                <label for="Raison-select">En quoi puis-je vous aider ?:</label>
                <select name="Raison" id="Raison-select">
                    <option value="">--Choisir une raison--</option>
                    <option value="question">Juste une question</option>
                    <option value="Contrat">Contrat CDD/CDI</option>
                    <option value="Rencontre">Me rencontrer</option>
                </select>
            </div>
            <div class="MP">
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message" placeholder="Votre message" required></textarea>
                <input class="BouttonEnvoyer" type="submit" value="Envoyer">
                <input class="BouttonReset" type="reset" value="Reset">
            </div>
        </form>
    </main>
<?php
require 'footer.php';
?>