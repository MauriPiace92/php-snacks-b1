<?php 
    
    $matches = [

        [
            'sqdCasa'=>'De\' Longhi Treviso Basket',
            'sqdOspite' => 'Dolomiti Energia Trentino',
            'puntiCasa' => 84,
            'puntiOspite'=> 80
        ],
        [
            'sqdCasa'=>'Openjobmetis Varese',
            'sqdOspite' => 'Germani Brescia',
            'puntiCasa' => 94,
            'puntiOspite'=> 89
        ],
        [
            'sqdCasa'=>'UNAHOTELS Reggio Emilia',
            'sqdOspite' => 'A|X Armani Exchange Milano',
            'puntiCasa' => 71,
            'puntiOspite'=> 87
        ],
        [
            'sqdCasa'=>'Allianz Pallacanestro Trieste',
            'sqdOspite' => 'Vanoli Basket Cremona',
            'puntiCasa' => 102,
            'puntiOspite'=> 77
        ],
        [
            'sqdCasa'=>'Carpegna Prosciutto Pesaro',
            'sqdOspite' => 'Banco di Sardegna Sassari',
            'puntiCasa' => 85,
            'puntiOspite'=> 95
        ],
        [
            'sqdCasa'=>'Virtus Segafredo Bologna',
            'sqdOspite' => 'Acqua S.Bernardo Cantù',
            'puntiCasa' => 84,
            'puntiOspite'=> 65
        ],
        [
            'sqdCasa'=>'Umana Reyer Venezia',
            'sqdOspite' => 'Happy Casa Brindisi',
            'puntiCasa' => 75,
            'puntiOspite'=> 67
        ]

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snack-1</title>
</head>
<body>

        <h1>Risultati Partite:</h1>
        <ul>
            <?php for($i=0; $i < count($matches);$i++) { ?>
            <?php $match = $matches[$i]; ?>
            
            <li>
                <?php echo $match['sqdCasa'] ?> - <?php echo $match['sqdOspite'] ?> | <?php echo $match['puntiCasa'] ?> - <?php echo $match['puntiOspite'] ?>
            </li>
            <?php } ?>
        </ul>
    
</body>
</html>