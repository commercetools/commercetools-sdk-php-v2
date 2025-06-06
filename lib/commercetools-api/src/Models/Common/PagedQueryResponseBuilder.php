<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PagedQueryResponse>
 */
final class PagedQueryResponseBuilder implements Builder
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

     * @var ?int
     */
    private $total;

    /**

     * @var ?BaseResourceCollection
     */
    private $results;

    /**

     * @var ?JsonObject
     */
    private $meta;

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
     * <p>Actual number of results returned.</p>
     *

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>Total number of results matching the query.
     * This number is an estimation that is not <a href="/../api/general-concepts#strong-consistency">strongly consistent</a>.
     * This field is returned by default.
     * For improved performance, calculating this field can be deactivated by using the query parameter <code>withTotal=false</code>.
     * When the results are filtered with a <a href="/../api/predicates/query">Query Predicate</a>, <code>total</code> is subject to a <a href="/../api/limits#queries">limit</a>.</p>
     *

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>The resources matching the query predicate.
     * Each query endpoint returns resources of its specific type.</p>
     *

     * @return null|BaseResourceCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * <p>Object containing supplementary information about the results.</p>
     *

     * @return null|JsonObject
     */
    public function getMeta()
    {
        return $this->meta;
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
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
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
     * @param ?BaseResourceCollection $results
     * @return $this
     */
    public function withResults(?BaseResourceCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @param ?JsonObject $meta
     * @return $this
     */
    public function withMeta(?JsonObject $meta)
    {
        $this->meta = $meta;

        return $this;
    }


    public function build(): PagedQueryResponse
    {
        return new PagedQueryResponseModel(
            $this->limit,
            $this->offset,
            $this->count,
            $this->total,
            $this->results,
            $this->meta
        );
    }

    public static function of(): PagedQueryResponseBuilder
    {
        return new self();
    }
}
