<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Delivery extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_ITEMS = 'items';
    public const FIELD_PARCELS = 'parcels';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_CUSTOM = 'custom';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Items which are shipped in this delivery regardless their distribution over several parcels.
     * Can also be specified individually for each Parcel.</p>
     *
     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * @return null|ParcelCollection
     */
    public function getParcels();

    /**
     * @return null|Address
     */
    public function getAddress();

    /**
     * <p>Custom Fields for the Transaction.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;

    /**
     * @param ?ParcelCollection $parcels
     */
    public function setParcels(?ParcelCollection $parcels): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
