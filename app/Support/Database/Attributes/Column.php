<?php

namespace App\Support\Database\Attributes;


use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Column
{
    public function __construct() {}
}