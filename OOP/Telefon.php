<?php

class Telefon
{
    public $id;
    public $model;
    public $dijagonala;
    public $ram;
    public $interna;
    public $cena;
    public $proizvodjac_id;


    public function dodajNoviTelefon($model, $dijagonala, $ram, $interna, $cena, $proizvodjac_id)
    {
        require '../DB/DBConnection.php';

        $SQL = "insert into telefon (model, dijagonala, ram, interna, cena, proizvodjac_id) values ('$model', '$dijagonala', '$ram', '$interna', '$cena', '$proizvodjac_id')";

        return $connection->query($SQL);
    }

    public function izmeniTelefon($id, $model, $dijagonala, $ram, $interna, $cena, $proizvodjac_id)
    {
        require '../DB/DBConnection.php';

        $SQL = "update telefon set model='" . $model . "', dijagonala='" . $dijagonala . "', ram='" . $ram . "', interna='" . $interna . "', cena='" . $cena . "', proizvodjac_id='" . $proizvodjac_id . "' where id=" . $id;

        return $connection->query($SQL);
    }
}
