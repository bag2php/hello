<?php

namespace spec\Bag2\Hello;

use Bag2\Hello\Hello;
use PhpSpec\ObjectBehavior;

class HelloSpec extends ObjectBehavior
{
    function itはHelloを返す()
    {
        $this->to('World')->shouldReturn('Hello, World!');
    }
}
