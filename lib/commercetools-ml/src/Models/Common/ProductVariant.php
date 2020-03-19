<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductVariant extends JsonObject
{

    public const FIELD_PRODUCT = 'product';
    public const FIELD_STAGED = 'staged';
    public const FIELD_VARIANT_ID = 'variantId';

    /**
     * <p>The product that contains this variant.</p>
     *
     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>The state of the product variant.</p>
     *
     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The id of the product variant.</p>
     *
     * @return null|int
     */
    public function getVariantId();

    public function setProduct(?ProductReference $product): void;

    public function setStaged(?bool $staged): void;

    public function setVariantId(?int $variantId): void;
}
