<?php 
    class Car
    {
        protected $manufacturer;
        protected $model;
        protected $year = 2022;
        protected $registrationNumber;
        protected $mile = 0;
        
        public function getManufacturer($_manufacturer)
        {
            $this->manufacturer = $_manufacturer;
            return $_manufacturer;
        }

        public function setManufacturer($_manufacturer)
        {
            $this->manufacturer = $_manufacturer;
            $msg = "{$this->manufacturer}";
            return $msg;
        }

        public function getModel($_model)
        {
            $this->model = $_model;
            return $_model;
        }

        public function setModel($_model)
        {
            $this->model = $_model;
            $msg = "{$this->model}";
            return $msg;
        }

        public function getYear($_year)
        {
            $this->year = $_year;
            return $_year;
        }

        public function setYear($_year)
        {
            $this->year = $_year;
            $msg = "av årsmodellen";
            if($this->year)
            {
                $msg .= " {$this->year}";
            }
            return "$msg.<br>";
        }

        public function getRegistrationNumber($_registrationNumber)
        {
            $this->registrationNumber = $_registrationNumber;
            return $_registrationNumber;
        }

        public function setRegistrationNumber($_registrationNumber)
        {
            $this->registrationNumber = $_registrationNumber;
            $msg ="med registreringsnummret {$this->registrationNumber}";
            return $msg;
        }

        public function getMile()
        {
            $msg = "{$this->getMile}km";
            return "{$msg} <br>";

        }

        public function getInfo()
        {
            $msg = "Jag är en {$this->setManufacturer} {$this->setModel} av årsmodellen {$this->setYear} med registreringsnummret {$this->setRegistrationNumber}";
            return "{$msg} <br>";
        }

        public function __construct(string $_manufacturer, string $_model,int $_year, $_registrationNumber, int $_mile)
        {
            $this->setManufacturer = $_manufacturer;
            $this->setModel = $_model;
            $this->setYear = $_year;
            $this->setRegistrationNumber = $_registrationNumber;
            $this->getMile = $_mile;
        }
    }
?>