<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Common\Money;

interface OrderExcerpt extends JsonObject
{
    
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_TAXED_PRICE = 'taxedPrice';
    const FIELD_VERSION = 'version';

    /**
     *
     * @return Money|null
     */
    public function getTotalPrice();
    
    /**
     *
     * @return TaxedPrice|null
     */
    public function getTaxedPrice();
    
    /**
     *
     * @return int|null
     */
    public function getVersion();
    public function setTotalPrice(?Money $totalPrice): void;
    
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;
    
    public function setVersion(?int $version): void;
}