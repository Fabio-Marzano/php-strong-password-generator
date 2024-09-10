<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>   
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="form-container">
                    <form action ="./index.php" method="get">
                        <div class="row gy-3">
                            <div class="col-4">
                                <label for="" class="cntrol-label">Inserisci la lunghezza della password</label>
                                <input type="number" name="length" id="length" class="form-control form-control-sm" placeholder="Lunghezza password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-sm btn-primary">Genera</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>