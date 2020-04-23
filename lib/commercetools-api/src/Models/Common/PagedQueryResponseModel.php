<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Product\FacetResults;
use Commercetools\Api\Models\Product\FacetResultsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PagedQueryResponseModel extends JsonObjectModel implements PagedQueryResponse
{
    /**
     * @var ?int
     */
    protected $limit;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?BaseResourceCollection
     */
    protected $results;

    /**
     * @var ?FacetResults
     */
    protected $facets;

    /**
     * @var ?JsonObject
     */
    protected $meta;


    public function __construct(
        int $limit = null,
        int $count = null,
        int $total = null,
        int $offset = null,
        BaseResourceCollection $results = null,
        FacetResults $facets = null,
        JsonObject $meta = null
    ) {
        $this->limit = $limit;
        $this->count = $count;
        $this->total = $total;
        $this->offset = $offset;
        $this->results = $results;
        $this->facets = $facets;
        $this->meta = $meta;
    }

    /**
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * @return null|BaseResourceCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = BaseResourceCollection::fromArray($data);
        }

        return $this->results;
    }

    /**
     * @return null|FacetResults
     */
    public function getFacets()
    {
        if (is_null($this->facets)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FACETS);
            if (is_null($data)) {
                return null;
            }

            $this->facets = FacetResultsModel::of($data);
        }

        return $this->facets;
    }

    /**
     * @return null|JsonObject
     */
    public function getMeta()
    {
        if (is_null($this->meta)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META);
            if (is_null($data)) {
                return null;
            }
            $this->meta = JsonObjectModel::of($data);
        }

        return $this->meta;
    }


    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setResults(?BaseResourceCollection $results): void
    {
        $this->results = $results;
    }

    public function setFacets(?FacetResults $facets): void
    {
        $this->facets = $facets;
    }

    public function setMeta(?JsonObject $meta): void
    {
        $this->meta = $meta;
    }
}
