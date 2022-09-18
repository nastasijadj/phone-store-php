<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Phone Store</title>
</head>

<body>


    <div class="form-div">

        <?php

        require '../DB/DBConnection.php';

        $idTelefon = $_GET['id'];

        $SQL = "select * from telefon where id=" . $idTelefon;
        $DATA = $connection->query($SQL);

        $telefon = $DATA->fetch_object();
        ?>



        <form method="post" id="add-forma">

            <div class="form-input">
                <label class="mb-1">Model</label>
                <input type="text" class="form-control" name="model" value="<?php echo $telefon->model; ?>">
            </div>

            <div class="form-input">
                <label class="mb-1">Dijagonala</label>
                <input type="text" class="form-control" name="dijagonala" value="<?php echo $telefon->dijagonala; ?>">
            </div>

            <div class="form-input">
                <label class="mb-1">RAM Memorija</label>
                <input type="text" class="form-control" name="ram" value="<?php echo $telefon->ram; ?>">
            </div>

            <div class="form-input">
                <label class="mb-1">Interna Memorija</label>
                <input type="text" class="form-control" name="interna" value="<?php echo $telefon->interna; ?>">
            </div>

            <div class="form-input">
                <label class="mb-1">Cena</label>
                <input type="number" class="form-control" name="cena" value="<?php echo $telefon->cena; ?>">
            </div>

            <?php
            require '../OOP/Telefon.php';
            ?>

            <div class="form-input">
                <label class="mb-1">Proizvođač</label>
                <select class="form-select" name="proizvodjac">
                    <?php
                    $SQL = "select * from proizvodjac";
                    $DATA = $connection->query($SQL);

                    while ($proizvodjac = $DATA->fetch_object()) {
                    ?>
                        <option value="<?php echo $proizvodjac->id; ?>"><?php echo $proizvodjac->naziv ?></option>
                    <?php } ?>
                </select>
            </div>


            <button type="submit" name="izmeni_telefon_btn" class="btn btn-primary" id="izmeni_telefon_button">Izmeni telefon</button>

        </form>

        <?php

        $telefon = new Telefon();

        if (isset($_POST['izmeni_telefon_btn'])) {
            if ($telefon->izmeniTelefon($_GET['id'], $_POST['model'], $_POST['dijagonala'], $_POST['ram'], $_POST['interna'], $_POST['cena'], $_POST['proizvodjac']))
                header('Location: ../index.php');
        }

        ?>
    </div>

</body>

</html>