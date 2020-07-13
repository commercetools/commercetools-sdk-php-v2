<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MissingPricesPagedQueryResult>
 */
final class MissingPricesPagedQueryResultBuilder implements Builder
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
     * @var ?MissingPricesCollection
     */
    private $results;

    /**
     * @var null|MissingPricesMeta|MissingPricesMetaBuilder
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
     * @return null|MissingPricesCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @return null|MissingPricesMeta
     */
    public function getMeta()
    {
        return $this->meta instanceof MissingPricesMetaBuilder ? $this->meta->build() : $this->meta;
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
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?MissingPricesCollection $results
     * @return $this
     */
    public function withResults(?MissingPricesCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @param ?MissingPricesMeta $meta
     * @return $this
     */
    public function withMeta(?MissingPricesMeta $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMetaBuilder(?MissingPricesMetaBuilder $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    public function build(): MissingPricesPagedQueryResult
    {
        return new MissingPricesPagedQueryResultModel(
            $this->count,
            $this->total,
            $this->offset,
            $this->results,
            $this->meta instanceof MissingPricesMetaBuilder ? $this->meta->build() : $this->meta
        );
    }

    public static function of(): MissingPricesPagedQueryResultBuilder
    {
        return new self();
    }
}
