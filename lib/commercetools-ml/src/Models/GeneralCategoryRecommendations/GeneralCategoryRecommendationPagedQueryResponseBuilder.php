<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\GeneralCategoryRecommendations;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GeneralCategoryRecommendationPagedQueryResponse>
 */
final class GeneralCategoryRecommendationPagedQueryResponseBuilder implements Builder
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

     * @var ?GeneralCategoryRecommendationCollection
     */
    private $results;

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

     * @return null|GeneralCategoryRecommendationCollection
     */
    public function getResults()
    {
        return $this->results;
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
     * @param ?GeneralCategoryRecommendationCollection $results
     * @return $this
     */
    public function withResults(?GeneralCategoryRecommendationCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): GeneralCategoryRecommendationPagedQueryResponse
    {
        return new GeneralCategoryRecommendationPagedQueryResponseModel(
            $this->count,
            $this->total,
            $this->offset,
            $this->results
        );
    }

    public static function of(): GeneralCategoryRecommendationPagedQueryResponseBuilder
    {
        return new self();
    }
}
