<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Address;

interface Delivery extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_ITEMS = 'items';
    const FIELD_PARCELS = 'parcels';
    const FIELD_ADDRESS = 'address';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return DeliveryItemCollection
     */
    public function getItems();

    /**
     * @return ParcelCollection
     */
    public function getParcels();

    /**
     * @return Address
     */
    public function getAddress();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param \DateTimeImmutable $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items);

    /**
     * @param ParcelCollection $parcels
     * @return $this
     */
    public function setParcels(ParcelCollection $parcels);

    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address);

}
