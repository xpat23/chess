<?php
/**
 * Created by PhpStorm.
 * User: xpat
 * Date: 12/26/18
 * Time: 4:08 PM
 */

class MoveCoordinates
{
    protected $xFrom;

    protected $yFrom;

    protected $xTo;

    protected $yTo;

    public function __construct($match)
    {
        $this->xFrom = $match[1];
        $this->yFrom = $match[2];
        $this->xTo   = $match[3];
        $this->yTo   = $match[4];
    }

    /**
     * @return mixed
     */
    public function getXFrom()
    {
        return $this->xFrom;
    }

    /**
     * @return mixed
     */
    public function getYFrom()
    {
        return $this->yFrom;
    }

    /**
     * @return mixed
     */
    public function getXTo()
    {
        return $this->xTo;
    }

    /**
     * @return mixed
     */
    public function getYTo()
    {
        return $this->yTo;
    }





}