<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('twig', [
        'debug' => true,
        'strict_variables' => true,
        'globals' => [
            'max_forecast_days' => '%max_forecast_days%',
            'map_id' => 'mapid',
        ],
    ]);
};
