<?php

$links = [
    'L\'astrologie sur Wikipedia' => 'https://fr.wikipedia.org/wiki/Astrologie',
    'La bible de l\'astrologie sur Amazon' => 'https://www.amazon.fr/Bible-lAstrologie-Judy-Hall/dp/281320238X/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=bible+astrologie&qid=1599851245&sr=8-1',
    'Astroo, le site pour calculer votre propre thème astral' => 'http://astroo.com/',
];

$signs = [
    [
        'name' => 'Bélier',
        'description' => 'Votre code sera truffé d\'erreurs cette semaine. Mais vous gardez confiance: l\'ordinateur va finir par céder.',
        'image' => 'images/zodiac/012-aries.svg',
        'startDate' => '21 mars',
        'endDate' => '19 avril',
    ],
    [
        'name' => 'Taureau',
        'description' => 'Vous ne croyez pas en l\'astrologie de toute façon, donc si vous lisez ça, c\'est que vous n\'êtes pas Taureau, mais plutôt Balance.',
        'image' => 'images/zodiac/011-taurus.svg',
        'startDate' => '20 avril',
        'endDate' => '20 mai',
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2i horoscope</title>

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <div id="container">
        <header>
            <div class="center-container">
                <h1>
                    M2i horoscope
                    <hr class="separator" />
                </h1>
                <p id="subtitle">
                    Apprentis développeurs, cet horoscope est fait pour vous! Vous codez, vous codez, mais on n'est jamais à l'abri des surprises, bonnes ou mauvaises, que nous réserve le destin&hellip; Alors, ne vous laissez pas prendre au dépourvu! Entre deux <em>pull requests</em>, prenez le temps de lire ces prévisions réalisés par notre spécialiste! 
                </p>
            </div>
        </header>

        <main>
            <section id="horoscope">
                <h2>Horoscope du jour</h2>
                <ol id="sign-grid">
                    <?php foreach ($signs as $sign): ?>
                    <li class="sign">
                        <img class="sign-icon" src="<?= $sign['image'] ?>" alt="Icône <?= $sign['name'] ?>" />
                        <h3 class="sign-name"><?= $sign['name'] ?></h3>
                        <div class="sign-date"><?= $sign['startDate'] ?> - <?= $sign['endDate'] ?></div>
                        <p class="sign-description">
                            <?= $sign['description'] ?>
                        </p>
                    </li>
                    <?php endforeach; ?>
                </ol>
            </section>

            <section id="resources">
                <h2>Ressources</h2>
                <ul>
                    <?php foreach ($links as $name => $link): ?>
                    <li>
                        <a target="_blank" href="<?= $link ?>">
                            <?= $name ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </main>

        <footer>
            <div id="copyright" class="center-container">
                Copyright &copy; DWWM 09/2020
            </div>
        </footer>
    </div>
</body>
</html>
