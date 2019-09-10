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
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;

interface StagedOrderSetShippingAddressAndShippingMethodAction extends StagedOrderUpdateAction
{
    
    const FIELD_ADDRESS = 'address';
    const FIELD_SHIPPING_METHOD = 'shippingMethod';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     *
     * @return Address|null
     */
    public function getAddress();
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    public function getShippingMethod();
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    public function getExternalTaxRate();
    public function setAddress(?Address $address): void;
    
    public function setShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod): void;
    
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}