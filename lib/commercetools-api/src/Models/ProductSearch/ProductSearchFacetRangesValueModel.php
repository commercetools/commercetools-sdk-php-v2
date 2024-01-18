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
final class ProductSearchFacetRangesValueModel extends JsonObjectModel implements ProductSearchFacetRangesValue
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
     * @var ?ProductSearchFacetRangesFacetRangeCollection
     */
    protected $ranges;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $scope = null,
        ?ProductSearchQuery $filter = null,
        ?string $count = null,
        ?string $field = null,
        ?ProductSearchFacetRangesFacetRangeCollection $ranges = null,
        ?string $language = null,
        ?string $attributeType = null
    ) {
        $this->name = $name;
        $this->scope = $scope;
        $this->filter = $filter;
        $this->count = $count;
        $this->field = $field;
        $this->ranges = $ranges;
        $this->language = $language;
        $this->attributeType = $attributeType;
    }

    /**
     * <p>Name to assign the ranges facet.</p>
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
     * <p>Define ranges for the facet.</p>
     *
     *
     * @return null|ProductSearchFacetRangesFacetRangeCollection
     */
    public function getRanges()
    {
        if (is_null($this->ranges)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RANGES);
            if (is_null($data)) {
                return null;
            }
            $this->ranges = ProductSearchFacetRangesFacetRangeCollection::fromArray($data);
        }

        return $this->ranges;
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
     * @param ?ProductSearchFacetRangesFacetRangeCollection $ranges
     */
    public function setRanges(?ProductSearchFacetRangesFacetRangeCollection $ranges): void
    {
        $this->ranges = $ranges;
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
}
