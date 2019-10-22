<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ImportItemPagedResponseModel extends JsonObjectModel implements ImportItemPagedResponse
{
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
    protected $limit;

    /**
     * @var ?ImportItemCollection
     */
    protected $results;

    public function __construct(
        int $offset = null,
        int $count = null,
        int $limit = null,
        ImportItemCollection $results = null
    ) {
        $this->offset = $offset;
        $this->count = $count;
        $this->limit = $limit;
        $this->results = $results;
    }

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>.
     *
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportItemPagedResponse::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>The actual number of results returned by this response.</p>.
     *
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportItemPagedResponse::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * <p>The maximum number of import items returned for a page.</p>.
     *
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportItemPagedResponse::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * <p>The results for this paged response.</p>.
     *
     * @return null|ImportItemCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ImportItemPagedResponse::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ImportItemCollection::fromArray($data);
        }

        return $this->results;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    public function setResults(?ImportItemCollection $results): void
    {
        $this->results = $results;
    }
}
