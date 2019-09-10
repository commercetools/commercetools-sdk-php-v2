<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface PriceChangedError extends ErrorObject
{
    
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_SHIPPING = 'shipping';

    /**
     *
     * @return array|null
     */
    public function getLineItems();
    
    /**
     *
     * @return bool|null
     */
    public function getShipping();
    public function setLineItems(?array $lineItems): void;
    
    public function setShipping(?bool $shipping): void;
}