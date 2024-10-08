<?php
require_once 'Vehicle.php';

class Bus extends Vehicle {
    public function fare() {
        $baseFare = $this->seating_capacity() * 100; 
        $maintenanceCharge = $baseFare * 0.10; 
        return $baseFare + $maintenanceCharge; 
    }

    public function seating_capacity($capacity = 50) {
        return $capacity;
    }
}

// Example usage
$bus = new Bus("City Bus", 60, 15);
echo "Total fare for the bus: " . $bus->fare(); 
?>
