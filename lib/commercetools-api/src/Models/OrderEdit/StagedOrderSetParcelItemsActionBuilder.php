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
 * @implements Builder<StagedOrderSetParcelItemsAction>
 */
final class StagedOrderSetParcelItemsActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $parcelId;

    /**

     * @var ?string
     */
    private $parcelKey;

    /**

     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> must be provided.</p>
     *

     * @return null|string
     */
    public function getParcelKey()
    {
        return $this->parcelKey;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

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
     * @param ?string $parcelKey
     * @return $this
     */
    public function withParcelKey(?string $parcelKey)
    {
        $this->parcelKey = $parcelKey;

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


    public function build(): StagedOrderSetParcelItemsAction
    {
        return new StagedOrderSetParcelItemsActionModel(
            $this->parcelId,
            $this->parcelKey,
            $this->items
        );
    }

    public static function of(): StagedOrderSetParcelItemsActionBuilder
    {
        return new self();
    }
}
