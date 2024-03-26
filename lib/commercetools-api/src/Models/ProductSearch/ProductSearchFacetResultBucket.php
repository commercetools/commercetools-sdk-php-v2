<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetResultBucket extends ProductSearchFacetResult
{
    public const FIELD_BUCKETS = 'buckets';

    /**
     * <p>Contains results of the facet.</p>
     *

     * @return null|ProductSearchFacetResultBucketEntryCollection
     */
    public function getBuckets();

    /**
     * @param ?ProductSearchFacetResultBucketEntryCollection $buckets
     */
    public function setBuckets(?ProductSearchFacetResultBucketEntryCollection $buckets): void;
}
