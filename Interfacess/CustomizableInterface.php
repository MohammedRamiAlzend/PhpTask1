<?php

namespace Interfaces;

interface Customizable{
    public function changeFont(string $font):void;
    public function changeMargin(int $margin):void;
}