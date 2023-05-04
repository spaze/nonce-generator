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

	public function testGetNonce()
	{
		$generator = new Generator();
		Assert::same($generator->getNonce(), $generator->getNonce(), 'Generator should return the same nonce during one script execution when using the deprecated API');
	}


	public function testCreateNonce()
	{
		$generator = new Generator();
		$nonce1 = $generator->createNonce();
		$nonce2 = $generator->createNonce();
		Assert::notSame($nonce1, $nonce2, 'Generator should create a new nonce');
		Assert::notSame($nonce1->getValue(), $nonce2->getValue(), 'Generator should create a different nonce');
		Assert::same($nonce1->getValue(), $nonce1->getValue(), 'The Nonce object should always return the same value');
	}

}

$testCase = new GeneratorTest();
$testCase->run();
