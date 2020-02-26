<?php

// Write Car class definition
class Car {
    // Car variables
    private $year;
    private $make;
    private $model;
    private $rating;

    // CONSTRUCTOR
    public function __construct($year, $make, $model, $rating) {
        $this->year = $year;
        $this->make = $make;
        $this->model = $model;
        $this->rating = $rating;
    }

    /**
     * Get the value of year
     */ 
    public function getYear() {
        return $this->year;
    }

    /**
     * Set the value of year
     */ 
    public function setYear($year) {
        $this->year = $year;
    }

    /**
     * Get the value of make
     */ 
    public function getMake() {
        return $this->make;
    }

    /**
     * Set the value of make
     */ 
    public function setMake($make) {
        $this->make = $make;
    }

    /**
     * Get the value of model
     */ 
    public function getModel() {
        return $this->model;
    }

    /**
     * Set the value of model
     */ 
    public function setModel($model) {
        $this->model = $model;
    }

    /**
     * Get the value of rating
     */ 
    public function getRating() {
        return $this->rating;
    }

    /**
     * Set the value of rating
     */ 
    public function setRating($rating) {
        $this->rating = $rating;
    }
}
?>