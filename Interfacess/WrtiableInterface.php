<?php 
namespace Interfaces;

interface WriteableInterface{
    function write(string $content):void;
    public function save():void;
}