<?php
require 'header.php';

$valider = filter_has_var(INPUT_POST, 'valider');

if ($valider) {
    $filterSanetize = array(
        'civilite' => FILTER_SANITIZE_STRING,
        'user_name' => FILTER_SANITIZE_STRING,
        'user_mail' => FILTER_SANITIZE_STRING,
        'raison-contact' => FILTER_SANITIZE_STRING,
        'user_message' => FILTER_SANITIZE_STRING,
    );

    $filterValidate = array(
        'user_mail' => FILTER_VALIDATE_EMAIL,
    );

    $inputsSanetize = filter_input_array(INPUT_POST, $filterSanetize);
    $inputsValidate = filter_input_array(INPUT_POST, $filterValidate);

    if (!empty($inputsSanetize['civilite'])
        && !empty($inputsSanetize['user_name'])
        && !empty($inputsSanetize['user_mail'])
        && $inputsValidate['user_mail']
        && !empty($inputsSanetize['raison-contact'])
        && strlen($inputsSanetize['user_message']) < 6) {
        $fileContact = 'contact/contact' . date('_Y-m-d-H-i-s') . '.txt';

        $fileContent = [
            'civilite : ' . $inputsSanetize['civilite'] . PHP_EOL,
            'user_name : ' . $inputsSanetize['user_name'] . PHP_EOL,
            $inputsSanetize['user_mail'] . PHP_EOL,
            $inputsSanetize['raison-contact'] . PHP_EOL,
            $inputsSanetize['user_message'] . PHP_EOL,
        ];

        file_put_contents($fileContact, $fileContent, FILE_APPEND);

        echo 'Merci bisous 😘';
    } else {
        $formErrors = array(
            'civilite' => 'Aucune civilité sélectionnée.',
            'user_name' => 'Entrer un nom.',
            'user_mail' => 'Entrer une adresse mail.',
            'raison-contact' => 'Choisir une raison.',
            'user_message' => 'Entrer un message.',
            'min5char' => 'Taper au moins 5 charactères.',
        );
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
            if ($valider && empty($inputsSanetize['civilite'])) {
                echo $formErrors['civilite'];
            }
            ?>
            <div class="Name">
                <label class="NameSpace" for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <?php
            if ($valider && empty($inputsSanetize['user_name'])) {
                echo $formErrors['user_name'];
            }
            ?>
            <div class="Mail">
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <?php
            if ($valider && empty($inputsSanetize['user_mail'])) {
                echo $formErrors['user_mail'];
            } elseif ($valider && !$inputsValidate['user_mail']) {
                echo 'Mail noooooooonnn  valideeeeeeuuuuu';
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
            if ($valider && empty($inputsSanetize['raison-contact'])) {
                echo $formErrors['raison-contact'];
            }
            ?>
            <div class="MP">
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message" placeholder="Votre message"></textarea>
                <?php
                if ($valider && empty($inputsSanetize['user_message'])) {
                    echo $formErrors['user_message'];
                } elseif ($valider && strlen($inputsSanetize['user_message']) < 5) {
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