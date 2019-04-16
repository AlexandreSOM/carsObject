<?php
//Ordre de chargement
    include 'interface/Vehicule_Interface.php';
    include 'interface/Voiture_Interface.php';
    include 'interface/Moto_Interface.php';
    include 'interface/Audi_Interface.php';
    include 'interface/Yamaha_Interface.php';

    include 'exception/MotoException.php';
    include 'exception/VoitureException.php';

    include 'class/Vehicule.php';
    include 'class/Voiture.php';
    include 'class/Moto.php';
    include 'class/Audi.php';
    include 'class/Yamaha.php';

    $audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
    $voitureInconnu = new vehicule('Toyota', 'Espace', 10000, 5, 0, 0);
    $vehiculeInconnu = new Vehicule('Renault', 'Tracteur', 100000);
    $moto = new Yamaha('Yamaha', 'Z900', 8000, 1, 'Supercross');

    var_dump($audiRS1);
    var_dump($voitureInconnu);
    var_dump($vehiculeInconnu);
    var_dump($moto);

?>
