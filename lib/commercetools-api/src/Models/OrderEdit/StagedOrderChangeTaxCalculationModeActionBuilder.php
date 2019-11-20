<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderChangeTaxCalculationModeAction>
 */
final class StagedOrderChangeTaxCalculationModeActionBuilder implements Builder
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
     * @return $this
     */
    public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;

        return $this;
    }

    public function build(): StagedOrderChangeTaxCalculationModeAction
    {
        return new StagedOrderChangeTaxCalculationModeActionModel(
            $this->taxCalculationMode
        );
    }

    public static function of(): StagedOrderChangeTaxCalculationModeActionBuilder
    {
        return new self();
    }
}
