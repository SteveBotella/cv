<?php
require 'header.php';

$formErrors = array(
    'civilite' => 'Aucune civilité sélectionnée.',
    'user_name' => 'Entrer un nom.',
    'user_mail' => 'Entrer une adresse mail.',
    'raison-contact' => 'Choisir une raison.',
    'user_message' => 'Entrer un message.',
    'min5char' => 'Taper au moins 5 charactères.',
);

$file_contact_key = array(
    'civilite' => 'civilite',
    'user_name' => 'user_name',
    'user_mail' => 'user_mail',
    'raison-contact' => 'raison-contact',
    'user_message' => 'user_message',
);

if (filter_has_var(INPUT_POST, 'valider')) {
    $file_contact_content = filter_input_array(INPUT_POST, $file_contact_key);
    $valider = $_POST['valider'];
    $can_send = false;

    if (!empty($file_contact_content['civilite']) && !empty($file_contact_content['user_name']) && !empty($file_contact_content['user_mail']) && !empty($file_contact_content['raison-contact']) && (!empty($file_contact_content['user_message']) || strlen($file_contact_content['user_message']) < 5)) {
        $can_send = true;
    }

    if (isset($valider) && ($can_send) == true) {
        $file_contact = 'contact/contact' . date('_Y-m-d-H-i-s') . '.txt';
        file_put_contents($file_contact, $file_contact_content['civilite'], FILE_APPEND | LOCK_EX);
        file_put_contents($file_contact, $file_contact_content['user_name'], FILE_APPEND | LOCK_EX);
        file_put_contents($file_contact, $file_contact_content['user_mail'], FILE_APPEND | LOCK_EX);
        file_put_contents($file_contact, $file_contact_content['raison-contact'], FILE_APPEND | LOCK_EX);
        file_put_contents($file_contact, $file_contact_content['user_message'], FILE_APPEND | LOCK_EX);
    }
}

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
            <?php
            if (isset($valider) && empty($file_contact_content['civilite'])) {
                echo $formErrors['civilite'];
            }
            ?>
            <div class="Name">
                <label class="NameSpace" for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <?php
            if (isset($valider) && empty($file_contact_content['user_name'])) {
                echo $formErrors['user_name'];
            }
            ?>
            <div class="Mail">
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <?php
            if (isset($valider) && empty($file_contact_content['user_mail'])) {
                echo $formErrors['user_mail'];
            }
            ?>
            <div class="Contact">
                <label for="question">Juste une question</label>
                <input type="radio" id="question" name="raison-contact" value="question">
                <label for="Contrat">Contrat CDD/CDI</label>
                <input type="radio" id="Contrat" name="raison-contact" value="Contrat">
                <label for="Rencontre">Me rencontrer</label>
                <input type="radio" id="Rencontre" name="raison-contact" value="Rencontre">
            </div>
            <?php
            if (isset($valider) && empty($file_contact_content['raison-contact'])) {
                echo $formErrors['raison-contact'];
            }
            ?>
            <div class="MP">
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message" placeholder="Votre message"></textarea>
                <?php
                if (isset($valider) && empty($file_contact_content['user_message'])) {
                    echo $formErrors['user_message'];
                } elseif (isset($valider) && strlen($file_contact_content['user_message']) < 5) {
                    echo $formErrors['min5char'];
                }
                ?>
                <input class="BouttonEnvoyer" type="submit" name="valider" value="Envoyer">
                <input class="BouttonReset" type="reset" value="Reset">
            </div>
        </form>
    </main>
<?php
require 'footer.php';
?>