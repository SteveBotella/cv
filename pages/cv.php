<?php
require 'header.php';
?>
    <main>
        <!--Block concernant les compétences (classe parent)-->
        <div class="CompetencesEtHobbies">
            <div class="Competences">
                <ul class="CompetencesList">
                    <!--Titre principale du block-->
                    <li><h1 class="TitreUn">Compétences</h1>
                    </li>
                    <!--Titre secondaire du block-->
                    <li><h2>Hardskills</h2>
                    </li>
                    <!--La compétence et sa description-->
                    <li class="CompetencesDescription">
                        <h3>Programmation</h3><br>HTML/CSS<br>Java<br>C++<br>Visual Scripting
                    </li>
                    <!--La compétence et sa description-->
                    <li class="CompetencesDescription">
                        <h3>Design</h3>
                        <ul>
                            <li>
                                Photoshop
                            </li>
                            <li>
                                UI/UX Unreal Engine 4 UMG
                            </li>
                            <li>
                                DAO Tablette Graphique
                            </li>
                        </ul>
                    </li>
                    <!--La compétence et sa description-->
                    <li class="CompetencesDescription">
                        <h3>Outils numérique</h3><br>Suite Google<br>Création/gestion de serveurs Discord<br>Git/Github
                    </li>
                </ul>
            </div>
            <div class="Hobbies">
                <ol>
                    <!--Titre principale du block-->
                    <li><h1>Hobbies</h1>
                    </li>
                    <!--Titre secondaire du block-->
                    <li><h2>Softskills</h2>
                    </li>
                    <li class="HobbiesDescription">
                        <!--Le hobby et sa description-->
                        <h3>Digital Art</h3><br>Modélisation 2D<br>Animation 2D/3D
                    </li>
                    <li class="HobbiesDescription">
                        <!--Le hobby et sa description-->
                        <h3>Sport</h3><br>E-sport<br>Arts Martiaux<br>Sport Extrême
                    </li>
                    <li class="HobbiesDescription">
                        <!--Le hobby et sa description-->
                        <h3>Divers</h3><br>Ecriture coopérative<br>Jeux de rôle<br>High-Tech<br>Aérospatiale
                    </li>
                </ol>
            </div>
        </div>
        <div class="ExperiencesTitle">
            <h1>Expériences et hobbies</h1>
        </div>
        <div class="Experiences">
            <!--Tableau des expériences et hobbies-->
            <table>
                <!--Les colonnes-->
                <tr>
                    <!--Les lignes-->
                    <td>
                        <h2>Expériences</h2>
                    </td>
                    <td></td>
                    <td>
                        <h2>Hobbies</h2>
                    </td>
                </tr>
                <tr>
                    <td class="CellText">Gardien de la Paix<br>2014 - 2019<br>Ministère de l'intérieur,Paris/Clichy (92)
                    </td>
                    <td class="CellText">Tech. Informatique<br>2010 - 2014<br>Magasin puis en auto-entreprise, Beaune
                        (21)
                    </td>
                    <td class="CellText"><a href="hobby.php">Création de jeux vidéo</a></td>
                </tr>
                </tr>
                <tr>
                    <td class="CellText">Equipier Polyvalent<br>2008 - 2010<br>Mc Donald, Levernois (21)</td>
                    <td class="CellText">Intérimaire<br>2006 - 2014<br>Supplay, Beaune (21)</td>
                    <td class="CellText">Basketball<br>1996 - 2006<br>Championnat Régional</td>
                </tr>
            </table>
        </div>
    </main>
<?php
require 'footer.php';
?>