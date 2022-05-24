Bonjour,

Dans un premier temps, avant de lancer le serveur et le site,

Pourriez-vous créer une datebase appelé "charlie_solution_projet_QF" dans votre phpmyadmin (j'ai créer une commande depuis laravel, elle marchait mais
j'ai réessayé aujourd'hui et la commande me dit que la BDD n'existe pas alors que je cherche justement à la créer)

Ensuite pourriez-vous ouvrir dans un terminal le projet ( sur le fichier du projet faite : "Ctrl + clic droit" puis "ouvrir dans un terminal/powershell")

Effectuez les commandes suivantes : 
"php artisan config:clear"
"php artisan cache:clear"

Chose importante, j'ai configurer le site pour qu'il se connecte en "root" sans mot passe dans la base de donnée, pour changer ceci rendez vous dans 
le fichier .env du projet puis vous changez les valeurs suivante : 

DB_USERNAME=root    (le user que vous voulez utiliser)
DB_PASSWORD=        (le mot de passe de cet user)

Une fois ceci fait, vous pouvez faire le commande "php artisan db:create" qui va recréer la base de donnée avec le bon encodage.

Puis, ecrivez la commande "php artisan migrate" dans le terminal qui est ouvert dans le projet.

Vous pouvez maintenant lancer le serveur avec "php artisan serve" et vous rendre sur l'adresse 127.0.0.1:8000 pour accèder au site.


Pour réaliser ce test cela m'a pris 4 jours sans arret sauf au soir et à midi. Le développement a été ni facile ni difficile pour la simple est bonne raison
que je ne connaissais pas les langages de programmation, j'ai donc du m'auto-former pour pouvoir réussir.
Pour ce qui est du Framwork laravel cela c'est bien passé mais pour ce qui est de Vue JS je ne m'en suis tout simplement pas servi car je manquais de temps
pour bien me former sur ce langage, je n'arrivais pas à l'utilisé convenablement avec le peu de temps que j'ai eu pour me former sur Vue JS.
Le projet a été plutôt agréable à développer, je me suis bien amuser en le développant car je decouvrais un nouveau framwork agréable à pratiquer.

Je vous remercie pour la lecture et la chance que m'avez laissé.

Ferra Quentin.