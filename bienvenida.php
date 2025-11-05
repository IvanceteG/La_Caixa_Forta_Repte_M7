<?php
// Rebem les dades del formulari
$nom = $_POST['nom'] ?? '';
$cognoms = $_POST['cognoms'] ?? '';

// Array multidimensional amb la informació de cada casa
$casas_info = [
    "Gryffindor" => [
        "background_color" => "#740001",
        "text_color" => "#FFD700",
        "welcome_message" => "Coratge, valor i determinació. Benvingut a Gryffindor!",
        "message_background" => "#D3A625",
        "image" => "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/946397ca-37b3-4eed-9a27-6182d454e626/de0kjre-c20de09d-c0b8-4c67-b4b1-292217d2db93.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiIvZi85NDYzOTdjYS0zN2IzLTRlZWQtOWEyNy02MTgyZDQ1NGU2MjYvZGUwa2pyZS1jMjBkZTA5ZC1jMGI4LTRjNjctYjRiMS0yOTIyMTdkMmRiOTMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.nxxQwm6TEQ44ZyPvhQwTkNCll_ZfPvrNjUrogfFINow"
    ],
    "Hufflepuff" => [
        "background_color" => "#FFDB00",
        "text_color" => "#60605B",
        "welcome_message" => "Lleialtat, paciència i treball dur. Benvingut a Hufflepuff!",
        "message_background" => "#EEE117",
        "image" => "https://static.wikia.nocookie.net/the-truth-behind-aurora/images/0/06/Hufflepuff_ClearBG.png/revision/latest?cb=20210920233120"
    ],
    "Ravenclaw" => [
        "background_color" => "#0E1A40",
        "text_color" => "#946B2D",
        "welcome_message" => "Intel·ligència, creativitat i saviesa. Benvingut a Ravenclaw!",
        "message_background" => "#5D5D5D",
        "image" => "https://static.wikia.nocookie.net/an5dcombinedsharedcrossovers/images/7/71/Ravenclaw_ClearBG.png/revision/latest?cb=20230709043635"
    ],
    "Slytherin" => [
        "background_color" => "#1A472A",
        "text_color" => "#AAAAAA",
        "welcome_message" => "Ambició, astúcia i lideratge. Benvingut a Slytherin!",
        "message_background" => "#5D5D5D",
        "image" => "https://static.wikia.nocookie.net/harrypotter/images/0/00/Slytherin_ClearBG.png/revision/latest/thumbnail/width/360/height/360?cb=20161020182557"
    ]
];

// Seleccionem una casa aleatòriament
$casas = array_keys($casas_info);
$casa_seleccionada = $casas[array_rand($casas)];

// Agafem les dades de la casa seleccionada
$info = $casas_info[$casa_seleccionada];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Benvingut a la teva casa de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: <?= $info['background_color'] ?>;
        color: <?= $info['text_color'] ?>;
        text-align: center;
        padding: 40px;
    }
    .welcome-message {
        background-color: <?= $info['message_background'] ?>;
        border-radius: 15px;
        padding: 20px;
        margin-top: 20px;
        color: <?= $info['text_color'] ?>;
        display: inline-block;
    }
    img {
        width: 200px;
        margin-top: 20px;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Benvingut a <?= $casa_seleccionada ?>, <?= htmlspecialchars($nom) ?> <?= htmlspecialchars($cognoms) ?>!</h1>
        <div class="welcome-message">
            <p><?= $info['welcome_message'] ?></p>
        </div>
        <img src="<?= $info['image'] ?>" alt="Escut de <?= $casa_seleccionada ?>">
    </div>
</body>
</html>