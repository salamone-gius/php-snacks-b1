<?php
    $matches = [
        [
            'home' => 'Olimpia Milano',
            'guests' => 'Virtus Bologna',
            'homeScore' => 102,
            'guestScore' => 60,
        ],
        [
            'home' => 'Pall. Varese',
            'guests' => 'Reyer Venezia',
            'homeScore' => 44,
            'guestScore' => 86,
        ],
        [
            'home' => 'Universo Treviso',
            'guests' => 'Vanoli Cremona',
            'homeScore' => 39,
            'guestScore' => 96,
        ],
        [
            'home' => 'Dinamo Sassari',
            'guests' => 'Napoli Basket',
            'homeScore' => 91,
            'guestScore' => 73,
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snacks-b1</title>
    </head>
    <body>
        <ul>
            <h1 style="text-align: center;">Snack 1 - Risultati Basket</h1>
            <?php for ($i = 0; $i < count($matches); $i++) { ?>
                <li style="margin-bottom: 20px;"><?php echo "{$matches[$i]['home']} - {$matches[$i]['guests']} | {$matches[$i]['homeScore']}-{$matches[$i]['guestScore']}"; ?></li>
            <?php } ?>

        </ul>
    </body>
</html>