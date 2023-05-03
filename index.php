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
    <section class="bg-dark" id="form-page">
        <div class="container">
            <div class="row pt-5">
                <div>
                    <h2 class="text-info text-center">Compila il form</h2>
                </div>
                <div class="card mt-5 p-4">
                <form action="results.php" method="GET">
                    <div class="mb-3">
                        <label for="text" class="form-label">Testo</label>
                        <input type="text" name="text" id="text" class="form-control">
                        <div id="emailHelp" class="form-text">Inserisci qui il tuo paragrafo</div>
                    </div>
                    <div class="mb-3">
                        <label for="censured-text" class="form-label">Testo da censurare</label>
                        <input type="text" name="censured-text" id="censured-text" class="form-control">
                        <div id="emailHelp" class="form-text">Questa parola verra censurata</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ora</button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    
</body>
</html>