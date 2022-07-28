<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiRequestInterface;

/**
 * @template T of ApiRequestInterface
 * @template-extends ApiRequestInterface<T>
 */
interface LocaleProjecting extends ApiRequestInterface
{
    /**
     * @return ApiRequestInterface
     * @psalm-return T
     */
    public function withLocaleProjection(string $localeProjection);
}
