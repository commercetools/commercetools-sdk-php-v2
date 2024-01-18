<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetDistinctValueModel extends JsonObjectModel implements ProductSearchFacetDistinctValue
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $scope;

    /**
     *
     * @var ?ProductSearchQuery
     */
    protected $filter;

    /**
     *
     * @var ?string
     */
    protected $count;

    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?array
     */
    protected $includes;

    /**
     *
     * @var ?ProductSearchFacetDistinctStartsWith
     */
    protected $startsWith;

    /**
     *
     * @var ?ProductSearchFacetDistinctBucketSortExpression
     */
    protected $sort;

    /**
     *
     * @var ?int
     */
    protected $size;

    /**
     *
     * @var ?string
     */
    protected $language;

    /**
     *
     * @var ?string
     */
    protected $attributeType;

    /**
     *
     * @var ?string
     */
    protected $missing;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $scope = null,
        ?ProductSearchQuery $filter = null,
        ?string $count = null,
        ?string $field = null,
        ?array $includes = null,
        ?ProductSearchFacetDistinctStartsWith $startsWith = null,
        ?ProductSearchFacetDistinctBucketSortExpression $sort = null,
        ?int $size = null,
        ?string $language = null,
        ?string $attributeType = null,
        ?string $missing = null
    ) {
        $this->name = $name;
        $this->scope = $scope;
        $this->filter = $filter;
        $this->count = $count;
        $this->field = $field;
        $this->includes = $includes;
        $this->startsWith = $startsWith;
        $this->sort = $sort;
        $this->size = $size;
        $this->language = $language;
        $this->attributeType = $attributeType;
        $this->missing = $missing;
    }

    /**
     * <p>Name of the count facet.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Whether the facet must consider only the Products resulting from the search (<code>query</code>) or all the Products (<code>all</code>).</p>
     *
     *
     * @return null|string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SCOPE);
            if (is_null($data)) {
                return null;
            }
            $this->scope = (string) $data;
        }

        return $this->scope;
    }

    /**
     * <p>Additional filtering expression to apply to the search result before calculating the facet.</p>
     *
     *
     * @return null|ProductSearchQuery
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }

            $this->filter = ProductSearchQueryModel::of($data);
        }

        return $this->filter;
    }

    /**
     * <p>Specify whether to count Products (<code>products</code>) or Product Variants (<code>variants</code>).</p>
     *
     *
     * @return null|string
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (string) $data;
        }

        return $this->count;
    }

    /**
     * <p>The field to facet on. Can be any searchable field on the <a href="ctp:api:type:Product">Product</a>.</p>
     *
     *
     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    /**
     * <p>Specify which bucket keys the facets results should include.</p>
     *
     *
     * @return null|array
     */
    public function getIncludes()
    {
        if (is_null($this->includes)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_INCLUDES);
            if (is_null($data)) {
                return null;
            }
            $this->includes = $data;
        }

        return $this->includes;
    }

    /**
     * <p>Filter bucket keys in the facet results by the start of the key.</p>
     *
     *
     * @return null|ProductSearchFacetDistinctStartsWith
     */
    public function getStartsWith()
    {
        if (is_null($this->startsWith)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STARTS_WITH);
            if (is_null($data)) {
                return null;
            }

            $this->startsWith = ProductSearchFacetDistinctStartsWithModel::of($data);
        }

        return $this->startsWith;
    }

    /**
     * <p>Define how the buckets are sorted.</p>
     *
     *
     * @return null|ProductSearchFacetDistinctBucketSortExpression
     */
    public function getSort()
    {
        if (is_null($this->sort)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SORT);
            if (is_null($data)) {
                return null;
            }

            $this->sort = ProductSearchFacetDistinctBucketSortExpressionModel::of($data);
        }

        return $this->sort;
    }

    /**
     * <p>Maximum number of buckets to return.</p>
     *
     *
     * @return null|int
     */
    public function getSize()
    {
        if (is_null($this->size)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SIZE);
            if (is_null($data)) {
                return null;
            }
            $this->size = (int) $data;
        }

        return $this->size;
    }

    /**
     * <p>String value specifying linguistic and regional preferences using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag format</a>, as described in <a href="https://www.rfc-editor.org/rfc/bcp/bcp47.txt">BCP 47</a>. The format combines language, script, and region using hyphen-separated subtags. For example: <code>en</code>, <code>en-US</code>, <code>zh-Hans-SG</code>.</p>
     *
     *
     * @return null|string
     */
    public function getLanguage()
    {
        if (is_null($this->language)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LANGUAGE);
            if (is_null($data)) {
                return null;
            }
            $this->language = (string) $data;
        }

        return $this->language;
    }

    /**
     * <p>If the <code>field</code> is an Attribute, this must be the Attribute type.</p>
     *
     *
     * @return null|string
     */
    public function getAttributeType()
    {
        if (is_null($this->attributeType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->attributeType = (string) $data;
        }

        return $this->attributeType;
    }

    /**
     * <p>Default value to use if the specified field is not present on some Products.</p>
     *
     *
     * @return null|string
     */
    public function getMissing()
    {
        if (is_null($this->missing)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MISSING);
            if (is_null($data)) {
                return null;
            }
            $this->missing = (string) $data;
        }

        return $this->missing;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @param ?ProductSearchQuery $filter
     */
    public function setFilter(?ProductSearchQuery $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * @param ?string $count
     */
    public function setCount(?string $count): void
    {
        $this->count = $count;
    }

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param ?array $includes
     */
    public function setIncludes(?array $includes): void
    {
        $this->includes = $includes;
    }

    /**
     * @param ?ProductSearchFacetDistinctStartsWith $startsWith
     */
    public function setStartsWith(?ProductSearchFacetDistinctStartsWith $startsWith): void
    {
        $this->startsWith = $startsWith;
    }

    /**
     * @param ?ProductSearchFacetDistinctBucketSortExpression $sort
     */
    public function setSort(?ProductSearchFacetDistinctBucketSortExpression $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @param ?int $size
     */
    public function setSize(?int $size): void
    {
        $this->size = $size;
    }

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @param ?string $attributeType
     */
    public function setAttributeType(?string $attributeType): void
    {
        $this->attributeType = $attributeType;
    }

    /**
     * @param ?string $missing
     */
    public function setMissing(?string $missing): void
    {
        $this->missing = $missing;
    }
}
