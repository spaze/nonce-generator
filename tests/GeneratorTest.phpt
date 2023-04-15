<?php
declare(strict_types = 1);

namespace Spaze\NonceGenerator;

use Spaze\NonceGenerator\Generator;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../vendor/autoload.php';
Environment::setup();

class GeneratorTest extends TestCase
{

	public function testGetDefaultKey()
	{
		$generator = new Generator();
		Assert::same($generator->getNonce(), $generator->getNonce(), 'Generator should return the same nonce during one script execution');
	}

}

$testCase = new GeneratorTest();
$testCase->run();
