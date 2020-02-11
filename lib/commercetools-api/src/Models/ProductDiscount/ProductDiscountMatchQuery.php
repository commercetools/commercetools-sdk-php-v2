<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\QueryPrice;

interface ProductDiscountMatchQuery extends JsonObject
{

    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_PRICE = 'price';

    /**
     * @return null|string
     */
    public function getProductId();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @return null|QueryPrice
     */
    public function getPrice();

    public function setProductId(?string $productId): void;

    public function setVariantId(?int $variantId): void;

    public function setStaged(?bool $staged): void;

    public function setPrice(?QueryPrice $price): void;
}
