<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\Address;
use DateTimeImmutable;

interface Delivery extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_ITEMS = 'items';
    public const FIELD_PARCELS = 'parcels';
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>Unique identifier of the Delivery.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Date and time (UTC) the Delivery was created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Line Items or Custom Line Items that are delivered.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * <p>Information regarding the appearance, content, and shipment of a Parcel.</p>
     *

     * @return null|ParcelCollection
     */
    public function getParcels();

    /**
     * <p>Address to which Parcels are delivered.</p>
     *

     * @return null|Address
     */
    public function getAddress();

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
}
