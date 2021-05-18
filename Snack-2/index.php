<?php
    
    $name= $_GET['name'];
    $email= $_GET['email'];
    $age= $_GET['age'];

    $risultato= 'Accesso Riuscito';

    if (strlen($name) <= 4 || strpos($email, '@') === false || strpos($email, '.') === false || is_numeric($age) == false){
        $risultato = 'Accesso negato';
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snack2</title>
</head>
<body>

    <h1> <?php echo $risultato  ?> </h1>      

</body>
</html>