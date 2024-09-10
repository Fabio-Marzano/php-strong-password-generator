<?php
    //CONTROLLO CHE SIA STATA INSERITA LA FORM//
    if(isset($_GET['length']) && $_GET['length'] != ''){
       //VERIFICO SE IL VALORE INSERITO E' NUMERICO//
        if(is_numeric($_GET['length'])) {
            $message = "Inserisci un valore numerico";
        }
        //VERIFICO SE IL VALORE INSERITO E' INFERIORE A 6//
        if($_GET['length'] < 6) {
            $message = "Inserire un valore numerico maggiore o uguale a 6. Rendi la tua password sicura";
        }
        //CREO LA STRINGA PER RECUPERARE I CARATTERI//
        $baseString = 'abcdefghijklmnopqrstuvwxyz'.strtoupper('abcdefghijklmnopqrstuvwxyz').'1234567890';
        //DEFINISCO LA STRINGA PASSWORD//
        $password = '';

        while(strlen($password) < $_GET['length']){
            //GENERO UN VALORE RANDOM COMPRESO TRA 0 E IL VALORE STRINGA//
            $randomIndex =rand(0, strlen($baseString) - 1);

            $password.= $baseString[$randomIndex];
        }
        var_dump(strlen($baseString));
        

        var_dump($password);
    }
?>

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
                            <div class="col-12 col-md-6">
                                <label for="" class="cntrol-label">Inserisci la lunghezza della password</label>
                                <input type="number" min="6" name="length" id="length" class="form-control form-control-sm" placeholder="Lunghezza password">
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