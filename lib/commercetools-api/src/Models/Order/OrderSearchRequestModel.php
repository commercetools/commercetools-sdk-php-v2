<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderSearchRequestModel extends JsonObjectModel implements OrderSearchRequest
{
    /**
     * @var ?string
     */
    protected $query;

    /**
     * @var ?string
     */
    protected $sort;

    /**
     * @var ?int
     */
    protected $limit;

    /**
     * @var ?int
     */
    protected $offset;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $query = null,
        ?string $sort = null,
        ?int $limit = null,
        ?int $offset = null
    ) {
        $this->query = $query;
        $this->sort = $sort;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    /**
     * <p>The Order search query.</p>
     *
     * @return null|string
     */
    public function getQuery()
    {
        if (is_null($this->query)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_QUERY);
            if (is_null($data)) {
                return null;
            }
            $this->query = (string) $data;
        }

        return $this->query;
    }

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *
     * @return null|string
     */
    public function getSort()
    {
        if (is_null($this->sort)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SORT);
            if (is_null($data)) {
                return null;
            }
            $this->sort = (string) $data;
        }

        return $this->sort;
    }

    /**
     * <p>The maximum number of search results to be returned.</p>
     *
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
     * <p>The number of search results to be skipped in the response for pagination.</p>
     *
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
     * @param ?string $query
     */
    public function setQuery(?string $query): void
    {
        $this->query = $query;
    }

    /**
     * @param ?string $sort
     */
    public function setSort(?string $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }
}
