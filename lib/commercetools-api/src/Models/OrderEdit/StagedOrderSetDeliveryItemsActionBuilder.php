<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetDeliveryItemsAction>
 */
final class StagedOrderSetDeliveryItemsActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $deliveryId;

    /**

     * @var ?string
     */
    private $deliveryKey;

    /**

     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getDeliveryKey()
    {
        return $this->deliveryKey;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
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

    /**
     * @param ?string $deliveryKey
     * @return $this
     */
    public function withDeliveryKey(?string $deliveryKey)
    {
        $this->deliveryKey = $deliveryKey;

        return $this;
    }

    /**
     * @param ?DeliveryItemCollection $items
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }


    public function build(): StagedOrderSetDeliveryItemsAction
    {
        return new StagedOrderSetDeliveryItemsActionModel(
            $this->deliveryId,
            $this->deliveryKey,
            $this->items
        );
    }

    public static function of(): StagedOrderSetDeliveryItemsActionBuilder
    {
        return new self();
    }
}
