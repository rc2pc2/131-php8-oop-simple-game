<?php 

require_once __DIR__ . "/../traits/Positionable.php";

class Player{
    use Positionable;
    public $name;
    public $description;



    // % usa questo tratto

    public function __construct(string $name,  string $description){
        $this->name = $name;
        $this->description = $description;
        $this->position_x = 0;
        $this->position_y = 0;
        $this->position_rotation = 0;
    }
}

?>