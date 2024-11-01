<?php
require_once 'models/TravelPackage.php';
require_once 'models/TravelBooking.php';
require_once 'controller/TravelController.php';

use TravelApp\Controllers\TravelController;

$controller = new TravelController();
$bookings = array_map(fn($booking) => $booking->displayInfo(), $controller->getBookings());

include 'views/travel_view.php';
