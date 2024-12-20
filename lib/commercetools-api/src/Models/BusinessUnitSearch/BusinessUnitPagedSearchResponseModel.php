<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnitSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitPagedSearchResponseModel extends JsonObjectModel implements BusinessUnitPagedSearchResponse
{
    /**
     *
     * @var ?int
     */
    protected $total;

    /**
     *
     * @var ?int
     */
    protected $limit;

    /**
     *
     * @var ?int
     */
    protected $offset;

    /**
     *
     * @var ?BusinessUnitSearchResultCollection
     */
    protected $results;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $total = null,
        ?int $limit = null,
        ?int $offset = null,
        ?BusinessUnitSearchResultCollection $results = null
    ) {
        $this->total = $total;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->results = $results;
    }

    /**
     * <p>Total number of results matching the query.</p>
     *
     *
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
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *
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
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *
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
     * <p>Search result containing the Business Units matching the search query.</p>
     *
     *
     * @return null|BusinessUnitSearchResultCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = BusinessUnitSearchResultCollection::fromArray($data);
        }

        return $this->results;
    }


    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
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

    /**
     * @param ?BusinessUnitSearchResultCollection $results
     */
    public function setResults(?BusinessUnitSearchResultCollection $results): void
    {
        $this->results = $results;
    }
}
