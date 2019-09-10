<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;

interface CartSetCustomShippingMethodAction extends CartUpdateAction
{
    
    const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    const FIELD_SHIPPING_RATE = 'shippingRate';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     *
     * @return string|null
     */
    public function getShippingMethodName();
    
    /**
     *
     * @return ShippingRateDraft|null
     */
    public function getShippingRate();
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    public function getExternalTaxRate();
    public function setShippingMethodName(?string $shippingMethodName): void;
    
    public function setShippingRate(?ShippingRateDraft $shippingRate): void;
    
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
    
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}