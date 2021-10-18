<?php 
    class Imt {
        private $bb, $tb;

        public function __construct($bb = 0, $tb = 0) {
            $this->bb = $bb;
            $this->tb = $tb;
        }

        public function getIMT() {
            $tbMeter = $this->tb / 100;
            $tbKuadrat = $tbMeter * $tbMeter;
            $imt = $this->bb / $tbKuadrat;
            $imt = round($imt, 2);
            return $imt;
        }

        public function getKategori() {
            $imt = $this->getIMT();
            if ($imt < 17.0) {
                $kategori = "Kekurangan berat badan tingkat berat";
                return $kategori;
            } elseif ($imt >= 17.0 && $imt <= 18.4) {
                $kategori = "Kekurangan berat badan tingkat ringan";
                return $kategori;
            } elseif ($imt >= 18.5 && $imt <= 25.0) {
                $kategori = "Normal";
                return $kategori;
            } elseif ($imt > 25.1 && $imt < 27.0) {
                $kategori = "Kelebihan berat badan tingkat ringan";
                return $kategori;
            } elseif ($imt > 27.0) {
                $kategori = "Kelebihan berat badan tingkat berat";
                return $kategori;
            } else {
                $kategori = "error";
                return $kategori;
            }
        }
    }
?>