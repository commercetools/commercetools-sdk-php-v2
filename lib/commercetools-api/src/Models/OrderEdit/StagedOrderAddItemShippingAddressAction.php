<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderAddItemShippingAddressAction extends StagedOrderUpdateAction
{
    
    const FIELD_ADDRESS = 'address';

    /**
     *
     * @return Address|null
     */
    public function getAddress();
    public function setAddress(?Address $address): void;
}