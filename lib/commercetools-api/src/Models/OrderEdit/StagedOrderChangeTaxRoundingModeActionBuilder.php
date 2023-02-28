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
 * @implements Builder<StagedOrderChangeTaxRoundingModeAction>
 */
final class StagedOrderChangeTaxRoundingModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $taxRoundingMode;

    /**
     * <p>Determines how monetary values are rounded.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * @param ?string $taxRoundingMode
     * @return $this
     */
    public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;

        return $this;
    }


    public function build(): StagedOrderChangeTaxRoundingModeAction
    {
        return new StagedOrderChangeTaxRoundingModeActionModel(
            $this->taxRoundingMode
        );
    }

    public static function of(): StagedOrderChangeTaxRoundingModeActionBuilder
    {
        return new self();
    }
}
