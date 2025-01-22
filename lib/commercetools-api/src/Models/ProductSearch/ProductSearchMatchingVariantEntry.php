<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchMatchingVariantEntry extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> that matches the search query.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p><code>sku</code> of the ProductVariant that matches the search query.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;
}
