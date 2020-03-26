<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectCategoryRecommendationPagedQueryResponse extends JsonObject
{
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_RESULTS = 'results';
    public const FIELD_META = 'meta';

    /**
     * @return null|int
     */
    public function getCount();

    /**
     * @return null|int
     */
    public function getTotal();

    /**
     * @return null|int
     */
    public function getOffset();

    /**
     * @return null|ProjectCategoryRecommendationCollection
     */
    public function getResults();

    /**
     * @return null|ProjectCategoryRecommendationMeta
     */
    public function getMeta();

    public function setCount(?int $count): void;

    public function setTotal(?int $total): void;

    public function setOffset(?int $offset): void;

    public function setResults(?ProjectCategoryRecommendationCollection $results): void;

    public function setMeta(?ProjectCategoryRecommendationMeta $meta): void;
}
