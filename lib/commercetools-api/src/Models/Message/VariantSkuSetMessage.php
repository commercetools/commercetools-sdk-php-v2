<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantSkuSetMessage extends Message
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_SKU = 'sku';
    public const FIELD_OLD_SKU = 'oldSku';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Reference to the Product containing the Variant.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>The SKU that was set on the Variant.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The previous SKU of the Variant.</p>
     *

     * @return null|string
     */
    public function getOldSku();

    /**
     * <p>Whether the update was only applied to the staged Variant.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $oldSku
     */
    public function setOldSku(?string $oldSku): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
