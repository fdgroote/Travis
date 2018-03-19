<?php
/**
 * Created by PhpStorm.
 * User: fdegroote
 * Date: 19/03/2018
 * Time: 10:46
 */

namespace Tests\AppBundle;

use AppBundle\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{

    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }

}