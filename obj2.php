<?php
class Point {
    public $point1;
    public $point2;
    public function __construct($point1, $point2){
        $this->point1 = $point1;
        $this->point2 = $point2;
    }
    public function swapPoints($point1, $point2){

    }
}
$p1 = new Point(5,2);
$p2 = new Point(-3,6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")";
echo "(" . $p2->x . ", " . $p2->y . ")";