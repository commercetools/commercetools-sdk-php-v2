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

interface ProductSearchFacetStatsValue extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_FILTER = 'filter';
    public const FIELD_FIELD = 'field';
    public const FIELD_FIELD_TYPE = 'fieldType';

    /**
     * <p>Name of the stats facet to appear in the <a href="ctp:api:type:ProductSearchFacetResultStats">ProductSearchFacetResultStats</a>.</p>
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
     * <p>The <a href="/api/projects/product-search#searchable-product-fields">searchable Product field</a> to facet on.</p>
     *

     * @return null|string
     */
    public function getField();

    /**
     * <p>If the <code>field</code> is not standard, this must be the Attribute type.</p>
     *

     * @return null|string
     */
    public function getFieldType();

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
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void;
}
