<?php

//CLASS

    class Car {

        private int $nbWheels = 4;
        private int $currentSpeed = 0;
        private string $color = 'Black & Yellow ';
        private int $nbSeats = 4;
        private string $energy = 'Gasoline';
        private int $energyLevel = 10;

//METHOD

    public function __contruct(string $color, int $nbSeats, string $energy)
        {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energy = $energy;
        }

    public function start(): string
        {
            $this->currentSpeed = 0;
            return 'Engine Start!';
        }

    public function forward(): string
        {
            $this->currentSpeed = 30;
            return 'Moving...';
        }

    public function brake(): string
        {
            $sentence = '';
            while($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= 'Braking !!!';
            }
        $sentence .= 'Engine stopped';
        return $sentence;
        }

//GETTERS & SETTERS (Accesseurs & Mutateurs)

        public function getNbWheels(): int
        {
            return $this->nbWheels;
        }
        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }
        public function getColor(): string
        {
            return $this->color;
        }
        public function getNbSeats(): int
        {
            return $this->nbSeats;
        }
        public function getEnergy(): string
        {
            return $this->energy;
        }
        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }
    }

?>
