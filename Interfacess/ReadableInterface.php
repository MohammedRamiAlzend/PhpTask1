<?php
namespace Interfaces;

interface ReadableInterface{
    function read($path) : string;
}