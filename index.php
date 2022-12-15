<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap CDN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <header class="container text-center pt-5">
        <h1>Strong Password Generator</h1>
        <h3 class="text-white">Genera una password sicura</h3>
    </header>
    <main class="container mt-5">
        <div class="parameters px-3 py-4 rounded">
        </div>
        <div class="input rounded mt-3 p-4">
            <form class="d-flex"  action="index.php" method="GET">
                <div class="col-left">
                    <div class="mb-3">Lunghezza password: </div>
                    <div>Consenti ripetizioni di uno o più caratteri: </div>

                    <button class="btn btn-primary" type="submit">Invia</button>
                    <button class="btn btn-secondary" type="reset">Annulla</button>
                </div>
                <div class="col-right">
                    <div class="password mb-3">
                        <input type="number" name="pass-leng" id="" min="3" required>
                    </div>
                    <div class="radio-input">
                        <div>
                            <input type="radio" name="repetition" id="repetition-true" value="true" checked>
                            <label for="repetition-true">Sì</label>
                        </div>
                        <div>
                            <input type="radio" name="repetition" id="repetition-false" value="false">
                            <label for="repetition-false">No</label>
                        </div>
                    </div>
                    <div class="check-input mt-5">
                        <div>
                            <input type="checkbox" name="char-type-letters" id="char-type-letters" value="true" checked>
                            <label for="char-type-letters">Lettere</label>
                        </div>
                        <div>
                            <input type="checkbox" name="char-type-numbers" id="char-type-numbers" value="true" checked>
                            <label for="char-type-numbers">Numeri</label>
                        </div>
                        <div>
                            <input type="checkbox" name="char-type-symbols" id="char-type-symbols" value="true" checked>
                            <label for="char-type-symbols">Simboli</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!-- Botstrap CDN js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- /Botstrap CDN js -->
</body>
</html>