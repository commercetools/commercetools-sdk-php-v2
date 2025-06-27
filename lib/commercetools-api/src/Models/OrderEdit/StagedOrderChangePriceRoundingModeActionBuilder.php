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
 * @implements Builder<StagedOrderChangePriceRoundingModeAction>
 */
final class StagedOrderChangePriceRoundingModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $priceRoundingMode;

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getPriceRoundingMode()
    {
        return $this->priceRoundingMode;
    }

    /**
     * @param ?string $priceRoundingMode
     * @return $this
     */
    public function withPriceRoundingMode(?string $priceRoundingMode)
    {
        $this->priceRoundingMode = $priceRoundingMode;

        return $this;
    }


    public function build(): StagedOrderChangePriceRoundingModeAction
    {
        return new StagedOrderChangePriceRoundingModeActionModel(
            $this->priceRoundingMode
        );
    }

    public static function of(): StagedOrderChangePriceRoundingModeActionBuilder
    {
        return new self();
    }
}
