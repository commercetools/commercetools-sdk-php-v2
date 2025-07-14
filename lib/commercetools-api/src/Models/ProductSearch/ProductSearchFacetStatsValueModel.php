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
final class ProductSearchFacetStatsValueModel extends JsonObjectModel implements ProductSearchFacetStatsValue
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
    protected $field;

    /**
     *
     * @var ?string
     */
    protected $fieldType;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $scope = null,
        ?SearchQuery $filter = null,
        ?string $field = null,
        ?string $fieldType = null
    ) {
        $this->name = $name;
        $this->scope = $scope;
        $this->filter = $filter;
        $this->field = $field;
        $this->fieldType = $fieldType;
    }

    /**
     * <p>Name of the stats facet to appear in the <a href="ctp:api:type:ProductSearchFacetResultStats">ProductSearchFacetResultStats</a>.</p>
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
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void
    {
        $this->fieldType = $fieldType;
    }
}
