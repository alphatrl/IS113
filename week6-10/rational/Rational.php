<?php
    # Enter code here
    class Rational {

        // attributes
        private $numerator;
        private $denominator;

        // constructor 
        public function __construct($numerator, $denominator) {
            $this->numerator = $numerator;
            $this->denominator = $denominator;
        }

        /**
         * Get the value of numerator
         */ 
        public function getNumerator() {
                return $this->numerator;
        }

        /**
         * Set the value of numerator
         */ 
        public function setNumerator($numerator) {
                $this->numerator = $numerator;
        }

        /**
         * Get the value of denominator
         */ 
        public function getDenominator() {
                return $this->denominator;
        }

        /**
         * Set the value of denominator
         */ 
        public function setDenominator($denominator) {
                $this->denominator = $denominator;
        }

        // Adding
        public function add($rational) {
            $a = $this->numerator;
            $b = $this->denominator;
            $c = $rational->numerator;
            $d = $rational->denominator;

            return ($a * $d + $b * $c) . '/' . ($b * $d);
        }

        // Subtract
        public function subtract($rational) {
            $a = $this->numerator;
            $b = $this->denominator;
            $c = $rational->numerator;
            $d = $rational->denominator;

            return ($a * $d - $b * $c) . '/' . ($b * $d);
        }

        // Multiply
        public function multiply($rational) {
            $a = $this->numerator;
            $b = $this->denominator;
            $c = $rational->numerator;
            $d = $rational->denominator;

            return ($a * $c) . '/' . ($b * $d);
        }

        // Division
        public function divison($rational) {
            $a = $this->numerator;
            $b = $this->denominator;
            $c = $rational->numerator;
            $d = $rational->denominator;

            return ($a * $d) . '/' . ($b * $c);
        }

        // toString 
        public function toString() {
            return $this->numerator . '/' . $this->denominator;
        }
    }
?>