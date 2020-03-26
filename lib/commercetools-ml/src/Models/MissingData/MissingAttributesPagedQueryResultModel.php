<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MissingAttributesPagedQueryResultModel extends JsonObjectModel implements MissingAttributesPagedQueryResult
{
    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?MissingAttributesCollection
     */
    protected $results;

    /**
     * @var ?MissingAttributesMeta
     */
    protected $meta;


    public function __construct(
        int $count = null,
        int $total = null,
        int $offset = null,
        MissingAttributesCollection $results = null,
        MissingAttributesMeta $meta = null
    ) {
        $this->count = $count;
        $this->total = $total;
        $this->offset = $offset;
        $this->results = $results;
        $this->meta = $meta;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingAttributesPagedQueryResult::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingAttributesPagedQueryResult::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingAttributesPagedQueryResult::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * @return null|MissingAttributesCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MissingAttributesPagedQueryResult::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = MissingAttributesCollection::fromArray($data);
        }

        return $this->results;
    }

    /**
     * @return null|MissingAttributesMeta
     */
    public function getMeta()
    {
        if (is_null($this->meta)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MissingAttributesPagedQueryResult::FIELD_META);
            if (is_null($data)) {
                return null;
            }

            $this->meta = MissingAttributesMetaModel::of($data);
        }

        return $this->meta;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setResults(?MissingAttributesCollection $results): void
    {
        $this->results = $results;
    }

    public function setMeta(?MissingAttributesMeta $meta): void
    {
        $this->meta = $meta;
    }
}
