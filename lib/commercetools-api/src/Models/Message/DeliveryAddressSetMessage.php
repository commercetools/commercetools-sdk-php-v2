<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Address;

interface DeliveryAddressSetMessage extends Message
{
    
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_ADDRESS = 'address';
    const FIELD_OLD_ADDRESS = 'oldAddress';

    /**
     *
     * @return string|null
     */
    public function getDeliveryId();
    
    /**
     *
     * @return Address|null
     */
    public function getAddress();
    
    /**
     *
     * @return Address|null
     */
    public function getOldAddress();
    public function setDeliveryId(?string $deliveryId): void;
    
    public function setAddress(?Address $address): void;
    
    public function setOldAddress(?Address $oldAddress): void;
}