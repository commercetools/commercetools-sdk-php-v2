<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\ShippingMethod\ShippingRateDraft;

class CartSetCustomShippingMethodActionModel extends CartUpdateActionModel implements CartSetCustomShippingMethodAction
{
    const DISCRIMINATOR_VALUE = 'setCustomShippingMethod';

    /**
     * @var ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    /**
     * @var string
     */
    protected $shippingMethodName;
    /**
     * @var ShippingRateDraft
     */
    protected $shippingRate;
    /**
     * @var TaxCategoryReference
     */
    protected $taxCategory;

    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            $value = $this->raw(CartSetCustomShippingMethodAction::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(ExternalTaxRateDraft::class, null);
            }
            $value = $this->mapData(ExternalTaxRateDraft::class, $value);

            $this->externalTaxRate = $value;
        }
        return $this->externalTaxRate;
    }
    /**
     * @return string
     */
    public function getShippingMethodName()
    {
        if (is_null($this->shippingMethodName)) {
            $value = $this->raw(CartSetCustomShippingMethodAction::FIELD_SHIPPING_METHOD_NAME);
            $value = (string)$value;
            $this->shippingMethodName = $value;
        }
        return $this->shippingMethodName;
    }
    /**
     * @return ShippingRateDraft
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            $value = $this->raw(CartSetCustomShippingMethodAction::FIELD_SHIPPING_RATE);
            if (is_null($value)) {
                return $this->mapData(ShippingRateDraft::class, null);
            }
            $value = $this->mapData(ShippingRateDraft::class, $value);

            $this->shippingRate = $value;
        }
        return $this->shippingRate;
    }
    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw(CartSetCustomShippingMethodAction::FIELD_TAX_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryReference::class, null);
            }
            $value = $this->mapData(TaxCategoryReference::class, $value);

            $this->taxCategory = $value;
        }
        return $this->taxCategory;
    }

    /**
     * @param ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function setExternalTaxRate(ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }
    /**
     * @param string $shippingMethodName
     * @return $this
     */
    public function setShippingMethodName(string $shippingMethodName)
    {
        $this->shippingMethodName = (string)$shippingMethodName;

        return $this;
    }
    /**
     * @param ShippingRateDraft $shippingRate
     * @return $this
     */
    public function setShippingRate(ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }
    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

}
