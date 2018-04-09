<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Price;

interface ProductDiscountMatchQuery extends JsonObject {
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_STAGED = 'staged';
    const FIELD_PRICE = 'price';

    /**
     * @return string
     */
    public function getProductId();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @return Price
     */
    public function getPrice();

    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price);

}
