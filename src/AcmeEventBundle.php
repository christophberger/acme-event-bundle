<?php
namespace Acme\EventBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * EventBundle
 */
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class AcmeEventBundle extends AbstractBundle

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