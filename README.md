Voici le projet MyResto !

Afin de pouvoir installer le projet sur votre machine, il faut :

- Installer WAMPServer
- Installer Visual Studio Code
- Installer Git
- Installez composer

Une fois ces trois outils installés, veuillez créer un répertoire dans lequel stocker le projet (de préférence dans le répertoire "www" du dossier C://wamp64).
Ensuite, ouvrez ce répertoire avec l'invite de commande et saisissez la ligne de commande suivante :

    git clone https://github.com/Youssef-jbr/MyResto.git

Le projet sera alors généré dans le répertoire créé précédemment.

Ensuite, ouvrez le projet avec Visual Studio Code, et saisissez dans le terminal les commandes suivantes :

    composer uptdate
    cp .env.example .env
    php artisan key:generate

Ces commandes vont permettre de mettre à jour les paquets du projet, créer votre fichier d'environnement et générer sa clé.

Ensuite, à l'aide de la plateforme PHPMyAdmin, créez une base de donnée "myresto" au format "utf-8_unicode_ci".

Une fois la base de donnée créée, nous allons insérer les tables et inserer les données des articles :

pour inserer les tables, veuillez saisir la commande dans le terminal de Visual Studio Code :

    php artisan migrate

pour inserer les données "articles" en base, dans PHPMyAdmin, sélectionnez la base de donnée "myresto", allez dans l'onglet "SQL", et saisissez la requête suivante :

    INSERT INTO `articles` (`id`, `libelle`, `categorie`, `prix`, `photo`) VALUES
    (1, 'Salade César', 'Entrée', 5.00, 'salade_cesar.jpg'),
    (2, 'Côte de boeuf(2 kilo)', 'Plat', 25.00, 'cote_de_boeuf.jpg'),
    (3, 'Tarte au citron meringuée', 'Dessert', 5.00, 'tarte-citron-meringuee.jpg'),
    (4, 'Ice Tea', 'Boisson', 2.00, 'lipton-ice-tea-logo.png'),
    (5, 'Salade chèvre miel', 'Entrée', 6.00, 'salade_chevre_miel.jpg'),
    (6, 'Pizza chèvre miel', 'Plat', 15.00, 'pizza_chevre-miel.jpg'),
    (7, 'Plateau de fromages', 'Dessert', 6.50, 'plateau-de-fromages.jpg'),
    (8, 'Bière', 'Boisson', 4.00, 'chouffe.jpg'),
    (9, 'Carpaccio de saumon', 'Entrée', 9.50, 'carpaccio_saumon.jpg'),
    (10, 'Couscous marocain', 'Plat', 20.00, 'couscous_marocain.jpg'),
    (11, 'Café gourmand', 'Dessert', 5.50, 'cafe_gourmand.jpg'),
    (12, 'Coca cola', 'Boisson', 3.00, 'coca_cola.png'),
    (13, 'Edamame', 'Entrée', 3.50, 'Edamame.jpg'),
    (14, 'riz loc lac', 'Plat', 12.50, 'Loc-lac.jpg'),
    (15, 'Glace maison', 'Dessert', 7.00, 'glaces_maison.jpg'),
    (16, 'Saké', 'Boisson', 9.00, 'sake.jpg');

Maintenant le projet est bien installé !

Vous n'avez plus qu'a créer un virtualhost à l'aide de WAMP en accèdant au formulaire de création.
Indiquez le nom de votre virtualhost (exemple : myresto.local), le lien vers le dossier "public" du projet (exemple : C:\\desktop\myresto\public).

Redémarrez les services de WAMP et vous pourrez maintenant accéder au projet grâce à votre navigateur en écrivant : http://myresto.local

