<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetBucketResult extends ProductSearchFacetResultExpression
{
    public const FIELD_BUCKETS = 'buckets';

    /**
     * <p>Contains results of the facet.</p>
     *

     * @return null|ProductSearchFacetResultBucketCollection
     */
    public function getBuckets();

    /**
     * @param ?ProductSearchFacetResultBucketCollection $buckets
     */
    public function setBuckets(?ProductSearchFacetResultBucketCollection $buckets): void;
}
