<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface CartSetLineItemPriceAction extends CartUpdateAction
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_EXTERNAL_PRICE = 'externalPrice';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
    /**
     *
     * @return Money|null
     */
    public function getExternalPrice();
    public function setLineItemId(?string $lineItemId): void;
    
    public function setExternalPrice(?Money $externalPrice): void;
}