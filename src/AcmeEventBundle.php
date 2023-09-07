<?php
namespace Acme\EventBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * EventBundle
 */
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class AcmeEventBundle extends AbstractBundle
{
	public function loadExtension(array $config, ContainerConfigurator $containerConfigurator, ContainerBuilder $containerBuilder): void
	{
		// load an XML, PHP or Yaml file
		$containerConfigurator->import('../config/services.xml');
	}
	public function prependExtension(ContainerConfigurator $container, ContainerBuilder $builder): void
	{
		// prepend some config option
		$builder->prependExtensionConfig('sulu_admin', [
			'lists' => [
				'directories' => [
					dirname(__DIR__) . '/config/lists',
				],
			],
			'forms' => [
				'directories' => [
					dirname(__DIR__) . '/config/forms',
				],
			],
			'resources' => ['events' => ['routes' => ['list' => 'app.get_event_list', 'detail' => 'app.get_event']]],
		]);
	}
}