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


	public function beforeCompile()
	{
		$builder = $this->getContainerBuilder();

		$register = function (\Nette\DI\ServiceDefinition $service) {
			$service->addSetup('addProvider', ['nonceGenerator', $this->prefix('@generator')]);
		};

		$latteFactoryService = $builder->getByType(\Nette\Bridges\ApplicationLatte\ILatteFactory::class) ?: 'nette.latteFactory';
		if ($builder->hasDefinition($latteFactoryService)) {
			$register($builder->getDefinition($latteFactoryService));
		}

		if ($builder->hasDefinition('nette.latte')) {
			$register($builder->getDefinition('nette.latte'));
		}
	}

}
