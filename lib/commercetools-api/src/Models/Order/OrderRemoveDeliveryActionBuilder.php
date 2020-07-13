<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderRemoveDeliveryAction>
 */
final class OrderRemoveDeliveryActionBuilder implements Builder
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
     * @param ?string $deliveryId
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }


    public function build(): OrderRemoveDeliveryAction
    {
        return new OrderRemoveDeliveryActionModel(
            $this->deliveryId
        );
    }

    public static function of(): OrderRemoveDeliveryActionBuilder
    {
        return new self();
    }
}
