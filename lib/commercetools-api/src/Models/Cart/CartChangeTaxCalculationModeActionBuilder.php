<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartChangeTaxCalculationModeAction>
 */
final class CartChangeTaxCalculationModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $taxCalculationMode;

    /**

     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        return $this->taxCalculationMode;
    }

    /**
     * @param ?string $taxCalculationMode
     * @return $this
     */
    public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;

        return $this;
    }


    public function build(): CartChangeTaxCalculationModeAction
    {
        return new CartChangeTaxCalculationModeActionModel(
            $this->taxCalculationMode
        );
    }

    public static function of(): CartChangeTaxCalculationModeActionBuilder
    {
        return new self();
    }
}
