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
}
