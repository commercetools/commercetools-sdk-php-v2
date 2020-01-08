<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxCategoryPagedQueryResponse>
 */
final class TaxCategoryPagedQueryResponseBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?int
     */
    private $total;

    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?TaxCategoryCollection
     */
    private $results;

    /**
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @return null|TaxCategoryCollection
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
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

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
    public function withResults(?TaxCategoryCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    public function build(): TaxCategoryPagedQueryResponse
    {
        return new TaxCategoryPagedQueryResponseModel(
            $this->limit,
            $this->count,
            $this->total,
            $this->offset,
            $this->results
        );
    }

    public static function of(): TaxCategoryPagedQueryResponseBuilder
    {
        return new self();
    }
}
