<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductSetProductVariantKeyAction extends ProductUpdateAction
{

    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_KEY = 'key';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * <p>If left blank or set to <code>null</code>, the key is unset/removed.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setKey(?string $key): void;

    public function setStaged(?bool $staged): void;
}
