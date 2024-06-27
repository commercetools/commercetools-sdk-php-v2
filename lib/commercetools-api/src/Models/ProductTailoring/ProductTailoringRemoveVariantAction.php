<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringRemoveVariantAction extends ProductTailoringUpdateAction
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the ProductVariant to remove from the Tailoring.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p>The <code>sku</code> of the ProductVariant to remove from the Tailoring.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>If <code>true</code>, only the staged Product Variant Tailoring is removed. If <code>false</code>, both the current and staged Product Variant Tailoring is removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
