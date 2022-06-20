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
     * <p>To calculate a Price based on the score, use <code>+</code>, <code>-</code>, <code>*</code> and parentheses. The score is inserted with <code>x</code>. The function returns the cent amount.</p>
     * <p>For example, to charge $1.99 for a score of <code>1</code>, $3.99 for a score of <code>2</code>, $5.99 for a score of <code>3</code> and onwards, the function is: <code>(200 * x) - 1)</code>. To charge $4.50, $6.00, and $7.50 for express shipping, the function is: <code>(150 * x) + 300</code>.</p>
     *
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
