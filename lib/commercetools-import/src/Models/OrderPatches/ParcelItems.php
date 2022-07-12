<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Orders\DeliveryItemCollection;

interface ParcelItems extends JsonObject
{
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_ITEMS = 'items';

    /**

     * @return null|string
     */
    public function getParcelId();

    /**

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;
}
