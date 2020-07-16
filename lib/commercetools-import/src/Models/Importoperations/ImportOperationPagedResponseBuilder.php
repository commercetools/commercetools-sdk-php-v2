<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImportOperationPagedResponse>
 */
final class ImportOperationPagedResponseBuilder implements Builder
{
    /**
     * @var ?float
     */
    private $limit;

    /**
     * @var ?float
     */
    private $offset;

    /**
     * @var ?float
     */
    private $count;

    /**
     * @var ?ImportOperationCollection
     */
    private $results;

    /**
     * <p>The maximum number of import operations returned for a page.</p>
     *
     * @return null|float
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>
     *
     * @return null|float
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>The actual number of results returned by this response.</p>
     *
     * @return null|float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>The results for this paged response.</p>
     *
     * @return null|ImportOperationCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?float $limit
     * @return $this
     */
    public function withLimit(?float $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?float $offset
     * @return $this
     */
    public function withOffset(?float $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?float $count
     * @return $this
     */
    public function withCount(?float $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?ImportOperationCollection $results
     * @return $this
     */
    public function withResults(?ImportOperationCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): ImportOperationPagedResponse
    {
        return new ImportOperationPagedResponseModel(
            $this->limit,
            $this->offset,
            $this->count,
            $this->results
        );
    }

    public static function of(): ImportOperationPagedResponseBuilder
    {
        return new self();
    }
}
