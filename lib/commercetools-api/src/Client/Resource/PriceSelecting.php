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
interface PriceSelecting extends ApiRequestInterface
{
    /**
     * @return ApiRequestInterface
     * @psalm-return T
     */
    public function withPriceCurrency(string $priceCurrency);

    /**
     * @return ApiRequestInterface
     * @psalm-return T
     */
    public function withPriceCountry(string $priceCountry);

    /**
     * @return ApiRequestInterface
     * @psalm-return T
     */
    public function withPriceCustomerGroup(string $priceCustomerGroup);

    /**
     * @return ApiRequestInterface
     * @psalm-return T
     */
    public function withPriceChannel(string $priceChannel);

    /**
     * @return ApiRequestInterface
     * @psalm-return T
     */
    public function withLocaleProjection(string $localeProjection);

    /**
     * @return ApiRequestInterface
     * @psalm-return T
     */
    public function withStoreProjection(string $storeProjection);
}
