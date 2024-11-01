<?php
namespace TravelApp\Models;

trait DiscountTrait {
    public function applyDiscount($price, $discount) {
        return $price - ($price * ($discount / 100));
    }
}

abstract class TravelPackage {
    protected $destination;
    protected $price;
    protected $colorTheme;

    public function __construct($destination, $price, $colorTheme) {
        $this->destination = $destination;
        $this->price = $price;
        $this->colorTheme = $colorTheme;
    }

    abstract public function displayInfo();
}
