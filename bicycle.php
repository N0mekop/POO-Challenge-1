<?php

//CLASS

    class Bicycle {
        private string $color = "Yellow";
        private int $currentSpeed = 20;
        private int $nbSeats = 1;
        private int $nbWheels = 2;

//METHOD

        public function __construct(string $color)
        {
            $this->color = $color;
        }

//GETTERS & SETTERS (Accesseurs & Mutateurs)

        public function getColor(): string
        {
            return $this->color;
        }

        public function setColor(string $color): void
        {
            $this->color = $color;
        }

        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }

        public function setCurrentSpeed(int $currentSpeed): void
        {
            if ($currentSpeed >= 0) {
                $this->currentSpeed = $currentSpeed;
            }
        }

        public function getNbSeats(): int
        {
            return $this->nbSeats;
        }

        public function setNbSeats(int $nbSeats): void
        {
            $this->nbSeats = $nbSeats;
        }

        public function getNbWheels(): int
        {
            return $this->nbWheels;
        }

        public function setNbWheels(int $nbWheels): void
        {
            $this->nbWheels = $nbWheels;
        }


        public function forward(): string
        {
          $this->currentSpeed=20;
          return 'Moving...';
        }

        public function brake(): string
        {
          $sentence = '';
          while($this->currentSpeed>0) {
              $this->currentSpeed--;
              $sentence .= 'Braking !!!';
          }
          $sentence .= 'Stopped';
          return $sentence;

        }

        public function dump()
        {
            var_dump($this);
        }

    }

?>
