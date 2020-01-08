<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ImportItemPagedResponse>
 */
final class ImportItemPagedResponseBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?ImportItemCollection
     */
    private $results;

    /**
     * <p>The maximum number of import items returned for a page.</p>.
     *
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>.
     *
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>The actual number of results returned by this response.</p>.
     *
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>The results for this paged response.</p>.
     *
     * @return null|ImportItemCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResults(?ImportItemCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    public function build(): ImportItemPagedResponse
    {
        return new ImportItemPagedResponseModel(
            $this->limit,
            $this->offset,
            $this->count,
            $this->results
        );
    }

    public static function of(): ImportItemPagedResponseBuilder
    {
        return new self();
    }
}
