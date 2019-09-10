<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;

interface StagedOrderSetShippingAddressAndCustomShippingMethodAction extends StagedOrderUpdateAction
{
    
    const FIELD_ADDRESS = 'address';
    const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    const FIELD_SHIPPING_RATE = 'shippingRate';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     *
     * @return Address|null
     */
    public function getAddress();
    
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
    public function setAddress(?Address $address): void;
    
    public function setShippingMethodName(?string $shippingMethodName): void;
    
    public function setShippingRate(?ShippingRateDraft $shippingRate): void;
    
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
    
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}