<?php

namespace Classes;

use Interfaces\DocumentInterface;

class Dms
{
    public $file;
    public function __construct(DocumentInterface $documentInterface)
    {
        $this->file = $documentInterface;
    }
}
