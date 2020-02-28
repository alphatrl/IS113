<?php
    # Enter code here
    class Person {
        // attributes
        private $firstName;
        private $lastName;
        private $age;

        // constructor
        public function __construct($firstName, $lastName, $age) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }

        /**
         * Get the value of firstName
         */ 
        public function getFirstName() {
            return $this->firstName;
        }

        /**
         * Set the value of firstName
         */ 
        public function setFirstName($firstName) {
            $this->firstName = $firstName;
        }

        /**
         * Get the value of lastName
         */ 
        public function getLastName() {
            return $this->lastName;
        }

        /**
         * Set the value of lastName 
         */ 
        public function setLastName($lastName) {
            $this->lastName = $lastName;
        }

        /**
         * Get the value of age
         */ 
        public function getAge() {
            return $this->age;
        }

        /**
         * Set the value of age
         */ 
        public function setAge($age) {
            $this->age = $age;
        }

        /* isOlder
         * returns true of this->age is larger than then the person obj
         */
        public function isOlder($person) {
            return $this->age > $person->getAge();
        }

        // toString
        public function toString() {
            return "Person[name=$this->firstName $this->lastName,age=$this->age]";
        }
    }
?>