<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TermFacetResultModel extends JsonObjectModel implements TermFacetResult
{
    public const DISCRIMINATOR_VALUE = 'terms';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $dataType;

    /**
     *
     * @var ?int
     */
    protected $missing;

    /**
     *
     * @var ?int
     */
    protected $total;

    /**
     *
     * @var ?int
     */
    protected $other;

    /**
     *
     * @var ?FacetTermCollection
     */
    protected $terms;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $dataType = null,
        ?int $missing = null,
        ?int $total = null,
        ?int $other = null,
        ?FacetTermCollection $terms = null,
        ?string $type = null
    ) {
        $this->dataType = $dataType;
        $this->missing = $missing;
        $this->total = $total;
        $this->other = $other;
        $this->terms = $terms;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Data type to which the facet is applied.</p>
     *
     *
     * @return null|string
     */
    public function getDataType()
    {
        if (is_null($this->dataType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DATA_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->dataType = (string) $data;
        }

        return $this->dataType;
    }

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> that have no value for the specified <a href="/../api/projects/products-search#term-facet-expression">term facet expression</a>.</p>
     *
     *
     * @return null|int
     */
    public function getMissing()
    {
        if (is_null($this->missing)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MISSING);
            if (is_null($data)) {
                return null;
            }
            $this->missing = (int) $data;
        }

        return $this->missing;
    }

    /**
     * <p>Number of terms matching the <a href="/../api/projects/products-search#term-facet-expression">term facet expression</a>.</p>
     * <ul>
     * <li>If the expression refers to Product fields like <code>categories.id</code> and <code>reviewRatingStatistics.count</code>, the value represents the number of Products.</li>
     * <li>If the expression is defined for fields specific to Product Variants, for example, <code>variants.attributes.{name}</code>, the value represents the number of Product Variants matching the expression.</li>
     * </ul>
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
     * <p>Number of terms not represented in this object (such as the number of terms beyond the <a href="/limits#product-projection-search">limit</a>).</p>
     *
     *
     * @return null|int
     */
    public function getOther()
    {
        if (is_null($this->other)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OTHER);
            if (is_null($data)) {
                return null;
            }
            $this->other = (int) $data;
        }

        return $this->other;
    }

    /**
     * <p>Values for the field specified in <a href="/../api/projects/products-search#term-facet-expression">term facet expression</a> for which at least one <a href="ctp:api:type:ProductVariant">ProductVariant</a> could be found.</p>
     * <p>By default, facet terms are returned in a descending order of their <code>count</code>.</p>
     * <p>If the term facet expression specifies to count <a href="ctp:api:type:Product">Products</a> through the <code>counting products</code> <a href="/projects/products-search#counting-products">extension</a>, then facet terms are returned in a descending order of their <code>productCount</code>.</p>
     *
     *
     * @return null|FacetTermCollection
     */
    public function getTerms()
    {
        if (is_null($this->terms)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TERMS);
            if (is_null($data)) {
                return null;
            }
            $this->terms = FacetTermCollection::fromArray($data);
        }

        return $this->terms;
    }


    /**
     * @param ?string $dataType
     */
    public function setDataType(?string $dataType): void
    {
        $this->dataType = $dataType;
    }

    /**
     * @param ?int $missing
     */
    public function setMissing(?int $missing): void
    {
        $this->missing = $missing;
    }

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @param ?int $other
     */
    public function setOther(?int $other): void
    {
        $this->other = $other;
    }

    /**
     * @param ?FacetTermCollection $terms
     */
    public function setTerms(?FacetTermCollection $terms): void
    {
        $this->terms = $terms;
    }
}
