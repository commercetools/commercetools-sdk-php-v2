<?php

declare(strict_types=1);

use Commercetools\Tools\SummaryOnlyOutputFormatter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set('cache_directory', __DIR__ . '/.ecs_cache');

    $parameters->set('paths', [__DIR__ . '/src', __DIR__ . '/test', __DIR__ . '/lib/commercetools-api/src', __DIR__ . '/lib/commercetools-api-tests/test', __DIR__ . '/lib/commercetools-base/src', __DIR__ . '/lib/commercetools-base/test', __DIR__ . '/lib/commercetools-import/src', __DIR__ . '/lib/commercetools-import-tests/test', __DIR__ . '/lib/commercetools-ml/src', __DIR__ . '/lib/commercetools-ml-tests/test']);

    $parameters->set('sets', ['psr12']);

    $services = $containerConfigurator->services();

    $services->set(SummaryOnlyOutputFormatter::class);
};
