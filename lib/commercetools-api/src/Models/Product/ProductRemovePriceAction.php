<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductRemovePriceAction extends ProductUpdateAction
{
    
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return string|null
     */
    public function getPriceId();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setPriceId(?string $priceId): void;
    
    public function setStaged(?bool $staged): void;
}