<?php

class Figure {

    protected $isBlack;

    public function __construct($isBlack) {
        $this->isBlack = $isBlack;
    }

    public function isBlack()
    {
        return $this->isBlack;
    }

    /**
     * @param Desk $desk
     * @param MoveCoordinates $coordinates
     * @return bool
     */
    public function isValidMove(Desk $desk,MoveCoordinates $coordinates)
    {
        return true;
    }

    /** @noinspection PhpToStringReturnInspection */
    public function __toString() {
        throw new \Exception("Not implemented");
    }
}
