<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once(realpath("./classes/Hamming.php"));
require_once(realpath("./classes/Levenshtein.php"));

final class MethodsTest extends TestCase
{
    public function testLevenshteinReturnsEqualValueAsThePHPNativeImplementation(): void{
        $this->assertEquals(
        Levenshtein::run("this is good", "that is good") 
        ,levenshtein("this is good", "that is good", 1, 1, 1)
        );
    }

    public function testHammingReturns2(): void{
        $this->assertEquals(Hamming::run("this is good", "that is good") , 2);
    }
}