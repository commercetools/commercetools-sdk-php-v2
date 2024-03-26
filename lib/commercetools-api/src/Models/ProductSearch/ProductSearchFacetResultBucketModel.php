<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetResultBucketModel extends JsonObjectModel implements ProductSearchFacetResultBucket
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?ProductSearchFacetResultBucketEntryCollection
     */
    protected $buckets;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?ProductSearchFacetResultBucketEntryCollection $buckets = null
    ) {
        $this->name = $name;
        $this->buckets = $buckets;
    }

    /**
     * <p>Name of the facet.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Contains results of the facet.</p>
     *
     *
     * @return null|ProductSearchFacetResultBucketEntryCollection
     */
    public function getBuckets()
    {
        if (is_null($this->buckets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_BUCKETS);
            if (is_null($data)) {
                return null;
            }
            $this->buckets = ProductSearchFacetResultBucketEntryCollection::fromArray($data);
        }

        return $this->buckets;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?ProductSearchFacetResultBucketEntryCollection $buckets
     */
    public function setBuckets(?ProductSearchFacetResultBucketEntryCollection $buckets): void
    {
        $this->buckets = $buckets;
    }
}
