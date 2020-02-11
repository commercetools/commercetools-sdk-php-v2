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
     * @var ?ImportOperationCollection
     */
    protected $results;


    public function __construct(
        int $limit = null,
        int $offset = null,
        int $count = null,
        ImportOperationCollection $results = null
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->count = $count;
        $this->results = $results;
    }

    /**
     * <p>The maximum number of import operations returned for a page.</p>
     *
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportOperationPagedResponse::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>
     *
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportOperationPagedResponse::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>The actual number of results returned by this response.</p>
     *
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportOperationPagedResponse::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * <p>The results for this paged response.</p>
     *
     * @return null|ImportOperationCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ImportOperationPagedResponse::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ImportOperationCollection::fromArray($data);
        }

        return $this->results;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setResults(?ImportOperationCollection $results): void
    {
        $this->results = $results;
    }
}
