<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ImportOperationPagedResponseModel extends JsonObjectModel implements ImportOperationPagedResponse
{
    /**
     * @var ?int
     */
    protected $limit;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?ImportOperationCollection
     */
    protected $results;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $limit = null,
        ?int $offset = null,
        ?int $count = null,
        ?int $total = null,
        ?ImportOperationCollection $results = null
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->count = $count;
        $this->total = $total;
        $this->results = $results;
    }

    /**
     * <p>The number of results requested in the query request.</p>
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
     * <p>The number of elements skipped, not a page number.
     * Supplied by the client or the server default.</p>
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
     * <p>The actual number of results returned.</p>
     *
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
     * <p>The total number of import operations matching the query.</p>
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
     * <p>The array of Import Operations matching the query.</p>
     *
     * @return null|ImportOperationCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ImportOperationCollection::fromArray($data);
        }

        return $this->results;
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
     * @param ?int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @param ?ImportOperationCollection $results
     */
    public function setResults(?ImportOperationCollection $results): void
    {
        $this->results = $results;
    }
}
