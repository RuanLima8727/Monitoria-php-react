<?php

require "Models/Student.php";

$Total = Student::getTotalStudents();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
</head>
<body>

<?php require "./partials/header.html"; ?>

<main style="height:90vh; background-color:#ccc; padding-top:5vh" >

    <div class="card d-flex align-items-center mx-auto" style="width:350px; height: 80vh">
        <canvas id="myChart" width="200" height="200" class="my-auto">

        </canvas>
    </div>
   <section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"> //CDN CHART.JS
        
        </script>
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');var myChart = new Chart(ctx, {type: 'pie',data: {labels: ['Monitores', 'Alunos'],datasets: [{data: [2, <?= ($Total[0]['total_students']);?>],backgroundColor: ['red','yellow']}]}});
        </script>
    </section>
</main>


<section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</section>
</body>
</html>