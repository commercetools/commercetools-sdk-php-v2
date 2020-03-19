<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SimilarProductsPagedQueryResult>
 */
final class SimilarProductsPagedQueryResultBuilder implements Builder
{
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
     * @var ?SimilarProductPairCollection
     */
    private $results;

    /**
     * @var null|SimilarProductSearchRequestMeta|SimilarProductSearchRequestMetaBuilder
     */
    private $meta;

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
     * @return null|SimilarProductPairCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @return null|SimilarProductSearchRequestMeta
     */
    public function getMeta()
    {
        return $this->meta instanceof SimilarProductSearchRequestMetaBuilder ? $this->meta->build() : $this->meta;
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
    public function withResults(?SimilarProductPairCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMeta(?SimilarProductSearchRequestMeta $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaBuilder(?SimilarProductSearchRequestMetaBuilder $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    public function build(): SimilarProductsPagedQueryResult
    {
        return new SimilarProductsPagedQueryResultModel(
            $this->count,
            $this->total,
            $this->offset,
            $this->results,
            $this->meta instanceof SimilarProductSearchRequestMetaBuilder ? $this->meta->build() : $this->meta
        );
    }

    public static function of(): SimilarProductsPagedQueryResultBuilder
    {
        return new self();
    }
}
