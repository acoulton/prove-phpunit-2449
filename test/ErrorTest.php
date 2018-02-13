<?php

class ErrorTest extends \PHPUnit\Framework\TestCase
{

    public function provider_has_error()
    {
        trigger_error('Any error', E_USER_WARNING);

        return [
            [TRUE],
        ];
    }

    /**
     * @dataProvider provider_has_error
     */
    public function test_no_error($true)
    {
        $this->assertTrue(TRUE);
    }
}
