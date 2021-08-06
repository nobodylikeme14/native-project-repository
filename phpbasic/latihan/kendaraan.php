<?php
    
Class kendaraan {
    var $merek;
    var $warna;
    var $pemilik;

    function HidupkanMesin(){
        return $this->pemilik . "Menyalakan Mesin Kendaraan";
    }
    function MatikanMesin(){
        return $this->pemilik . "Mematikan Mesin Kendaraan";
    }

}
?>