<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
    [
        "nome" => "Francesco",
        "cognome" => "Totti",
        "voti" => [10, 8, 9, 10, 7, 6]
    ],
    [
        "nome" => "Gabriel Omar",
        "cognome" => "Batistuta",
        "voti" => [6, 8, 9, 4, 7, 9]
    ],
    [
        "nome" => "Vincenzo",
        "cognome" => "Montella",
        "voti" => [4, 5, 8, 2, 10]
    ]
];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($students as $student) { ?>
        <ul>
            <li><?php echo "Name: " . $student["nome"] ?></li>
            <li><?php echo "Cognome: " . $student["cognome"] ?></li>
            <li><?php echo "Media: " . array_sum($student["voti"]); ?></li>
        </ul>
    <?php } ?>
</body>
</html>
