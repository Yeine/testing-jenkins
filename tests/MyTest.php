<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../vendor/autoload.php';

class MyTest extends TestCase
{
    public function testIsFailureOnPurpuse()
    {
        self::assertEquals(1, 2);
    }
}