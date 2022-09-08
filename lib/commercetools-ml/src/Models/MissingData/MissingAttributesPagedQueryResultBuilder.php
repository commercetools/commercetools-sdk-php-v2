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
 * @implements Builder<MissingAttributesPagedQueryResult>
 */
final class MissingAttributesPagedQueryResultBuilder implements Builder
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

     * @var ?MissingAttributesCollection
     */
    private $results;

    /**
     * @deprecated
     * @var null|MissingAttributesMeta|MissingAttributesMetaBuilder
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
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**

     * @return null|MissingAttributesCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @deprecated
     * @return null|MissingAttributesMeta
     */
    public function getMeta()
    {
        return $this->meta instanceof MissingAttributesMetaBuilder ? $this->meta->build() : $this->meta;
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
     * @param ?MissingAttributesCollection $results
     * @return $this
     */
    public function withResults(?MissingAttributesCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @param ?MissingAttributesMeta $meta
     * @return $this
     */
    public function withMeta(?MissingAttributesMeta $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @deprecated use withMeta() instead
     * @return $this
     */
    public function withMetaBuilder(?MissingAttributesMetaBuilder $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    public function build(): MissingAttributesPagedQueryResult
    {
        return new MissingAttributesPagedQueryResultModel(
            $this->count,
            $this->total,
            $this->offset,
            $this->results,
            $this->meta instanceof MissingAttributesMetaBuilder ? $this->meta->build() : $this->meta
        );
    }

    public static function of(): MissingAttributesPagedQueryResultBuilder
    {
        return new self();
    }
}
