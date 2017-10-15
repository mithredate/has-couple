<?php

namespace spec\Mithredate\DP;

use Mithredate\DP\Test;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Test::class);
    }

    public function it_returns_false_for_0_all_positive()
    {
        $this->hasCouple([1, 3, 5], 0)->shouldReturn(false);
    }

    public function it_returns_false_for_1_all_positive()
    {
        $this->hasCouple([1, 3, 5], 1)->shouldReturn(false);
    }

    public function it_returns_true_for_2_all_positive()
    {
        $this->hasCouple([1, 3, 5, 1], 2)->shouldReturn(true);
    }

    public function it_returns_false_for_2_all_positive()
    {
        $this->hasCouple([1, 3, 5], 2)->shouldReturn(false);
    }

    public function it_returns_true_for_2()
    {
        $this->hasCouple([1, 3, 5, -1], 2)->shouldReturn(true);
    }

    public function it_returns_true_for_8()
    {
        $this->hasCouple([1, 5, 5, -1, 4, -10, 7, 3, 9], 8)->shouldReturn(true);
    }

    public function it_returns_false_for_8()
    {
        $this->hasCouple([1, 2, 3, 4, 9, 10], 8)->shouldReturn(false);
    }

    public function it_passes_the_case()
    {
        $this->hasCouple([1, 2, 4, 4, 8, 2, 6], 8)->shouldReturn(true);
    }
}
