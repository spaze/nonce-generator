<?php

/**
 * Test: Spaze\NonceGenerator\Generator.
 *
 * @testCase Spaze\NonceGenerator\GeneratorTest
 * @author Michal Špaček
 * @package Spaze\NonceGenerator\Generator
 */

use Spaze\NonceGenerator\Generator;
use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';

class GeneratorTest extends Tester\TestCase
{

	public function testGetDefaultKey()
	{
		$generator = new Generator();
		Assert::same($generator->getNonce(), $generator->getNonce(), 'Generator should return the same nonce during one script execution');
	}

}

$testCase = new GeneratorTest();
$testCase->run();
