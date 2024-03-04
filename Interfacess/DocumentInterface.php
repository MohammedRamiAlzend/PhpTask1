<?php
namespace Interfaces;

interface DocumentInterface {
    function getName():string;
    function setName(string $name):void;
    function getData():string;
    function setData($data):void;
    function getFileType():string;
    
}