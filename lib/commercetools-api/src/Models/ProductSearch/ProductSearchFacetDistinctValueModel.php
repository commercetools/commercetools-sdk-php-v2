<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchQueryModel;
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
     * @var ?SearchQuery
     */
    protected $filter;

    /**
     *
     * @var ?string
     */
    protected $level;

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
     * @var ?ProductSearchFacetDistinctBucketSortExpression
     */
    protected $sort;

    /**
     *
     * @var ?int
     */
    protected $limit;

    /**
     *
     * @var ?string
     */
    protected $language;

    /**
     *
     * @var ?string
     */
    protected $fieldType;

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
        ?SearchQuery $filter = null,
        ?string $level = null,
        ?string $field = null,
        ?array $includes = null,
        ?ProductSearchFacetDistinctBucketSortExpression $sort = null,
        ?int $limit = null,
        ?string $language = null,
        ?string $fieldType = null,
        ?string $missing = null
    ) {
        $this->name = $name;
        $this->scope = $scope;
        $this->filter = $filter;
        $this->level = $level;
        $this->field = $field;
        $this->includes = $includes;
        $this->sort = $sort;
        $this->limit = $limit;
        $this->language = $language;
        $this->fieldType = $fieldType;
        $this->missing = $missing;
    }

    /**
     * <p>Name of the distinct facet to appear in the <a href="ctp:api:type:ProductSearchFacetResultBucket">ProductSearchFacetResultBucket</a>.</p>
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
     * <p>Additional filtering expression to apply to the facet result before calculating the facet.</p>
     *
     *
     * @return null|SearchQuery
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }

            $this->filter = SearchQueryModel::of($data);
        }

        return $this->filter;
    }

    /**
     * <p>Specify whether to count Products (<code>products</code>) or Product Variants (<code>variants</code>).</p>
     *
     *
     * @return null|string
     */
    public function getLevel()
    {
        if (is_null($this->level)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LEVEL);
            if (is_null($data)) {
                return null;
            }
            $this->level = (string) $data;
        }

        return $this->level;
    }

    /**
     * <p>The <a href="/api/projects/product-search#searchable-product-fields">searchable Product field</a> to facet on.</p>
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
     * <p>If the <code>field</code> is not standard, this must be the Attribute type.</p>
     *
     *
     * @return null|string
     */
    public function getFieldType()
    {
        if (is_null($this->fieldType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->fieldType = (string) $data;
        }

        return $this->fieldType;
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
     * @param ?SearchQuery $filter
     */
    public function setFilter(?SearchQuery $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * @param ?string $level
     */
    public function setLevel(?string $level): void
    {
        $this->level = $level;
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
     * @param ?ProductSearchFacetDistinctBucketSortExpression $sort
     */
    public function setSort(?ProductSearchFacetDistinctBucketSortExpression $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void
    {
        $this->fieldType = $fieldType;
    }

    /**
     * @param ?string $missing
     */
    public function setMissing(?string $missing): void
    {
        $this->missing = $missing;
    }
}
