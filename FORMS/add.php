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

        <form method="post" id="add-forma">

            <div class="form-input">
                <label class="mb-1">Model</label>
                <input type="text" class="form-control" name="model">
            </div>

            <div class="form-input">
                <label class="mb-1">Dijagonala</label>
                <input type="text" class="form-control" name="dijagonala">
            </div>

            <div class="form-input">
                <label class="mb-1">RAM Memorija</label>
                <input type="text" class="form-control" name="ram">
            </div>

            <div class="form-input">
                <label class="mb-1">Interna Memorija</label>
                <input type="text" class="form-control" name="interna">
            </div>

            <div class="form-input">
                <label class="mb-1">Cena</label>
                <input type="number" class="form-control" name="cena">
            </div>

            <div class="form-input">
                <label class="mb-1">Proizvođač</label>
                <select class="form-select" name="proizvodjac">
                </select>
            </div>


            <button type="submit" name="dodaj_telefon_btn" class="btn btn-primary" id="dodaj_telefon_button">Dodaj telefon</button>

        </form>

    </div>

</body>

</html>