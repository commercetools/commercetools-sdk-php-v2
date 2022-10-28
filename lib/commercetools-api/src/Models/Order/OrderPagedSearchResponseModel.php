<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderPagedSearchResponseModel extends JsonObjectModel implements OrderPagedSearchResponse
{
    /**
     *
     * @var ?int
     */
    protected $total;

    /**
     *
     * @var ?int
     */
    protected $offset;

    /**
     *
     * @var ?int
     */
    protected $limit;

    /**
     *
     * @var ?HitCollection
     */
    protected $hits;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $total = null,
        ?int $offset = null,
        ?int $limit = null,
        ?HitCollection $hits = null
    ) {
        $this->total = $total;
        $this->offset = $offset;
        $this->limit = $limit;
        $this->hits = $hits;
    }

    /**
     * <p>Total number of results matching the query.</p>
     *
     *
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *
     *
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *
     *
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * <p>Actual results.</p>
     *
     *
     * @return null|HitCollection
     */
    public function getHits()
    {
        if (is_null($this->hits)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_HITS);
            if (is_null($data)) {
                return null;
            }
            $this->hits = HitCollection::fromArray($data);
        }

        return $this->hits;
    }


    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param ?HitCollection $hits
     */
    public function setHits(?HitCollection $hits): void
    {
        $this->hits = $hits;
    }
}
