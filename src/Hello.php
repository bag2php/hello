<?php

namespace Bag2\Hello;

class Hello
{
    public function to(string $name): string
    {
        return "Hello, {$name}!";
    }
}
