<?php
    # Enter code here
    class Counter {
        // attribute
        private $value;

        public function __construct($v) {
            $this->value = $v;
        }

        public function getValue() {
            return $this->value;
        }

        public function setValue($newValue) {
            $this->value = $newValue;
        }

        public function increment() {
            $this->value += 1;
        }

        public function decrement() {
            $this->value -= 1;
        }

        public function reset() {
            $this->value = 0;
        }
    }
    
?>