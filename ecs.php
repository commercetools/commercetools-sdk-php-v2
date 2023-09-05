<?php

declare(strict_types=1);

ini_set("memory_limit", "-1");
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->cacheDirectory(__DIR__ . '/.ecs_cache');
    $ecsConfig->paths([__DIR__ . '/src', __DIR__ . '/test', __DIR__ . '/lib/commercetools-api/src', __DIR__ . '/lib/commercetools-api-tests/test', __DIR__ . '/lib/commercetools-base/src', __DIR__ . '/lib/commercetools-base/test', __DIR__ . '/lib/commercetools-import/src', __DIR__ . '/lib/commercetools-import-tests/test', __DIR__ . '/lib/commercetools-ml/src', __DIR__ . '/lib/commercetools-ml-tests/test']);
    $ecsConfig->parallel();
    $ecsConfig->sets([SetList::PSR_12]);
};
