<?php

class Pawn extends Figure {
    public function __toString() {
        return $this->isBlack ? '♟' : '♙';
    }

    public function isValidMove(Desk $desk, MoveCoordinates $crd)
    {
        $result = false;
        $figureInTo = $desk->getFigure($crd->getXTo(), $crd->getYTo());

        //ход вперед
        if($crd->getXFrom() == $crd->getXTo()){
            if($this->isBlack){
                // ход на одну клетку
                if( $crd->getYFrom() - $crd->getYTo() == 1 ){
                    $result = !$figureInTo;
                }
                // ход на две клетки
                if($crd->getYFrom() == 7 and $crd->getYFrom() - $crd->getYTo() ==  2){
                    $result = (!$figureInTo && !$desk->getFigure($crd->getXTo(),$crd->getYTo() + 1));
                }

            }else{
                // ход на одну клетку
                if( $crd->getYTo() - $crd->getYFrom() == 1 ){
                    $result = !$figureInTo;
                }
                // ход на две клетки
                if($crd->getYFrom() == 2 &&  $crd->getYTo() - $crd->getYFrom() ==  2){
                    $result = (!$desk->getFigure($crd->getXTo(),$crd->getYTo() - 1) && !$figureInTo);
                }
            }

        }
        // взятие
        else{

            $arr = str_split("abcdefgh");
            $fromIndex = array_search($crd->getXFrom(),$arr);
            $toIndex = array_search($crd->getXTo(),$arr);


            if(in_array($toIndex,[$fromIndex + 1,$fromIndex - 1])){
                //взятие черными
                if($this->isBlack && ($crd->getYFrom() - $crd->getYTo() == 1)){
                    $result = $figureInTo && !$figureInTo->isBlack();
                }
                //взятие белыми
                if(!$this->isBlack && ($crd->getYTo() - $crd->getYFrom() == 1)){
                    $result = $figureInTo && $figureInTo->isBlack();
                }
            }


        }

        return boolval($result);
    }
}
