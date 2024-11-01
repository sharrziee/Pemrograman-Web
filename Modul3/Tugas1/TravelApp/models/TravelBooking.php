<?php
namespace TravelApp\Models;

require_once 'TravelPackage.php';

class TravelBooking extends TravelPackage {
    use DiscountTrait;

    private $bookingId;
    private $customerName;

    public function __construct($destination, $price, $bookingId, $customerName, $colorTheme = "RedBlack") {
        parent::__construct($destination, $price, $colorTheme);
        $this->bookingId = $bookingId;
        $this->customerName = $customerName;
    }

    public function displayInfo() {
        return [
            'colorTheme' => $this->colorTheme,
            'bookingId' => $this->bookingId,
            'customerName' => $this->customerName,
            'destination' => $this->destination,
            'price' => number_format($this->price, 2)
        ];
    }

    public function getPriceAfterDiscount($discount) {
        return $this->applyDiscount($this->price, $discount);
    }
}
