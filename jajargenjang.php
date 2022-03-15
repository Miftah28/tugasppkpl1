<?php
    require_once "BangunDatar.php";

    class JajarGenjang extends BangunDatar{
        private $alas;
        private $tinggi;

        public function __construct($alas,$tinggi){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }

        function hitungkeliling(){
            if ($this->alas == '' && $this->tinggi == '' ) {
                return "Tidak Boleh kosong!";
            }else{
                return (2*$this->alas)+(2*$this->tinggi);
            }
        }

        function hitungLuas(){
            if($this->alas == '' && $this->tinggi == ''){
                return "Tidak Boleh kosong!";
            }else{
                return $this->alas*$this->tinggi;
            }
        }

    }

?>