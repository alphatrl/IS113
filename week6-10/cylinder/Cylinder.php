<?php
    # Add code here
    class Cylinder {
        // attributes
        private $radius;
        private $height;
        const PI = 3.14;

        // Constructor
        public function __construct($r, $h) {
            $this->radius = $r;
            $this->height = $h;
        }

        /**
         * Get the value of radius
         */ 
        public function getRadius() {
            return $this->radius;
        }

        /**
         * Set the value of radius
         */ 
        public function setRadius($r) {
            $this->radius = $r;
        }

        /**
         * Get the value of height
         */ 
        public function getHeight() {
            return $this->height;
        }

        /**
         * Set the value of height
         */ 
        public function setHeight($h) {
            $this->height = $h;
        }

        // Get Volume
        public function getVolume() {
            return self::PI * $this->radius * $this->radius * $this->height;
        }

        // toString
        public function toString() {
            return ("radius = " . $this->radius . ", height = " . $this->height);
        }

    }
    
?>