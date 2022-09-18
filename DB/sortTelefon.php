      <?php
        require 'DBConnection.php';

        $sortiranjeKolona = $_POST['sortiranjeKolona'];
        $ascDesc = $_POST['ascendingDescending'];

        $SQL = "select telefon.id, telefon.model, telefon.dijagonala, telefon.ram, telefon.interna, telefon.cena, proizvodjac.naziv 
            from telefon join proizvodjac on telefon.proizvodjac_id = proizvodjac.id ORDER BY " . $sortiranjeKolona . " " . $ascDesc . "";

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