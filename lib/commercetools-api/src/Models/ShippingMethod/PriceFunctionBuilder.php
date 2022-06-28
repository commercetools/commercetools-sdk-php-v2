<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PriceFunction>
 */
final class PriceFunctionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $currencyCode;

    /**
     * @var ?string
     */
    private $function;

    /**
     * <p>Currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @return null|string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * @param ?string $currencyCode
     * @return $this
     */
    public function withCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @param ?string $function
     * @return $this
     */
    public function withFunction(?string $function)
    {
        $this->function = $function;

        return $this;
    }


    public function build(): PriceFunction
    {
        return new PriceFunctionModel(
            $this->currencyCode,
            $this->function
        );
    }

    public static function of(): PriceFunctionBuilder
    {
        return new self();
    }
}
