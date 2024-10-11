<?php 
    require_once __DIR__ . "/classes/Player.php";
    require_once __DIR__ . "/classes/Rock.php";


    $giocatrice = new Player("Giocatrice Iperpro", "Giocatrice professionale di lol");
    $giocatrice->position_x = 512315.22;
    $giocatrice->position_y = 111234.22;
    $giocatrice->position_rotation = 102;
    $roccioneMalefico = new Rock(1123, "Roccia di dimensioni importanti piuttosto banale", $giocatrice->position_x + 1, $giocatrice->position_y - 1, $giocatrice->position_rotation + 180);

    var_dump($giocatrice);
    var_dump($roccioneMalefico);

    $giocatrice->position_x = 224.33;
    var_dump($giocatrice);
    var_dump(get_declared_traits());
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8 OOP Simple Game</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <main class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="fw-bold text-center p-4">
                    PHP 8 OOP Simple Game
                </h1>
            </div>
            <div class="col-6 card" >
                <div class="card-body">
                    <p>
                        <?php                             
                            try{ // # se il codice che inserisco cui dovesse lanciare
                                $roccioneMalefico->setPositionRotation(-12);
                            } catch (Exception $eccezione){ // %una eccezione del tipo che ho scritto qui allora
                                echo $eccezione->getMessage();
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>