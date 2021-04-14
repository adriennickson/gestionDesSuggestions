# Gestion Des Suggestions
<hr>
Prérequis:
<ul>
    <li>Composer</li>
    <li>PHP7+</li>
    <li>MySQL</li>
</ul>                                            
<hr>
Comment exécuter le projet:
<ul>
    <li>Cloner le repo</li>
    <li>Copier .env en .env.local et Mettre à jour la ligne <b>DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"</b></li>
    <li>Se positionner en console dans le dossier du projet</li>
    <li>$ composer i</li>
    <li>$ php bin/console doctrine:database:create </li>
    <li>$ php bin/console doctrine:schema:update --force </li>
    <li>$ php -S localhost:8080 -t public/ </li>
</ul>                                            
<hr>
<p>
    Evaluation de PHP-Intermédiaire<br>
    Outils: PHP@7.4; Symfony@5.2; MySQL; Tailwind;<br>
    <h2>Foctionalités</h2>
    <p>
    <ul>
        <li>
            Sécurité
            <ul>
                <li>Création de compte</li>
                <li>Connection</li>
                <li>Deconnection</li>
            </ul>                                            
        </li>
        <li>
            Tableau de bord
        </li>
        <li>
            Sugestion
            <ul>
                <li>Création</li>
                <li>Mise à jour</li>
                <li>Consultation</li>
                <li>Suppression</li>
            </ul>                                            
        </li>
        <li>
            Utilisateur
            <ul>
                <li>Consultation</li>
            </ul>                                            
        </li>
    </ul>
    </p>
</p>
