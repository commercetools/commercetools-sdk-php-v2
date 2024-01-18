<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetDistinctBucketSortExpression extends JsonObject
{
    public const FIELD_BY = 'by';
    public const FIELD_ORDER = 'order';

    /**
     * <p>Defines whether to sort by bucket count or key.</p>
     *

     * @return null|string
     */
    public function getBy();

    /**
     * <p>Defines the sorting order.</p>
     *

     * @return null|string
     */
    public function getOrder();

    /**
     * @param ?string $by
     */
    public function setBy(?string $by): void;

    /**
     * @param ?string $order
     */
    public function setOrder(?string $order): void;
}
