<?php

require "Models/Student.php";

$Students = Student::getALL();


// echo "<pre>";
// print_r ($Students);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> <!-- CDN do fontAwasome -->
    
</head>
<body>

    <?php require "./partials/header.html"; ?>

    <main class="py-5" >

        <?php foreach($Students as $Student){ ?>
        <div class="card w-50 mx-auto mt-5">

            <div class="card-header">

                <?= $Student['name']?>

            </div>

            <div class="card-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi in nemo nobis eius cum ducimus porro quas corporis consectetur minima! Optio laborum non veritatis odit dicta aliquam quasi iusto vero?
            </div>

            <div class="card-footer d-flex align-items-center justify-content-end">
                <a class="btn btn-warning" href="https://wa.me/<?= $Student['telphone']?>">
                    <i class="fab fa-whatsapp" style="font-size:30px"></i> 
                </a>
            </div>

        </div>


        <?php };?>
            
    </main>





    
<section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</section>
</body>
</html>