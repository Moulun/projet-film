<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <section class="btn">
        <ul>
            <li><a href="?film=genre">Genre</a></li>
            <li><a href="?film=realisateur">Réalisateur</a></li>


    </section>

</header>

<body>





    </div>
    <?php
    $tab = [
        [
            'Nom du film' => ' 10 jours sans maman',
            'img' => '10_jours_encore_sans_maman_affiche.jpg',
            'date de sortie' => '12/04/2023',
            'réalisateur' =>   'Ludovic Bernard',
            'Durée' => '1h36',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Après son licenciement, Antoine, ancien DRH d\'une grande enseigne de bricolage, a choisi de rester à la maison pour s\'occuper de ses 4 enfants. Un nouveau travail qu\'il effectue la plupart du temps seul, car sa femme Isabelle est très occupée par sa nouvelle activité d\'avocate. Depuis deux ans dans la famille Mercier, les rôles ont donc clairement été inversés et Antoine commence à de moins en moins tenir le coup face à l\'énergie que lui demande sa petite famille. Voilà pourquoi 10 jours de vacances à la montagne s\'annoncent comme une aubaine pour le père au foyer qu\'il est devenu. Hélas, une affaire inespérée pour le cabinet d\'Isabelle tombe du ciel. Elle n\'a pas d\'autres solutions que de laisser Antoine partir 10 jours au ski seul avec les 4 enfants, et surtout : sans maman !',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/VRDglZvHa-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ],
        [
            'Nom du film' => ' 65 - la Terre d\'avant',
            'img' => ' terre.jpg',
            'date de sortie' => '15/03/2023',
            'réalisateur' =>   'Scott Beck, Bryan Woods',
            'Durée' => '1h33',
            'genre' => 'Action, science-fiction, thriller',
            'Syonpsis' =>  'Après un terrible crash sur une planète inconnue, le pilote Mills découvre rapidement qu\'il a en réalité échoué sur Terre… il y a 65 millions d\'années. Pour réussir leur unique chance de sauvetage, Mills et Koa l\'unique autre survivante du crash, doivent se frayer un chemin à travers des terres inconnues peuplées de dangereuses créatures préhistoriques dans un combat épique pour leur survie',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/RF4pH6Xsorc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ],

        [
            'Nom du film' => ' Ailleurs si j\'y suis',
            'img' => 'ailleur.jpg',
            'date de sortie' => '29/03/2023',
            'réalisateur' =>   'François Pirot',
            'Durée' => '103',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Alors que sa famille et son métier le mettent sous pression, Mathieu, sur un coup de tête, s\'enfonce dans la forêt devant chez lui. Et y reste. Face à cette démonstration de liberté, ses proches s\'interrogent… Sur lui, sur eux-mêmes, sur le sens de leur vie… Et s\'il avait raison ?',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/iYuNRV0NyHg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ],

        [
            'Nom du film' => ' Apaches',
            'img' => 'appache.jpg ',
            'date de sortie' => '29/03/2023',
            'réalisateur' =>   'Romain Quirot',
            'Durée' => '95',
            'genre' => 'Drame, Historique',
            'Syonpsis' =>  '1900. De Montmartre à Belleville, Paris est aux mains de gangs ultra violents qui font régner la terreur sur la capitale : les Apaches. Prête à tout pour venger la mort de son frère, une jeune femme intègre un gang. Mais plus elle se rapproche de l\'homme qu\elle veut éliminer, plus elle est fascinée par ce dernier.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/iYuNRV0NyHg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ],

        [
            'Nom du film' => ' Bonne conduite',
            'img' => ' conduite.jpg',
            'date de sortie' => '29/03/2023',
            'réalisateur' =>   'Jonathan Barré',
            'Durée' => '95',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Pauline a une méthode bien à elle pour faire de la prévention routière : formatrice dans un centre de récupération de points le jour, elle se transforme en serial killeuse de chauffards la nuit',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/sRLz3-gcjgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ],

        [
            'Nom du film' => 'Donjons & Dragons : L\'Honneur des voleurs',
            'img' => 'do.jpg ',
            'date de sortie' => '12/04/2023',
            'réalisateur' =>   'Jonathan Goldstein (XII), John Francis Daley',
            'Durée' => '1h36',
            'genre' => 'Aventure, fantastique',
            'Syonpsis' =>  'Un voleur beau gosse, une bande d\'aventuriers improbables entreprennent un casse épique pour récupérer une relique perdue. Les choses tournent mal lorsqu\'ils s\'attirent les foudres des mauvaises personnes. Donjons &amp; Dragons : L\'honneur des voleurs transpose sur grand écran l\'univers riche et l\'esprit ludique du légendaire jeu de rôle à travers une aventure hilarante et pleine d\'action.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/eRcy28HBdmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ],

        [
            'Nom du film' => ' Je verrai toujours vos visages',
            'img' => ' je.jpg',
            'date de sortie' => '29/03/2023',
            'réalisateur' =>   'Jeanne Herry',
            'Durée' => '118',
            'genre' => 'Drame',
            'Syonpsis' =>  'Depuis 2014, en France, la Justice Restaurative propose à des personnes victimes et auteurs d\'infraction de dialoguer dans des dispositifs sécurisés, encadrés par des professionnels et des bénévoles comme Judith, Fanny ou Michel. Nassim, Issa, et Thomas, condamnés pour vols avec violence, Grégoire, Nawelle et Sabine, victimes de homejacking, de braquages et de vol à l\'arraché, mais aussi Chloé, victime de viols incestueux, s\'engagent tous dans des mesures de Justice Restaurative. Sur leur parcours, il y a de la colère et de l\'espoir, des silences et des mots, des alliances et des déchirements, des prises de conscience et de la con?ance retrouvée… Et au bout du chemin, parfois, la réparation...',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/YecNA3DW334" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ],

        [
            'Nom du film' => ' John Wick : Chapitre 4',
            'img' => ' jhon.jpg',
            'date de sortie' => '22/03/2023',
            'réalisateur' =>   'Chad Stahelski',
            'Durée' => '170',
            'genre' => 'Action',
            'Syonpsis' =>  'John Wick découvre un moyen de vaincre l\'organisation criminelle connue sous le nom de la Grande Table. Mais avant de gagner sa liberté, Il doit affronter un nouvel ennemi qui a tissé de puissantes alliances à travers le monde et qui transforme les vieux amis de John en ennemis',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/JjBZ2iEBcxM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
        ],

        [
            'Nom du film' => ' La Chambre des merveilles',
            'img' => ' la.jpg',
            'date de sortie' => '15/03/2023',
            'réalisateur' =>   'Lisa Azuelos',
            'Durée' => '98',
            'genre' => '
            Comédie dramatique',
            'Syonpsis' =>  'La vie toute tracée de Thelma prend un détour tragique lorsqu\'un accident plonge son fils Louis, 12 ans, dans le coma. Déterminée à le réveiller par tous les moyens, elle va faire le pari fou d\'accomplir une par une les « 10 choses à faire avant la fin du monde » qu\'il avait inscrites dans son journal intime, pour lui montrer tout ce que la vie a de magnifique à lui offrir. Mais ce voyage dans les rêves de son adolescent l\'emmènera bien plus loin que ce qu\'elle imaginait... jusqu\'à raviver son propre goût à la vie.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/xXBhqEbpt1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' La Marginale',
            'img' => ' mar.jpg',
            'date de sortie' => '03/05/2023',
            'réalisateur' =>   'Franck Cimière',
            'Durée' => 'Inconnu',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Michèle, SDF, vit à l\'aéroport d\'Orly, vaguant entre les différents halls. Elle croise réguilièrement Théo, jeune balayeur à l\'aéroport. Atteint d\'un handicap mental, il vit chez sa " Tatie " qui le surprotège. Un jour, Michèle fait une découverte des plus inattendues, qui la mène à convaincre Théo de la conduire dans sa voiture sans permis jusqu\'à Lisbonne pour retrouver son fils. Ils s\'embarquent alors dans un road trip plein de rebondissements sur les routes départementales.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/bj81-1CI6PE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => 'La Petite sirène',
            'img' => ' sirene.jpg',
            'date de sortie' => '24/05/2023',
            'réalisateur' =>   'Rob Marshall',
            'Durée' => 'Inconnu',
            'genre' => '
            Aventure, drame, Famille, fantastique',
            'Syonpsis' =>  'Ariel, la benjamine des filles du roi Triton, est une jeune sirène belle et fougueuse dotée d\'un tempérament d\'aventurière. Rebelle dans l\'âme, elle n\'a de cesse d\'être attirée par le monde qui existe par-delà les flots. Au détour de ses escapades à la surface, elle va tomber sous le charme du prince Eric. Alors qu\'il est interdit aux sirènes d\'interagir avec les humains, Ariel sent pourtant qu\'elle doit suivre son cœur. Elle conclut alors un accord avec Ursula, la terrible sorcière des mers, qui lui octroie le pouvoir de vivre sur la terre ferme, mais sans se douter que ce pacte met sa vie - et la couronne de son père - en danger...',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/J5VvzJmiqJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' La Plus belle pour aller danser',
            'img' => 'belle.jpg ',
            'date de sortie' => '19/04/2023',
            'réalisateur' =>   'Victoria Bedos',
            'Durée' => '1h36',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Marie-Luce Bison, 14 ans, est élevée par son père dans une joyeuse pension de famille pour seniors dont il est le directeur. C\'est bientôt la soirée déguisée de son nouveau collège : son père ne veut pas qu\'elle y aille ... et de toute façon, elle n\'est pas invitée. Mais poussée par Albert, son meilleur ami de 80 ans, Marie-Luce, s\'y incruste, habillée en homme. Ce soir-là, tout le monde la prend pour un garçon… un garçon que l\'on regarde et qui plait. Elle décide alors de s\'inventer un double masculin prénommé Léo pour vivre enfin sa vie d\'ado. Bien entendu, à la maison, la relation avec son père se complique.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/tinMJbzUWgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => 'La Vie pour de vrai',
            'img' => 'vie.jpg ',
            'date de sortie' => '19/04/2023',
            'réalisateur' =>   'Dany Boon',
            'Durée' => '110',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Tridan Lagache a passé sa vie au Club Med, à changer d\'amis tous les 8 jours. À 50 ans, il démissionne du club de vacances mexicain où il est né, bien décidé à retrouver, 42 ans plus tard, son grand amour d\'enfance, Violette. Il débarque à Paris, naïf et perdu mais heureux d\'être hébergé chez Louis, un demi-frère dont il ignorait l\'existence. Pour se débarrasser d\'un Tridan encombrant, Louis supplie une de ses conquêtes, Roxane, de se faire passer pour Violette que Tridan croit reconnaître au premier regard.
            ',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/jLJquRF4nNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => 'Le Royaume de Naya',
            'img' => 'naya.jpg ',
            'date de sortie' => '29/03/2023 ',
            'réalisateur' =>   'Oleh Malamuzh, Oleksandra Ruban',
            'Durée' => '99',
            'genre' => 'Aventure, Animation, Famille, fantastique',
            'Syonpsis' =>  'Par-delà les hautes Montagnes Noires se cache un royaume peuplé de créatures fantastiques. Depuis des siècles, elles protègent du monde des hommes une source de vie éternelle aux pouvoirs infinis. Jusqu\'au jour où Naya, la nouvelle élue de cette forêt enchantée, rencontre Lucas, un jeune humain égaré dans les montagnes. À l\'encontre des règles établies depuis des millénaires, ils vont se revoir, sans prendre garde aux conséquences qui s\'abattront sur le royaume. L\'aventure ne fait que commencer.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/dVHZ-q2aLmY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' Les Aventures de Ricky',
            'img' => ' aventure.jpg',
            'date de sortie' => '12/04/2023',
            'réalisateur' =>   'Mette Rank-Tange, Benjamin Quabeck',
            'Durée' => '85',
            'genre' => 'Aventure, Animation, Famille',
            'Syonpsis' =>  'Ricky, un jeune moineau intrépide adopté par une famille de cigognes, est embarqué dans une aventure épique au cœur de l\'Afrique. Accompagné de ses fidèles amis Olga la chouette pygmée et Kiki la perruche disco, il se lance à la poursuite d\'un joyau légendaire…',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/BETFXlWV9ac" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' Les Complices',
            'img' => ' comp.jpg',
            'date de sortie' => '12/04/2023',
            'réalisateur' =>   'Cécilia Rouaud',
            'Durée' => '98',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Max, un impitoyable tueur à gages de cinquante ans, découvre qu\'il a un problème : il s\'évanouit désormais devant la moindre goutte de sang. Son avenir dans la profession étant compromis, il va devoir se reconvertir... Mais pas si simple quand sa seule compétence professionnelle est de tuer des gens… Ils se fait aider par un couple de jeunes voisins, Karim et Stéphanie, qui n\'imaginent pas un instant à qui ils ont affaire... Max s\'attache, malgré lui, au jeune couple, jusqu\'à ce que son passé le rattrape...',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/LRUrVzW035w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' Les Gardiens de la Galaxie 3',
            'img' => 'gardien.jpg ',
            'date de sortie' => '03/05/2023',
            'réalisateur' =>   'James Gunn',
            'Durée' => 'Inconnu',
            'genre' => 'Action, fantastique, science-fiction',
            'Syonpsis' =>  'Notre bande de marginaux favorite a quelque peu changé. Peter Quill, qui pleure toujours la perte de Gamora, doit rassembler son équipe pour défendre l\'univers et protéger l\'un des siens. En cas d\'échec, cette mission pourrait bien marquer la fin des Gardiens tels que nous les connaissons.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/0RsvBSFm938" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' Les Trois Mousquetaires: D\'Artagnan',
            'img' => 'trois.jpg ',
            'date de sortie' => '05/04/2023',
            'réalisateur' =>   'Martin Bourboulon',
            'Durée' => '121',
            'genre' => 'Aventure, Historique',
            'Syonpsis' =>  'Du Louvre au Palais de Buckingham, des bas-fonds de Paris au siège de La Rochelle… dans un Royaume divisé par les guerres de religion et menacé d\'invasion par l\'Angleterre, une poignée d\'hommes et de femmes vont croiser leurs épées',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/a_OUHJziaoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => 'Mon chat et moi, la grande aventure de Rroû ',
            'img' => 'chat.jpg ',
            'date de sortie' => '05/04/2023',
            'réalisateur' =>   'Guillaume Maidatchevsky',
            'Durée' => '83',
            'genre' => 'Aventure, Famille',
            'Syonpsis' =>  'Rroû est un chaton vif et curieux qui découvre la vie sur les toits de Paris. Son destin bascule lorsque Clémence, dix-ans, l\'adopte et l\'emmène dans sa maison de campagne au cœur des montagnes. Débute alors une extraordinaire aventure pour Clémence et Rroû, qui vont grandir ensemble, croiser la route de la mystérieuse Madeleine et vivre une merveilleuse histoire qui va les transformer à tout jamais.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/k1OZ8bsMlMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> n',
        ],

        [
            'Nom du film' => 'Mon Crime',
            'img' => ' crime.jpg',
            'date de sortie' => '08/03/2023',
            'réalisateur' =>   'François Ozon',
            'Durée' => '102',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Dans les années 30 à Paris, Madeleine Verdier, jeune et jolie actrice sans le sou et sans talent, est accusée du meurtre d\'un célèbre producteur. Aidée de sa meilleure amie Pauline, jeune avocate au chômage, elle est acquittée pour légitime défense. Commence alors une nouvelle vie, faite de gloire et de succès, jusqu\'à ce que la vérité éclate au grand jour...',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/PaNkAPIUvpA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' Princes et princesses : le spectacle au cinéma',
            'img' => 'prince.jpg ',
            'date de sortie' => '05/04/2023',
            'réalisateur' =>   'Legrand Bemba-Debert',
            'Durée' => '1h',
            'genre' => 'Famille',
            'Syonpsis' =>  'Le film du spectacle Princes et Princesses, adapté des contes de Michel Ocelot, le papa de Kirikou. Un voyage dans un monde imaginaire, empreint de poésie. Quatre merveilleuses histoires où se croisent des fées, des reines, des princes et des princesses. La troupe de comédiens, musiciens, danseurs et chanteurs donne vie en quatre tableaux, faits de jeux d\'ombres chinoises et de lumière, à d\'envoûtants contes africain, japonais, égyptien et perse.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/zFwvu-iz4eU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' Sage-Homme',
            'img' => 'homme.jpg ',
            'date de sortie' => '15/03/2023',
            'réalisateur' =>   'Jennifer Devoldère',
            'Durée' => '1h30',
            'genre' => 'Comédie',
            'Syonpsis' =>  'Après avoir raté le concours d\'entrée en médecine, Léopold intègre par défaut l\'école des sage-femmes en cachant la vérité à son entourage. Alors qu\'il s\'engage sans conviction dans ce milieu exclusivement féminin, sa rencontre avec Nathalie, sage-femme d\'expérience au caractère passionné, va changer son regard sur cet univers fascinant et bouleverser ses certitudes.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/CWh6fsXY5xk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => 'Shazam! La Rage des Dieux ',
            'img' => 'saz.jpg ',
            'date de sortie' => '29/03/2023',
            'réalisateur' =>   'David F. Sandberg',
            'Durée' => '130 ',
            'genre' => 'Action, aventure, comédie, fantastique',
            'Syonpsis' =>  'Suite des aventures de Billy Batson, ado capable de devenir un super-héros adulte lorsqu\'il prononce le mot "Shazam !". Investis des pouvoirs des dieux, Billy Batson et ses copains apprennent encore à concilier leur vie d\'ados avec leurs responsabilités de super-héros dès lors qu\'ils se transforment en adultes. Mais quand les Filles de l\'Atlas, trio d\'anciennes déesses ivres de vengeance, débarquent sur Terre pour retrouver la magie qu\'on leur a volée il y a longtemps, Billy, alias Shazam, et sa famille s\'engagent dans une bataille destinée à conserver leurs superpouvoirs, à rester en vie et à sauver la planète. Mais une bande d\'adolescents peut-elle vraiment empêcher la destruction du monde ? Et, surtout, Billy en a-t-il seulement envie ... ?',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/sDm4nRYv7dI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => 'Spider-Man : Across The Spider-Verse ',
            'img' => ' acros.jpg',
            'date de sortie' => '31/05/2023',
            'réalisateur' =>   'Joaquim Dos Santos, Kemp Powers, Justin Thompson',
            'Durée' => 'Inconnu',
            'genre' => 'Action, aventure, Animation, fantastique',
            'Syonpsis' =>  'Après avoir retrouvé Gwen Stacy, Spider-Man, le sympathique héros originaire de Brooklyn, est catapulté à travers le Multivers, où il rencontre une équipe de Spider-Héros chargée d\'en protéger l\'existence. Mais lorsque les héros s\'opposent sur la façon de gérer une nouvelle menace, Miles se retrouve confronté à eux et doit redéfinir ce que signifie être un héros afin de sauver les personnes qu\'il aime le plus.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/GtJX3gJInig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' Super Mario Bros, le film',
            'img' => 'mario.jpg ',
            'date de sortie' => '05/04/2023',
            'réalisateur' =>   'Aaron Horvath, Michael Jelenic',
            'Durée' => '92 ',
            'genre' => 'Action, aventure, Animation, comédie, Famille',
            'Syonpsis' =>  'Alors qu\'ils tentent de réparer une canalisation souterraine, Mario et son frère Luigi, tous deux plombiers, se retrouvent plongés dans un nouvel univers féerique à travers un mystérieux conduit. Mais lorsque les deux frères sont séparés, Mario s\'engage dans une aventure trépidante pour retrouver Luigi. Dans sa quête, il peut compter sur l\'aide du champignon Toad, habitant du Royaume Champignon, et les conseils avisés, en matière de techniques de combat, de la Princesse Peach, guerrière déterminée à la tête du Royaume. C\'est ainsi que Mario réussit à mobiliser ses propres forces pour aller au bout de sa mission.
            ',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/732LtFVX6eU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ],

        [
            'Nom du film' => ' Sur les chemins noirs',
            'img' => 'noir.jpg ',
            'date de sortie' => '22/03/2023',
            'réalisateur' =>   'Denis Imbert',
            'Durée' => '95 ',
            'genre' => 'Drame',
            'Syonpsis' =>  'Librement inspiré de Sur les chemins noirs de Sylvain Tesson (2016). Un soir d\'ivresse, Pierre, écrivain explorateur, fait une chute de plusieurs étages. Cet accident le plonge dans un coma profond. Sur son lit d\'hôpital, revenu à la vie, il se fait la promesse de traverser la France à pied du Mercantour au Cotentin. Un voyage unique et hors du temps à la rencontre de l\'hyper-ruralité, de la beauté de la France et de la renaissance de soi.',
            'Bande-annonce' => '<iframe  src="https://www.youtube.com/embed/mOVf8g_XhwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]
    ];

    ?>
    <section>
        <?php
          if ($_GET['film']== 'genre') {
            echo '<ul>
            <a href="?film=genre&genres"><li>Ludovic Bernard</li></a>
            <a href="?film=genre&genres"><li>Scott Beck</li></a>
            <a href="?film=genre&genres"><li>Bryan Woods</li></a>
            <a href="?film=genre&genres"><li>François Pirot</li></a>
            <a href="?film=genre&genres"><li>Romain Quirot</li></a>
            <a href="?film=genre&genres"><li>Jonathan Barré</li></a>
            <a href="?film=genre&genres"><li>Jonathan Goldstein (XII)</li></a>
            <a href="?film=genre&genres"><li> John Francis Daley</li></a>
            <a href="?film=genre&genres"><li>Jeanne Herry</li></a>
            <a href="?film=genre&genres"><li>Chad Stahelski</li></a>
            <a href="?film=genre&genres"><li>Lisa Azuelos</li></a>
            <a href="?film=genre&genres"><li>Franck Cimière</li></a>
            <a href="?film=genre&genres"><li>Rob Marshall</li></a>
            <a href="?film=genre&genres"><li>Victoria Bedos</li></a>
            <a href="?film=genre&genres"><li>Dany Boon</li></a>
            <a href="?film=genre&genres"><li>Oleh Malamuzh</li></a>
            <a href="?film=genre&genres"><li> Oleksandra Ruban</li></a>
            <a href="?film=genre&genres"><li>Mette Rank-Tange</li></a>
            <a href="?film=genre&genres"><li> Benjamin Quabeck</li></a>
            <a href="?film=genre&genres"><li>Cécilia Rouaud</li></a>
            <a href="?film=genre&genres"><li>James Gunn</li></a>
            <a href="?film=genre&genres"><li>Martin Bourboulon</li></a>
            <a href="?film=genre&genres"><li></li></a>
            </ul>
            ';
            
           };
    

        foreach ($tab as $film => $value) {

            echo '<div class="cards">
            <h1 class="title">Film: ' . $value["Nom du film"] . ' </h1>
            <div class=" img_cards"><img src="' . $value["img"] . '"alt="#"></div>
            <p class="date">date de sortie: ' . $value["date de sortie"] . '</p>
            <p class="realisateur">réalisateur: ' . $value["réalisateur"] . '</p>
            <p class="duree">Durée:' . $value["Durée"] . '</p>
            <p class="genre">Genre:' . $value["genre"] . '</p>
            <p class="synopsis">Synopsis: ' . $value["Syonpsis"] . '</p> 
            <p class="bandeannonce"> ' . $value["Bande-annonce"] . '</p>
            </div>';
        };



        
       
     


        ?>





    





    </section>




</body>

</html>