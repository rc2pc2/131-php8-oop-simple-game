<?php 
require_once __DIR__ . "/../traits/Positionable.php";

class Rock{
    use Positionable;
    public $id;
    public $description;


    public function __construct(int $id,  string $description, $posX, $posY, $rot){
        $this->id = $id;
        $this->description = $description;
        $this->position_x = $posX;
        $this->position_y = $posY;
        $this->position_rotation = $rot;
    }
}

?>