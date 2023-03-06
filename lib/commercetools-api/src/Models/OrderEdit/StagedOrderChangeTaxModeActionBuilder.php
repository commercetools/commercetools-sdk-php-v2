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
 * @implements Builder<StagedOrderChangeTaxModeAction>
 */
final class StagedOrderChangeTaxModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $taxMode;

    /**
     * <p>Indicates how taxes are set on the Cart.</p>
     *

     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }


    public function build(): StagedOrderChangeTaxModeAction
    {
        return new StagedOrderChangeTaxModeActionModel(
            $this->taxMode
        );
    }

    public static function of(): StagedOrderChangeTaxModeActionBuilder
    {
        return new self();
    }
}
