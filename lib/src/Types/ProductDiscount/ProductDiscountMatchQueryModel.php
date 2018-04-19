<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Price;

class ProductDiscountMatchQueryModel extends JsonObjectModel implements ProductDiscountMatchQuery
{
    /**
     * @var string
     */
    protected $productId;
    /**
     * @var int
     */
    protected $variantId;
    /**
     * @var mixed
     */
    protected $staged;
    /**
     * @var Price
     */
    protected $price;

    /**
     * @return string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            $value = $this->raw(ProductDiscountMatchQuery::FIELD_PRODUCT_ID);
            $value = (string)$value;
            $this->productId = $value;
        }
        return $this->productId;
    }
    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ProductDiscountMatchQuery::FIELD_VARIANT_ID);
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
            $value = $this->raw(ProductDiscountMatchQuery::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }
    /**
     * @return Price
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(ProductDiscountMatchQuery::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(Price::class, null);
            }
            $value = $this->mapData(Price::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }

    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId)
    {
        $this->productId = (string)$productId;

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
    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;

        return $this;
    }

}
