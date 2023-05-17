<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\AddressDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_ITEMS = 'items';
    public const FIELD_PARCELS = 'parcels';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier of the Delivery.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Items which are shipped in this delivery regardless their distribution over several parcels.
     * Can also be specified individually for each Parcel.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**

     * @return null|ParcelDraftCollection
     */
    public function getParcels();

    /**

     * @return null|AddressDraft
     */
    public function getAddress();

    /**
     * <p>Custom Fields for the Transaction.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;

    /**
     * @param ?ParcelDraftCollection $parcels
     */
    public function setParcels(?ParcelDraftCollection $parcels): void;

    /**
     * @param ?AddressDraft $address
     */
    public function setAddress(?AddressDraft $address): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
