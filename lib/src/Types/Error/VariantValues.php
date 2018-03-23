<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\PriceCollection;
use Commercetools\Types\Product\Attribute;
use Commercetools\Types\Product\AttributeCollection;
use Commercetools\Types\Common\Price;

interface VariantValues extends JsonObject {
    const FIELD_SKU = 'sku';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return PriceCollection
     */
    public function getPrices();

    /**
     * @return AttributeCollection
     */
    public function getAttributes();

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param PriceCollection $prices
     * @return $this
     */
    public function setPrices(PriceCollection $prices);

    /**
     * @param AttributeCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeCollection $attributes);

}
