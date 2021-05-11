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
 * @implements Builder<MissingImagesPagedQueryResult>
 */
final class MissingImagesPagedQueryResultBuilder implements Builder
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
     * @var ?MissingImagesCollection
     */
    private $results;

    /**
     * @var null|MissingImagesMeta|MissingImagesMetaBuilder
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
     * @return null|MissingImagesCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @return null|MissingImagesMeta
     */
    public function getMeta()
    {
        return $this->meta instanceof MissingImagesMetaBuilder ? $this->meta->build() : $this->meta;
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
     * @param ?MissingImagesCollection $results
     * @return $this
     */
    public function withResults(?MissingImagesCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @param ?MissingImagesMeta $meta
     * @return $this
     */
    public function withMeta(?MissingImagesMeta $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @deprecated use withMeta() instead
     * @return $this
     */
    public function withMetaBuilder(?MissingImagesMetaBuilder $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    public function build(): MissingImagesPagedQueryResult
    {
        return new MissingImagesPagedQueryResultModel(
            $this->count,
            $this->total,
            $this->offset,
            $this->results,
            $this->meta instanceof MissingImagesMetaBuilder ? $this->meta->build() : $this->meta
        );
    }

    public static function of(): MissingImagesPagedQueryResultBuilder
    {
        return new self();
    }
}
