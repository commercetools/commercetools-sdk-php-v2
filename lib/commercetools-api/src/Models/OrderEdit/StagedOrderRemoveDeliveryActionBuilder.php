<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderRemoveDeliveryAction>
 */
final class StagedOrderRemoveDeliveryActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $deliveryId;

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }


    public function build(): StagedOrderRemoveDeliveryAction
    {
        return new StagedOrderRemoveDeliveryActionModel(
            $this->deliveryId
        );
    }

    public static function of(): StagedOrderRemoveDeliveryActionBuilder
    {
        return new self();
    }
}
