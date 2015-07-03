<?php
$osoby = array
 (
 "student1" => array("imie"=>"robert", "nazwisko"=>"nazwisko"),
  "student2" =>array("imie" =>"Jan", "nzwisko"=>"kowalski")
  );

foreach ($osoby as $osoba=>$dane)
        foreach ($dane as $etykieta=>$wartosc)
        echo $osoba." ".$etykieta." ".$wartosc;
?>
