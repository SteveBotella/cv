<?php
require 'header.php';
?>
    <main>
        <div class="Email"><a href="mailto:steve.botella@le-campus-numerique.fr">Me contacter par email &#128077;</a>
        </div>
        <div class="Ou"><p>Ou remplir le formulaire de contact ci-dessous</p></div>
        <!--Le Formulaire super compliqué de la mort qui tue tout-->
        <form action="../index.php?page=contact" method="post">
            <div class="Civilite">
                <label for="civilite-select">Mr ou Mme</label>
                <select name="civilite" id="civilite-select">
                    <option value="">--Choisir une civilite--</option>
                    <option value="Mr">Monsieur</option>
                    <option value="Mme">Madame</option>
                </select>
            </div>
            <div class="Name">
                <label class="NameSpace" for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div class="Mail">
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div class="Contact">
                <label for="question">Juste une question</label>
                <input type="radio" id="question" name="raison-contact" value="question">
                <label for="Contrat">Contrat CDD/CDI</label>
                <input type="radio" id="Contrat" name="raison-contact" value="Contrat">
                <label for="Rencontre">Me rencontrer</label>
                <input type="radio" id="Rencontre" name="raison-contact" value="Rencontre">
            </div>
            <div class="MP">
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message" placeholder="Votre message"></textarea>
                <input class="BouttonEnvoyer" type="submit" value="Envoyer">
                <input class="BouttonReset" type="reset" value="Reset">
            </div>
        </form>
    </main>
<?php
require 'footer.php';
?>