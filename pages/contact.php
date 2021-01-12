<?php
require 'header.php';
$file_contact = 'contact/contact'.date('_Y-m-d-H-i-s').'.txt';
$file_contact_civilite = filter_input(INPUT_POST, 'civilite', FILTER_DEFAULT);
file_put_contents($file_contact, $file_contact_civilite, FILE_APPEND | LOCK_EX);
$file_contact_name = filter_input(INPUT_POST, 'user_name', FILTER_DEFAULT);
file_put_contents($file_contact, $file_contact_name, FILE_APPEND | LOCK_EX);
$file_contact_raison = filter_input(INPUT_POST, 'raison-contact', FILTER_DEFAULT);
file_put_contents($file_contact, $file_contact_raison, FILE_APPEND | LOCK_EX);
$file_contact_email = filter_input(INPUT_POST, 'user_mail', FILTER_DEFAULT);
file_put_contents($file_contact, $file_contact_email, FILE_APPEND | LOCK_EX);
$file_contact_mp = filter_input(INPUT_POST, 'user_message', FILTER_DEFAULT);
file_put_contents($file_contact, $file_contact_mp, FILE_APPEND | LOCK_EX);
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