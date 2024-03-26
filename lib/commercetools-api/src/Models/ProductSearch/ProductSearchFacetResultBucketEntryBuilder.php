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
 * @implements Builder<ProductSearchFacetResultBucketEntry>
 */
final class ProductSearchFacetResultBucketEntryBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?int
     */
    private $count;

    /**
     * <p>Key of the bucket.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Number of values in the bucket.</p>
     *

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }


    public function build(): ProductSearchFacetResultBucketEntry
    {
        return new ProductSearchFacetResultBucketEntryModel(
            $this->key,
            $this->count
        );
    }

    public static function of(): ProductSearchFacetResultBucketEntryBuilder
    {
        return new self();
    }
}
