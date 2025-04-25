<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TermFacetResult>
 */
final class TermFacetResultBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $dataType;

    /**

     * @var ?int
     */
    private $missing;

    /**

     * @var ?int
     */
    private $total;

    /**

     * @var ?int
     */
    private $other;

    /**

     * @var ?FacetTermCollection
     */
    private $terms;

    /**
     * <p>Data type to which the facet is applied.</p>
     *

     * @return null|string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> that have no value for the specified <a href="/../api/projects/product-projection-search#term-facet-expression">term facet expression</a>.</p>
     *

     * @return null|int
     */
    public function getMissing()
    {
        return $this->missing;
    }

    /**
     * <p>Number of terms matching the <a href="/../api/projects/product-projection-search#term-facet-expression">term facet expression</a>.</p>
     * <ul>
     * <li>If the expression refers to Product fields like <code>categories.id</code> and <code>reviewRatingStatistics.count</code>, the value represents the number of Products.</li>
     * <li>If the expression is defined for fields specific to Product Variants, for example, <code>variants.attributes.{name}</code>, the value represents the number of Product Variants matching the expression.</li>
     * </ul>
     *

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>Number of terms not represented in this object (such as the number of terms beyond the <a href="/limits#product-projection-search">limit</a>).</p>
     *

     * @return null|int
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * <p>Values for the field specified in <a href="/../api/projects/product-projection-search#term-facet-expression">term facet expression</a> for which at least one <a href="ctp:api:type:ProductVariant">ProductVariant</a> could be found.</p>
     * <p>By default, facet terms are returned in a descending order of their <code>count</code>.</p>
     * <p>If the term facet expression specifies to count <a href="ctp:api:type:Product">Products</a> through the <code>counting products</code> <a href="/projects/product-projection-search#counting-products">extension</a>, then facet terms are returned in a descending order of their <code>productCount</code>.</p>
     *

     * @return null|FacetTermCollection
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param ?string $dataType
     * @return $this
     */
    public function withDataType(?string $dataType)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * @param ?int $missing
     * @return $this
     */
    public function withMissing(?int $missing)
    {
        $this->missing = $missing;

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
     * @param ?int $other
     * @return $this
     */
    public function withOther(?int $other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * @param ?FacetTermCollection $terms
     * @return $this
     */
    public function withTerms(?FacetTermCollection $terms)
    {
        $this->terms = $terms;

        return $this;
    }


    public function build(): TermFacetResult
    {
        return new TermFacetResultModel(
            $this->dataType,
            $this->missing,
            $this->total,
            $this->other,
            $this->terms
        );
    }

    public static function of(): TermFacetResultBuilder
    {
        return new self();
    }
}
