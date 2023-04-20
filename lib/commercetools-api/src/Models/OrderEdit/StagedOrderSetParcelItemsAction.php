<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetParcelItemsAction extends StagedOrderUpdateAction
{
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_PARCEL_KEY = 'parcelKey';
    public const FIELD_ITEMS = 'items';

    /**
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getParcelId();

    /**
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getParcelKey();

    /**

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?string $parcelKey
     */
    public function setParcelKey(?string $parcelKey): void;

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;
}
