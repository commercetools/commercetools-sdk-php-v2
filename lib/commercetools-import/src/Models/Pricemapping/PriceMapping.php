<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Pricemapping;

use Commercetools\Base\JsonObject;

interface PriceMapping extends JsonObject
{
    const FIELD_PRICE_KEY = 'priceKey';
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_PRODUCT_VARIANT = 'productVariant';

    /**
     * <p>The key of the imported price.</p>.
     *
     * @return null|string
     */
    public function getPriceKey();

    /**
     * <p>The ctp-id of the price.</p>.
     *
     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>the variant where the price is included</p>.
     *
     * @return null|JsonObject
     */
    public function getProductVariant();

    public function setPriceKey(?string $priceKey): void;

    public function setPriceId(?string $priceId): void;

    public function setProductVariant(?JsonObject $productVariant): void;
}
