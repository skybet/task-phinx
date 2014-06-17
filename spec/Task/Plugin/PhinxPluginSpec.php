<?php

namespace spec\Task\Plugin;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PhinxPluginSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Task\Plugin\PhinxPlugin');
    }

    function it_should_have_a_phinx_application()
    {
        $this->getApplication()->shouldHaveType('Phinx\Console\PhinxApplication');
    }
}
