<?php
include_once "functions-type-hinting.php";
include_once "functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Learning</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<header class="bg-light py-4 text-center">
    <h1>PHP - Learning</h1>
</header>
<div class="card ">
    <div class="card-header bg-dark text-white">
        <h3>Functions - <span class="fs-6">Type Hinting</span></h3>
    </div>
    <div class="card-body p-0">
        <h6 class="bg-success text-white p-2 ">Result of Factorial Type hinting:</h6>
        <?php
           $x =  4;
           echo "factorial of { $x } is ".factorial($x) ;
        ?>
        <h6 class="bg-success text-white p-2 ">Array Type :</h6>
        <?php
        $models = array(
                array('Toyota', 12, 44),
                array('BMW', 11, 54),
        );
        calNumMilesOnFullTank($models) ;
        ?>
        <h6 class="bg-success text-white p-2">Unlimited Arguments Pass :</h6>
        <?php
//         $n = [2,4,5,6];
       echo  "Sum Result is: ".sum(29,2,29,80,398,366) ;
//       echo  "Sum Result is: ".sum($n) ;
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
