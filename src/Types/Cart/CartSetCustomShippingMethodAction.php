<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\ShippingMethod\ShippingRateDraft;

interface CartSetCustomShippingMethodAction extends CartUpdateAction {
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    const FIELD_SHIPPING_METHOD_NAME = 'shippingMethodName';
    const FIELD_SHIPPING_RATE = 'shippingRate';
    const FIELD_TAX_CATEGORY = 'taxCategory';

    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @return string
     */
    public function getShippingMethodName();

    /**
     * @return ShippingRateDraft
     */
    public function getShippingRate();

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @param ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function setExternalTaxRate(ExternalTaxRateDraft $externalTaxRate);

    /**
     * @param string $shippingMethodName
     * @return $this
     */
    public function setShippingMethodName(string $shippingMethodName);

    /**
     * @param ShippingRateDraft $shippingRate
     * @return $this
     */
    public function setShippingRate(ShippingRateDraft $shippingRate);

    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

}
