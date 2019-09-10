<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Address;
use DateTimeImmutable;

interface Delivery extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_ITEMS = 'items';
    const FIELD_PARCELS = 'parcels';
    const FIELD_ADDRESS = 'address';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt();
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    public function getItems();
    
    /**
     *
     * @return ParcelCollection|null
     */
    public function getParcels();
    
    /**
     *
     * @return Address|null
     */
    public function getAddress();
    public function setId(?string $id): void;
    
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
    
    public function setItems(?DeliveryItemCollection $items): void;
    
    public function setParcels(?ParcelCollection $parcels): void;
    
    public function setAddress(?Address $address): void;
}