<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductRemoveVariantAction extends ProductUpdateAction
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the ProductVariant to remove.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p>The <code>sku</code> of the ProductVariant to remove.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>If <code>true</code>, only the staged ProductVariant is removed. If <code>false</code>, both the current and staged ProductVariant is removed.</p>
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
