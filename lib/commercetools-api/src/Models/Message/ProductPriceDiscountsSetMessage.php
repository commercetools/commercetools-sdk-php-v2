<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;

interface ProductPriceDiscountsSetMessage extends Message
{
    
    const FIELD_UPDATED_PRICES = 'updatedPrices';

    /**
     *
     * @return ProductPriceDiscountsSetUpdatedPriceCollection|null
     */
    public function getUpdatedPrices();
    public function setUpdatedPrices(?ProductPriceDiscountsSetUpdatedPriceCollection $updatedPrices): void;
}