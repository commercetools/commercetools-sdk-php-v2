<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>New value to set.</p>
     *

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
