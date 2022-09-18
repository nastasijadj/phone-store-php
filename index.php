<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Phone Store</title>
</head>

<body>

    <div class="index-div">

        <h1 id="n-psp">PHONE STORE PLUS</h1>

        <!-- Pretraga telefona -->
        <input type="text" class="form-control" id="pretraga-txt" placeholder="Pretraga telefona po nazivu modela ili proizvođača...">


        <a href="FORMS/add.php"><button class="btn btn-primary" id="novi-btn">NOVI TELEFON</button></a>

        <!-- Prikaz telefona -->
        <div class="telefoni-prikaz">

            <?php
            require 'DB/DBConnection.php';

            $SQL = "select telefon.id, telefon.model, telefon.dijagonala, telefon.ram, telefon.interna, telefon.cena, proizvodjac.naziv 
            from telefon join proizvodjac on telefon.proizvodjac_id = proizvodjac.id";

            $DATA = $connection->query($SQL);
            
            while ($telefon = $DATA->fetch_object()) {
            ?>
                <div class="d-telefon">
                    <h2 class="text-center text-primary"><?php echo $telefon->naziv . " " . $telefon->model ?></h2>
                    <h3 class="text-center text-danger"><?php echo $telefon->cena ?> EUR</h3>
                    <img id="slika-tel" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsiAkfek7FvnCVFfh_JfN9oNTk1Cu7lMPeyA&usqp=CAU">
                    <h5 class="text-center">RAM: <?php echo $telefon->ram ?></h5>
                    <h5 class="text-center">Interna memorija: <?php echo $telefon->interna ?></h5>
                    <h5 class="text-center">Dijagonala: <?php echo $telefon->dijagonala ?></h5>
                </div>
            <?php
            }
            ?>
        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="JAVASCRIPT/JS.js"></script>
</body>

</html>