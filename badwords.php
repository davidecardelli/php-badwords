<?php 
$badword = trim($_GET['badword']);
$paragraph = trim($_GET['paragraph']);
$paragraph_length = strlen($paragraph);
$censored_paragraph = str_replace($badword, '***', $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITOLO -->
    <title>Boolean - Davide Cardelli - Classe 83</title>
    <!-- INSERISCI FAVICON QUI -->
    <link rel="icon" type="image/ico" href="img/logo.png">

    <!-- COLLEGAMENTO FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- COLLEGAMENTO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- COLLEGAMENTO ICONE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- COLLEGAMENTO AL MIO FILE CSS -->
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- COLLEGAMENTO AD AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.3/axios.min.js"
        integrity="sha512-L4lHq2JI/GoKsERT8KYa72iCwfSrKYWEyaBxzJeeITM9Lub5vlTj8tufqYk056exhjo2QDEipJrg6zen/DDtoQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- COLLEGAMENTO A VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- COLLEGAMENTO AL MIO FILE JAVASCRIPT -->
    <script defer src="script.js"></script>

</head>

<body class="bg-secondary">
    <div class="container">
    <div class="row">
            <div class="col-6 text-center mt-5">
                <div class="card">
                    <h1 class="mb-2">Paragrafo</h1>
                    <p class="mb-2"><?= ucfirst($paragraph) ?></p>
                    <p>Il paragrafo ?? lungo <b><?= $paragraph_length ?></b> caratteri</p>
                </div>
            </div>
            <div class="col-6 text-center mt-5">
                <div class="card">
                    <h1 class="mb-2">Paragrafo con censura</h1>
                    <p class="mb-2"><?= ucfirst($censored_paragraph) ?></p>
                    <p>Il paragrafo ?? lungo <b><?= $censored_paragraph_length ?></b> caratteri</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>