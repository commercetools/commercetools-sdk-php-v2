<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\QueryPrice;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDiscountMatchQuery extends JsonObject
{
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_PRICE = 'price';

    /**
     * <p>ID of the specified Product.</p>
     *
     * @return null|string
     */
    public function getProductId();

    /**
     * <p>ID of the specified Product Variant.</p>
     *
     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Controls which <a href="/../api/projects/productProjections#current--staged">projected representation</a> is applied for the query.
     * Set to <code>true</code> for the <code>staged</code> Product Projection of the specified Product Variant, set to <code>false</code> for the <code>current</code> one.</p>
     *
     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Specified Price of the specified Product Variant.</p>
     *
     * @return null|QueryPrice
     */
    public function getPrice();

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?QueryPrice $price
     */
    public function setPrice(?QueryPrice $price): void;
}
