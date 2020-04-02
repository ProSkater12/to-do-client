<?php declare(strict_types=1);
    use PHPUnit\Framework\TestCase;
    require_once 'index.php';

    final class Tests extends TestCase {
        public function testPower()
        {
            $my = new MyClass();
            $this->assertEquals(8, $my->power(2, 3));
        }
    }