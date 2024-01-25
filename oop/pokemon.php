<?php 
    class Pokemon {
        public $name;
        public $race;
        public $types;
        public $locations;
        public $moves;

        function __construct(string $name, string $race, array $types, array $locations, array $moves)
        {
            $this->name;
            $this->race;
            $this->types;
            $this->locations;
            $this->moves;
        }

        public function getName() {
            return $this->name;
        }
        public function getRace() {
            return $this->race;
        }
        public function getTypes() {
            return $this->types;
        }
    }
?>