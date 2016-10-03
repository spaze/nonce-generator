<?php
namespace Spaze\NonceGenerator\Bridges\Nette;

/**
 * NonceGenerator\Generator extension.
 *
 * @author Michal Špaček
 */
class GeneratorExtension extends \Nette\DI\CompilerExtension
{

	public function loadConfiguration()
	{
		$this->getContainerBuilder()
			->addDefinition($this->prefix('generator'))
			->setClass('Spaze\NonceGenerator\Generator');
	}

}
