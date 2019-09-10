<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\PriceDraft;

interface ProductChangePriceAction extends ProductUpdateAction
{
    
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_PRICE = 'price';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return string|null
     */
    public function getPriceId();
    
    /**
     *
     * @return PriceDraft|null
     */
    public function getPrice();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setPriceId(?string $priceId): void;
    
    public function setPrice(?PriceDraft $price): void;
    
    public function setStaged(?bool $staged): void;
}