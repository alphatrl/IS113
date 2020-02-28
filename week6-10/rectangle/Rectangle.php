<?php
    # Enter code here
    class Rectangle {
        
        // attributes
        private $length;
        private $breadth;

        // constructor
        public function __construct ($length, $breadth) {
            $this->length = $length;
            $this->breadth = $breadth;
        }

        /**
         * Get the value of length
         */ 
        public function getLength() {
                return $this->length;
        }

        /**
         * Set the value of length
         */ 
        public function setLength($length) {
                $this->length = $length;
        }

        /**
         * Get the value of breadth
         */ 
        public function getBreadth() {
                return $this->breadth;
        }

        /**
         * Set the value of breadth
         */ 
        public function setBreadth($breadth) {
                $this->breadth = $breadth;
        }

        // Get Area
        public function getArea() {
            $length = $this->length;
            $breadth = $this->breadth;

            return $length * $breadth;
        }

        // Get Perimeter
        public function getPerimeter() {
            $length = $this->length;
            $breadth = $this->breadth;

            return 2 * ($length + $breadth);
        }

        // ToString 
        public function toString() {
            return "Length = " . $this->length . ", Breadth = " . $this->breadth;
        }
    }
?>