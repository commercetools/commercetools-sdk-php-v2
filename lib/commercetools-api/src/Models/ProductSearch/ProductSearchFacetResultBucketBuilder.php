<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchFacetResultBucket>
 */
final class ProductSearchFacetResultBucketBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?ProductSearchFacetResultBucketEntryCollection
     */
    private $buckets;

    /**
     * <p>Name of the facet.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Contains results of the facet.</p>
     *

     * @return null|ProductSearchFacetResultBucketEntryCollection
     */
    public function getBuckets()
    {
        return $this->buckets;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?ProductSearchFacetResultBucketEntryCollection $buckets
     * @return $this
     */
    public function withBuckets(?ProductSearchFacetResultBucketEntryCollection $buckets)
    {
        $this->buckets = $buckets;

        return $this;
    }


    public function build(): ProductSearchFacetResultBucket
    {
        return new ProductSearchFacetResultBucketModel(
            $this->name,
            $this->buckets
        );
    }

    public static function of(): ProductSearchFacetResultBucketBuilder
    {
        return new self();
    }
}
