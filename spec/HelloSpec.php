<?php

namespace spec\Bag2\Hello;

use Bag2\Hello\Hello;
use PhpSpec\ObjectBehavior;

class HelloSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Hello::class);
    }
}
