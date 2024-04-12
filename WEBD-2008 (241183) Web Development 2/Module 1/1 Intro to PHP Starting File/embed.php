<?php
    $animals = ["cat", "dog", "human", "gorilla", "ocelot"];

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Animals</title>
    </head>
    <body>
        <h1>Animals in  a Zone of Danger</h1>
        <ol>
            <?php foreach($animals as $animal): ?>
            <li><?= $animal ?></li> <!-- short echo, using alternative syntax -->
            <?php endforeach ?>
        </ol>
        
    </body>
    </html>