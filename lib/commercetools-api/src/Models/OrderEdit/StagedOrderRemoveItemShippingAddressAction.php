<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderRemoveItemShippingAddressAction extends StagedOrderUpdateAction
{
    
    const FIELD_ADDRESS_KEY = 'addressKey';

    /**
     *
     * @return string|null
     */
    public function getAddressKey();
    public function setAddressKey(?string $addressKey): void;
}