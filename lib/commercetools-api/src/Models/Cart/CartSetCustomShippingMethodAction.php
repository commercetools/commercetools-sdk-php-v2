<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;

interface CartSetCustomShippingMethodAction extends CartUpdateAction
{
    const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    const FIELD_SHIPPING_RATE = 'shippingRate';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * @return null|string
     */
    public function getShippingMethodName();

    /**
     * @return null|ShippingRateDraft
     */
    public function getShippingRate();

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    public function setShippingMethodName(?string $shippingMethodName): void;

    public function setShippingRate(?ShippingRateDraft $shippingRate): void;

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}
