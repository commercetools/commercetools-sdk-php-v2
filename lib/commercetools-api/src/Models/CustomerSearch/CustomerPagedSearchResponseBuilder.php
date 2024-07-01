<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerPagedSearchResponse>
 */
final class CustomerPagedSearchResponseBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $total;

    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var ?int
     */
    private $offset;

    /**

     * @var ?CustomerSearchResultCollection
     */
    private $results;

    /**
     * <p>Total number of results matching the query.</p>
     *

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>Search result containing the Customers matching the search query.</p>
     *

     * @return null|CustomerSearchResultCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?CustomerSearchResultCollection $results
     * @return $this
     */
    public function withResults(?CustomerSearchResultCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): CustomerPagedSearchResponse
    {
        return new CustomerPagedSearchResponseModel(
            $this->total,
            $this->limit,
            $this->offset,
            $this->results
        );
    }

    public static function of(): CustomerPagedSearchResponseBuilder
    {
        return new self();
    }
}
