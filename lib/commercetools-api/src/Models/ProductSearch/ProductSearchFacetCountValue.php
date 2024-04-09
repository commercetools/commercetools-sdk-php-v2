<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetCountValue extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_FILTER = 'filter';
    public const FIELD_LEVEL = 'level';

    /**
     * <p>Name of the count facet to appear in the <a href="ctp:api:type:ProductSearchFacetResultCount">ProductSearchFacetResultCount</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Whether the facet must consider only the Products resulting from the search (<code>query</code>) or all the Products (<code>all</code>).</p>
     *

     * @return null|string
     */
    public function getScope();

    /**
     * <p>Additional filtering expression to apply to the search result before calculating the facet.</p>
     *

     * @return null|SearchQuery
     */
    public function getFilter();

    /**
     * <p>Specify whether to count Products (<code>products</code>) or Product Variants (<code>variants</code>).</p>
     *

     * @return null|string
     */
    public function getLevel();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void;

    /**
     * @param ?SearchQuery $filter
     */
    public function setFilter(?SearchQuery $filter): void;

    /**
     * @param ?string $level
     */
    public function setLevel(?string $level): void;
}
