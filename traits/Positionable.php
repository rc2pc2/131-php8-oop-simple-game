<?php 

trait Positionable{
    public $position_x;
    public $position_y;
    public $position_rotation;

    public function getPositionX() : float{
        return $this->position_x;
    }

    public function getPositionY() : float{
        return $this->position_y;
    }

    public function getPositionRotation() : float{
        return $this->position_rotation;
    }

    public function setPositionRotation(int $rotation){
        if ($rotation > 0){
            $this->position_rotation = $rotation;
        } else {
            throw new InvalidArgumentException("Rotation cannot be a negative value");
        }
    }
}