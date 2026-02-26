<?php
require 'Size.php';
require 'Position.php';

class ProgramWindow
{
    public $y;
    public $x;
    public $height;
    public $width;

    public function __construct($height = 600 ,$width = 800)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function resize(Size $size){
        $this->height = $size->height;
        $this->width = $size->width;
    }
    
    public function move(Position $position){
        $this->y = $position->y;
        $this->x = $position->x;
    }
}
$window = new ProgramWindow();
$window->y;
$window->x;
$window->height;
$window->width;
$size = new Size(764,1080);
$window->resize($size);
$position = new Position(30, 70);
$window->move($position);