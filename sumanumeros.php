<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMA DE DOS NUMEROS</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url(fon2.webp);
    }
</style>



<body>
    <h1 class="text-center">suma de dos numeros</h1>

    <br><br><br>

    <div class="row text-center">
        <div class="col">

        </div>

        <div class="col">



            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                SUMA DE DOS NUMEROS
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">SUMA</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">



                            <form class="p-5" action="sumanumeros.php" method="post">

                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">INGRESE EL NUMERO 1</label>
                                    <input type="number" name="num1" id="disabledTextInput" class="form-control" placeholder="Numero 1">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">INGRESE EL NUMERO 2</label>
                                    <input type="number" name="num2" id="disabledTextInput" class="form-control" placeholder="Numero 2">
                                </div>


                                <button type="submit" class="btn btn-primary">SUMAR</button>

                            </form>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="col"></div>






    </div>




    <?php



    if (isset($_POST["num1"]) && isset($_POST["num2"])) {

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $sum = $num1 + $num2;
        echo " <div class='alert alert-success' role='alert'>la suma de los numeros $num1 + $num2 es : $sum</div>";


    }else{
        echo "";
    }



    ?>



</body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>