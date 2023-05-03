<?php 

$text = ucfirst($_GET['text']);
$censuredText = $_GET['censured-text'];
$lenghtText = strlen($censuredText);
$replace = str_repeat('*', strlen($censuredText));
// $replace = str_replace($censuredText , '***', $censuredText );

 
if((isset($text) && empty($text)) || (isset($censuredText) && empty($censuredText))){
    $error = 'Campi non validi';
    
} else{
    $error = 'Ecco o tuoi dati';
};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>

     <section class="bg-dark" id="result-page">
        <div class="container">
            <div class="row pt-5">
                <div class="card mt-5 p-4">
                    <div>
                        <h2 class="text-center text-info"><?php echo $error ?></h2>
                    </div>
                    <div class="d-flex align-items-center pt-2">
                        <h6 class="m-0">Il tuo testo:</h6>
                        <p class="m-0 ps-3"><?php echo $text ?></p>
                    </div>
                    <div class="d-flex align-items-center pt-2">
                        <h6 class="m-0">Il tuo testo PRIMA:</h6>
                        <p class="m-0 ps-3"><?php echo $censuredText ?></p>
                        <div class="d-flex align-items-center">
                            <h6 class="m-0 ps-3">Lenght:</h6>
                            <p class="m-0 ps-2"><?php echo $lenghtText ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-2">
                        <h6 class="m-0">Il tuo testo DOPO:</h6>
                        <p class="m-0 ps-3"><?php echo $replace ?></p>
                    </div>
                 
                </div>
            </div>
        </div>
    </section>
</body>
</html>