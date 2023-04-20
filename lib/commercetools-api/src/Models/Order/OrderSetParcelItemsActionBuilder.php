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
 * @implements Builder<OrderSetParcelItemsAction>
 */
final class OrderSetParcelItemsActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $parcelId;

    /**

     * @var ?DeliveryItemCollection
     */
    private $items;

    /**

     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ?string $parcelId
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

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


    public function build(): OrderSetParcelItemsAction
    {
        return new OrderSetParcelItemsActionModel(
            $this->parcelId,
            $this->items
        );
    }

    public static function of(): OrderSetParcelItemsActionBuilder
    {
        return new self();
    }
}
