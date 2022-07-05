<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectCategoryRecommendationPagedQueryResponseModel extends JsonObjectModel implements ProjectCategoryRecommendationPagedQueryResponse
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

     * @var ?ProjectCategoryRecommendationCollection
     */
    protected $results;

    /**

     * @var ?ProjectCategoryRecommendationMeta
     */
    protected $meta;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $count = null,
        ?int $total = null,
        ?int $offset = null,
        ?ProjectCategoryRecommendationCollection $results = null,
        ?ProjectCategoryRecommendationMeta $meta = null
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
            $data = $this->raw(self::FIELD_COUNT);
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

     * @return null|ProjectCategoryRecommendationCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ProjectCategoryRecommendationCollection::fromArray($data);
        }

        return $this->results;
    }

    /**

     * @return null|ProjectCategoryRecommendationMeta
     */
    public function getMeta()
    {
        if (is_null($this->meta)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META);
            if (is_null($data)) {
                return null;
            }

            $this->meta = ProjectCategoryRecommendationMetaModel::of($data);
        }

        return $this->meta;
    }


    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
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
     * @param ?ProjectCategoryRecommendationCollection $results
     */
    public function setResults(?ProjectCategoryRecommendationCollection $results): void
    {
        $this->results = $results;
    }

    /**
     * @param ?ProjectCategoryRecommendationMeta $meta
     */
    public function setMeta(?ProjectCategoryRecommendationMeta $meta): void
    {
        $this->meta = $meta;
    }
}
