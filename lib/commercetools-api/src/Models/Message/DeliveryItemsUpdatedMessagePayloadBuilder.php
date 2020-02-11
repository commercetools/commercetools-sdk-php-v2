<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\DeliveryItemCollection;

/**
 * @implements Builder<DeliveryItemsUpdatedMessagePayload>
 */
final class DeliveryItemsUpdatedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $deliveryId;

    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * @var ?DeliveryItemCollection
     */
    private $oldItems;

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getOldItems()
    {
        return $this->oldItems;
    }

    /**
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldItems(?DeliveryItemCollection $oldItems)
    {
        $this->oldItems = $oldItems;

        return $this;
    }


    public function build(): DeliveryItemsUpdatedMessagePayload
    {
        return new DeliveryItemsUpdatedMessagePayloadModel(
            $this->deliveryId,
            $this->items,
            $this->oldItems
        );
    }

    public static function of(): DeliveryItemsUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}
