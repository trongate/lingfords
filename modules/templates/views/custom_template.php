<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= BASE_URL ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/trongate.css">
    <link rel="stylesheet" href="css/lingfords.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-lg">
            <div>
                <div>
                    <div><?= anchor(BASE_URL, 'Homepage') ?></div>
                    <div><?= anchor('#', 'Customer Login') ?></div>
                </div>
                <div>
                    <div>LOGO HERE</div>
                    <div>Watches of Distinction</div>
                </div>
                <div>
                    <div class="sm">Your shopping basket is empty</div>
                    <div><?= anchor('#', 'View Basket', array('class' => 'button')) ?></div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><?= anchor('#', 'Dress Watches') ?></li>
                    <li><?= anchor('#', 'Dive Watches') ?></li>
                    <li><?= anchor('#', 'Chronographs') ?></li>
                    <li><?= anchor('#', 'Sports Watches') ?></li>
                    <li><?= anchor('#', 'Pilot Watches') ?></li>
                    <li><?= anchor('#', 'Field Watches') ?></li>
                </ul>
            </nav>
        </div>
        <div class="header-sm">Small header</div>
    </header>
    <main><?= display($data) ?></main>
    <footer>Footer to go here.</footer>
</body>
</html>