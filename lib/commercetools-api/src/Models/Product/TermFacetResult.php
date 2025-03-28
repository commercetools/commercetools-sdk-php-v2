<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TermFacetResult extends FacetResult
{
    public const FIELD_DATA_TYPE = 'dataType';
    public const FIELD_MISSING = 'missing';
    public const FIELD_TOTAL = 'total';
    public const FIELD_OTHER = 'other';
    public const FIELD_TERMS = 'terms';

    /**
     * <p>Data type to which the facet is applied.</p>
     *

     * @return null|string
     */
    public function getDataType();

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> that have no value for the specified <a href="/../api/projects/products-search#term-facet-expression">term facet expression</a>.</p>
     *

     * @return null|int
     */
    public function getMissing();

    /**
     * <p>Number of terms matching the <a href="/../api/projects/products-search#term-facet-expression">term facet expression</a>.</p>
     * <ul>
     * <li>If the expression refers to Product fields like <code>categories.id</code> and <code>reviewRatingStatistics.count</code>, the value represents the number of Products.</li>
     * <li>If the expression is defined for fields specific to Product Variants, for example, <code>variants.attributes.{name}</code>, the value represents the number of Product Variants matching the expression.</li>
     * </ul>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * <p>Number of terms not represented in this object (such as the number of terms beyond the <a href="/limits#product-projection-search">limit</a>).</p>
     *

     * @return null|int
     */
    public function getOther();

    /**
     * <p>Values for the field specified in <a href="/../api/projects/products-search#term-facet-expression">term facet expression</a> for which at least one <a href="ctp:api:type:ProductVariant">ProductVariant</a> could be found.</p>
     * <p>By default, facet terms are returned in a descending order of their <code>count</code>.</p>
     * <p>If the term facet expression specifies to count <a href="ctp:api:type:Product">Products</a> through the <code>counting products</code> <a href="/projects/products-search#counting-products">extension</a>, then facet terms are returned in a descending order of their <code>productCount</code>.</p>
     *

     * @return null|FacetTermCollection
     */
    public function getTerms();

    /**
     * @param ?string $dataType
     */
    public function setDataType(?string $dataType): void;

    /**
     * @param ?int $missing
     */
    public function setMissing(?int $missing): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?int $other
     */
    public function setOther(?int $other): void;

    /**
     * @param ?FacetTermCollection $terms
     */
    public function setTerms(?FacetTermCollection $terms): void;
}
