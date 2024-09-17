<?php namespace App;




class Contorllers
{
    public function __construct()
    {
        $bat = new Bootstrap();

        echo $bat->print();
    }
}