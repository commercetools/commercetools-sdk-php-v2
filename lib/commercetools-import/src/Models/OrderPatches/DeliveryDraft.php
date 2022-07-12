<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\Address;
use Commercetools\Import\Models\Orders\DeliveryItemCollection;

interface DeliveryDraft extends JsonObject
{
    public const FIELD_ITEMS = 'items';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_PARCELS = 'parcels';

    /**

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**

     * @return null|Address
     */
    public function getAddress();

    /**

     * @return null|DeliveryParcelDraftCollection
     */
    public function getParcels();

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?DeliveryParcelDraftCollection $parcels
     */
    public function setParcels(?DeliveryParcelDraftCollection $parcels): void;
}
