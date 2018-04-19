<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Common\PriceDraft;

class ProductAddPriceActionModel extends ProductUpdateActionModel implements ProductAddPriceAction
{
    const DISCRIMINATOR_VALUE = 'addPrice';

    /**
     * @var PriceDraft
     */
    protected $price;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var int
     */
    protected $variantId;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return PriceDraft
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(ProductAddPriceAction::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(PriceDraft::class, null);
            }
            $value = $this->mapData(PriceDraft::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductAddPriceAction::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ProductAddPriceAction::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductAddPriceAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param PriceDraft $price
     * @return $this
     */
    public function setPrice(PriceDraft $price)
    {
        $this->price = $price;

        return $this;
    }
    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
    }
    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId)
    {
        $this->variantId = (int)$variantId;

        return $this;
    }
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
