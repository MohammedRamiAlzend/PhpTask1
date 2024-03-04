<?php

namespace Classes;

use Interfaces\Customizable;
use Interfaces\ReadableInterface;
use Interfaces\WriteableInterface;
use Interfaces\DocumentInterface;

class Spreadsheet implements Customizable, ReadableInterface,WriteableInterface,DocumentInterface
{
    protected $name;
    protected $font;
    protected $margin;
    protected $fileExtention = "csv";
    protected $data;
    function getData(): string
    {
        return $this->data;
    }
    function setData($data): void
    {
        $this->data=$data;
    }
    function getFileType(): string
    {
        return $this->fileExtention;
    }
  
    function getName():string 
    {
        return $this->name;
    }
    function setName(string $name):void 
    {
        $this->name = $name;
    }
    public function read($path): string
    {
        return "";
    }

    public function write(string $content): void
    {
    }
    public function save():void
    {

    }
    public function changeFont(string $font):void
    {
        $this->font = $font;
    }
    public function changeMargin(int $margin):void
    {
        $this->margin = $margin;
    }
}